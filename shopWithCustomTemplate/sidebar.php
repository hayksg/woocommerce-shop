<div class="products">

    <?php
        if ( is_active_sidebar( 'left_sidebar' ) ) {
            dynamic_sidebar( 'left_sidebar' );
        }
    ?>

    <?php if ( function_exists('wp_tag_cloud') ) : ?>
    <div class="tags">
        <h4 class="tag_head">Tags Widget</h4>
        <ul class="tags_links">

            <?php 
                $tags = wp_tag_cloud( array(
                    'smallest'  => 10,
                    'largest'   => 10,
                    'format'    => 'array',
                    'taxonomy'  => 'product_tag'
                ) );
            ?>

            <?php if ( is_array( $tags ) && count( $tags ) > 0 ) : ?>
                <?php foreach ( $tags as $tag ) : ?>
                <li><?php echo $tag ?></li>
                <?php endforeach; ?>
            <?php endif; ?>
            
        </ul>
    </div>
    <?php endif; ?>

</div>
