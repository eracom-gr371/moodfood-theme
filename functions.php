<?php

// enqueue styles for child theme
// @ https://digwp.com/2016/01/include-styles-child-theme/

function moodfood_style_parent() {

	// enqueue parent styles
	wp_enqueue_style('uku-parent-theme', get_template_directory_uri() .'/style.css');

}
add_action('wp_enqueue_scripts', 'moodfood_style_parent');



// ajout de la font Libre Baskerville
function moodfood_styles() {
	wp_dequeue_style( 'resonant-google-fonts' );
	wp_enqueue_style(
			'libre-Baskerville',
			'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700', // main.css
			false, // dependencies
			null // version
	);
}
add_action( 'wp_enqueue_scripts', 'moodfood_styles', 11 );
