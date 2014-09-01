<?php
	// Filters
	add_filter('show_admin_bar', '__return_false');

	// Actions
	add_action( 'wp_enqueue_scripts', 'ft_add_stlyes' );
	add_action( 'wp_enqueue_scripts', 'ft_add_scripts' );
	add_action( 'widgets_init', 'ft_widgets_init' );
	add_action( 'after_setup_theme', 'ft_init' );



	// Functions
	function ft_init () {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );

		register_nav_menus( array(
			'main' => __( 'Main Menu', 'ft' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}

	function ft_add_stlyes() {
	    wp_register_style( 'ft-styles', get_template_directory_uri() . '/css/styles.css', array(), '', 'all' );

	    wp_enqueue_style( 'ft-styles' );
	}

	function ft_add_scripts() {
		wp_register_script( 'ft-scripts', get_template_directory_uri() . '/js/all.min.js', array('jquery'), '',true );

	    wp_enqueue_script( 'ft-scripts' );
	    wp_enqueue_script( 'jquery' );
	}

	function ft_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Sidebar', '_s' ),
			'id'            => 'sidebar',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		) );
	}


?>