<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// // my test filer hook-  any time someone out puts the_title we are going to change it
// add_filter ('the_title', 'filter_example');


// function filter_example($title) {
// 	return 'Hooked: '.$title;
// }


