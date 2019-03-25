<?php

// enqueue styles for child theme
// @ https://digwp.com/2016/01/include-styles-child-theme/

/*
 Charger le style du thème parent
*/

function moodfood_style_parent() {

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

/*
 On souhaite charger plus tardivement le style de notre thème enfant.
 En indiquant la variable de priorité "11", notre style sera chargé après les styles standard (la priorité par défaut étant de 10).
 Par la même occasion, on peut modifier son numéro de version (adapter la variable de date) afin d'empêcher la mise en cache.
*/

function moodfood_style_reset() {

  wp_dequeue_style('uku-style');

  wp_enqueue_style(
    'uku-style', get_stylesheet_uri(), array(), 
    '20190320' // garder à jour cette variable
  );
  
}
add_action('wp_enqueue_scripts', 'moodfood_style_reset', 11);

