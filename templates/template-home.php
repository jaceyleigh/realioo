<?php
/**
 * Template Name: Home
 * @package Realioo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <main class="bd-masthead" id="content" role="main">
        <div class="container">
          <div class="row align-items-center pad-100">
            <div class="col-8">
              <h1>Welcome to Realioo, your trusted source for finding a real estate agent</h1>
              <p>
                With Realioo you can put your mind at ease. Simply tell us where you're looking to buy or sell and we'll match you with the top performing agent.
              </p>
            </div>
						<div class="col-4">
							<img class="img-fluid" src="/wp-content/themes/realioo/images/landing-page/hero-characters.png">
						</div>
          </div>
        </div>
      </main>

			<!-- Address Form -->
			<section class="module_2 orange-pattern-bg pad-100">
				<div class="container">
					<div class="row ">
						<div class="col-12 text-center">
							<h2>Where are you looking to buy or sell?</h2>
							<?php echo do_shortcode( '[contact-form-7 id="28" title="Test"]' ); ?>
						</div>
					</div>
				</div>
			</section>

			<section class="module_3 purple-bg pad-100">
				<div class="container ">
					<div class="row">
						<div class="col-12 text-center">
							<h2>Why Realioo?</h2>
							<h3>Realioo is completely unbiased or tied to any agencies, making it the safest approach to finding a top realtor that specializes in your neighborhood.</h3>
						</div>
					</div>
				</div>
			</section>

			<!-- 2 column Icon Grid -->
			<section class="module_4 icon-grid pad-100">
				<div class="container">
					<div class="row">
						<div class="col-6 text-center left-column">
							<h3>The old way to find a realtor.</h3>
							<!-- top icons -->
							<div class="row">
								<div class="col-6">
									<img src="http://placehold.it/100x100" />
									<p>Search online for a realtor or talk to a family friend</p>
								</div>
								<div class="col-6">
									<img src="http://placehold.it/100x100" />
									<p>Have a conversation with a list of agents that all claim to be the best</p>
								</div>
							</div>
							<!-- bottom icons -->
							<div class="row">
								<div class="col-6">
									<img src="http://placehold.it/100x100" />
									<p>Select one of the best agents based on a gut feeling</p>
								</div>
								<div class="col-6">
									<img src="http://placehold.it/100x100" />
										<p>Cross your fingers and hope for the best</p>
								</div>
							</div>
						</div>
						<div class="col-6 text-center right-column">
							<h3>The new way with Realioo.</h3>
							<!-- top icons -->
							<div class="row">
								<div class="col-6">
									<img src="http://placehold.it/100x100" />
									<p>Get unbiased information about how realtors are performing in your area</p>
								</div>
								<div class="col-6">
									<img src="http://placehold.it/100x100" />
									<p>Select an agent that specializes in your neighborhood</p>
								</div>
							</div>
							<!-- bottom icons -->
							<div class="row">
								<div class="col-6">
									<img src="http://placehold.it/100x100" />
									<p>Connect with an agent of your choice and then determine if they're a good fit for you</p>
								</div>
								<div class="col-6">
									<img src="http://placehold.it/100x100" />
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
