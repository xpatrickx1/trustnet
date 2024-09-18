<?php include( 'accelerator-data.php' ) ?>

<?php
    if (have_rows('accelerator_list')):
      $accelerator = [];
      while ( have_rows('accelerator_list')) : the_row();
          $accelerator[get_row_index() - 1]['title'] = get_sub_field('item_title');
          $accelerator[get_row_index() - 1]['text'] = get_sub_field('item_text');
          $accelerator[get_row_index() - 1]['link'] = get_sub_field('item_link');
      endwhile;
    endif;
?>

<section class="accelerator">
  <div class="container">

    <div class="accelerator__header">
      <div class="accelerator__pretitle">
        <?= get_field( 'accelerator_pretitle' ) ? the_field( 'accelerator_pretitle' ) : 'Accelerator +' ?>
      </div>
      <h2>
        <?= get_field( 'accelerator_title' ) ? the_field( 'accelerator_title' ) : 'End-to-end approach to compliance' ?>
      </h2>
    </div>

    <div class="accelerator__wrap">

      <div class="accelerator--left">
        <ul class="accelerator__list list">
          <?php foreach ( $accelerator as $key => $item ) : ?>
            <li>
              <div class="item__wrap">
                <div class="item__title"><?= $item['title'] ?></div>
                <div class="item__text"><?= $item['text'] ?></div>
                <a href="<?= $item['link'] ?>">more details</a>
              </div>
              <div class="item__number"><?= $key + 1 ?></div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="accelerator--right">
        <?= get_field( 'accelerator_right' ) ? the_field( 'accelerator_right' ) : 'Our <span>Accelerator+</span> is designed to provide a comprehensive and cohesive strategy towards compliance. By seamlessly integrating <span>Advisory</span>, <span>Automation</span>, and <span>Assurance</span>, we ensure that your compliance initiative is kept robust, efficient, and proactive. <p>Here’s how these three elements work together</p>' ?>    
      </div>
    </div>

  </div>
</section>