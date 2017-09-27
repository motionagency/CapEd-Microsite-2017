<?php

/*

Template Name: Contact Us Template

*/

?>

<?php get_header(); ?>

  <section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="wrap">
            <h1>Contact Us</h1>
            <p>We look forward to hearing from you, and showing you how our unique approach will deliver exceptional, customized goal-oriented learning programs for your organization.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <p><?php the_content(); ?></p>

          <?php endwhile; else: ?>

          <p>This is somewhat embarrassing, isn't it?</p>
          <p>It looks like nothing was found at this location.</p>

          <?php endif; ?>
        </div>
        <div class="col-md-4">
          <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/contact-mail-icon.svg" alt="Capital Education Mail Icon">
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
