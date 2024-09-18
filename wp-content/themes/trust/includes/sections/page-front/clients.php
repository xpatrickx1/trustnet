<section class="clients">
  <div class="clients__title"><?= get_field('clients_title') ? the_field('clients_title') : 'Our clients report an average <span>37% increase in compliance efficiency.</span>' ?></div>
    <ul class="clients__list">
      <?php if (have_rows('clients_list')) :
        while ( have_rows('clients_list')) : the_row(); ?>
          <li>
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= get_sub_field('client_logo')['url'] ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
</section>