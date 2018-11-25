<div class="other-products">
    <div class="container">
        <h3 class="like text-center"><?php echo get_query_var('title'); ?></h3>

        <?php

            $meta_query = array(
                'key'   => '_featured',
                'value' => 'yes'
            );

            $args = array(
                'post_type' => 'product',
                'posts_per_page' => get_query_var('productsCount'),
                'orderby' => array( 'ID', 'DESC' ),
                'meta_query'  =>  $meta_query
            );

            $latest_products = new WP_Query( $args );

        ?>

        <?php if ( $latest_products->have_posts() ) : ?>

            <ul id="flexiselDemo3">

                <?php while ( $latest_products->have_posts() ) : $latest_products->the_post(); ?>

                    <li>
                        <a href="<?php echo get_the_permalink(); ?>" class="carousel-img-link">
                            <?php
                                echo get_the_post_thumbnail(
                                    $latest_products->post->ID,
                                    'shop-catalog',
                                    array( 'class' => 'img-responsive', 'alt' => get_the_title() )
                                );
                            ?>
                        </a>
                        <div class="product liked-product simpleCart_shelfItem">
                            <a class="like_name" href="<?php echo get_the_permalink(); ?>"><?php echo the_title(); ?></a>

                            <?php global $product; ?>

                            <?php
                                $class = implode( ' ', array_filter( array(
                					'button',
                					'product_type_' . $product->get_type(),
                					$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                					$product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
                				) ) );
                            ?>

                            <?php if ($price_html = $product->get_price_html() ) : ?>
                            <p>
                                <a data-quantity="1"
                                   data-product_id="<?php echo $product->get_id(); ?>"
                                   data-product_sku="<?php echo $product->get_sku(); ?>"
                                   class="item_add <?php echo $class; ?>"
                                   href="<?php echo esc_url( $product->add_to_cart_url() ); ?>">
                                     <i></i>
                                     <span class=" item_price"><?php echo $price_html; ?></span>
                                </a>
                            </p>
                            <?php endif; ?>
                        </div>
                    </li>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
            </ul>
        <?php endif; ?>

    </div>
</div>
