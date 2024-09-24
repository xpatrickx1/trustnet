<?php include( 'about-data.php' ) ?>

<section class="reviews">
  <div class="reviews__wrap">
    <div class="reviews--left">
      <?= get_field( 'reviews_text' ) ? the_field( 'reviews_text' ) : 'Discover how businesses like yours managed to do more while staying compliant, secure, and confident online, using tools from TrustNet.' ?>
    </div>

    <div class="reviews__slider">
      <?php if (have_rows('reviews_list')) :
        while ( have_rows('reviews_list')) : the_row(); ?>
          <div class="item">
            <div class="item__text"><?= get_sub_field('item_text') ?></div>
            <div class="item__info">
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= get_sub_field('item_img')['url'] ?>"
              class="lazy item__rating-img"
              width="1px"
              height="1px"
            />
              <div class="item__name"><?= get_sub_field('item_expert') ?></div>
              <div class="item__position"><?= get_sub_field('item_position') ?></div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $reviewsList as $key => $item ) : ?>
          <div class="item">
            <div class="item__text"><?= $item['text'] ?></div>
              <div class="item__bottom">
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= bloginfo('template_url') . '/images/page-front/book.png' ?>"
                  class="lazy item__rating-img"
                  width="1px"
                  height="1px"
                />
              
              <div class="item__info">
                <div class="item__name"><?= $item['expert'] ?></div>
                <div class="item__position"><?= $item['position'] ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>


