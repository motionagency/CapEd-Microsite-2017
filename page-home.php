<?php

/*

Template Name: CapEd Home Template

*/

?>

<?php get_header(); ?>

<section class="caped-hero">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="hero-wrap">
					<h1>Re-Imagining</h1>
					<h1>Online Learning</h1>
					<h1>With You</h1>
					<h3>A unique approach to post-traditional learning.</h3>

					<?php

						$heroButton = get_field('hero_button');

						if( $heroButton ): ?>

						<a class="button-clear" href="<?php echo $heroButton['url']; ?>" target="<?php echo $heroButton['target']; ?>"><?php echo $heroButton['title']; ?></a>

					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
	<section class="one-swoop">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-10147 -8837 1366 186" x="0px" y="0px">
				<defs>
			<style>.a{fill:none;stroke:#95989a;}.b{clip-path:url(#a);}.c{fill:#0d2240;}.c,.e{fill-rule:evenodd;}.d{clip-path:url(#b);}.e{fill:#e2231a;opacity:0.813;}</style>
			<clipPath id="a"><rect class="a" width="1366" height="186"/></clipPath><clipPath id="b"><rect class="a" width="883" height="186"/></clipPath></defs>

			<g transform="translate(-10147 -9444)">
				<g class="b" transform="translate(0 607)">
					<path class="c" d="M0,88s621.852,255.355,1366-5V434S1054.574,675.166,0,492Z" transform="translate(0 -58)"/>
				</g>
				<g class="d" transform="translate(0 607)">
					<path class="e" d="M245.024,258.9c-124.083-7.09-232.213-40.77-232.213-40.77s128.072,44.315,193.215,58.053h0C703.688,400.712,974.013,262.448,994.4,98.924,851.259,206.168,607.967,276.186,245.024,258.9Z" transform="translate(-87.708 -229.488) rotate(8)"/>
				</g>
			</g>
			</svg>
	</section>

</section>

<section class="one">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="wrap">
					<h5>We don't deliver courses off the shelf. Instead, we'll partner with you on a journey that belongs <span class="span-red">only to you.</span></h5>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="one-bottom-swoop">
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-8551 -8462 1366 183">
  <defs>
    <style>
      .cls-1 {
        fill: none;
        stroke: #95989a;
      }

      .cls-2 {
        clip-path: url(#clip-path);
      }

      .cls-3 {
        fill: #7e4082;
      }

      .cls-3, .cls-5 {
        fill-rule: evenodd;
      }

      .cls-4 {
        clip-path: url(#clip-path-2);
      }

      .cls-5 {
        fill: #0d2240;
      }
    </style>
    <clipPath id="clip-path">
      <rect id="Rectangle_64" data-name="Rectangle 64" class="cls-1" width="1366" height="183" transform="translate(0 982)"/>
    </clipPath>
    <clipPath id="clip-path-2">
      <rect id="Rectangle_63" data-name="Rectangle 63" class="cls-1" width="1366" height="134" transform="translate(0 982)"/>
    </clipPath>
  </defs>
  <g id="Group_129" data-name="Group 129" transform="translate(-8551 -9444)">
    <g id="Mask_Group_9" data-name="Mask Group 9" class="cls-2">
      <path id="Path_137" data-name="Path 137" class="cls-3" d="M435.561,300.071C202.818,286.772,0,223.6,0,223.6s240.223,83.122,362.413,108.89h0C1295.876,566.063,1802.922,306.721,1841.159,0,1572.674,201.156,1116.332,332.489,435.561,300.071Z" transform="translate(-314.512 717.079) rotate(1)"/>
    </g>
    <g id="Mask_Group_8" data-name="Mask Group 8" class="cls-4">
      <path id="Path_157" data-name="Path 157" class="cls-5" d="M0,88s621.852,255.355,1366-5V434S1054.574,675.166,0,492Z" transform="translate(0 549)"/>
    </g>
  </g>
</svg>
</section>

<section class="two">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img class="bubble-icon" src="<?php echo esc_url( get_template_directory_uri() );?>/images/infographic_final.gif" alt="">
			</div>
			<div class="col-lg-6">
				<h2>How We're Different</h2>
				<p>Learning should be a transformative journey, filled with unique discoveries and rewards. Online learning is no exception, which is why CapEd does things differently. We don’t deliver educational resources off the shelf. Instead, we’ll partner with you on a journey that belongs only to you.</p>

				<p>Our consultative approach helps us thoroughly
				understand your aspirations, opportunities, and challenges. We will passionately invest in customized solutions that
				reflect your vision and achieve your goals. Most important, we’ll help you inspire your students to dream bigger dreams and achieve extraordinary success.</p>

				<?php

					$sectionTwoButton = get_field('section_two_button');

					if( $sectionTwoButton ): ?>

					<a class="button-clear" href="<?php echo $sectionTwoButton['url']; ?>" target="<?php echo $sectionTwoButton['target']; ?>"><?php echo $sectionTwoButton['title']; ?></a>

				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<!-- Colleges and Universities -->
<section class="three">
	<!-- <div class="container-fluid"> -->
		<div class="row no-gutters">
			<div class="col-lg-6 d-flex align-items-center">
				<div class="wrap">
					<h2>For Colleges &amp; Universities</h2>
					<p>The CapEd mission is to help institutions be more successful serving the post-traditional learner. We are inspired by organizations willing to embrace change and adapt their vision. Our collaboration will help your institution preserve its uniqueness, build a stronger financial future, and elevate your achievements in higher education.</p>
					<?php

						$sectionThreeButton = get_field('section_three_button');

						if( $sectionThreeButton ): ?>

						<a class="button-white" href="<?php echo $sectionThreeButton['url']; ?>" target="<?php echo $sectionThreeButton['target']; ?>"><?php echo $sectionThreeButton['title']; ?></a>

					<?php endif; ?>

				</div>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/home-education@2x.png" alt="Student working at desk">
			</div>
		</div>
	<!-- </div> -->
</section>
<!-- For Business -->
<section class="four">
	<!-- <div class="container-fluid"> -->
		<div class="row no-gutters">
			<div class="col-lg-6 order-2 order-lg-1">
				<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/home-connect@2x.png" alt="Student working at desk">
			</div>
			<div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-start">
				<div class="wrap">
					<h2>For Businesses</h2>
					<p>Our Connect™ initiative provides businesses and organizations with exceptional access to university-level knowledge, resources, and relevant applied research. The CapEd partnering model applies best practices in learning to help you attract and retain talented employees, and maximize return on investment.</p>

					<?php

						$sectionFourButton = get_field('section_four_button');

						if( $sectionFourButton ): ?>

						<a class="button-white" href="<?php echo $sectionFourButton['url']; ?>" target="<?php echo $sectionFourButton['target']; ?>"><?php echo $sectionFourButton['title']; ?></a>

					<?php endif; ?>
				</div>
			</div>
		</div>
	<!-- </div> -->
</section>
<section class="five">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<img class="lightbulb-icon" src="<?php echo esc_url(get_template_directory_uri() );?>/images/three-people-icon.svg" alt="Three People icon">
			</div>
			<div class="col-lg-7">
				<h2>Bringing Deep Expertise</h2>
				<h3>Our CapEd Leadership Team</h3>
				<p>We have a unique perspective gleaned from our team's 100+ years of higher-education experience. Let our cumulative knowledge help you achieve your goals.</p>

				<?php

					$sectionFiveButton = get_field('section_five_button');

					if( $sectionFiveButton ): ?>

					<a class="button-clear" href="<?php echo $sectionFiveButton['url']; ?>" target="<?php echo $sectionFiveButton['target']; ?>"><?php echo $sectionFiveButton['title']; ?></a>

				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="six-swoop">
	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 1366 133" style="enable-background:new 0 0 1366 133;" xml:space="preserve">
	<style type="text/css">
		.st0{fill:#0D2240;}
	</style>
	<path class="st0" d="M0,6c108,35,326,112,683,112S1366,0,1366,0v133H0V6z"/>
	</svg>
</section>
<section class="six">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="counter-wrap">
					<p class="numbers"><span id="counter_00"></span>%+</p>
					<h3>Growth</h3>
					<img class="red-line" src="<?php echo esc_url(get_template_directory_uri() );?>/images/red-line.svg" alt="Capital Education">
					<p>Biannual Growth Rate for Partner Campuses</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="counter-wrap">
					<p class="numbers"><span id="counter_01"></span>%</p>
					<h3>Enrollment Growth</h3>
					<img class="red-line" src="<?php echo esc_url(get_template_directory_uri() );?>/images/red-line.svg" alt="Capital Education">
					<p>CapEd Enrollment Growth
					Rate, 2013-2017</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="counter-wrap">
					<p class="numbers"><span id="counter_02"></span>%</p>
					<h3>Conversion</h3>
					<img class="red-line" src="<?php echo esc_url(get_template_directory_uri() );?>/images/red-line.svg" alt="Capital Education">
					<p>Prospect-to-Applicant
					Conversion Rate</p>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
