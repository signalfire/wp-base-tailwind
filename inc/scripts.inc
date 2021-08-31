<?php 

function sf_enqueue_scripts_styles() {
    wp_enqueue_script('jquery');

    if (!is_admin()) {
        if (file_exists(get_template_directory() . '/dist/js/site.js')) {
            wp_enqueue_script('site', get_bloginfo('template_directory') . '/dist/js/site.js', []);
        }
    }
}

add_action( 'wp_enqueue_scripts', 'sf_enqueue_scripts_styles' );