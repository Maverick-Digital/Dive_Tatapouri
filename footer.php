<?php

//https://grid.layoutit.com/?id=1je5n9b

global $post;
$site_description = get_bloginfo('description', 'display');
$site_name = get_bloginfo('name');

//require_once( 'layouts/case-studies-carousel.php' );
//require_once( 'layouts/company_logos.php' );
//require_once( 'library/clip-paths.php' );

require_once('layouts/testimonials.php');
if (get_field("show_instagram")  && !is_plugin_active('sb-instagram-feed') || is_single()) { ?>
	<div class='instagram layer noprint'>
		<span><i class="fab fa-instagram"></i>  Follow Us</span>
		<?php
			echo do_shortcode('[instagram-feed]');
		?>
	</div>
<?php } ?>

<!-- Footer -->
<footer class="layer noprint">
	<?php echo do_shortcode('[affiliates]') ?>
	<div class="inner pad-top-60 pad-bot-60 footer-bottom-widgets">
		<div class="grid grid-between clearfix">
			<div class="col  column1 ">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1')) : ?>
				<?php endif; ?>
				<br />
				<p class="pad-top-20" style="font-size:10px;">&copy; <?php echo get_bloginfo('name');  ?>. Website by <a id="maverick-logo" href="http://maverickdigital.nz/" target="_blank"></a></p>
			</div>
			<div class="col  column2">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2')) : ?>
				<?php endif; ?>
			</div>
			<div class="col  column3">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3')) : ?>
				<?php endif; ?>
			</div>
			<!-- <div class="col  column4">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4')) : ?>
				<?php endif; ?>
			</div>
			<div class="col  column5">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer5')) : ?>
				<?php endif; ?>
			</div> -->
		</div>
		<!-- <div class="subfooter">
			<div class="footer-meta clearfix center">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer6')) : ?>
				<?php endif; ?>
			</div>
		</div> -->

	</div>

</footer>




</div><!-- end div.wrap -->
</div><!-- end div.moved -->

<div id="NavDrawer" class="drawer drawer--right">
	<div class="draw_bg">
		<div class="drawer__inner">
			<div class="logo_footer">
				<a class="desktop" href="<?php echo get_home_url(); ?>">
					<?php
					echo wp_get_attachment_image(get_field('logo_ghost', 'options'), 'large');
					?> </a>
			</div>
			<!-- Menu -->
			<nav id="ml-menu" class="menu">
				<!-- Close button for mobile version -->
				<button class="action action--close js-drawer-close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
				<div class="menu__wrap">
					<?php custom_menu_output('sub-nav');  ?>
				</div>
			</nav>
		</div>
	</div>
</div>

<div class="back-to-top-wrap"><a class="back-to-top" href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/arrow-up-plain.svg" alt="top" /></a></div>
<?php wp_footer(); ?>
</body>

</html> <!-- end of site. what a ride! -->