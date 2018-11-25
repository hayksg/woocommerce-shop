<?php

/**
 * Adds Foo_Widget widget.
 */
class Products_Carousel extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'products_carousel_custom_widget', // Base ID
			esc_html__( 'Products Carousel', 'custom-shop' ), // Name
			array('description' => esc_html__( 'Products carousel custom widget', 'custom-shop' )) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		// echo $args['before_widget'];

        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Featured Collection', 'custom-shop' );
		$productsCount = ! empty( $instance['productsCount'] ) ? $instance['productsCount'] : absint( 4 );

        set_query_var( 'title', $title );
        set_query_var( 'productsCount', $productsCount );

        get_template_part( 'templates/products', 'carousel' );

		// echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {

        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Featured Collection', 'custom-shop' );
        $productsCount = ! empty( $instance['productsCount'] ) ? $instance['productsCount'] : absint( 4 );
?>
		<p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
                <?php esc_attr_e( 'Carousel Title:', 'custom-shop' ); ?>
            </label>
		    <input class="widefat"
                   id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
                   type="text"
                   value="<?php echo esc_attr( $title ); ?>">
		</p>

        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'productsCount' ) ); ?>">
                <?php esc_attr_e( 'Products Count:', 'custom-shop' ); ?>
            </label>
		    <input class="widefat"
                   id="<?php echo esc_attr( $this->get_field_id( 'productsCount' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'productsCount' ) ); ?>"
                   type="text"
                   value="<?php echo esc_attr( $productsCount ); ?>">
		</p>
<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['productsCount'] = ( ! empty( $new_instance['productsCount'] ) ) ? absint( $new_instance['productsCount'] ) : '';

		return $instance;
	}
}
