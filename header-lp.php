<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Realioo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123200005-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123200005-1');
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<!-- 	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'realioo' ); ?></a> -->

	<header id="masthead" class="site-header">
		<nav class="navbar container">
			<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="/wp-content/themes/realioo/images/global/realioo_logo.png"/></a>
			<div class="navbar-text justify-content-sm-end bold">
				<p>Connect with us today.</p>
				<img src="/wp-content/themes/realioo/images/global/phone-icon.png" />
				<a class="phone-number" href="tel:6124811394">612-481-1394</a>
			</div>
</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
