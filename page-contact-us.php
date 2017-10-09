<?php

/*

Template Name: Contact Us Template

*/

?>

<?php get_header(); ?>

  <!-- Modal -->
  <div class="modal fade" id="caped-contact-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body contact-modal">
          <img class="paper-plane" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/paper-plane-contact.png" alt="Paper Plane">
          <div class="wrap">
            <h2>Your First Step toward Reaching New Heights</h2>
            <h3>Thank you!</h3>
          </div>
        </div>

      </div>
    </div>

  </div>


  <section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="wrap">
            <h1>Contact Us</h1>
            <p>We look forward to hearing from you, and showing you how our unique approach will deliver exceptional, customized, goal-oriented learning programs for your organization.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <p><?php the_content(); ?></p>

          <?php endwhile; else: ?>

          <p>This is somewhat embarrassing, isn't it?</p>
          <p>It looks like nothing was found at this location.</p>

          <?php endif; ?>
        </div>
        <div class="col-md-5">
          <img class="mail-icon" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/contact-mail-icon.svg" alt="Capital Education Mail Icon">
        </div>
      </div>
    </div>
  </section>

  <script>
      var templateUrl = '<?= esc_url(home_url()); ?>';
      document.addEventListener( 'wpcf7mailsent', function( event ) {
      //location =  templateUrl + '/thank-you/';
      //  alert("this is awesome!!");
      jQuery('#caped-contact-modal').modal({
        show: true
      })
    }, false );
  </script>

<?php get_footer(); ?>
