<?php

function admin_enqueue() {
    wp_register_style( 'admin-style', get_template_directory_uri() . '/site/css/admin-style.css' );
    wp_enqueue_style( 'admin-style' );

    wp_enqueue_script( 'media-upload' );
    wp_enqueue_media();

    wp_enqueue_script( 'jquery' );

    wp_register_script( 'admin-script', get_template_directory_uri() . '/site/js/admin-script.js', array(), null, true );
    wp_enqueue_script( 'admin-script' );
}

add_action( 'admin_enqueue_scripts', 'admin_enqueue' );
