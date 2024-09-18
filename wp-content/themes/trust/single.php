<?php get_header(); ?>
    <div class="post">
        <div class="container container--900">
            <?php get_template_part('loop'); ?>
        </div>

        <div class="post__btn-wrp btn-wrp">
            <a href="/order" rel="nofollow" class="button">Order now</a>
        </div>

        <div class="container container--900">
            <?php get_template_part('includes/modules/recent-posts'); ?>
        </div>
    </div>

<?php get_footer(); ?>