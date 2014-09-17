<?php

function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/CSS/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/CSS/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>
