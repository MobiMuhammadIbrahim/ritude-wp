<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

?>

</div><!-- #page -->
<footer id="colophon" class="site-footer">

	<div class="row-one">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="col-lg-3 footer-col-1">
					<?php dynamic_sidebar( 'footer-logo' ); ?>
				</div>
				<div class="col-lg-3 footer-col-2">
					<?php dynamic_sidebar( 'quick-links' ); ?>
				</div>
				<div class="col-lg-3 footer-col-3"> 
					<?php dynamic_sidebar( 'usefull-info' ); ?>
				</div>
				<div class="col-lg-3 footer-col-4">
					<?php dynamic_sidebar( 'follow-us' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row-two">
		<div class="container">
			<div class="copyright">
				<span>&copy; <?php echo date('Y'); ?>
					<a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo($show, $filter); ?></a> All Rights Reserved, Designed & Developed By <a href="http://mobitisinginc.com/" target="_blank">MobiTising.</a>
				</span>
			</div>
		</div>
	</div>
</footer>
    <div id="top" class="backtop">
		<a href="#masthead" ><i class="fas fa-arrow-up"></i></a>

</div>

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/slick.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom_animation.js"></script>
<script type="text/javascript">
	// Preloader js code by sk 
	var loader = document.getElementById("preloader");
	window.addEventListener ("load", function() {
		loader.style.display = 'none';
	});
</script>
</body>
</html>

