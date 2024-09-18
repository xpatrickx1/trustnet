<?php
/* Template Name: SEO Page */
get_header();

?>

    <div class="seo-page">
        <div class="container container--900">
            <?php
            if (have_posts()) {
                the_post();
                the_content();
            }
            ?>

            <div class="seo-page__btn-wrp btn-wrp">
                <a href="/order" rel="nofollow" class="button">Order now</a>
            </div>
        </div>

    </div>

<?php
get_footer();
?>