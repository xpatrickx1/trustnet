</main><?php // main-container end ?>

<?php include(locate_template('main-vars.php', true)); ?>

<footer class="footer">
  <div class="container">

    <div class="footer__menu">
      <ul class="footer__menu footer__menu--post text--capitalize">
        <?php if (has_nav_menu('footer_menu_post')) :
          $nav_args = array(
            'theme_location' => 'footer_menu_post',
            'container' => '',
            'items_wrap' => '%3$s',
          );
          wp_nav_menu($nav_args);
        endif; ?>
      </ul>
    </div>

    <a href="/"
      class="footer__logo" 
      aria-label="Footer logo">
      <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/icons/footer-logo.png' ?>" class="lazy" width="170px" height="57px" alt="footer site logo">
    </a>

    <div class="footer__main">

      <div class="footer--right">
        <div class="footer__standarts">
          We helping businesses achieve compliance with industry standards like <span>SOC2, HIPAA, GDRP, ISO27001, PCI DSS.</span> 
        </div>
      </div>

      <div class="footer--center">
        <div class="footer__contact">For media inquiries, please contact – <span>press@trustneticn.com</span></div>
        <div class="footer__contact">Have a question? Ask our experts at – <span>support@trustneticn.com</span></div>
        <div class="footer__contact">Call us – <span>1-877-878-7810</span></div>
      </div>

      <div class="footer--right">
        <ul class="footer__standart standart">
          <li class="standart__item">
            <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/icons/standart1.svg' ?>" class="lazy" width="44px" height="29px" alt="payment apple logo">
          </li>

          <li class="standart__item">
            <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/icons/standart2.svg' ?>" class="lazy" width="44px" height="29px" alt="payment visa logo">
          </li>

          <li class="standart__item">
            <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/icons/standart3.svg' ?>" class="lazy" width="44px" height="29px" alt="payment mastercard logo">
          </li>
        </ul>
      </div>

    </div>

    <div class="footer__bottom">
      <div class="footer__social social">
        <a href="https://www.facebook.com/Nursingpaper/">
          <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/icons/socialIcons/socialFb.svg' ?>" class="lazy" width="35px" height="35px" aria-label="Contact link to facebook" alt="facebook logo">
        </a>
        <a href="https://www.instagram.com/nursing_paper/">
          <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/icons/socialIcons/socialX.svg' ?>" class="lazy" width="35px" height="35px" aria-label="Contact link to instagram" alt="instagram logo">
        </a>
        <a href="https://www.tiktok.com/@nursingpaper">
          <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/icons/socialIcons/socialYoutube.svg' ?>" class="lazy" width="35px" height="35px" aria-label="Contact link to tiktok" alt="tiktok logo">
        </a>
        <a href="https://www.youtube.com/channel/UCFLlExvSHBqbRc_o2xqytvw">
          <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/icons/socialIcons/socialLinkedIn.svg' ?>" class="lazy"  width="35px" height="35px" aria-label="Contact link to youtube" alt="youtube logo">
        </a>
      </div>

      <div class="footer__copyright">
        ©<?= date("Y"); ?>. <?= explode( 'www.', get_site_url())[1]; ?>. All rights reserved.
      </div>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>

<div data-crm-widget="disclaimer" data-params='{"theme":"dark"}'></div>

</body>
</html>
