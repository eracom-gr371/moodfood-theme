<?php

// enqueue styles for child theme
// @ https://digwp.com/2016/01/include-styles-child-theme/

function moodfood_style_parent() {
	
	// enqueue parent styles
	wp_enqueue_style('uku-parent-theme', get_template_directory_uri() .'/style.css');
	
}
add_action('wp_enqueue_scripts', 'moodfood_style_parent');