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
          <div class="row align-items-center">
            <div class="col-6 mx-auto col-md-6 order-md-2">
              <img class="img-fluid mb-3 mb-md-0" src="{{ site.baseurl }}/assets/img/bootstrap-stack.png" alt="" width="1024" height="860">
            </div>
            <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
              <h1 class="mb-3">Welcome to Realioo, your trusted source for finding a real estate agent</h1>
              <p class="lead">
                With Realioo you can put your mind at ease. Simply tell us where you're looking to buy or sell and we'll match you with the top performing agent.
              </p>
            </div>
          </div>
        </div>
      </main>

      <div class="masthead-followup row m-0 border border-white">
        <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
          <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
          {% include icons/import.svg width="32" height="32" class="text-primary mb-2" %}
          <h3>Installation</h3>
          <p>Include Bootstrap's source Sass and JavaScript files via npm, Composer or Meteor. Package managed installs don't include documentation, but do include our build system and readme.</p>

      {% highlight sh %}
      npm install bootstrap
      {% endhighlight %}

      {% highlight sh %}
      gem install bootstrap -v {{ site.current_ruby_version }}
      {% endhighlight %}

          <hr class="half-rule">
          <a class="btn btn-outline-primary" href="{{ site.baseurl }}/docs/{{ site.docs_version }}/getting-started/download">Read installation docs</a>
        </div>

        <div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
          <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
          {% include icons/lightning.svg width="32" height="32" class="text-primary mb-2" %}
          <h3>Official Themes</h3>
          <p>
            Take Bootstrap 4 to the next level with official premium themes—toolkits built on Bootstrap with new components and plugins, docs, and build tools.
          </p>
          <img class="img-fluid mt-3 mx-auto" src="{{ site.baseurl }}/assets/img/bootstrap-themes.png" alt="Bootstrap Themes" width="1024" height="388">
          <hr class="half-rule">
          <a href="{{ site.themes }}" class="btn btn-outline-primary">Browse themes</a>
        </div>
      </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
