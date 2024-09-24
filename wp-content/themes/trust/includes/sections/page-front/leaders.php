<?php include( 'leaders-data.php' ) ?>

<section class="leaders">
  <div class="container">

    <div class="leaders__header">
      <div class="leaders__pretitle">
        <?= get_field( 'leaders_pretitle' ) ? the_field( 'leaders_pretitle' ) : 'Our Leadership' ?>
      </div>
      <h2>
        <?= get_field( 'leaders_title' ) ? the_field( 'leaders_title' ) : 'Committed to the success of every client' ?>
      </h2>
    </div>

    <ul class="leaders__list">
      <?php if (have_rows('leaders_list')) :
        while ( have_rows('leaders_list')) : the_row(); ?>
          <li class="item">
            <div class="item__img">
              <?php if(get_sub_field('item_img')['url']) : ?>
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= get_sub_field('item_img')['url'] ?>"
                  class="lazy"
                  width="1px"
                  height="1px"
                />
              <?php endif; ?>
            </div>
            <div class="item__title"><?= get_sub_field('item_title') ?></div>
            <div class="item__text"><?= get_sub_field('item_text') ?></div>
            <a href="<?= get_sub_field('item_link') ?>"></a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $leaders as $key => $item ) : ?>
          <li class="item">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-front/leaders/leaders' . ($key + 1) . '.png' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__bottom">
              <div class="item__title"><?= $item['title'] ?></div>
              <div class="item__text"><?= $item['text'] ?></div>
              <a href="<?= $service['item-link'] ?>"></a>
            </div>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>
      
  </div>
</section>


