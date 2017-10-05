<?php

/*

Template Name: Leadership Team Template

*/

?>

<?php get_header(); ?>

<section class="leadership-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<?php the_title('<h1>', '</h1>'); ?>
				<p>The people of CapEd have the experience and knowledge required to bring a post-traditional learning experience from concept to reality. From strategy development through program delivery, our leadership team brings deep expertise to every partnership we establish with colleges and universities or businesses.</p>
			</div>
			<div class="col-md-5">
				<img class="three-peeps-icon" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/three-people-icon.svg" alt="CapEd Education Partners">
			</div>
		</div>
	</div>
</section>

<section class="leadership-image"></section>

<section class="leadership-heading d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Nice to Meet You</h2>
			</div>
		</div>
	</div>
</section>

<section class="leadership-team">
	<div class="container">
		<?php if( have_rows('leadership') ): ?>

			<?php while( have_rows('leadership') ): the_row();

			// vars
			$profile = get_sub_field('profile_image');
			$name = get_sub_field('name');
			$title = get_sub_field('title');
			$content = get_sub_field('bio');

			?>

		<div class="row">
			<div class="col-md-3">
				<img src="<?php echo $profile['url']; ?>" alt="<?php echo $profile['alt']; ?>">
			</div>
			<div class="col-md-9">
				<div class="profile">
					<h3><?php echo $name; ?></h3>
					<h4><?php echo $title; ?></h4>
					<span class="content"><?php echo $content; ?></span>
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
			<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/ready-to-talk@2x.png" alt="Women with headphones on looking happy">
		</div>
		<div class="col-lg-6">
			<div class="wrap">
				<h2>Ready to Talk?</h2>
				<h3>Let's connect!</h3>
				<a class="button-white" href="/contact-us/">contact us</a>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
