<?php
/* Template Name: Order Template */
?>

<?php get_header(); ?>

<div class="order-container">

    <?php
    //пример кастомного прелоадера
    ?>
    <div class="order-preloader">
        <div class="section-title">Loading...</div>
        <div class="order-preloader__wrapper">
            <div class="order-preloader__left">
                <div class="order-preloader__shadow">
                    <div class="order-preloader__field">
                        <div class="order-preloader__field-label"></div>
                        <div class="order-preloader__field-input"></div>
                    </div>
                    <div class="order-preloader__field">
                        <div class="order-preloader__field-label order-preloader__field-label--w50"></div>
                        <div class="order-preloader__field-input"></div>
                    </div>
                    <div class="order-preloader__field">
                        <div class="order-preloader__field-label order-preloader__field-label--w40"></div>
                        <div class="order-preloader__field-input"></div>
                    </div>
                    <div class="order-preloader__field">
                        <div class="order-preloader__field-label"></div>
                        <div class="order-preloader__field-input"></div>
                    </div>
                    <div class="order-preloader__field">
                        <div class="order-preloader__field-label order-preloader__field-label--w50"></div>
                        <div class="order-preloader__field-input"></div>
                    </div>
                    <div class="order-preloader__field">
                        <div class="order-preloader__field-label"></div>

                        <div class="order-preloader__field--instructions">
                            <div class="order-preloader__textarea order-preloader__field-input"></div>
                            <div class="order-preloader__files"></div>
                        </div>

                    </div>

                    <div class="order-preloader__parts-payment preloader-payment">
                        <div class="order-preloader__field-label"></div>

                        <div class="preloader-payment__number-field">
                            <div class="preloader-payment__btn"></div>
                            <div class="order-preloader__field-input"></div>
                            <div class="preloader-payment__btn"></div>
                        </div>
                        <div class="order-preloader__field-label order-preloader__field-label--green order-preloader__field-label--w70"></div>
                        <div class="order-preloader__field-label order-preloader__field-label--w90"></div>

                        <div class="preloader-payment__radio-group">

                        </div>

                        <div class="preloader-payment__parts">
                            <div class="preloader-payment__block"></div>
                            <div class="preloader-payment__block"></div>
                        </div>
                    </div>

                    <div class="order-preloader__field">
                        <div class="order-preloader__field-label order-preloader__field-label--w40"></div>
                        <div class="order-preloader__services">
                            <div class="order-preloader__service checked"></div>
                            <div class="order-preloader__service"></div>
                            <div class="order-preloader__service"></div>
                            <div class="order-preloader__service"></div>
                            <div class="order-preloader__service"></div>
                            <div class="order-preloader__service"></div>
                        </div>
                    </div>

                    <div class="order-preloader__email">
                        <div class="order-preloader__email-left">
                            <div class="order-preloader__field">
                                <div class="order-preloader__field-label"></div>
                                <div class="order-preloader__field-input"></div>
                            </div>
                            <div class="order-preloader__field">
                                <div class="order-preloader__field-label"></div>
                                <div class="order-preloader__field-input"></div>
                            </div>
                        </div>
                        <div class="order-preloader__email-right">
                            <div class="order-preloader__field-label order-preloader__field-label--w90"></div>
                            <div class="order-preloader__field-label order-preloader__field-label--w70"></div>
                            <div class="order-preloader__field-label order-preloader__field-label--w90"></div>
                            <div class="order-preloader__field-label order-preloader__field-label--w70"></div>
                            <div class="order-preloader__field-label order-preloader__field-label--w70"></div>
                            <div class="order-preloader__promo">
                                <div class="order-preloader__field-label"></div>
                                <div class="order-preloader__field-input"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-preloader__footer">
                    <div class="order-preloader__footer-btn"></div>
                    <div class="order-preloader__footer-text"></div>
                    <div class="order-preloader__footer-img"></div>
                </div>
            </div>
            <div class="order-preloader__sidebar preloader-sidebar">
                <div class="preloader-sidebar__block">
                    <div class="preloader-sidebar__title"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                </div>
                <div class="preloader-sidebar__block">
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                </div>
                <div class="preloader-sidebar__block">
                    <div class="preloader-sidebar__title"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__title"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__title"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__title"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                    <div class="preloader-sidebar__text"></div>
                </div>
            </div>
        </div>
    </div>

    <div data-crm-widget="form"></div>
</div>


<?php get_footer(); ?>
