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
						<div class="col-12">
							<h2 class="pad-50-bottom text-center">Find the top realtor in your neighborhood</h2>
							<?php echo do_shortcode( '[contact-form-7 id="316" title="Landing Page Contact Form"]' ); ?>
						</div>
					</div>
				</div>
			</section>

			<section class="module_3 purple-bg pad-100">
				<div class="container ">
					<div class="row">
						<div class="col-12 text-center">
							<h1 class="pad-50-bottom">Why work with a specialized realtor?</h1>
							<h3>Working with a real estate agent that specializes in your home-type, price point, and neighborhood is critical to getting you top dollar.</h3>
						</div>
					</div>
				</div>
			</section>

			<section class="module_5 pad-100">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h1>See the difference</h1>
							<h3 class="pad-30">Not all realtors are the same and percentages amount to thousands of dollars in a home sale.</h3>
							<h2 class="bold">See the Realioo Difference for Yourself.</h2>
						</div>
					</div>
					<div class="pricing-columns text-center pad-30-top">
						<!-- point 1 -->
						<div class="point pad-30">
							<h3>List Price</h3>
							<div class="row">
								<div class="col-6">
									<h2>$250,000</h2>
								</div>
								<div class="col-6">
									<h2>$500,000</h2>
								</div>
							</div>
						</div>
						<!-- point 2 -->
						<div class="point pad-30">
							<h3>Average agents get <b>98%</b> of list price</h3>
							<div class="row">
								<div class="col-6">
									<h2>$245,000</h2>
								</div>
								<div class="col-6">
									<h2>$490,000</h2>
								</div>
							</div>
						</div>
						<!-- point 3 -->
						<div class="point pad-30">
								<h3>SPECIALIZED agents get <b>103%</b> list price</h3>
							<div class="row">
								<div class="col-6">
									<h2>$257,000</h2>
								</div>
								<div class="col-6">
									<h2>$515,000</h2>
								</div>
							</div>
						</div>
						<!-- point 4 -->
						<div class="point green-shading pad-30">
							<h3 class="bold">Money in your pocket</h3>
							<div class="row">
								<div class="col-6">
									<h2 class="bold">$12,500</h2>
								</div>
								<div class="col-6">
									<h2 class="bold">$25,000</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- testimonials -->
			<section class="testimonials grey-bg pad-100">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h3>"We sold our home for thousands of dollars more compared to the other homes in our neighborhood using the agent Realioo connected us with. He was truly a neighborhood expert when it came to his pricing strategy."</h3>
							<p class="quote-attribute">
								— David
							</p>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
