<section class="clarity">
  <div class="clarity__wrap">

    <div class="clarity--left">
      <h3>
        <?= get_field( 'clarity_title' ) ? the_field( 'clarity_title' ) : 'Get Compliance Clarity in 1 Minute' ?>
      </h3>

      <ul class="clarity__list">
        <?php if (have_rows('clarity_list')) :
          while ( have_rows('clarity_list')) : the_row(); ?>
            <li class="item"><?= get_field( 'list_item' ); ?></li>
          <?php endwhile; ?>
        <?php else : ?>
          <li>Find out which regulations you need to comply with</li>
          <li>Understand which frameworks you will need</li>
          <li>It’s free and takes less than 1 minute</li>
        <?php endif; ?>
      </ul>
    </div>

    <div class="clarity--right">
      <div class="quiz">
        
        <div class="quiz__text">Does your company leverage artificial intelligence (AI)?</div>
        <a href="#" class="button--second">
          Yes
        </a>
        <a href="#" class="button--second">
          No
        </a>
        <div class="quiz__arrows">
          <button class="arrow--main slick-prev"></button>
          <button class="arrow--main slick-next"></button>
        </div>
        
        <div class="quiz__wrap">
          <a href="#" class="button--second quiz__start">
            Start
          </a>
        </div>
      </div>
    </div>
  </div>
</section>