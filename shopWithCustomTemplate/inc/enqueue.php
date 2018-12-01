<?php

function enqueue() {
    wp_register_style( 'bootstrap',  get_template_directory_uri() . '/site/css/bootstrap.css' );
    wp_register_style( 'style',      get_template_directory_uri() . '/site/css/style.css' );
    wp_register_style( 'flexslider', get_template_directory_uri() . '/site/css/flexslider.css' );
    wp_register_style( 'component',  get_template_directory_uri() . '/site/css/component.css' );

    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'style' );
    wp_enqueue_style( 'flexslider' );
    wp_enqueue_style( 'component' );

    wp_register_script( 'bootstrap',        get_template_directory_uri() . '/site/js/bootstrap-3.1.1.min.js',  array(), null, true );
    wp_register_script( 'simpleCart',       get_template_directory_uri() . '/site/js/simpleCart.min.js',       array(), null, true );
    wp_register_script( 'flexisel',         get_template_directory_uri() . '/site/js/jquery.flexisel.js',      array(), null, true );
    wp_register_script( 'responsiveslides', get_template_directory_uri() . '/site/js/responsiveslides.min.js', array(), null, true );
    wp_register_script( 'app-script',       get_template_directory_uri() . '/site/js/app-script.js',           array(), null, true );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'simpleCart' );
    wp_enqueue_script( 'flexisel' );
    wp_enqueue_script( 'responsiveslides' );
    wp_enqueue_script( 'app-script' );
}

add_action( 'wp_enqueue_scripts', 'enqueue' );

// Instead of woocommerce add-to-cart.js will be loaded our add-to-cart.js
function load_script () {
    wp_register_script( 'wc-add-to-cart', get_template_directory_uri() . '/site/js/add-to-cart.js', array( 'jquery' ), WC_VERSION, true );
    wp_enqueue_script( 'wc-add-to-cart' );
}
add_action( 'wp_enqueue_scripts', 'load_script', 9 );
