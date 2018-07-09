<?php

/**
 * Functions and definitions.
 *
 * @package alignable
**/


/**
 * Removing default wp jquery in favor of latest version
 * @link https://css-tricks.com/snippets/wordpress/include-jquery-in-wordpress-theme/
**/
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

/**
 * Enqueue scripts and styles.
**/

function alignable_scripts() {
	wp_enqueue_style( 'alignable-styles', get_template_directory_uri() . '/library/css/main-min.css' );
	wp_enqueue_script( 'alignable-js', get_template_directory_uri() . '/library/js/min/scripts-min.js', array(), false, true  );
}
add_action( 'wp_enqueue_scripts', 'alignable_scripts' );


/* Hide admin bar. */
show_admin_bar( false );









?>