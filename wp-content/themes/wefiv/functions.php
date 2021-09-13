<?php
/**
 * Theme functions and definitions
 *
 * @package WeFIVelementorChildTheme
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

add_filter('robots_txt', 'custom_robots_txt', 10,  2);
function custom_robots_txt($output, $public) {

    $robots_txt =  "User-agent: * \n";
    $robots_txt .=  "Disallow: /\n";
    $robots_txt .=  "User-agent: Googlebot \n";
    $robots_txt .=  "Allow: /";
    // add more $robots_txt .= for each line

    return $robots_txt;
}