<?php

function sf_widgets_init() {
    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'sf_blog_sidebar',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="text-xl mb-2">'
    ]);
}

add_action('widgets_init', 'sf_widgets_init');