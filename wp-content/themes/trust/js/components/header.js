$('.js-hamburger').click(() => {
    $('body').toggleClass('is-open');
    $('body').toggleClass('no-scroll');
});


$( window ).scroll( scroll, scroll() );

function scroll () {
    if ( $(window).scrollTop() >= 60 ){
        $('.header').addClass('header-fixed');
    } else {
        $('.header').removeClass('header-fixed');
    }
}


$(function () {
    $('.header__navigation li a').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).addClass('active');
        }
    });
});


let anchors = [];
const documentURL = document.location.href;
const pathNameURL = document.location.pathname;

let urlsForCheck = documentURL == 'http://localhost:8080/trustnet/'
  || documentURL == 'http://localhost/trustnet/'
  || documentURL == 'https://trustnet.com/'
  ;


const checkUrls = () => {

    anchors.map( e => {

        if( !urlsForCheck ) {
            if (!($('.header__navigation li:has(ul)'))) {
                $( '.header__navigation li a[href="' + e + '"]' ).attr( 'href', '/' + e );
                $( '.footer__menu--terms li a[href="' + e + '"]' ).attr( 'href', '/' + e );
            }
        }
    } );

};


$('.header__navigation li a').each( function () {

    if  (($( this ).attr( 'href' ) ).match(/^#/i)) {
        anchors.push( $( this ).attr( 'href' ) );
    }

}).promise().done( checkUrls() );

$(window).bind('load', function() {
    $('.header__navigation li a, .footer__menu li a').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
          location.hostname == this.hostname) {
            var target = $(this.hash);
            // target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 75
                }, 1000);
            }
        }

        if( $( 'body' ).hasClass( 'is-open no-scroll' ) ) {
            $('.js-hamburger').click();
        }
    });
});


// function btnScroll (btn, block) {
//     $(window).bind('load', function() {
//         $(btn).click(function() {
//             if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
//               location.hostname == this.hostname) {
//                 var target = $(this.hash);
//                 target = target.length ? target : $(block);
//                 if (target.length) {
//                     $('html, body').animate({
//                         scrollTop: target.offset().top - 75
//                     }, 1000);
//                 }
//             }
//         });
//     });
// }

// btnScroll('.button__discover', '.info');
// btnScroll('.button--arrow-up', '.top-screen');
// btnScroll('.header__buttons .button--main', '.form');


// function subMenuController(menuSelector) {
//     $(`.${menuSelector} li:has(ul)`).hover(function(e) {
//         $(this).find('ul').stop(true, true).slideDown({
//             start: function () {
//                 $(this).css({
//                     display: 'flex'
//                 });
//             }
//         });
//     }, function() {
//         $(this).find('ul').stop(true, true).slideUp();
//     });
  
//     if ($(`.${menuSelector} li:has(ul)`)) {
//         $(`.${menuSelector} li:has(ul)`).addClass('has-children');
//     }
// }

// subMenuController('navigation');
// subMenuController('footer__menu');


// let tab = document.querySelectorAll('.header-tab'),
//     header = document.querySelector('.header'),
//     tabContent = document.querySelectorAll('.tabcontent');

// function hideTabContent(a) {
//     for (let i = a; i < tabContent.length; i++) {
//         tabContent[i].classList.remove('show');
//         tabContent[i].classList.add('hide');
//     }
// }

// hideTabContent(1);

// function showTabContent(b) {
//     if (tabContent[b].classList.contains('hide')) {
//         tabContent[b].classList.remove('hide');
//         tabContent[b].classList.add('show');
//     }
// }

// header.addEventListener('click', function(event) {
//     let target = event.target;
//     if (target && target.classList.contains('header-tab')) {
//         for(let i = 0; i < tab.length; i++) {
//             if (target == tab[i]) {
//                 hideTabContent(0);
//                 showTabContent(i);
//                 break;
//             }
//         }
//     }

// });


const menuItems = document.querySelectorAll('.navigation__link');
const tabs = document.querySelectorAll('.tab');
const tabLinks = document.querySelectorAll('.tab a');

menuItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
        if (window.innerWidth > 768) {
            item.querySelector('.sub-menu').style.display = 'block';
        }
    });

    item.addEventListener('mouseleave', () => {
        if (window.innerWidth > 768) {
            item.querySelector('.sub-menu').style.display = 'none';
        }
    });

    item.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
            item.querySelector('.sub-menu').style.display = 'flex';
        }
    });
});

tabLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = link.closest('.navigation__link');
        const subMenus = parent.querySelectorAll('.third-level-sub-menu');

        subMenus.forEach(subMenu => {
            subMenu.style.display = 'none';
        });

        const targetTab = link.closest('.tab');
        targetTab.querySelector('.third-level-sub-menu').style.display = 'flex';

        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        targetTab.classList.add('active');
    });
});

const menuItemsWithTabs = document.querySelectorAll('.navigation__link .tab');
menuItemsWithTabs[0].classList.add('active');
      
      
