<?php get_header(); ?>
<?php app_get_navbar(); ?>

<?php get_template_part( 'templates/banner' ); ?>

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
            'post_per_page' => get_option( 'posts_per_page' ),
        );

        global $wp_query;
        $wp_query = new WP_Query( $args );
    ?>

    <?php if ( $wp_query->have_posts() ) : ?>

        <?php woocommerce_product_loop_start(); ?>

            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                <?php wc_get_template_part( 'content', 'product' ); ?>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php woocommerce_product_loop_end(); ?>

    <?php endif; ?>

<?php do_action( 'woocommerce_after_main_content' ); ?>

<?php
    if ( is_active_sidebar( 'middle_widget' ) ) {
        dynamic_sidebar( 'middle_widget' );
    }
?>

<?php get_footer(); ?>
