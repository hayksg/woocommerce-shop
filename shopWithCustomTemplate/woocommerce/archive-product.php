<?php get_header(); ?>
<?php app_get_navbar(); ?>

<?php get_template_part( 'templates/banner' ); ?>

<!-- content-section-starts-here -->

<?php do_action( 'woocommerce_before_main_content' ); ?>

    <div class="online-strip">
        <?php
            if ( is_active_sidebar( 'top_widgets' ) ) {
	            dynamic_sidebar( 'top_widgets' );
            }
        ?>
        <div class="clearfix"></div>
    </div>

    <?php do_action( 'woocommerce_archive_description' ); ?>

    <?php
        $args = array(
            'post_type' => 'product',
            'post_per_page' => 9,
            // 'meta_key' => '_featured',
            // 'meta_value' => 'yes',
        );

        global $wp_query;
        $wp_query = new WP_Query( $args );
    ?>

    <?php if ( $wp_query->have_posts() ) : ?>

        <?php woocommerce_product_loop_start(); ?>

            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                <?php wc_get_template_part( 'content', 'product' ); ?>

            <?php endwhile; ?>

        <?php woocommerce_product_loop_end(); ?>
        
    <?php endif; ?>

<?php do_action( 'woocommerce_after_main_content' ); ?>













<div class="other-products">
    <div class="container">
        <h3 class="like text-center">Featured Collection</h3>
        <ul id="flexiselDemo3">
            <li><a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/l1.jpg" class="img-responsive" alt="" /></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$759</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/l2.jpg" class="img-responsive" alt="" /></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">praising pain</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$699</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/l3.jpg" class="img-responsive" alt="" /></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">Neque porro</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/l4.jpg" class="img-responsive" alt="" /></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">equal blame</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$499</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/l5.jpg" class="img-responsive" alt="" /></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$649</span></a></p>
                </div>
            </li>
        </ul>

    </div>
</div>
<!-- content-section-ends-here -->

<?php get_footer(); ?>