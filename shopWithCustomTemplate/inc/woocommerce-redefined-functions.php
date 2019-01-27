<?php

function woocommerce_template_loop_product_thumbnail() {
    if ( !is_shop() ) {
?>
<div class="simpleCart_shelfItem">
    <div class="view view-first">
        <div class="inner_content clearfix">
            <div class="product_image">
<?php  
    echo mytemple_get_product_thumbnail();
?>
    <div class="mask">
        <div class="info">Quick View</div>
    </div>
<?php 
    } else {
        echo woocommerce_get_product_thumbnail(); // WPCS: XSS ok.

        echo '</a>';
        echo '<div class="mask">';
        echo '<a href="' . get_the_permalink() . '">Quick View</a>';
        echo '</div>';
    }
}

function woocommerce_template_loop_product_title() {
    if ( !is_shop() ) {
?>
<div class="product_container">
    <div class="cart-left">
        <p class="title"><?php echo get_the_title() ?></p>
    </div>
<?php
    } else {
        echo '<a class="product_name" href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
    } 
}

function woocommerce_get_product_thumbnail( $size = 'woocommerce_thumbnail', $deprecated1 = 0, $deprecated2 = 0 ) {
    global $product;

    $image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );

    $attr = array(
        'class' => 'img-responsive attachment-woocommerce_thumbnail size-woocommerce_thumbnail'
    );

    return $product ? $product->get_image( $image_size, $attr ) : '';
}

function mytemple_get_product_thumbnail( $size = 'woocommerce_thumbnail', $deprecated1 = 0, $deprecated2 = 0 ) {
    global $product;

    $image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );

    $attr = array(
        'class' => 'img-responsive'
    );

    return $product ? $product->get_image( $image_size, $attr ) : '';
}


function my_template_loop_product_link_open() {
    echo '<a class="cbp-vm-image" href="single.html">';
}

if ( !is_shop() ) {
    remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open' );
    add_action( 'woocommerce_before_shop_loop_item', 'my_template_loop_product_link_open', 10 );
}
