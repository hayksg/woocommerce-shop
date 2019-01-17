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

function change_footer_menu ( $nav_menu_args, $nav_menu, $args, $instance ) {

    if ($args['id'] == 'left_sidebar') {
      $nav_menu_args['container'] = '';
      $nav_menu_args['menu_class'] = 'product-list';

      return $nav_menu_args;
    }

    $nav_menu_args['container'] = ''; // We do not need container
    $nav_menu_args['menu_class'] = 'f_nav';
    $nav_menu_args['link_before'] = '<li>';
    $nav_menu_args['link_after'] = '</li>';

    return $nav_menu_args;
}
add_filter( 'widget_nav_menu_args', 'change_footer_menu', 10, 4 );

function check_sidebar_params ($params) {

  /*
  global $wp_registered_widgets;
  print_r($wp_registered_widgets); // here we can find widgets names (nav_menu-some_id, custom_html-some_id)
  */

  if ( $params[0]['id'] == 'left_sidebar' && $params[0]['widget_id'] == 'nav_menu-' . $params[1]['number'] ) {
    $params[0]['before_widget'] = '<div class="product-listy">';
    $params[0]['after_widget'] = '</div>';
    $params[0]['before_title'] = '<h2>';
    $params[0]['after_title'] = '</h2>';
  } 
  /*
  // instead of this elseif I created custom widget 'top-offer'

  elseif ( $params[0]['id'] == 'left_sidebar' && $params[0]['widget_id'] == 'custom_html-' . $params[1]['number'] ) {
    $params[0]['before_widget'] = '<div class="latest-bis">';
    $params[0]['after_widget'] = '</div>';
  }
  */

  return $params;

}

add_filter( 'dynamic_sidebar_params', 'check_sidebar_params' );

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





