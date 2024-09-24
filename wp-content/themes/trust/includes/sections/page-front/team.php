<?php include( 'team-data.php' ) ?>

<section class="team">
  <div class="container">

    <div class="team__header">
      <h2>
        <?= get_field( 'team_title' ) ? the_field( 'team_title' ) : 'meet the team' ?>
      </h2>
    </div>

    <ul class="team__list">
      <?php if (have_rows('team_list')) :
        while ( have_rows('team_list')) : the_row(); ?>
          <li class="item">
            <div class="item__title"><?= get_sub_field('item_title') ?></div>
            <div class="item__text"><?= get_sub_field('item_text') ?></div>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $team as $key => $item ) : ?>
          <li class="item">
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

  </div>
</section>


