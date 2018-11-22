<?php
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

    global $product;
?>

<!--<div class="col-md-4 product simpleCart_shelfItem text-center">
    <a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/p1.jpg" alt="" /></a>
    <div class="mask">
        <a href="single.html">Quick View</a>
    </div>
    <a class="product_name" href="single.html">Sed ut perspiciatis</a>
    <p><a class="item_add" href="#"><i></i> <span class="item_price">$329</span></a></p>
</div>-->

<div class="col-md-4 product simpleCart_shelfItem text-center">
    <?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

        <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>

            <?php do_action( 'woocommerce_shop_loop_item_title' ); ?>

        <?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>

    <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
</div>