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

    register_sidebar( array(
        'name' => 'Footer menu',
        'id' => 'footer_widget',
        'description' => 'Footer menu block',
        'before_widget' => '<div class="col-sm-3 span1_of_4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => 'Left bar',
        'id' => 'left_sidebar',
        'description' => 'Left sidebar block',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

}

add_action( 'widgets_init', 'myTempl_widgets_init' );

// Registering Custom Widgets
function register_custom_widgets() {
    register_widget( 'Follow_Us' );
    register_widget( 'Order_Online' );
    register_widget( 'Products_Carousel' );
    register_widget( 'Shipping' );
    register_widget( 'Top_Offer' );
}
add_action( 'widgets_init', 'register_custom_widgets' );
