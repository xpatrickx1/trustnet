<?php get_header(); ?>
    <div class="blog">
        <div class="container  container--900">
            <h1 class="section-title ">Blog</h1>
            <div class="blog__posts">
                <?php get_template_part('loop'); ?>
            </div>

            <?php
            the_posts_pagination(array(
                'show_all' => true,
                'end_size' => 3,
                'mid_size' => 3,
                'prev_next' => true,
                'prev_text' => __('Prev'),
                'next_text' => __('Next')
            ));
            ?>
        </div>
    </div>
<?php get_footer(); ?>