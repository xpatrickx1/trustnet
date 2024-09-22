<?php include( 'about-data.php' ) ?>

<section class="about">
  <div class="container">

    <div class="about__header">
      <div class="about__pretitle">
        <?= get_field( 'about_pretitle' ) ? the_field( 'about_pretitle' ) : 'About Us' ?>
      </div>
      <h2>
        <?= get_field( 'about_title' ) ? the_field( 'about_title' ) : 'TrustNet is focused on achieving success for every client' ?>
      </h2>
    </div>

    <ul class="about__list">
      <?php if (have_rows('about_list')) :
        while ( have_rows('about_list')) : the_row(); ?>
          <li class="item">
            <div class="item__title"><?= get_sub_field('item_title') ?></div>
            <div class="item__text"><?= get_sub_field('item_text') ?></div>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $about as $key => $item ) : ?>
          <li class="item">
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

  </div>
</section>


