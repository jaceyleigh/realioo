<?php
/**
 * Template Name: About
 * @package Realioo
 */

get_header();
?>

	<div id="primary" class="content-area about-page">
		<main id="main" class="site-main">

      <section class="hero bd-masthead" id="content" role="main">
        <div class="container">
          <div class="row align-items-center pad-50-top">
            <div class="col-md-6">
              <h1 class="pad-30-bottom">Authenticity, it's what we do.</h1>
              <h3 class="pad-50-bottom">Providing you with upfront, unbiased information about realtor performance is at the heart of everything we do.</h3>
            </div>
						<div class="col-md-6">
							<img class="img-fluid" src="/wp-content/themes/realioo/images/about/about-hero-characters.png">
						</div>
          </div>
        </div>
      </section>

			<section class="module_3 purple-bg pad-100">
				<div class="container ">
					<div class="row">
						<div class="col-12 text-center">
							<h1 class="pad-30-bottom">The Realioo way.</h1>
							<h3 class="pad-50-bottom">Unlike other services, agents can’t pay for your business. Realioo is completely unbiased or tied to any real estate agencies, making it the safest approach to finding a top realtor that specializes in your neighborhood.</h3>
						</div>
					</div>
					<div class="pad-70-bottom row equation-graphic">
						<div class="col-sm-2 text-center">
							<p>Your<br/>Situation</p>
						</div>
						<div class="col-sm-1 text-center">
							<span class="plus-sign bold">+</span>
						</div>
						<div class="col-sm-3 text-center">
							<p class="pink">Unbiased Realtor<br/>Information</p>
						</div>
						<div class="col-sm-1 text-center">
							<span class="plus-sign bold">+</span>
						</div>
						<div class="col-sm-2 text-center">
							<p>Your<br/>Approval</p>
						</div>
						<div class="col-sm-1 text-center">
							<span class="plus-sign bold">=</span>
						</div>
						<div class="col-sm-2 text-center">
							<p>Your Specialized Agent</p>
						</div>
					</div>
				</div>
			</section>

			<section class="module_4 pad-100 grey-bg">
				<div class="container ">
					<div class="row">
						<div class="col-12 text-center title">
							<h1 class="pad-30-bottom">View us as your trusted partner.</h2>
							<h3>Our team is made up of passionate real estate obsessives that wake up to help our clients. We understand your home is your biggest life investment and we’re here to help you secure success in your next move.</h3>
						</div>
					</div>
				</div>
			</section>

			<!-- Address Form -->
			<section class="module_5 pad-100 two-step-form">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h1 class="pad-30-bottom">Let's break the ice.</h1>
							<h2 class="pad-30-bottom">Where are you looking to buy or sell?</h2>
							<?php echo do_shortcode( '[contact-form-7 id="334" title="Sellers Page Contact Form"]' ); ?>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
