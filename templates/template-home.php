<?php
/**
 * Template Name: Home
 * @package Realioo
 */

get_header();
?>

	<div id="primary" class="content-area home-page">
		<main id="main" class="site-main">

      <section class="hero bd-masthead" id="content" role="main">
        <div class="container">
          <div class="row align-items-center pad-50-top">
            <div class="col-md-8 pad-50-bottom">
              <h1>Welcome to Realioo, your trusted source for finding a real estate agent</h1>
              <h3>
                With Realioo you can put your mind at ease. Simply tell us where you're looking to buy or sell and we'll match you with the top performing agent.
              </h3>
            </div>
						<div class="col-md-4">
							<img class="img-fluid" src="/wp-content/themes/realioo/images/home/home-hero-characters.png">
						</div>
          </div>
        </div>
      </section>

			<!-- Address Form -->
			<section class="module_2 map-bg pad-100 two-step-form">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h2 class="pad-30-bottom">Where are you looking to buy or sell?</h2>
							<?php echo do_shortcode( '[contact-form-7 id="334" title="Sellers Page Contact Form"]' ); ?>
						</div>
					</div>
				</div>
			</section>

			<section class="module_3 purple-bg pad-100">
				<div class="container ">
					<div class="row">
						<div class="col-12 text-center">
							<h1 class="pad-50-bottom">Why Realioo?</h1>
							<h3>Realioo is completely unbiased or tied to any agencies, making it the safest approach to finding a top realtor that specializes in your neighborhood.</h3>
						</div>
					</div>
				</div>
			</section>

			<!-- 2 column Icon Grid -->
			<section class="module_4 icon-grid pad-100">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center left-column">
							<h1 class="pad-30-bottom">The old way to find a realtor.</h1>
							<!-- top icons -->
							<div class="row">
								<div class="col-6">
									<img src="/wp-content/themes/realioo/images/home/search-icon.png" />
									<p>Search online for a realtor or talk to a family friend</p>
								</div>
								<div class="col-6">
									<img src="/wp-content/themes/realioo/images/home/conversation-icon.png" />
									<p>Have a conversation with a list of agents that all claim to be the best</p>
								</div>
							</div>
							<!-- bottom icons -->
							<div class="row">
								<div class="col-6">
									<img src="/wp-content/themes/realioo/images/home/gut-icon.png" />
									<p>Select one of the best agents based on a gut feeling</p>
								</div>
								<div class="col-6">
									<img src="/wp-content/themes/realioo/images/home/fingers-icon.png" />
										<p>Cross your fingers and hope for the best</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 text-center right-column">
							<h1 class="pad-30-bottom">The new way with Realioo.</h1>
							<!-- top icons -->
							<div class="row">
								<div class="col-6">
									<img src="/wp-content/themes/realioo/images/home/area-icon.png" />
									<p>Get unbiased information about how realtors are performing in your area</p>
								</div>
								<div class="col-6">
									<img src="/wp-content/themes/realioo/images/home/realtor-icon.png" />
									<p>Select an agent that specializes in your neighborhood</p>
								</div>
							</div>
							<!-- bottom icons -->
							<div class="row">
								<div class="col-6">
									<img src="/wp-content/themes/realioo/images/home/agent-icon.png" />
									<p>Connect with an agent of your choice and then determine if they're a good fit for you</p>
								</div>
								<div class="col-6">
									<img src="/wp-content/themes/realioo/images/home/confident-icon.png" />
										<p>Confidently buy or sell your home with the comfort of knowing you're working with a high-performing agent of your choice</p>
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

						<div id="tab_container">
							<div class="tab_content tab_1 tab_active">
								<div class="col-12 text-center">
									<h3>“Realioo saved the day for us. We needed our home sold quickly and we fired the first agent we found on Google because they didn’t do anything they promised. Realioo’s team quickly connected us with the top agent in Golden Valley and we sold our home in weeks.”</h3>
									<p class="quote-attribute">
										— John
									</p>
								</div>
							</div>
							<div class="tab_content tab_2">
								<div class="col-12 text-center">
									<h3>"We sold our home for thousands of dollars more compared to the other homes in our neighborhood using the agent Realioo connected us with. He was truly a neighborhood expert when it came to his pricing strategy."</h3>
									<p class="quote-attribute">
										— David
									</p>
								</div>
							</div>
							<div class="tab_content tab_3">
								<div class="col-12 text-center">
									<h3>"We had no idea Cindy sold twice as many homes in our neighborhood compared to every other agent in the area. Without Realioo, we would have never known this."</h3>
									<p class="quote-attribute">
										— Jan
									</p>
								</div>
							</div>
						</div>
						<div id="tabs1">
							<a href="#tab_1" tab="1" class="active"></a>
							<a href="#tab_2" tab="2"></a>
							<a href="#tab_3" tab="3"></a>
						 </div>
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
