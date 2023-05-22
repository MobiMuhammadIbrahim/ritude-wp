<?php 
// add enquee style and scripts
function gt3_child_scripts() {
  
	if(is_page(208)) { 
		wp_enqueue_script( 'particles-min-js', get_stylesheet_directory_uri() . '/js/particles.min.js', array( 'jquery' ) );
	}
  
  
  }
  add_action( 'wp_enqueue_scripts', 'gt3_child_scripts' );


include('custom-shortcodes.php');

add_filter( 'widget_text', 'do_shortcode');

add_action( 'after_setup_theme', 'setup_woocommerce_support' );

 function setup_woocommerce_support()
{
  add_theme_support('woocommerce');
}

/**=======================================**/
			//   TOPBAR INFO START
/**=======================================**/

function wordpress_blank_theme_customizer( $wp_customize ) {
    //=============
    // Options
    $wp_customize->add_section( 'blank_wordpress_topbar_section' , array(
        'title'       => __( 'Top Bar', 'blank_wordpress' ),
        'priority'    => 20
    ) );

    //Email
    $wp_customize->add_setting( 'blank_wordpress_email' );
    $wp_customize->add_control( 'blank_wordpress_email', array(
        'label'    => __( 'Email', 'blank_wordpress' ),
        'section'  => 'blank_wordpress_topbar_section',
        'type'     => 'email'
    ) );


	 //Phone
	 $wp_customize->add_setting( 'blank_wordpress_phone' );
	 $wp_customize->add_control( 'blank_wordpress_phone', array(
		 'label'    => __( 'Phone', 'blank_wordpress' ),
		 'section'  => 'blank_wordpress_topbar_section',
		 'type'     => 'tel'
	 ) );

}
add_action( 'customize_register', 'wordpress_blank_theme_customizer' );


/**=======================================**/
		//   TOPBAR INFO END
/**=======================================**/



/**=======================================**/
		// POST TYPE PAGINATION START
/**=======================================**/

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

	if (empty($pagerange)) {
	  $pagerange = 2;
	}
  
	global $paged;
	
	if (empty($paged)) {
	  $paged = 1;
	}
	
	if ($numpages == '') {
	  global $wp_query;
	  
	  $numpages = $wp_query->max_num_pages;
	  
	  if(!$numpages) {
		$numpages = 1;
	  }
	}
  
	$pagination_args = array(
	  'base'            => get_pagenum_link(1) . '%_%',
	  'format'          => 'page/%#%',
	  'total'           => $numpages,
	  'current'         => $paged,
	  'show_all'        => False,
	  'end_size'        => 1,
	  'mid_size'        => $pagerange,
	  'prev_next'       => True,
	  'prev_text'       => __('Previous'),
	  'next_text'       => __('Next'),
	  'type'            => 'plain',
	  'add_args'        => false,
	  'add_fragment'    => ''
	);
  
	$paginate_links = paginate_links($pagination_args);
  
	if ($paginate_links) {
	  echo "<div class='pagination'>";
	  //echo "<div class='left'>Page " . $paged . " of " . $numpages . "</div> ";
	  echo "<div class='right'>" . $paginate_links . "</div> ";
	  echo "</div>";
	}
  }


/**=======================================**/
		// POST TYPE PAGINATION END
/**=======================================**/




/**=======================================**/
		//     FOOTER INFO START
/**=======================================**/

function footer_info( $wp_customize ) {
    //=============
    // Options
    $wp_customize->add_section( 'blank_wordpress_footer_section' , array(
        'title'       => __( 'Footer Contact Info', 'blank_wordpress' ),
        'priority'    => 21
    ) );

    //Office
    $wp_customize->add_setting( 'blank_wordpress_office_footer' );
    $wp_customize->add_control( 'blank_wordpress_office_footer', array(
        'label'    => __( 'Office', 'blank_wordpress' ),
        'section'  => 'blank_wordpress_footer_section',
        'type'     => 'tel'
    ) );

    //Mobile
    $wp_customize->add_setting( 'blank_wordpress_phone_footer' );
    $wp_customize->add_control( 'blank_wordpress_phone_footer', array(
        'label'    => __( 'Mobile', 'blank_wordpress' ),
        'section'  => 'blank_wordpress_footer_section',
        'type'     => 'tel'
    ) );


    //Fax
    $wp_customize->add_setting( 'blank_wordpress_fax_footer' );
    $wp_customize->add_control( 'blank_wordpress_fax_footer', array(
        'label'    => __( 'Fax', 'blank_wordpress' ),
        'section'  => 'blank_wordpress_footer_section',
        'type'     => 'tel'
    ) );
    
    //Email
    $wp_customize->add_setting( 'blank_wordpress_email_footer' );
    $wp_customize->add_control( 'blank_wordpress_email_footer', array(
        'label'    => __( 'Email', 'blank_wordpress' ),
        'section'  => 'blank_wordpress_footer_section',
        'type'     => 'email'
    ) );

	//Address
	$wp_customize->add_setting( 'blank_wordpress_address_footer' );
	$wp_customize->add_control( 'blank_wordpress_address_footer', array(
		'label'    => __( 'Goolge Map Link', 'blank_wordpress' ),
		'section'  => 'blank_wordpress_footer_section',
		'type'     => 'url'
	) );

	//Address Text
	$wp_customize->add_setting( 'blank_wordpress_address_text_footer' );
	$wp_customize->add_control( 'blank_wordpress_address_text_footer', array(
		'label'    => __( 'Address Text ', 'blank_wordpress' ),
		'section'  => 'blank_wordpress_footer_section',
		'type'     => 'url'
	) );


}
add_action( 'customize_register', 'footer_info' );

/**=======================================**/
			// FOOTER INFO END
/**=======================================**/




/**=======================================**/
		//     SOCIAL ICONS HEADER START
/**=======================================**/

function social_icons_info( $wp_customize ) {
    //=============
    // Options
    $wp_customize->add_section( 'blank_wordpress_social_icons_section' , array(
        'title'       => __( 'Social Accounts Header', 'blank_wordpress' ),
        'priority'    => 21
    ) );

    //Facebook
    $wp_customize->add_setting( 'blank_wordpress_facebook_icon' );
    $wp_customize->add_control( 'blank_wordpress_facebook_icon', array(
        'label'    => __( 'Facebook', 'blank_wordpress' ),
        'section'  => 'blank_wordpress_social_icons_section',
        'type'     => 'url'
    ) );

	//Instagram
	$wp_customize->add_setting( 'blank_wordpress_instagram_icon' );
	$wp_customize->add_control( 'blank_wordpress_instagram_icon', array(
		'label'    => __( 'Instagram', 'blank_wordpress' ),
		'section'  => 'blank_wordpress_social_icons_section',
		'type'     => 'url'
	) );

	//Whatsapp
	$wp_customize->add_setting( 'blank_wordpress_whatsapp_icon' );
	$wp_customize->add_control( 'blank_wordpress_whatsapp_icon', array(
		'label'    => __( 'Whatsapp', 'blank_wordpress' ),
		'section'  => 'blank_wordpress_social_icons_section',
		'type'     => 'url'
	) );


	//YouTube
	$wp_customize->add_setting( 'blank_wordpress_Youtube_icon' );
	$wp_customize->add_control( 'blank_wordpress_Youtube_icon', array(
		'label'    => __( 'YouTube', 'blank_wordpress' ),
		'section'  => 'blank_wordpress_social_icons_section',
		'type'     => 'url'
	) );
		
		
	//Twitter
	$wp_customize->add_setting( 'blank_wordpress_twitter_icon' );
	$wp_customize->add_control( 'blank_wordpress_twitter_icon', array(
		'label'    => __( 'Twitter', 'blank_wordpress' ),
		'section'  => 'blank_wordpress_social_icons_section',
		'type'     => 'url'
	) );

	//Linkedin
	$wp_customize->add_setting( 'blank_wordpress_linkedin_icon' );
	$wp_customize->add_control( 'blank_wordpress_linkedin_icon', array(
		'label'    => __( 'Linkedin', 'blank_wordpress' ),
		'section'  => 'blank_wordpress_social_icons_section',
		'type'     => 'url'
	) );


	//Pinterest
	$wp_customize->add_setting( 'blank_wordpress_pinterest_icon' );
	$wp_customize->add_control( 'blank_wordpress_pinterest_icon', array(
		'label'    => __( 'Pinterest', 'blank_wordpress' ),
		'section'  => 'blank_wordpress_social_icons_section',
		'type'     => 'url'
	) );


	//Google+
    $wp_customize->add_setting( 'blank_wordpress_googleplus_icon' );
    $wp_customize->add_control( 'blank_wordpress_googleplus_icon', array(
        'label'    => __( 'Google+', 'blank_wordpress' ),
        'section'  => 'blank_wordpress_social_icons_section',
        'type'     => 'url'
    ) );

	//RSS
	$wp_customize->add_setting( 'blank_wordpress_rss_icon' );
	$wp_customize->add_control( 'blank_wordpress_rss_icon', array(
		'label'    => __( 'RSS', 'blank_wordpress' ),
		'section'  => 'blank_wordpress_social_icons_section',
		'type'     => 'url'
	) );


}
add_action( 'customize_register', 'social_icons_info' );



/**=======================================**/
			// SOCIAL ICONS HEADER END
/**=======================================**/








/**=======================================**/
			// CUSTOM MENU START
/**=======================================**/

function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'signup-menu' => __( 'Sign Up Menu' ),
	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );


/**=======================================**/
			// CUSTOM MENU END
/**=======================================**/


/**=======================================**/
			// WIDGET LOGO START
/**=======================================**/

register_sidebar( array(
    'name' => __( 'Footer Logo & Description', 'twentyten' ),
    'id' => 'footer-logo',
    'description' => __( 'An optional widget area for your site footer.', 'twentyten' ),
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>',
  ) );


/**=======================================**/
			// WIDGET LOGO END
/**=======================================**/



/**===========================================**/
			// WIDGET QUICK LINKS START
/**============================================**/

register_sidebar( array(
    'name' => __( 'Quick Links', 'twentyten' ),
    'id' => 'quick-links',
    'description' => __( 'An optional widget area for your site footer.', 'twentyten' ),
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>',
  ) );


  /**=========================================**/
			// WIDGET QUICK LINKS END
/**==========================================**/



/**===========================================**/
		// WIDGET USEFULL INFO US WIDGET START 
/**============================================**/

register_sidebar( array(
    'name' => __( 'Usefull Information', 'twentyten' ),
    'id' => 'usefull-info',
    'description' => __( 'An optional widget area for your site footer.', 'twentyten' ),
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>',
  ) );


/**===========================================**/
		// WIDGET USEFULL INFO WIDGET END
/**============================================**/


/**==============================================**/
		// WIDGET FOLLOW US WIDGET START
/**==============================================**/

register_sidebar( array(
    'name' => __( 'Follow Us', 'twentyten' ),
    'id' => 'follow-us',
    'description' => __( 'An optional widget area for your site footer.', 'twentyten' ),
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>',
  ) );

/**==============================================**/
		// WIDGET FOLLOW US WIDGET END
/**==============================================**/


// Register Custom Post Type Home Slider
function create_homeslider_cpt() {

	$labels = array(
		'name' => _x( 'Home Slider', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Home Slider', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Home Slider', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Home Slider', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Home Slider Archives', 'textdomain' ),
		'attributes' => __( 'Home Slider Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Home Slider:', 'textdomain' ),
		'all_items' => __( 'All Home Slider', 'textdomain' ),
		'add_new_item' => __( 'Add New Home Slider', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Home Slider', 'textdomain' ),
		'edit_item' => __( 'Edit Home Slider', 'textdomain' ),
		'update_item' => __( 'Update Home Slider', 'textdomain' ),
		'view_item' => __( 'View Home Slider', 'textdomain' ),
		'view_items' => __( 'View Home Slider', 'textdomain' ),
		'search_items' => __( 'Search Home Slider', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Home Slider', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Home Slider', 'textdomain' ),
		'items_list' => __( 'Home Slider list', 'textdomain' ),
		'items_list_navigation' => __( 'Home Slider list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Home Slider list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Home Slider', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'homeslider', $args );

}
add_action( 'init', 'create_homeslider_cpt', 0 );

// Register Custom Post Type Distribution Platforms
function create_distribution_platform_cpt() {

	$labels = array(
		'name' => _x( 'Distribution Platform', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Distribution Platform', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Distribution Platform', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Distribution Platform', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Distribution Platform Archives', 'textdomain' ),
		'attributes' => __( 'Distribution Platform Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Distribution Platform:', 'textdomain' ),
		'all_items' => __( 'All Distribution Platform', 'textdomain' ),
		'add_new_item' => __( 'Add New Distribution Platform', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Distribution Platform', 'textdomain' ),
		'edit_item' => __( 'Edit Distribution Platform', 'textdomain' ),
		'update_item' => __( 'Update Distribution Platform', 'textdomain' ),
		'view_item' => __( 'View Distribution Platform', 'textdomain' ),
		'view_items' => __( 'View Distribution Platform', 'textdomain' ),
		'search_items' => __( 'Search Distribution Platform', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Distribution Platform', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Distribution Platform', 'textdomain' ),
		'items_list' => __( 'Distribution Platform list', 'textdomain' ),
		'items_list_navigation' => __( 'Distribution Platform list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Distribution Platform list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Distribution Platform', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'distributionplatform', $args );

}
add_action( 'init', 'create_distribution_platform_cpt', 0 );



// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Testimonial Archives', 'textdomain' ),
		'attributes' => __( 'Testimonial Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'textdomain' ),
		'all_items' => __( 'All Testimonials', 'textdomain' ),
		'add_new_item' => __( 'Add New Testimonial', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Testimonial', 'textdomain' ),
		'edit_item' => __( 'Edit Testimonial', 'textdomain' ),
		'update_item' => __( 'Update Testimonial', 'textdomain' ),
		'view_item' => __( 'View Testimonial', 'textdomain' ),
		'view_items' => __( 'View Testimonials', 'textdomain' ),
		'search_items' => __( 'Search Testimonial', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'textdomain' ),
		'items_list' => __( 'Testimonials list', 'textdomain' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-quote',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonial_posttype', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );

// Register Custom Post Type Gallery
function create_gallery_cpt() {

	$labels = array(
		'name' => _x( 'Gallery', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Gallery', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Gallery', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Gallery', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Gallery Archives', 'textdomain' ),
		'attributes' => __( 'Gallery Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Gallery:', 'textdomain' ),
		'all_items' => __( 'All Gallery', 'textdomain' ),
		'add_new_item' => __( 'Add New Gallery', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Gallery', 'textdomain' ),
		'edit_item' => __( 'Edit Gallery', 'textdomain' ),
		'update_item' => __( 'Update Gallery', 'textdomain' ),
		'view_item' => __( 'View Gallery', 'textdomain' ),
		'view_items' => __( 'View Gallery', 'textdomain' ),
		'search_items' => __( 'Search Gallery', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Gallery', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Gallery', 'textdomain' ),
		'items_list' => __( 'Gallery list', 'textdomain' ),
		'items_list_navigation' => __( 'Gallery list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Gallery list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Gallery', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-gallery',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'gallery_posttype', $args );

}
add_action( 'init', 'create_gallery_cpt', 0 );


// Register Custom Post Type Ritude Community
function create_ritudecommunity_cpt() {

	$labels = array(
		'name' => _x( 'Ritude Community', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Ritude Community', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Ritude Community', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Ritude Community', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Ritude Community Archives', 'textdomain' ),
		'attributes' => __( 'Ritude Community Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Ritude Community:', 'textdomain' ),
		'all_items' => __( 'All Ritude Community', 'textdomain' ),
		'add_new_item' => __( 'Add New Ritude Community', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Ritude Community', 'textdomain' ),
		'edit_item' => __( 'Edit Ritude Community', 'textdomain' ),
		'update_item' => __( 'Update Ritude Community', 'textdomain' ),
		'view_item' => __( 'View Ritude Community', 'textdomain' ),
		'view_items' => __( 'View Ritude Community', 'textdomain' ),
		'search_items' => __( 'Search Ritude Community', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Ritude Community', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Ritude Community', 'textdomain' ),
		'items_list' => __( 'Ritude Community list', 'textdomain' ),
		'items_list_navigation' => __( 'Ritude Community list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Ritude Community list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Ritude Community', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-post',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'ritudecommunity', $args );

}
add_action( 'init', 'create_ritudecommunity_cpt', 0 );


// Register Custom Post Type Partners Logo
function create_partnerslogo_cpt() {

	$labels = array(
		'name' => _x( 'Partners Logo', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Partners Logo', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Partners Logo', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Partners Logo', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Partners Logo Archives', 'textdomain' ),
		'attributes' => __( 'Partners Logo Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Partners Logo:', 'textdomain' ),
		'all_items' => __( 'All Partners Logo', 'textdomain' ),
		'add_new_item' => __( 'Add New Partners Logo', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Partners Logo', 'textdomain' ),
		'edit_item' => __( 'Edit Partners Logo', 'textdomain' ),
		'update_item' => __( 'Update Partners Logo', 'textdomain' ),
		'view_item' => __( 'View Partners Logo', 'textdomain' ),
		'view_items' => __( 'View Partners Logo', 'textdomain' ),
		'search_items' => __( 'Search Partners Logo', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Partners Logo', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Partners Logo', 'textdomain' ),
		'items_list' => __( 'Partners Logo list', 'textdomain' ),
		'items_list_navigation' => __( 'Partners Logo list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Partners Logo list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Partners Logo', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-post',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'partnerslogo', $args );

}
add_action( 'init', 'create_partnerslogo_cpt', 0 );


// Register Custom Post Type Featured Artist
function create_featuredartist_cpt() {

	$labels = array(
		'name' => _x( 'Featured Artist', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Featured Artist', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Featured Artist', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Featured Artist', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Featured Artist Archives', 'textdomain' ),
		'attributes' => __( 'Featured Artist Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Featured Artist:', 'textdomain' ),
		'all_items' => __( 'All Featured Artist', 'textdomain' ),
		'add_new_item' => __( 'Add New Featured Artist', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Featured Artist', 'textdomain' ),
		'edit_item' => __( 'Edit Featured Artist', 'textdomain' ),
		'update_item' => __( 'Update Featured Artist', 'textdomain' ),
		'view_item' => __( 'View Featured Artist', 'textdomain' ),
		'view_items' => __( 'View Featured Artist', 'textdomain' ),
		'search_items' => __( 'Search Featured Artist', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Featured Artist', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Featured Artist', 'textdomain' ),
		'items_list' => __( 'Featured Artist list', 'textdomain' ),
		'items_list_navigation' => __( 'Featured Artist list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Featured Artist list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Featured Artist', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-post',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'featuredartist', $args );

}
add_action( 'init', 'create_featuredartist_cpt', 0 );


// HOME SLIDER Shortcode
// function that runs when shortcode is called
function wpb_home_cover_slider_shortcode($message = '') { 
// Things that you want to do. 
$message .= '
<div id="home-slider" class="home-slider">';

$args = array(  
	'post_type' => 'homeslider',
	'post_status' => 'publish',
	'posts_per_page' => '-1', 
	'order' => 'ASC', 
);

$loop = new WP_Query( $args ); 

$counter = 0;

while ( $loop->have_posts() ) : $loop->the_post();
    $slider_image = get_the_post_thumbnail_URL();
    $red_heading = get_field('red_heading');
    $white_heading = get_field('white_heading');
    $content_paragraph = get_field('content_paragraph');
    // $contact_us_url = get_field('contact_us_url');
    $cover_mobile_img = get_field('cover_mobile_image');

    $heading_tag = ($counter === 0) ? 'h1' : 'h2';

    $message .= '
        <div class="inner-wrapper" style="background-image:url('.$slider_image.')">
            <div class="container">
                <div class="slider-content">
                    <div class="description">'.                    
                        '<'.$heading_tag.'>'.$red_heading.'<span>'.$white_heading.'</span></'.$heading_tag.'>' .
                        '<img src="https://www.ritude.com/wp-content/uploads/2022/11/line.png" height="3" width="300" class="under_head_line">
                        <p>'.$content_paragraph.'</p>
                    </div>
                    <a href="https://www.ritude.com/contact-us/" class="red-btn">Contact Us</a>
                    <div class="mobile_img">
                        <img src="'.$cover_mobile_img.'">
                    </div>
                </div>
            </div>
        </div>
    ';
    $counter++;
endwhile;
wp_reset_postdata();

$message .='

</div>
';

// Output needs to be return
return $message;
} 
// register shortcode
add_shortcode('home_cover_slider', 'wpb_home_cover_slider_shortcode'); 
	



// RITUDE COMMUNITY SLIDER Shortcode
// function that runs when shortcode is called
function wpb_community_slider_shortcode($message = '') {
// Things that you want to do.
$message .= '
<div id="community" class="community">';

	$args = array(
	'post_type' => 'ritudecommunity',
	'post_status' => 'publish',
	'posts_per_page' => '-1',
	'order' => 'ASC',
	);
	
	$loop = new WP_Query( $args );
	
	while ( $loop->have_posts() ) : $loop->the_post();
	$slider_image = get_the_post_thumbnail_URL();
	$slider_content = get_the_content();
	// $slider_acf_name = get_field('name');
	
	
	$message .='
		<div class="inner-wrapper">
			<div class="community-flex">
				<div class="community-thumbnail">
					<img src="'.$slider_image.'" alt="">
				</div>
				<div class="caption">
					<div class="description">'.$slider_content.'</div>
				</div>
			</div>
		</div>
	';
	
	
	endwhile;
	wp_reset_postdata();
	
	$message .='
	
</div>
';

// Output needs to be return
return $message;
}
// register shortcode
add_shortcode('community_slider', 'wpb_community_slider_shortcode');
	


// PARTNERS SLIDER SLIDER Shortcode
// function that runs when shortcode is called
function wpb_partners_logo_slider_shortcode($message = '') {
// Things that you want to do.
$message .= '
<div id="our-partners" class="our-partners">';

	$args = array(
	'post_type' => 'partnerslogo',
	'post_status' => 'publish',
	'posts_per_page' => '-1',
	'order' => 'ASC',
	);
	
	$loop = new WP_Query( $args );
	
	while ( $loop->have_posts() ) : $loop->the_post();
	$slider_image = get_the_post_thumbnail_URL();
	
	$message .='
		<div class="inner-wrapper">
			<div class="partners-logo">
				<img src="'.$slider_image.'" alt="">
			</div>
		</div>
	';
	
	
	endwhile;
	wp_reset_postdata();
	
	$message .='
	
</div>
';

// Output needs to be return
return $message;
}
// register shortcode
add_shortcode('partners_logo_slider', 'wpb_partners_logo_slider_shortcode');


// FEATURED ARTIST SLIDER Shortcode
// function that runs when shortcode is called
function wpb_featured_artist_slider_shortcode($message = '') {
// Things that you want to do.
$message .= '
<div id="featured-artist" class="featured-artist">';

	$args = array(
	'post_type' => 'featuredartist',
	'post_status' => 'publish',
	'posts_per_page' => '-1',
	'order' => 'ASC',
	);
	
	$loop = new WP_Query( $args );
	
	while ( $loop->have_posts() ) : $loop->the_post();
	$slider_image = get_the_post_thumbnail_URL();
	$slider_artist_name = get_field('artist_name');
	// $slider_artist_country = get_field('artist_country');


	$message .='
		<div class="inner-wrapper">
			<div class="artist-thumbnial">
				<img src="'.$slider_image.'" alt="">
			</div>
			<div class="caption">
					<h4>'.$slider_artist_name.'</h4>
			</div>  
		</div>
	';
	
	
	endwhile;
	wp_reset_postdata();
	
	$message .='
	
</div>
';

// Output needs to be return
return $message;
}
// register shortcode
add_shortcode('featured_artist_slider', 'wpb_featured_artist_slider_shortcode');

// remove versions number from scripts and styles, Reason is the browser is using cache is waja say remove versions
function remove_css_js_version( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );



function wpb_testimonials_slider_shortcode($message = '') {
// Things that you want to do.
$message .= '
<div id="our-testimonials" class="our-testimonials">';

	$args = array(
	'post_type' => 'testimonial_posttype',
	'post_status' => 'publish',
	'posts_per_page' => '-1',
	'order' => 'ASC',
	);
	
	$loop = new WP_Query( $args );
	
	while ( $loop->have_posts() ) : $loop->the_post();
	$slider_image = get_the_post_thumbnail_URL();
	$get_content = get_the_excerpt();
	$content = strlen($get_content) > 15 ? substr($get_content,0,196)." " : $get_content;
	$title = get_the_title();
	$message .='
		<div class="inner-wrapper">
			<div class="testimonials">
				<p>"'.$content.'"</p>
				<span style="color: white;">--</span>
				<h5>'.$title.'</h5>
			</div>
		</div>
	';
	endwhile;
	wp_reset_postdata();
	$message .='
</div>
';

// Output needs to be return
return $message;
}
// register shortcode
add_shortcode('testimonials_slider', 'wpb_testimonials_slider_shortcode');

function wpb_distributionplatform_logo_slider_shortcode($message = '') {
	// Things that you want to do.
	$message .= '
	<div id="distributionplatform" class="distributionplatform">';

		$args = array(
		'post_type' => 'distributionplatform',
		'post_status' => 'publish',
		'posts_per_page' => '-1',
		'order' => 'ASC',
		);
		
		$loop = new WP_Query( $args );
		
		while ( $loop->have_posts() ) : $loop->the_post();
		$slider_image = get_the_post_thumbnail_URL();
		
		$message .='
			<div class="inner-wrapper">
				<div class="partners-logo">
					<img src="'.$slider_image.'" alt="">
				</div>
			</div>
		';
		
		
		endwhile;
		wp_reset_postdata();
		
		$message .='
		
	</div>
	';

	// Output needs to be return
	return $message;
}
// register shortcode
add_shortcode('distributionplatform_logo_slider', 'wpb_distributionplatform_logo_slider_shortcode');