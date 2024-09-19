<?php include( 'frameworks-data.php' ) ?>

<section class="frameworks">
  <div class="container">

    <div class="frameworks__header">
      <div class="frameworks__pretitle">
        <?= get_field( 'frameworks_pretitle' ) ? the_field( 'frameworks_pretitle' ) : 'Audit Frameworks' ?>
      </div>
      <h2>
        <?= get_field( 'frameworks_title' ) ? the_field( 'frameworks_title' ) : 'End-to-end support for more than 25 compliance frameworks' ?>
      </h2>
    </div>

    <ul class="frameworks__list">
      <?php if (have_rows('frameworks_list')) :
        while ( have_rows('frameworks_list')) : the_row(); ?>
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
        <?php foreach ( $frameworks as $key => $item ) : ?>
          <li class="item">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-front/frameworks/frameworks' . ($key + 1) . '.svg' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
            <a href="<?= $service['item-link'] ?>"></a>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>
      
    <a 
      href="<?= get_sub_field( 'frameworks_button_link' ) ? get_sub_field( 'frameworks_button_link' ) : '#' ?>"
      class="button--second">
      <?= get_sub_field( 'frameworks_button_title' ) ? get_sub_field( 'frameworks_button_title' ) : 'Check All Frameworks' ?>
    </a>
  </div>
</section>


