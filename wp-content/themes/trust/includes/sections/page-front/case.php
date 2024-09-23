<?php
function rand_posts()
{
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
      $string .= '<div class="case__slider">';

        while ($the_query->have_posts()) {
            $the_query->the_post();
            $postID = get_the_id();
            $categories = get_the_category();
            $catID = $categories[0]->cat_ID;
            $postThumbnail = get_the_post_thumbnail($postID, array(), array("class" => "item__img"));
            $postThumbnailPlaceholder = '<img src="' . get_bloginfo('template_url') . '/images/loader.gif' . '" data-src="' . get_bloginfo('template_url') . '/images/features/blog.jpg' . '"  class="lazy item__img">';
            $postThumb = $postThumbnail ? $postThumbnail : $postThumbnailPlaceholder ;
            $subcats = get_categories('child_of=' . $catID);
            $catArr = [];
            foreach($subcats as $subcat) {
              $subcat_posts = get_posts('cat=' . $subcat->cat_ID);
              foreach($subcat_posts as $subcat_post) {
                $postIDS = $subcat_post->ID;
                if ($subcat_post->ID == $postID) {
                  array_push($catArr, $subcat->cat_name);
                  break;
                }
              }
            } 
            $string .= '
  <article id="post-' . $postID . '" class="case__item item">

    <div class="item__info">
      <a href="' . get_permalink() . '" class="item__title">' . get_the_title() . '</a>
      <div class="item__read">' . estimated_reading_time() . '</div>
      <div class="item__cat">
        <span>' . implode("</span><span>",$catArr) . '</span>
      </div>
    </div> 

    <div class="recent-post__thumbnail">' . $postThumb . '</div>  
  </article>';
        }
        $string .= '</div>';
        /* Restore original Post Data */
        
        wp_reset_postdata();
    } else {
        $string .= 'no posts found';
    }
    return $string;
}
?>

<section class="case">
  <div class="container">

    <div class="case__header">
      <div class="case__pretitle">
        <?= get_field( 'case_pretitle' ) ? the_field( 'case_pretitle' ) : 'Case Studies' ?>
      </div>
      <h2>
        <?= get_field( 'case_title' ) ? the_field( 'case_title' ) : 'Highlights of Client Successes' ?>
      </h2>
    </div>
    <?php echo do_shortcode("[random-posts]"); ?>
    <a href="/cases/" class="button--second">
      All case studies
    </a>
  </div>
</section>