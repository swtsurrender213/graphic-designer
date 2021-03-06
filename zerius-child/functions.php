<?php

// add any new or customised functions here

add_action( 'wp_enqueue_scripts', 'zerius_enqueue_styles' );
function zerius_enqueue_styles() {
	
	wp_enqueue_style( 'zerius_font', '//fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,200italic,200,400italic,600,600italic,700,700italic,900');
	
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('zerif_bootstrap_style') );

	// Loads our main stylesheet.
	 wp_enqueue_style( 'zerif-child-style', get_stylesheet_uri(), array('zerif_style'), 'v1' );

}

function zerius_custom_script_fix()
{
	if ( !wp_is_mobile() ){

		wp_enqueue_script('zerif_script_child', get_stylesheet_directory_uri() .'/js/zerif.js', array('zerif_scrollReveal_script'), '201202067', true); 

	}else{

		wp_enqueue_script('zerif_script_child', get_stylesheet_directory_uri() .'/js/zerif.js', array(), '201202067', true); 
		/*  reduce height of the google maps on mobile */
		wp_enqueue_style( 'zerif-style-mobile', get_template_directory_uri() . '/css/zerif_mobile.css' );

	}
	wp_enqueue_script('zerif_nicescroll',get_stylesheet_directory_uri().'/js/jquery.nicescroll.js',array('jquery'),'12121',true);
    wp_enqueue_script('zerif_nicescroll-script',get_stylesheet_directory_uri().'/js/zerif-nicescroll.js',array('jquery','zerif_nicescroll'),'12121',true);	
	
	wp_enqueue_script('hover-script',get_stylesheet_directory_uri().'/js/hover.js',array('jquery'),'10000',true);	
}


add_action( 'wp_enqueue_scripts', 'zerius_custom_script_fix' );

function zerius_remove_style_child(){
	remove_action('wp_print_scripts','zerif_php_style');	
}

add_action( 'wp_enqueue_scripts', 'zerius_remove_style_child', 100 );

/**
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function zerius_theme_setup() {
    load_child_theme_textdomain( 'zerius', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'zerius_theme_setup' );
