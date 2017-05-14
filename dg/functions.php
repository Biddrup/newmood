<?php
	function dg_init(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_image_size('excerpt-image', 300, 300, true);
		add_image_size('content-image', 700, 300, true);
		register_nav_menus(
			array(
				'one_menu' => 'One Menu',
				'two_menu' => 'Two Menu',
				'three_menu' => 'Three Menu',
			)
		);
		add_theme_support('html5');
	}
	add_action('after_setup_theme','dg_init');

	function dg_scripts(){
		wp_enqueue_style('main-style', get_stylesheet_uri(), null, 'v1.0', 'all');
		wp_enqueue_script('jquery');
	}
	add_action('wp_enqueue_scripts','dg_scripts');

	function dg_widgets(){
		register_sidebar(array(
			'name' => 'x Header Menu',
			'id' => 'x_header',

		));
		register_sidebar(array(
			'name' => 'x Footer Menu',
			'id' => 'x_footer',

		));
	}
	add_action('widgets_init','dg_widgets');