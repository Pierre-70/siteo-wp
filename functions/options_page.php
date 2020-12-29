<?php

	if( function_exists('acf_add_options_page') ) {
		if (current_user_can('editor')) {
		acf_add_options_page(array(
			'page_title' 	=> 'Dernières nouvelles',
			'menu_title'	=> 'Dernières nouvelles',
			'menu_slug' 	=> 'dernieres-nouvelles',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
			'icon_url' => 'dashicons-calendar'
		));
		
			acf_add_options_page(array(
				'page_title' 	=> 'Infos contact',
				'menu_title'	=> 'Infos contact',
				'menu_slug' 	=> 'theme-contact',
				'capability'	=> 'edit_posts',
				'redirect'		=> false,
				'icon_url' => 'dashicons-location'
			));
		}

		if (current_user_can('administrator')) {
			acf_add_options_page(array(
				'page_title' 	=> 'Paramètres',
				'menu_title'	=> 'Paramètres',
				'menu_slug' 	=> 'page-parametres',
				'capability'	=> 'edit_posts',
				'redirect'		=> false,
				'icon_url' => 'dashicons-admin-settings'
			));
		}
	}

?>