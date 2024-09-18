<?php include( 'services-data.php' ) ?>

<?php
    if (have_rows('services_group')):
      $services = [];
      while ( have_rows('services_group')) : the_row();
          $services[get_row_index() - 1]['title'] = get_sub_field('service_group_title');
          $services[get_row_index() - 1]['text'] = get_sub_field('service_group_subtitle');
      endwhile;
    endif;
?>

<section class="services">
  <div class="container">

    <div class="services__header">
      <div class="services__pretitle">
        <?= get_field( 'services_pretitle' ) ? the_field( 'services_pretitle' ) : 'Our Services' ?>
      </div>
      <h2>
        <?= get_field( 'services_title' ) ? the_field( 'services_title' ) : 'Trust a single provider for all your compliance essentials' ?>
      </h2>
    </div>

    <div class="services__wrap">

    

      <ul class="services__groups">
        <?php if (have_rows('services_group')) :
          while ( have_rows('services_group')) : the_row(); ?>

            <li class="services__group">
              <div class="item__wrap">
                <div class="item__title"><?= get_sub_field('service_group_title') ?></div>
                <div class="item__text"><?= get_sub_field('service_group_subtitle') ?></div>
              </div>
              <ul class="services__list">
              <?php if (have_rows('services_list')) :
                while ( have_rows('services_list')) : the_row(); ?>
                  <li class="service">
                    <a href="<?= get_sub_field('item_link') ?>"><?= get_sub_field('item_title') ?></a>
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
              </ul>
            </li>

          <?php endwhile; ?>

        <?php else : ?>

          <?php foreach ( $services as $key => $item ) : ?>
            <li class="services__group">
              <div class="item__wrap">
                <div class="item__title"><?= $item['title'] ?></div>
                <div class="item__text"><?= $item['text'] ?></div>
              </div>
              <ul class="services__list">
                <?php foreach ( $item as $listItem ) : ?>
                  <?php foreach ( $listItem as $service ) : ?>
                    <li class="service">
                      <a href="<?= $service['item-link'] ?>"><?= $service['item-title'] ?></a>
                    </li>
                  <?php endforeach; ?>
                <?php endforeach; ?>
              </ul>
            </li>
          <?php endforeach; ?>

        <?php endif; ?>
      </ul>
      
    </div>
  </div>
</section>