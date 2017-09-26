<?php

/*

Template Name: What We Do Template

*/

?>

<?php get_header(); ?>

<section class="leadership-intro d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<?php the_title('<h1>', '</h1>'); ?>
				<p>Every CapEd academic partner or Connect partner in the business world has different goals, opportunities and challenges. For those who want to take advantage of our comprehensive end-to-end development capability, we apply the following solutions model to meet this challenge.</p>
				<p>Other partners, however, may only have a need that taps into one or two of our service lines, rather than the complete model. In those cases, CapEd has the flexibility to serve up our menu on an à la carte basis.</p>
			</div>
			<div class="col-md-5">
				<img class="tab-icon" src="<?php echo esc_url( get_template_directory_uri() );?>/images/what-we-do-icon.svg" alt="">
			</div>
		</div>
	</div>
</section>

<section class="leadership-image"></section>

<section class="what-we-do-tabs">
	<nav class="nav nav-pills nav-fill flex-column flex-md-row" role="tablist">

		<?php if( have_rows('tabs') ): ?>

			<?php while( have_rows('tabs') ): the_row(); ?>

				<a class="nav-item nav-link" data-toggle="tab" role="tab" href="#<?php the_sub_field('tab_href') ?>">
					<?php the_sub_field('tab_name'); ?>
				</a>

			<?php endwhile; ?>

		<?php endif; ?>

	</nav>
	<div class="tab-content">

		<?php if( have_rows('tab_content') ): ?>

			<?php while( have_rows('tab_content') ): the_row();

			// vars
			$id = get_sub_field('id');
			$image = get_sub_field('icon');
			$content = get_sub_field('content');

			?>

	 <div role="tappanel" class="tab-pane fade show" id="<?php echo $id; ?>">
	  	<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img class="tab-icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				</div>
				<div class="col-md-7">
					<?php echo $content; ?>
				</div>
			</div>
	  	</div>
	 </div>

	<?php endwhile; ?>

<?php endif; ?>

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
