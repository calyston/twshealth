<?php
	/*-----------------------------------------------------------------------------------*/
	/* Functions
	/*-----------------------------------------------------------------------------------*/

// Define the version
define( 'TWSHEALTH', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'twshealth' ), // Register the Primary menu
		'hamburger'	=>	__( 'Hamburger Menu', 'twshealth' ), // Register the Hamburger menu
	)
);

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function twshealth_register_sidebars() {
	register_sidebar(array(				
		'id' => 'sidebar', 					
		'name' => 'Sidebar',				
		'description' => 'Take it on the side...', 
		'before_widget' => '<div>',	
		'after_widget' => '</div>',	
		'before_title' => '<h3 class="side-title">',	
		'after_title' => '</h3>',		
		'empty_title'=> '',					
	));
} 

add_action( 'widgets_init', 'twshealth_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function twshealth_scripts()  { 

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/css/style.css');
	
	// add javascript
	wp_enqueue_script( 'twshealth-js', get_template_directory_uri() . '/js/main.js', array(), TWSHEALTH, true );
	
	// add theme scripts
	wp_enqueue_script( 'twshealth', get_template_directory_uri() . '/js/theme.min.js', array(), TWSHEALTH, true );
  
}
add_action( 'wp_enqueue_scripts', 'twshealth_scripts' ); 