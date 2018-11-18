<?php

/**
 * Adds Foo_Widget widget.
 */
class Follow_Us extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'follow_us_custom_widget', // Base ID
			esc_html__( 'Follow Us', 'custom-shop' ), // Name
			array( 'description' => esc_html__( 'Follow us custom widget', 'custom-shop' ), ) // Args
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
		$twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : esc_html__( 'https://twitter.com', 'custom-shop' );
        $facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : esc_html__( 'https://facebook.com', 'custom-shop' );
?>

<div class="col-md-4 follow-us">
	<h3><?php echo $title;  ?>
        <a class="twitter" href="<?php echo $twitter;  ?>" target="_blank"></a>
        <a class="facebook" href="<?php echo $facebook;  ?>" target="_blank"></a>
    </h3>
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
		$twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : esc_html__( 'https://twitter.com', 'custom-shop' );
        $facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : esc_html__( 'https://facebook.com', 'custom-shop' );

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
		    <label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>">
                <?php esc_attr_e( 'Twitter:', 'custom-shop' ); ?>
            </label>
		    <input class="widefat"
                   id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>"
                   type="text"
                   value="<?php echo esc_attr( $twitter ); ?>">
		</p>

        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>">
                <?php esc_attr_e( 'Facebook:', 'custom-shop' ); ?>
            </label>
		    <input class="widefat"
                   id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>"
                   type="text"
                   value="<?php echo esc_attr( $facebook ); ?>">
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
		$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? sanitize_text_field( $new_instance['facebook'] ) : '';
		$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? sanitize_text_field( $new_instance['twitter'] ) : '';

		return $instance;
	}
}

?>

<?php

// register Follow_Us widget
function register_follow_us() {
    register_widget( 'Follow_Us' );
}
add_action( 'widgets_init', 'register_follow_us' );

?>
