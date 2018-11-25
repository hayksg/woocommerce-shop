<?php
    $slider = new WP_Query( array(
        'post_type' => 'slider',
    ) );
?>

<?php if ( $slider->have_posts() ) : ?>

<div class="banner">
    <div class="container">
        <div class="banner-bottom">
            <div class="banner-bottom-left">
                <h2>B<br>U<br>Y</h2>
            </div>
            <div class="banner-bottom-right">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider4">

                        <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>

                            <li>
                                <div class="banner-info">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </li>

                    	<?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                    </ul>
                </div>
                <!--banner-->

            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="shop">
            <a href="<?php echo get_option( 'url_slide' ); ?>"><?php echo get_option( 'button_slide' ); ?></a>
        </div>
    </div>
</div>

<?php endif; ?>
