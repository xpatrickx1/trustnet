const localDomain = 'http://localhost/trustnet/';
const pathToTheme = '/wp-content/themes/trust/';

//NPM-MODULES
const gulp = require('gulp');
const babel = require('gulp-babel');
const plumber = require('gulp-plumber');
const rename = require("gulp-rename");
const browsersync = require("browser-sync").create();
const imagemin = require('gulp-imagemin');
const less = require('gulp-less');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');
const critical = require('critical');
const include = require('gulp-include');
const util = require('gulp-util');
const merge = require('merge-stream');
const eslint = require('gulp-eslint');
const gulpIf = require('gulp-if');
const lesshint = require('gulp-lesshint');
let svgSprite = require('gulp-svg-sprite');
let svgmin = require('gulp-svgmin');
let cache = require('gulp-cache');
const del = require('del');
let fs = require('fs');
let penthouse    = require("penthouse");
const webp = require('gulp-webp');
const gulpif = require('gulp-if');

//prod mode flag
const isProd = util.env.production;

//reporter for lesshint, dont edit!!!

const _lesshintReporter = {
    name: 'lesshint-reporter',
    report: function (errors) {
        const errorsWithoutWarnings = errors.filter((error) => (error.severity === 'error'));
        errorsWithoutWarnings.forEach((result) => {
            let output = '';
            output += '\x1b[31m' + '!!! Error: ' + '\x1b[0m';
            output += `${result.file}: `;
            if (result.line) {
                output += '\x1b[32m' + 'line ' + '\x1b[0m' + ` ${result.line}, `;
            }

            if (result.column) {
                output += '\x1b[36m' + 'col' + '\x1b[0m' + ` ${result.column}, `;
            }

            output += '\x1b[33m' + `${result.linter}: ` + '\x1b[0m';
            output += result.message;

            console.log('\x1b[33m%s', output, "\x1b[0m");
        });
    }
};

function img() {
    return gulp.src(['./images/**/**', '!./images/**/**.svg'])
        .pipe(plumber())
        .pipe(imagemin({progressive: true}))
        .pipe( gulpif( "!**/*.webp", webp() ) )
        .pipe(gulp.dest("./images"));
}

function lessLint() {
    return gulp.src(['./less/**/*.less', '!./less/libs/**.less', '!./less/crm-widgets/**.less', '!./less/style.less'])
        .pipe(lesshint())
        .pipe(lesshint.reporter(_lesshintReporter))
        .pipe(lesshint.failOnError());
}

function lessBuild() {
    return gulp.src([
        './less/style.less',
        './less/pages/page-*.less',
    ])
        .pipe(plumber())
        .pipe(!isProd ? sourcemaps.init() : util.noop())
        .pipe(less())
        .pipe(rename(function (path) {
            path.dirname += "/css";
            path.extname = ".min.css";
        }))
        .pipe(autoprefixer({browsers: ['last 5 versions']}))
        .pipe(cleanCSS({compatibility: 'ie10', keepSpecialComments: 1}))
        .pipe(!isProd ? util.noop() /*sourcemaps.write()*/ : util.noop())
        .pipe(gulp.dest('./'))
        .pipe(browsersync.stream());
}

const isFixed = (file) => (file.eslint != null && file.eslint.fixed);

function jsLint() {
    const lintType = !isProd ? 1 : 2;
    return gulp.src(['./js/**/**.js', '!./js/min/**.js', '!./js/plugins/**js'], {since: gulp.lastRun(jsLint)})
        .pipe(eslint({
            parserOptions: {
                "ecmaVersion": 6
            },
            fix: true,
            rules: {
                'quotes': [1, 'single'],
                'semi': [1, 'always'],
                'no-console': [1, {allow: ['error']}],
                'no-empty': [lintType, {'allowEmptyCatch': true}],
                'no-debugger': [lintType],
                'no-alert': [lintType],
                'camelcase': [1, {properties: "never"}],
                'indent': [
                    1,
                    4,
                    {'SwitchCase': 1}
                ],
                'no-multiple-empty-lines': [1, {max: 2, maxBOF: 1}],
                'lines-around-comment': [1, {'beforeBlockComment': true}]
            },
        }))
        .pipe(eslint.format())
        .pipe(gulpIf(isFixed, gulp.dest('./js')))
        .pipe(eslint.failAfterError())
}

function jsBuild() {
    return gulp.src([
        './js/main.js',
        './js/pages/page-*.js',
    ])
        .pipe(plumber())
        .pipe(include())
        .pipe(!isProd ? sourcemaps.init() : util.noop())
        .pipe(babel({
            presets: ['@babel/preset-env']
        }))
        .pipe(rename(function (path) {
            path.dirname += "/js/min";
            path.extname = ".min.js";
        }))
        .pipe(uglify())
        .pipe(!isProd ? sourcemaps.write() : util.noop())
        .pipe(gulp.dest('./'))
        .pipe(browsersync.stream());
}

function browserSync(done) {
    const files = [
        './!**!/!*.css',
        './js/!**!/!*.js',
        './!**!/!*.php'
    ];

    //initialize browsersync
    browsersync.init(files, {
        proxy: localDomain,
        port: util.env.port || 8080,
        logLevel: 'info', // 'debug', 'info', 'silent', 'warn'
        logConnections: false,
        logFileChanges: true,
        notify: false,
        ghostMode: false,
        online: Boolean(util.env.tunnel),
        tunnel: util.env.tunnel || null
    });
    done();
}

// BrowserSync Reload
function browserCasheClearing(done) {
    cache.clearAll();
    done();
}

function browserSyncReload(done) {
    browsersync.reload();
    done();
}

function criticalDel(done) {
    del(['css/critical.css.php']);
    done();
}

//before run this task you need comment next code in functions.php:
//add_action( 'wp_enqueue_scripts', 'ox_adding_critical_css' );
//--------------------------------------------------
function criticalBuild(done) {
    critical.generate({
        src: localDomain,
        dest: 'css/critical.css.php',
        minify: true,
        pathPrefix: pathToTheme,
        ignore: ['@font-face', '@import', 'background-image']
    });
    done();
}

let urlList = require('./criticalcss-pagelist.json');
const EventEmitter=require('events').EventEmitter;

EventEmitter.defaultMaxListeners=20;

function criticalOtherPagesBuild(done) {
    let i = 0;
    urlList.urls.forEach(function(item,i) {
        setTimeout(function(){
            del(['css/critical' + item.name + '.css.php']);
            let currentPage = localDomain + item.link;
            let currentDest = "css/critical-"+item.name+".css.php";
            let currentTarget = "css/page-"+item.name+".min.css";
            critical.generate({
                src: currentPage,
                dest: currentDest,
                height: 1500,
                minify: true,
                penthouse: {renderWaitTime: 10000},
                pathPrefix: pathToTheme,
                ignore: ['@font-face', '@import', 'background-image']
            })
            console.log( 'Generated : critical-' + item.name);
        }, i* 20000)

    });
    done();
}

function watchFiles() {
    gulp.watch(['./less/**/*.less'], gulp.series(css, browserCasheClearing));
    gulp.watch(['./js/**/*.js', '!./js/scripts.min.js', '!./js/min/*.js'], gulp.series(js, browserCasheClearing));
    gulp.watch(['./*.php', './**/*.php'], gulp.series( browserSyncReload) );
}

const js = gulp.series(jsLint, jsBuild);
const css = gulp.series(lessLint, lessBuild);
const criticalCss = gulp.series(criticalDel, criticalBuild);
const build = gulp.parallel(img, js, gulp.series(css, criticalOtherPagesBuild));
const watch = gulp.parallel(watchFiles, browserSync );
const dev = gulp.series(js, css, watch);
const criticalNew = gulp.series(criticalOtherPagesBuild);

exports.img = img;
exports.critical = criticalBuild;
exports.less = css;
exports.js = js;
exports.critical = criticalCss;
exports.watch = watch;
exports.default = !isProd ? dev : build;
exports.criticalNew = criticalNew;


