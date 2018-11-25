<?php

/*
==================
  Theme supports
==================
*/

add_theme_support( 'woocommerce' );
add_theme_support( 'widgets' );



/*
===========
  Filters
===========
*/

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Remove version string from js and css

function shop_remove_wp_version_strings( $src ) {
  global $wp_version;

  parse_str( parse_url( $src, PHP_URL_QUERY ), $query );
  if ( ! empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
    $src = remove_query_arg( 'ver', $src );
  }

  return $src;
}

add_filter( 'script_loader_src', 'shop_remove_wp_version_strings' );
add_filter( 'style_loader_src',  'shop_remove_wp_version_strings' );

// Remove metatag generator from header

function shop_remove_meta_version() {
  return '';
}

add_filter( 'the_generator', 'shop_remove_meta_version' );

add_filter( 'woocommerce_get_image_size_thumbnail', function( $size ) {
    return array(
        'width' => 350,
        'height' => 0,
        'crop' => 0,
    );
} );

function change_sale_flash() {
    global $product;

    $oldPrice = $product->get_regular_price();
    $newPrice = $product->get_price();

    $salePercentage = round(($oldPrice - $newPrice) / $oldPrice * 100);

    $html  = '<div class="offer otop"><p>';
    $html .= $salePercentage . '%';
    $html .= '</p><small>Sale</small></div>';

    return $html;
}

add_filter( 'woocommerce_sale_flash', 'change_sale_flash' );



/*
=============
  Functions
=============
*/

function app_get_navbar() {
    $templates = array();
    $templates[] = 'templates/navigation.php';
    locate_template( $templates, true );
}





