<section class="calendar">
  <div class="container">

    <div class="calendar__header">
      <div class="calendar__pretitle">
        <?= get_field( 'calendar_pretitle' ) ? the_field( 'calendar_pretitle' ) : 'Book a a free consultation with us' ?>
      </div>
      <h2>
        <?= get_field( 'calendar_title' ) ? the_field( 'calendar_title' ) : 'Start your efficient path to compliance now' ?>
      </h2>
    </div>
    <ul class="calendar__list">
        <?php if (have_rows('calendar_list')) :
          while ( have_rows('calendar_list')) : the_row(); ?>
            <li class="item"><?= get_field( 'list_item' ); ?></li>
          <?php endwhile; ?>
        <?php else : ?>
          <li>30-minute session with practice leaders</li>
          <li>Gain the knowledge, clarity, and customized solutions you need.</li>
          <li>Leave confusion behind and navigate security with confidence.</li>
        <?php endif; ?>
      </ul>
  </div>
</section>