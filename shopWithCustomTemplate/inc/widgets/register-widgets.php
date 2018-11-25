<?php

function myTempl_widgets_init() {

    register_sidebar( array(
        'name' => 'Top widgets',
        'id' => 'top_widgets',
        'description' => 'Top widgets block',
        'before_widget' => '',
        'after_widget' => '',
    ) );

    register_sidebar( array(
        'name' => 'Middle widget',
        'id' => 'middle_widget',
        'description' => 'Middle widget block',
        'before_widget' => '',
        'after_widget' => '',
    ) );

}

add_action( 'widgets_init', 'myTempl_widgets_init' );

// Registering Custom Widgets
function register_custom_widgets() {
    register_widget( 'Follow_Us' );
    register_widget( 'Order_Online' );
    register_widget( 'Products_Carousel' );
    register_widget( 'Shipping' );
}
add_action( 'widgets_init', 'register_custom_widgets' );
