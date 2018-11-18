<?php get_header(); ?>
<?php app_get_navbar(); ?>

<?php get_template_part( 'templates/banner' ); ?>

<!-- content-section-starts-here -->
<div class="container">
    <div class="main-content">
        <div class="online-strip">
            <?php
                if ( is_active_sidebar( 'top_widgets' ) ) {
		            dynamic_sidebar( 'top_widgets' );
                }
            ?>
            <div class="clearfix"></div>
        </div>
        <div class="products-grid">
            <header>
                <h3 class="head text-center">Latest Products</h3>
            </header>
            <div class="col-md-4 product simpleCart_shelfItem text-center">
                <a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/p1.jpg" alt="" /></a>
                <div class="mask">
                    <a href="single.html">Quick View</a>
                </div>
                <a class="product_name" href="single.html">Sed ut perspiciatis</a>
                <p><a class="item_add" href="#"><i></i> <span class="item_price">$329</span></a></p>
            </div>
            <div class="col-md-4 product simpleCart_shelfItem text-center">
                <a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/p2.jpg" alt="" /></a>
                <div class="mask">
                    <a href="single.html">Quick View</a>
                </div>
                <a class="product_name" href="single.html">great explorer</a>
                <p><a class="item_add" href="#"><i></i> <span class="item_price">$599.8</span></a></p>
            </div>
            <div class="col-md-4 product simpleCart_shelfItem text-center">
                <a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/p3.jpg" alt="" /></a>
                <div class="mask">
                    <a href="single.html">Quick View</a>
                </div>
                <a class="product_name" href="single.html">similique sunt</a>
                <p><a class="item_add" href="#"><i></i> <span class="item_price">$359.6</span></a></p>
            </div>
            <div class="col-md-4 product simpleCart_shelfItem text-center">
                <a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/p4.jpg" alt="" /></a>
                <div class="mask">
                    <a href="single.html">Quick View</a>
                </div>
                <a class="product_name" href="single.html">shrinking </a>
                <p><a class="item_add" href="#"><i></i> <span class="item_price">$649.99</span></a></p>
            </div>
            <div class="col-md-4 product simpleCart_shelfItem text-center">
                <a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/p5.jpg" alt="" /></a>
                <div class="mask">
                    <a href="single.html">Quick View</a>
                </div>
                <a class="product_name" href="single.html">perfectly simple</a>
                <p><a class="item_add" href="#"><i></i> <span class="item_price">$750</span></a></p>
            </div>
            <div class="col-md-4 product simpleCart_shelfItem text-center">
                <a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/p6.jpg" alt="" /></a>
                <div class="mask">
                    <a href="single.html">Quick View</a>
                </div>
                <a class="product_name" href="single.html">equal blame</a>
                <p><a class="item_add" href="#"><i></i> <span class="item_price">$295.59</span></a></p>
            </div>
            <div class="col-md-4 product simpleCart_shelfItem text-center">
                <a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/p7.jpg" alt="" /></a>
                <div class="mask">
                    <a href="single.html">Quick View</a>
                </div>
                <a class="product_name" href="single.html">Neque porro</a>
                <p><a class="item_add" href="#"><i></i> <span class="item_price">$380</span></a></p>
            </div>
            <div class="col-md-4 product simpleCart_shelfItem text-center">
                <a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/p8.jpg" alt="" /></a>
                <div class="mask">
                    <a href="single.html">Quick View</a>
                </div>
                <a class="product_name" href="single.html">perfectly simple</a>
                <p><a class="item_add" href="#"><i></i> <span class="item_price">$540.6</span></a></p>
            </div>
            <div class="col-md-4 product simpleCart_shelfItem text-center">
                <a href="single.html"><img src="<?php bloginfo('template_directory'); ?>/site/images/p9.jpg" alt="" /></a>
                <div class="mask">
                    <a href="single.html">Quick View</a>
                </div>
                <a class="product_name" href="single.html">praising pain</a>
                <p><a class="item_add" href="#"><i></i> <span class="item_price">$229.5</span></a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
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