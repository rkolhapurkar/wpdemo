<?php 

/**
 * Register and Enqueue Styles.
 */
function demosite_theme_support() {
 add_theme_support( 'title-tag' );
}
 
add_action( 'after_setup_theme', 'demosite_theme_support' );


function demosite_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'demosite-style', get_stylesheet_directory_uri()."/style.css", array('demosite-bootstrap'), $theme_version );
	wp_enqueue_style( 'demosite-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css", array(), $theme_version );	
	
}

add_action( 'wp_enqueue_scripts', 'demosite_register_styles' );


/**
 * Register and Enqueue Scripts.
 */
function demosite_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_script( 'demosite-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), $theme_version, false );
	wp_enqueue_script( 'demosite-bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js", $theme_version, false );	
	wp_enqueue_script( 'demosite-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js", array(), $theme_version, false );
	wp_enqueue_script( 'demosite-mainjs', get_stylesheet_directory_uri()."/assets/js/main.js", array(), $theme_version, false );
	
}

add_action( 'wp_enqueue_scripts', 'demosite_register_scripts' );


/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function demosite_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'demosite' ),
		'expanded' => __( 'Desktop Expanded Menu', 'demosite' ),
		'mobile'   => __( 'Mobile Menu', 'demosite' ),
		'footer'   => __( 'Footer Menu', 'demosite' ),
		'social'   => __( 'Social Menu', 'demosite' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'demosite_menus' );
?>