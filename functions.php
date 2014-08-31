<?php
	// Filters
	add_filter('show_admin_bar', '__return_false');

	// Actions
	add_action( 'wp_enqueue_scripts', 'ft_add_stlyes' );
	add_action( 'wp_enqueue_scripts', 'ft_add_scripts' );


	// Functions
	function ft_add_stlyes() {
	    wp_register_style( 'ft-styles', get_template_directory_uri() . '/css/styles.css', array(), '', 'all' );

	    wp_enqueue_style( 'ft-styles' );
	}

	function ft_add_scripts() {
		wp_register_script( 'ft-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '',true );

	    wp_enqueue_script( 'ft-scripts' );
	    wp_enqueue_script( 'jquery' );
	}

?>