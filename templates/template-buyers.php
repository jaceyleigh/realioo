<?php
/**
 * Template Name: Buyers
 * @package Realioo
 */

get_header();
?>

	<div id="primary" class="content-area buyers-page">
		<main id="main" class="site-main">

      <section class="hero bd-masthead" id="content" role="main">
        <div class="container">
          <div class="row align-items-center pad-50-top">
            <div class="col-md-7">
              <h1>Buy the home you deserve.</h1>
              <h3>Buying a home in the perfect neighborhood requires more than just a realtor who can write an offer. Lucky for you, we’ve found all the experts in your new area.</h3>
            </div>
						<div class="col-md-5">
							<img class="img-fluid" src="/wp-content/themes/realioo/images/buyers/buyers-hero-characters.png">
						</div>
          </div>
        </div>
      </section>

			<!-- Address Form -->
			<section class="module_2 map-bg pad-100">
				<div class="container">
					<div class="row ">
						<div class="col-12">
							<h2 class="pad-50-bottom text-center">Where are you looking to buy?</h2>
							<!-- other type of form gets inserted here -->
						</div>
					</div>
				</div>
			</section>

			<section class="module_3 pad-100">
				<div class="container ">
					<div class="row">
						<div class="col-12 text-center title">
							<h2 class="pad-30-bottom">Why do I want to work with a specialist?</h2>
							<h3 class="pad-50-bottom">Here are a couple of good reasons why:</h3>
						</div>
					</div>
					<!-- top row -->
					<div class="row icon-grid text-center">
						<div class="col-4">
							<img src="/wp-content/themes/realioo/images/sellers/neighborhood-icon.png" />
							<h4>Neighborhood Experience</h4>
							<p>The agent has years of experience buying homes in the area, giving you an advantage over an outside realtor</p>
						</div>
						<div class="col-4">
							<img src="/wp-content/themes/realioo/images/buyers/home-value-icon.png" />
							<h4>Home Value</h4>
							<p>The agent understands the home values in the neighborhood, ensuring you’ll never overpay</p>
						</div>
						<div class="col-4">
							<img src="/wp-content/themes/realioo/images/buyers/neighborhood-value-icon.png" />
							<h4>Neighborhood Value</h4>
							<p>They know if home values are rising or falling, making sure you make a smart investment</p>
						</div>
					</div>
					<!-- bottom row -->
					<div class="row icon-grid text-center">
						<div class="col-4">
							<img src="/wp-content/themes/realioo/images/buyers/tactics-icon.png" />
							<h4>Negotiating Tactics</h4>
							<p>The agent is a tough negotiator, ensuring you’ll get your home even when there are multiple offers</p>
						</div>
						<div class="col-4">
							<img src="/wp-content/themes/realioo/images/buyers/opportunity-icon.png" />
							<h4>Identifies opportunities</h4>
							<p>The realtor can get you in houses that aren’t on the market yet</p>
						</div>
						<div class="col-4">
							<img src="/wp-content/themes/realioo/images/buyers/knowledge-icon.png" />
							<h4>Home Knowledge</h4>
							<p>The realtor will help you avoid costly hidden pitfalls before buying a home</p>
						</div>
					</div>
				</div>
			</section>

			<section class="module_4 grey-bg pad-100">
				<div class="container ">
					<div class="row">
						<div class="col-12 text-center">
							<h1 class="pad-50-bottom">How do we help you decide which agent is best?</h1>
							<h3>Realioo is completely unbiased or tied to any real estate agencies, allowing us to find you an agent that has proven to be a specialist in your neighborhood, home-type, and price range.</h3>
						</div>
					</div>
				</div>
			</section>

			<section class="module_5 purple-bg pad-100">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h1>Not all realtors are the same</h1>
							<h3 class="pad-30">Any realtor can write an offer, but only one gets accepted. Working with a specialist who can use neighborhood insights to craft an offer sellers can’t refuse is your safest approach to successfully buying your new home.</h3>
						</div>
					</div>
          <div class="row icon-grid">
            <div class="col-3">
              <img src="/wp-content/themes/realioo/images/buyers/perfect-home-icon.png" />
              <h3>Your agent will take the time to find you the perfect home</h3>
            </div>
            <div class="col-3">
              <img src="/wp-content/themes/realioo/images/buyers/negotiate-icon.png" />
              <h3>Your agent will negotiate to get you the home at a great price</h3>
            </div>
            <div class="col-3">
              <img src="/wp-content/themes/realioo/images/buyers/hidden-icon.png" />
              <h3>Your agent will ensure there are no hidden surprises</h3>
            </div>
            <div class="col-3">
              <img src="/wp-content/themes/realioo/images/buyers/keys-icon.png" />
              <h3>Get the keys to your house worry-free</h3>
            </div>
          </div>
				</div>
			</section>

			<!-- testimonials -->
			<section class="testimonials grey-bg pad-100">
				<div class="container">
					<div class="row">

						<div id="tab_container">
							<div class="tab_content tab_1 tab_active">
								<div class="col-12 text-center">
									<h3>"Our agent wasn’t in a rush to just sell us a home. She took the time to listen to what we really cared about and made sure we got in the neighborhood we wanted within our price range "</h3>
									<p class="quote-attribute">
										— Craig
									</p>
								</div>
              </div>
              <!-- <div class="tab_content tab_2">
								<div class="col-12 text-center">
									<h3>"We had no idea Cindy sold twice as many homes in our neighborhood compared to every other agent in the area. Without Realioo, we would have never known this."</h3>
									<p class="quote-attribute">
										— Jan
									</p>
								</div>
              </div> -->
            </div>
						<!-- <div id="tabs1">
	            <a href="#tab_1" tab="1" class="active"></a>
	            <a href="#tab_2" tab="2"></a>
             </div> -->
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

	<script>
	  jQuery(document).ready(function ($) {
		  $('#tabs1 > a').click(function() {
		  var tab = $('.tab_' + $(this).attr('tab'));
		  if (tab.length) {
		      // Hide active tab & selected style:
		      $('.tab_active').removeClass('tab_active');
		      $('#tabs1 .active').removeClass('active');

		      // Show clicked tab content
		      tab.addClass('tab_active');
		      $(this).addClass('active');
		  	}
			});
		});
	</script>

<?php
get_footer();
