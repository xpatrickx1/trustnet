
$('[data-crm-widget="termsPopup"]').click(function(e) {
    e.preventDefault();
});
$('.footer__more-link').click(function(e) {
    e.preventDefault();
    $('.footer__menu--post').toggleClass('active');
    $(this).css('display', 'none');
});


