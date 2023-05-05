<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package custom_theme
    */
    ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="w_Iwth0M6NPerC5tmHXIC6AH4W3B09vEamHFSIIm_k0" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts/lato/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom_style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom_animation.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts/Jost/stylesheet.css">
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery3.4.min.js"></script>
	<?php wp_head(); ?>
	<script type="text/javascript">
	// Notice how this gets configured before we load Font Awesome
	window.FontAwesomeConfig = { autoReplaceSvg: false }
	</script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-E4JSRMZY06"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-E4JSRMZY06');
	</script>

</head>
<body <?php body_class(); ?>>
<div id="preloader"></div>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header custom_header_3456" >
	
                
<div class="container">
<div class="head-wrap">
<div class="head-left">
<div class="site-branding">
	<?php
	the_custom_logo();
	if ( is_front_page() && is_home() ) :
	?>
	<?php endif; ?>
</div>
</div>
<div class="head-center">
<nav id="site-navigation" class="main-navigation navbar">
	<div class="push-left">
		<button id="menu-toggler" data-class="menu-active" class="hamburger">
		<span class="hamburger-line hamburger-line-top"></span>
		<span class="hamburger-line hamburger-line-middle"></span>
		<span class="hamburger-line hamburger-line-bottom"></span>
		</button>
		
		<?php
		wp_nav_menu(
		array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
		)
		);
		?>
		</nav><!-- #site-navigation -->
	</div>
	<div class="head-right">
		<?php
			wp_nav_menu(
			array(
			'theme_location' => 'signup-menu',
			'menu_id'        => 'menu-3',
			)
			);
		?>

	</div>
</div>
</div>

				
</header><!-- #masthead -->
<div id="page" class="site container">