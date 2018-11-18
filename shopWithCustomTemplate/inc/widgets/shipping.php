<?php

/**
 * Adds Foo_Widget widget.
 */
class Shipping extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'shipping_custom_widget', // Base ID
			esc_html__( 'Shipping', 'custom-shop' ), // Name
			array( 'description' => esc_html__( 'Shipping custom widget', 'custom-shop' ), ) // Args
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
		$text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( 'on orders over $ 199', 'custom-shop' );
		$image = ! empty( $instance['image'] ) ? $instance['image'] : '';
?>

<div class="col-md-4 shipping-grid">
	<div class="shipping">
        <img src="<?php echo $image; ?>" alt="shipping-image" />
	</div>
	<div class="shipping-text">
		<h3><?php echo $title;  ?></h3>
		<p><?php echo $text;  ?></p>
	</div>
	<div class="clearfix"></div>
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
		$text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( 'on orders over $ 199', 'custom-shop' );
        $image = ! empty( $instance['image'] ) ? $instance['image'] : '';

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
		    <label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>">
                <?php esc_attr_e( 'Text:', 'custom-shop' ); ?>
            </label>
		    <input class="widefat"
                   id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>"
                   type="text"
                   value="<?php echo esc_attr( $text ); ?>">
		</p>

        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>">
                <?php esc_attr_e( 'Image:', 'custom-shop' ); ?>
            </label>
		    <input class="widefat shopping-image"
                   id="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'image' ) ); ?>"
                   type="text"
                   value="<?php echo esc_url( $image ); ?>">
            <button type="button" class="button button-primary js-shipping-widget-image-upload">Select image</button>
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
        $instance['text'] = ( ! empty( $new_instance['text'] ) ) ? sanitize_text_field( $new_instance['text'] ) : '';
		$instance['image'] = ( ! empty( $new_instance['image'] ) ) ? $new_instance['image'] : '';

		return $instance;
	}
}

?>

<?php

// register Shipping widget
function register_shipping() {
    register_widget( 'Shipping' );
}
add_action( 'widgets_init', 'register_shipping' );

?>
