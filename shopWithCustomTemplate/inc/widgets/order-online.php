<?php

/**
 * Adds Foo_Widget widget.
 */
class Order_Online extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'order_online_custom_widget', // Base ID
			esc_html__( 'Order online', 'custom-shop' ), // Name
			array( 'description' => esc_html__( 'Order online custom widget', 'custom-shop' ), ) // Args
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
		echo $args['before_widget'];

        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'custom-shop' );
		$phone = ! empty( $instance['phone'] ) ? $instance['phone'] : esc_html__( 'no-phone', 'custom-shop' );
?>

<div class="col-md-4 online-order">
	<p><?php echo $title;  ?></p>
	<h3>Tel:<?php echo $phone;  ?></h3>
</div>

<?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {

        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'custom-shop' );
        $phone = ! empty( $instance['phone'] ) ? $instance['phone'] : esc_html__( 'no-phone', 'custom-shop' );
?>
		<p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
                <?php esc_attr_e( 'Title:', 'custom-shop' ); ?>
            </label>
		    <input class="widefat"
                   id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
                   type="text"
                   value="<?php echo esc_attr( $title ); ?>">
		</p>

        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>">
                <?php esc_attr_e( 'Phone:', 'custom-shop' ); ?>
            </label>
		    <input class="widefat"
                   id="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'phone' ) ); ?>"
                   type="text"
                   value="<?php echo esc_attr( $phone ); ?>">
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
		$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? sanitize_text_field( $new_instance['phone'] ) : '';

		return $instance;
	}
}

?>

<?php

// register Order_Online widget
function register_order_online() {
    register_widget( 'Order_Online' );
}
add_action( 'widgets_init', 'register_order_online' );

?>
