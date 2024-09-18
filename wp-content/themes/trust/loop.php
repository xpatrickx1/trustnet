<?php if (have_posts()) :
    while (have_posts()) : the_post();
        if (is_home() && !is_front_page()) : ?>
            <article id="post-<?php the_ID(); ?>" class="blog__article-preview article-preview">
                <a href="<?php the_permalink() ?>" class="article-preview__thumbnail-wrp">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail(array(), array("class" => "article-preview__thumbnail"));
                    }  else {?>

                    <img src="<?= get_bloginfo('template_url') . '/images/blog-thumbnail.png' ; ?>" alt="" class="article-preview__thumbnail">

                    <?php } ?>
                </a>
                <div class="article-preview__text">
                    <h2 class="article-preview__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                    <div class="article-preview__date">
                        <?php the_date('j F Y '); ?>
                    </div>
                </div>
            </article>
        <?php else :
            the_content();
            ?>
        <?php endif;
    endwhile;
endif; ?>