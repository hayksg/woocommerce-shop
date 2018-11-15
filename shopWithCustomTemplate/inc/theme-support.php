<?php

// Theme supports
add_theme_support( 'woocommerce' );

// Filters
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Functions
function app_get_navbar() {
    $templates = array();
    $templates[] = 'templates/navigation.php';
    locate_template( $templates, true );
}

register_nav_menus( array(
    'top'    => 'Top Menu',
    'bottom' => 'Bottom Menu',
) );
