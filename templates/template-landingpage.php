<?php
/**
 * Template Name: Landing Page
 * @package Realioo
 */

get_header();
?>

	<div id="primary" class="content-area landing-page">
		<main id="main" class="site-main">

      <section class="hero bd-masthead" id="content" role="main">
        <div class="container">
          <div class="row align-items-center pad-50-top">
            <div class="col-7">
              <h1>Maximize the sale price of your home.</h1>
              <h3>Selling your home for top dollar requires years of real estate experience and tough negotiating tactics. Lucky for you, we’ve found all the top sellers in your neighborhood.</h3>
            </div>
						<div class="col-5">
							<img class="img-fluid" src="/wp-content/themes/realioo/images/landing-page/hero-characters.png">
						</div>
          </div>
        </div>
      </section>

			<!-- Address Form -->
			<section class="module_2 map-bg pad-100">
				<div class="container">
					<div class="row ">
						<div class="col-12 text-center">
							<h2 class="pad-50-bottom">Find the top realtor in your neighborhood</h2>
							<?php echo do_shortcode( '[contact-form-7 id="28" title="Test"]' ); ?>
						</div>
					</div>
				</div>
			</section>

			<section class="module_3 purple-bg pad-100">
				<div class="container ">
					<div class="row">
						<div class="col-12 text-center">
							<h1 class="pad-50-bottom">Why work with a specialized realtor?</h1>
							<h3>Working with an agent that specializes in your home-type, price point, and neighborhood is critical to getting you top dollar.</h3>
						</div>
					</div>
				</div>
			</section>

			<section class="module_5">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h1>See the difference</h1>
							<h3>Not all realtors are the same and percentages amount to thousands of dollars in a home sale.</h3>
							<h2 class="bold">See the Realioo Difference for Yourself.</h2>
						</div>
					</div>
					<div class="pricing-columns text-center">
						<!-- point 1 -->
						<p>List Price</p>
						<div class="row">
							<div class="col-6">
								<p>$250,000</p>
							</div>
							<div class="col-6">
								<p>$500,000</p>
							</div>
						</div>
						<!-- point 2 -->
						<p>Sold with an average agent gets you <b>98%</b> list price</p>
						<div class="row">
							<div class="col-6">
								<p>$245,000</p>
							</div>
							<div class="col-6">
								<p>$490,000</p>
							</div>
						</div>
						<!-- point 3 -->
						<p>Sold with a Realioo agent gets you <b>103%</b> list price</p>
						<div class="row">
							<div class="col-6">
								<p>$257,000</p>
							</div>
							<div class="col-6">
								<p>$515,000</p>
							</div>
						</div>
						<!-- point 4 -->
						<p>Money in Your Pocket</p>
						<div class="row">
							<div class="col-6">
								<p>$12,500</p>
							</div>
							<div class="col-6">
								<p>$25,000</p>
							</div>
						</div>
					</div>
					<div class="form">
						<h2>Where is Your Home Located?</h2>
						<?php echo do_shortcode( '[contact-form-7 id="28" title="Test"]' ); ?>
					</div>
				</div>

			</section>



			<!-- testimonials -->
			<section class="testimonials grey-bg pad-100">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							A quote
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
