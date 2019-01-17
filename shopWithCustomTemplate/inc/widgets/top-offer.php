<?php

/**
 * Adds Foo_Widget widget.
 */
class Top_Offer extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'top_offer_custom_widget', // Base ID
			esc_html__( 'Top Offer', 'custom-shop' ), // Name
			array( 'description' => esc_html__( 'Top offer custom widget', 'custom-shop' ), ) // Args
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

		$percent = ! empty( $instance['percent'] ) ? $instance['percent'] : esc_html__( 50, 'custom-shop' );
        $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
?>

<div class="latest-bis">
    <img class="img-responsive" src="<?php echo $image; ?>" alt="top-offer-image" />
    <div class="offer bottom">
        <p><?php echo $percent; ?>&percnt;</p>
        <small>Top Offer</small>
    </div>
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

        $percent = ! empty( $instance['percent'] ) ? $instance['percent'] : esc_html__( 50, 'custom-shop' );
        $image = ! empty( $instance['image'] ) ? $instance['image'] : '';

?>
		<p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'percent' ) ); ?>">
                <?php esc_attr_e( 'Percentage:', 'custom-shop' ); ?>
            </label>
		    <input class="widefat"
                   id="<?php echo esc_attr( $this->get_field_id( 'percent' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'percent' ) ); ?>"
                   type="text"
                   value="<?php echo esc_attr( $percent ); ?>">
		</p>

        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>">
                <?php esc_attr_e( 'Image:', 'custom-shop' ); ?>
            </label>
		    <input class="widefat top-offer-image"
                   id="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'image' ) ); ?>"
                   type="text"
                   value="<?php echo esc_url( $image ); ?>">
            <button type="button" class="button button-primary js-top-offer-image-upload">Select image</button>
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
		
		$instance['percent'] = ( ! empty( $new_instance['percent'] ) ) ? sanitize_text_field( $new_instance['percent'] ) : '';
		$instance['image'] = ( ! empty( $new_instance['image'] ) ) ? $new_instance['image'] : '';

		return $instance;
	}
}
