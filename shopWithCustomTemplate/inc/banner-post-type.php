<?php

function banner_index() {
    $labels = array(
		'name'               => 'Sliders',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Slider',
		'all_items'          => 'All Sliders'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'menu_position'      => 101,
		'menu_icon'          => admin_url( 'images/media-button-other.gif' ),
		'supports'           => array( 'title', 'editor' )
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'banner_index' );
