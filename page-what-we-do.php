<?php

/*

Template Name: What We Do Template

*/

?>

<?php get_header(); ?>

<section class="leadership-intro d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_title('<h1>', '</h1>'); ?>
				<p>Every CapEd academic partner or Connect partner in the business world has different goals, opportunities and challenges. For those who want to take advantage of our comprehensive end-to-end development capability, we apply the following solutions model to meet this challenge.</p>
				<p>Other partners, however, may only have a need that taps into one or two of our service lines, rather than the complete model. In those cases, CapEd has the flexibility to serve up our menu on an à la carte basis.</p>
			</div>
		</div>
	</div>
</section>

<section class="leadership-image"></section>

<section class="what-we-do-tabs">
	<nav class="nav nav-pills nav-fill flex-column flex-sm-row" role="tablist">
		<a class="nav-item nav-link" data-toggle="tab" role="tab" href="#collaboration">Collaboration</a>
		<a class="nav-item nav-link" data-toggle="tab" role="tab" href="#academic">Academic Services</a>
		<a class="nav-item nav-link" data-toggle="tab" role="tab" href="#promotion">Promotion</a>
		<a class="nav-item nav-link" data-toggle="tab" role="tab" href="#enrollment">Enrollment Services</a>
		<a class="nav-item nav-link" data-toggle="tab" role="tab" href="#delivery">Delivery</a>
	</nav>
	<div class="tab-content">

	  <div class="tab-pane fade show active" id="collaboration" role="tabpanel">
	  	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img class="bubble-icon" src="<?php echo esc_url( get_template_directory_uri() );?>/images/thought_bubble_icon.svg" alt="">
					</div>
					<div class="col-md-6">
						<h2>Collaboration &amp; Strategy Development</h2>
						<h3>Readiness Assessment / Change Management Consulting</h3>
						<p>Readiness Assessment &amp; Change Management Consulting CapEd functional area expert consultants meet with the partner’s faculty, administrative and support service groups to assess institutional competencies and gaps in preparedness to thrive in the post-traditional market.</p>
					</div>
				</div>
	  	</div>
	  </div>

	  <div class="tab-pane fade" id="academic" role="tabpanel">
	  	<p>Here is some content</p>
	  </div>

	  <div class="tab-pane fade" id="promotion" role="tabpanel">
	  	<p>More content goes here</p>
	  </div>

	  <div class="tab-pane fade" id="enrollment" role="tabpanel">
	  	<p>This is the enrollment tab.</p>
	  </div>

	  <div class="tab-pane fade" id="delivery" role="tabpanel">
	  	<p>This is the delivery tab.</p>
	  </div>

	</div>
</section>

<section class="ready-to-talk">
	<div class="row no-gutters d-flex align-items-center">
		<div class="col-lg-6">
			<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/headphones-girl.png" alt="Women with headphones on looking happy">
		</div>
		<div class="col-lg-6">
			<div class="wrap">
				<h2>Ready to Talk?</h2>
				<h3>Let's connect!</h3>
				<a class="button-white" href="#">contact us</a>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
