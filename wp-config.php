<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trust' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Kg$-@i:AOlvrg}}!mR9b#=mt&T>TlO[lrpo$e8Im&SdJRG=6S1A0&a1J6Hhpujkm' );
define( 'SECURE_AUTH_KEY',  '}7nPkDu9f0v1pi!?M;/!#jB!lHBQ90t9FFkr)$v[*=!#fG[WiQ5%ri-(Czx$$=RR' );
define( 'LOGGED_IN_KEY',    'GD_|mC{@ ^s<3qsrS_u<dKoukyb)*8pR#-IVbn)q)r0cSYWK_4DOd@igiZ0<$H>G' );
define( 'NONCE_KEY',        'YK$[2_QMX0WSFL9r{nv:Lsd<OQ)?cN3{-JQw$s7%8rB%u/7td]$Leq7dFML!r^]+' );
define( 'AUTH_SALT',        '_&sIk=*e7T1fR f<_uhTQ/iJNE~q.CS0u{2 >l?xJyp6{$;r2[(d!3_&H|j96_~P' );
define( 'SECURE_AUTH_SALT', 'kps!sm-%QK>`sh#6;Dq:Y^q1bnG~`]s_:Bn(l#_m:k6czTa7/K6@{]@G;]9ieS7O' );
define( 'LOGGED_IN_SALT',   'Cc8zDq,Q&X40si.1DZa,>i>qv%W?8nC9b@,}MR94sZfFg1j|Nl0`V%:6Rh(gD.kX' );
define( 'NONCE_SALT',       'G/!4nvQE 5xOpgUa/VEMZ*p%Hmq_)~hwO9VIla0rkm8{U;fkO1=a0B}IT1/}B 5]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
