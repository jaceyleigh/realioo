<?php
/**
 * Template Name: Sellers
 * @package Realioo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <main class="bd-masthead" id="content" role="main">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-9">
              <h1>Get top dollar for your life investment</h1>
              <p>Selling your home for top dollar requires years of real estate experience and tough negotiating tactics. Lucky for you, we've found all the top sellers in your neighborhood.</p>
            </div>
						<div class="col-3">
							<img class="img-fluid" src="http://placehold.it/300x300">
						</div>
          </div>
        </div>
      </main>

			<!-- Address Form -->
			<section class="module_2 orange-pattern-bg">
				<div class="container ">
					<div class="row ">
						<div class="col-12 text-center">
							<h2>Where are you looking to sell?</h2>
							<?php echo do_shortcode( '[contact-form-7 id="28" title="Test"]' ); ?>
						</div>
					</div>
				</div>
			</section>

			<section class="module_3">
				<div class="container ">
					<div class="row">
						<div class="col-12 text-center title">
							<h2>How do we help you decide which realtor is best?</h2>
							<h3>Realioo is completely independant of any agencies which allows us to give you completely transparent and unbiased information about agent performance.</h3>
						</div>
					</div>
					<!-- top row -->
					<div class="row icon-grid text-center">
						<div class="col-4">
							<img src="http://placehold.it/100x100" />
							<h4>Neighborhood Experience</h4>
							<p>How long has the agent been working in your neighborhood?</p>
						</div>
						<div class="col-4">
							<img src="http://placehold.it/100x100" />
							<h4>Total Sales Volume</h4>
							<p>How many homes have they sold in the area compared to other competing agents?</p>
						</div>
						<div class="col-4">
							<img src="http://placehold.it/100x100" />
							<h4>Sales Price Compared to List Price</h4>
							<p>Is the agent getting more, less, or exactly the asking price?</p>
						</div>
					</div>
					<!-- bottom row -->
					<div class="row icon-grid text-center">
						<div class="col-4">
							<img src="http://placehold.it/100x100" />
							<h4>Time-on-market</h4>
							<p>How long do the homes they list sit on the market?</p>
						</div>
						<div class="col-4">
							<img src="http://placehold.it/100x100" />
							<h4>Price Range</h4>
							<p>Does the realtor specialize in your price point?</p>
						</div>
						<div class="col-4">
							<img src="http://placehold.it/100x100" />
							<h4>Houseing Type</h4>
							<p>Does the agent specialize in selling your type of home (single family, townhouse, condo)?</p>
						</div>
					</div>
				</div>
			</section>

			<!-- 2 column Icon Grid -->
			<section class="module_4 grey-bg">
				<div class="row">
					<div class="col-12 text-center title">
						<h2>Why work with a specialized realtor?</h2>
						<h3>Some realtors are good at high-dollar sales, while other niche in condominiums. Working with an agent that specializes in your home-type, price point, and neighborhood is critical to getting you top dollar.</h3>
					</div>
				</div>
			</section>

			<section class="module_5 purple-bg">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h3>The Realioo Difference</h3>
							<p>
								Not all realtors are not the same and percentages amount to thousands of dollars in a home sale.
							</p>
							<h4>See the Realioo Difference for Yourself.</h4>
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
			<section class="testimonials grey-bg">
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
