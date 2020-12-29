<?php
    function register_acf_block_types() {

    // register a tabs block.
    acf_register_block_type(array(
        'name'              => 'onglet',
        'title'             => __('Onglets'),
        'description'       => __('Des onglets de contenus.'),
        'render_template'   => 'template-parts/blocks/tabs.php',
        'category'          => 'formatting',
        'icon'              => 'dashicons-welcome-add-page',
        'keywords'          => array( 'onglet', 'tab' ),
    ));
			
    // register a maps block.
    acf_register_block_type(array(
        'name'              => 'map',
        'title'             => __('Carte maps'),
        'description'       => __('Une carte de localisation.'),
        'render_template'   => 'template-parts/blocks/map.php',
        'category'          => 'formatting',
        'icon'              => 'dashicons-location-alt',
        'keywords'          => array( 'map', 'google', 'carte' ),
    ));
			
    // register a maps block.
    acf_register_block_type(array(
        'name'              => 'galerie',
        'title'             => __('Galerie'),
        'description'       => __('Une galerie adaptable et modifiable.'),
        'render_template'   => 'template-parts/blocks/galerie.php',
        'category'          => 'formatting',
        'icon'              => 'dashicons-images-alt2',
        'keywords'          => array( 'galerie', 'carousel', 'slider' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

// add align for gutenberg block
function mytheme_setup() {
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );
?>