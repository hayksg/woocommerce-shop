<?php
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

    global $product;

    if ( $price_html = $product->get_price_html() ) {

        if ( is_shop() ) {
            echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                sprintf('<p><a href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="item_add %s"><i></i> <span class="item_price">%s</span></a></p>',
                    esc_url( $product->add_to_cart_url() ),
                    esc_attr( isset( $quantity ) ? $quantity : 1 ),
                    esc_attr( $product->get_id() ),
                    esc_attr( $product->get_sku() ),
                    esc_attr( isset( $class ) ? $class : 'button' ),
                    $price_html
             ));
        } else {
            echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                sprintf('<div class="cbp-vm-details">%s</div><a href="#" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="cbp-vm-icon cbp-vm-add item_add %s">Add to cart</a>', 
                    wp_trim_words(get_the_excerpt( $product->get_id() ), 7),   
                    esc_url( $product->add_to_cart_url() ),
                    esc_attr( isset( $quantity ) ? $quantity : 1 ),
                    esc_attr( $product->get_id() ),
                    esc_attr( $product->get_sku() ),
                    esc_attr( isset( $class ) ? $class : 'button' )
             ));
        }

    }
?>
