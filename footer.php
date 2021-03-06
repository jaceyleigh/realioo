<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Realioo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer gradient pad-100">
		<div class="site-info container">
			<!-- The WordPress Primary Menu -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu'
			) );
			?>
			<img src="/wp-content/themes/realioo/images/global/inverse-logo.png" />
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- linkedin tracking code -->

<script type="text/javascript">
_linkedin_partner_id = "428265";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=428265&fmt=gif" />
</noscript>

<!-- chat bot -->
<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4614996.js"></script>
<!-- End of HubSpot Embed Code -->
</body>
</html>
