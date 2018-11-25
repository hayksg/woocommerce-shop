<?php

function woocommerce_template_loop_product_thumbnail() {
    echo woocommerce_get_product_thumbnail(); // WPCS: XSS ok.

    echo '</a>';
    echo '<div class="mask">';
    echo '<a href="' . get_the_permalink() . '">Quick View</a>';
    echo '</div>';
}

function woocommerce_template_loop_product_title() {
    echo '<a class="product_name" href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
}

function woocommerce_get_product_thumbnail( $size = 'woocommerce_thumbnail', $deprecated1 = 0, $deprecated2 = 0 ) {
    global $product;

    $image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );

    $attr = array(
        'class' => 'img-responsive attachment-woocommerce_thumbnail size-woocommerce_thumbnail'
    );

    return $product ? $product->get_image( $image_size, $attr ) : '';
}
