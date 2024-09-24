<section class="book">
  <div class="book__wrap">

    <div class="book--left">
      <h3>
        <?= get_field( 'book_title' ) ? the_field( 'book_title' ) : 'Book a 45-minute consultation with us' ?>
      </h3>

      <ul class="book__list">
        <?php if (have_rows('book_list')) :
          while ( have_rows('book_list')) : the_row(); ?>
            <li class="item"><?= get_field( 'list_item' ); ?></li>
          <?php endwhile; ?>
        <?php else : ?>
          <li>Meet with our subject matter experts.</li>
          <li>Leave with a better understanding of your chosen compliance framework or security concern.</li>
          <li>100% complimentary. No payment info required.</li>
        <?php endif; ?>
      </ul>
      <a 
        href="<?= get_sub_field( 'frameworks_button_link' ) ? get_sub_field( 'frameworks_button_link' ) : '#' ?>"
        class="button--second">
        <?= get_sub_field( 'frameworks_button_title' ) ? get_sub_field( 'frameworks_button_title' ) : 'Book free consultation with Mike' ?>
      </a>
      <div class="book__resources"><?= get_field( 'book_resources' ) ? the_field( 'book_resources' ) : '<span>Don’t have time for a call ?</span> Check out our 
        <a href="#">Resources Section</a> to find the answers.' ?>
      </div>
    </div>

    <div class="book--right">
      <img 
        src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
        data-src="<?= bloginfo('template_url') . '/images/page-front/book.png' ?>"
        class="lazy item__rating-img"
        width="1px"
        height="1px"
      />
      <div class="book__author">
        <div class="book__author--name">
          <?= get_field('book_author') ? the_field('book_author') : 'Mike Kerem' ?>
        </div>
        <div class="book__author--position">
          <?= get_field('book_position') ? the_field('book_position') : 'Senior Auditor at TrustNet' ?>
        </div>
      </div>
    </div>

  </div>
</section>