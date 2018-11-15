<?php

function display_url() {
    echo '<input type="text" class="regular-text" name="url_slide" id="url_slide" value="' . esc_attr( get_option( 'url_slide' ) ) . '">';
}

function display_button_title() {
    echo '<input type="text" class="regular-text" name="button_slide" id="button_slide" value="' . esc_attr( get_option( 'button_slide' ) ) . '">';
}

function display_phone() {
    echo '<input type="text" class="regular-text" name="app_phone" id="app_phone" value="' . esc_attr( get_option( 'app_phone' ) ) . '">';
}

function app_options() {

    add_settings_field(
        'url_slide',
        'Link for slider',
        'display_url',
        'general',
        'default',
        array( 'label_for' => 'url_slide' )
    );
    register_setting( 'general' , 'url_slide' );

    add_settings_field(
        'button_slide',
        'Title for slider button',
        'display_button_title',
        'general',
        'default',
        array( 'label_for' => 'button_slide' )
    );
    register_setting( 'general' , 'button_slide' );

    add_settings_field(
        'app_phone',
        'Phone',
        'display_phone',
        'discussion',
        'default',
        array( 'label_for' => 'app_phone' )
    );
    register_setting( 'discussion' , 'app_phone' );

}

add_action( 'admin_menu', 'app_options' );
