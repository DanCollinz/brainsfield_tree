<?php
// Place all your custom functions below this line.

add_action( 'wp_enqueue_scripts', 'twentyseventeen_one_column_scripts' );
function twentyseventeen_one_column_scripts() {
	wp_enqueue_style( 'twentyseventeen_one_column_parent-style', get_template_directory_uri() . '/style.css' );
}
