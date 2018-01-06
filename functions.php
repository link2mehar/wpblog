<?php

//====Wp blog Scripts and Styles

function wp_blog_scripts() {
	wp_enqueue_style( 'blog-style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'wp_blog_scripts' );  
?>