<?php

function sf_image_sizes() {}

function sf_theme_setup() {
    add_theme_support( 'html5', ['comment-list', 'comment-form', 'search-form'] );
    add_theme_support( 'post-thumbnails' );
    sf_image_sizes();
}

add_action( 'after_theme_setup', 'sf_theme_setup' );
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );