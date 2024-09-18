</main><?php // main-container end ?>

<?php include(locate_template('main-vars.php', true)); ?>

<footer class="footer">
    <div class="container">
        <div class="footer__main">
            <div class="footer__left">
                <a href="/" class="footer__logo">
                    BaseTemplate<span>.com</span>
                </a>
                <!-- <img src="<?php echo get_bloginfo('template_url') . '/images/payments.png' ?>" alt=""
                     class="footer__payments"> -->

                <div class="footer__terms-wrp">
                    <a href="javaScript:void()" class="footer__terms-link" data-crm-widget="termsPopup" data-tab="privacy">Privacy Policy</a>
                    <a href="javaScript:void()" class="footer__terms-link" data-crm-widget="termsPopup" data-tab="tos">Terms of Use</a>
                </div>

                <div class="footer__disclaimer">
                    BaseTemplate.com helps students cope with college assignments and write papers on a wide range of topics. We deal with academic writing, creative writing, and non-word assignments.
                </div>
            </div>
            <div class="footer__center">
                <div class="footer__contacts">
                    <div class="footer__contact">
                        <span class="footer__contact-title">E-Mail:</span>
                        <a href="mailto:support@base.template.com" class="footer__contact-link">support@base.template.com</a>
                    </div>

                    <div class="footer__contact">
                        <span class="footer__contact-title">Telephone:</span>
                        <a href="tel:<?php echo $phoneTel ?>" class="footer__contact-link">+4969120066930</a>
                    </div>

                    <div class="footer__contact">
                        <span class="footer__contact-title">Support:</span>
                        <span class="footer__contact-link">24/7</span>
                    </div>
                </div>
            </div>
            <div class="footer__right">
                <?php if (has_nav_menu('footer_menu')) :
                    $nav_args = array(
                        'theme_location' => 'footer_menu',
                        'container' => '',
                        'items_wrap' => '<ul class="footer-menu">%3$s</ul>',
                    );
                    wp_nav_menu($nav_args);
                endif; ?>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        Copyright &copy; 2015-<?php echo date("Y"); ?> All rights reserved.
    </div>
</footer>

<?php wp_footer(); ?>

<div data-crm-widget="disclaimer" data-params='{"theme":"dark"}'></div>

</body>
</html>
