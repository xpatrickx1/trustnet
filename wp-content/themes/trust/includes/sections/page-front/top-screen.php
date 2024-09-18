<section class="top-screen">
  <div class="container top-screen__wrap">

    <div class="top-screen--left">
      <h1>
        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
      </h1>

      <div class="top-screen__buttons">
        <a href="#" class="button--second">
            Request an audit
        </a>
        <a href="#" class="button--main">
          Book a call now
        </a>
      </div>
    </div>

    <div class="top-screen--right">

      <div class="top-screen__top">
        <div class="top-screen__description">
          <?= get_field('hp_description') ? the_field('hp_description') : 'Streamline SOC 2, PCI DSS, ISO 27001, 
          and more with TrustNet’s Advisory, Automation, and Audit services, all under one roof.' ?>
        </div>
        <div class="top-screen__shield">
          <img 
            src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
            data-src="<?= bloginfo('template_url') . '/images/first-screen/shield.png' ?>"
            class="lazy"
            width="1px"
            height="1px"
          />
          <div><?= get_field('hp_shield') ? the_field('hp_shield') : 'We offer a premium shield against evolving cyber threats.' ?></div>
          
        </div>
      </div>

      <ul class="top-screen__list">
        <?php if (have_rows('hp_list')) :
          while ( have_rows('hp_list')) : the_row(); ?>
            <li><a href="<?= the_sub_field('item_link') ?>"><?= the_sub_field('item_text') ?></a></li>
          <?php endwhile; ?>

        <?php else : ?>
          <li><a href="#">SOC 2</a></li>
          <li><a href="#">PCI DSS</a></li>
          <li><a href="#">Penetration <span>Testing</span></a></li>
          <li><a href="#">GhostWatch <span>Managed Security</span></a></li>
        <?php endif; ?>
      </ul>

    </div>

  </div>
</section>