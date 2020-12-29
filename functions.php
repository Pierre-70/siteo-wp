<?php

//import functions file
require get_template_directory() . '/functions/navbar.php'; // menu nav
require get_template_directory() . '/functions/acf.php'; // all the parameters we need with ACF for all the projects
require get_template_directory() . '/functions/options_page.php'; // function for create page options with acf pro
require get_template_directory() . '/functions/blocks-gutenberg.php'; // functions to create some new blocks gutenberg
require get_template_directory() . '/functions/custompost.php'; // define all the custom post we need
require get_template_directory() . '/functions/taxonomy.php'; // define all the taxonomy we need
require get_template_directory() . '/functions/singlepost_nav.php'; // function for single.php nav between before and afer element
require get_template_directory() . '/functions/pagination.php'; // function for archive wich define pagination nav
//require get_template_directory() . '/functions/switchlang.php'; // function for switchlang
//require get_template_directory() . '/functions/forms/contact.php'; // function for add simple contact form with caldera

//load styles and javascript
if( !is_admin() ) {

	//load CSS - only this 2, the other CSS files will be added with SASS main file
	function load_styles() {
		wp_enqueue_style('styles', get_stylesheet_uri());
		wp_enqueue_style('sass', get_stylesheet_directory_uri() . '/css/main.css', array(), null, 'all');
	}
	add_action('wp_enqueue_scripts', 'load_styles', 1);

	//load JS - deactivate all the JS we do not need with this projet
	function load_javascript() {
		wp_enqueue_script('jquery');
		wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.min.js', false);
		wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', false);
		wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', false);
		// wp_enqueue_script('backstretch', get_template_directory_uri() . '/js/jquery.backstretch.min.js', false);
		// wp_enqueue_script('fancybox',  get_template_directory_uri() . '/js/fancybox.1.3.22.js', false);
		// wp_enqueue_script('magnificpopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', false, null);
		// wp_enqueue_script('masonry',  'https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.0/masonry.pkgd.min.js', false);

		wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),  null, 'all');
	}
	add_action('wp_enqueue_scripts', 'load_javascript', 1);

}

//define jquery version
function replace_core_jquery_version() {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), '3.4.1');
}
add_action('wp_enqueue_scripts', 'replace_core_jquery_version');


//define all the menus we need for the project
add_theme_support('menus');
register_nav_menus(array(
	'menu_principal' => 'Menu',
	'menu_footer' => 'Menu footer',
	'menu_langues' => 'Menu langues'
));

//create options page with ACF Pro
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Infos contact',
		'menu_title'	=> 'Infos contact',
		'menu_slug' 	=> 'theme-contact',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' => 'dashicons-location'
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Paramètres',
		'menu_title'	=> 'Paramètres',
		'menu_slug' 	=> 'theme-param',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' => 'dashicons-admin-settings'
	));
}

//define Google Maps API Key with ACF Pro
$google_api_key = get_field('google_maps_api_key', 'options');
if($google_api_key !== false and !empty($google_api_key)) {
  add_filter('acf/fields/google_map/api', function($value) {
		global $google_api_key;

		return array(
			'key'	      => $google_api_key
		);
	});

  add_action('acf/init', function() {
	global $google_api_key;
    acf_update_setting('google_api_key', $google_api_key);
  });
}

//for SEO : define <title>
function wpc_theme_support() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'wpc_theme_support');


//remove wordpress version for hackers
//function remove_version() {
//return ‘’;
//}
//add_filter(‘the_generator’, ‘remove_version’);
