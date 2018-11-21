<?php
/**
 * Template Name: Contact Form Page
 * @package Realioo
 */

get_header();
?>

	<div id="primary" class="content-area form-page">
		<main id="main" class="site-main map-bg">
			<!-- Address Form -->
			<section class="module_1 pad-100">
				<div class="container white-bg pad-70">
					<div class="row ">
						<div class="col-12">
							<h1 class="bold pad-30-bottom text-center">We're searching for your agent.</h2>
              <h2 class="text-center">Tell us how to contact you with your agent results.</h3>
							<?php echo do_shortcode( '[contact-form-7 id="340" title="Sellers Page Contact Form 2"]' ); ?>
              <h4 class="text-center">Want immediate help? Connect with us now. (612) 481-1394.</h4>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
