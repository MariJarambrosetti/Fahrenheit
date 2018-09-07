<?php 

// css del tema padre
	
	function dl_enqueue_style_child() {

		wp_register_style( 'parent-style', get_template_directory_uri().'/style.css', null, null, 'screen');
		wp_register_style( 'custom-style', get_theme_file_uri(). '/assets/css/custom_style.css' , null, null, 'screen' );

		wp_enqueue_style('parent-style');
		wp_enqueue_style( 'custom-style');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style_child' );

	function dl_enqueue_scripts_child() {
		wp_register_script( 'custom-script', get_theme_file_uri(). '/assets/js/custom_script.js', null, null, true );

		wp_enqueue_script( 'custom-script');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts_child');



