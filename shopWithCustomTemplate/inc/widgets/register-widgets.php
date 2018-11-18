<?php

function myTempl_widgets_init() {

    register_sidebar( array(
        'name' => 'Top widgets',
        'id' => 'top_widgets',
        'description' => 'Top widgets block',
        'before_widget' => '',
        'after_widget' => '',
    ) );
    
}

add_action( 'widgets_init', 'myTempl_widgets_init' );
