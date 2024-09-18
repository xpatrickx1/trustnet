<section class="persone">
  <div class="container persone__wrap">
    <div class="persone__photo">
      <img 
        src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
        data-src="<?= get_field('persone_photo')['url'] ?>"
        class="lazy"
        width="1px"
        height="1px"
      />

    </div>

    <div class="persone__info">
      <?= get_field('persone_info') ? the_field('persone_info') : 'Trevor Horvitz, Chief Executive Officer' ?>
    </div>

    <div class="persone__text">
      <?= get_field('persone_text') ? the_field('persone_text') : 'We will guide you through your compliance journey, this ensures your organization is ready for any compliance framework, enhancing efficiency and adaptability.' ?>
    </div>
  </div>
</section>