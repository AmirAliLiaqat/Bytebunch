<?php
/**
 * Customizer File.
 *
 * @package ByteBunch
*/

function bytebunch_customizer_register($wp_customize) {
    
    $wp_customize->add_panel('bytebunch_settings', array(
        'title'  => 'Header Settings',
        'description'  => '',
        'priority'  => 10,
    ));
    $wp_customize->add_section('bytebunch_colors', array(
        'title'  => 'Colors',
        'panel'  => 'bytebunch_settings',
    ));
    $wp_customize->add_setting('bytebunch_nav_bg_color', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '#000',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control('bytebunch_nav_bg_color', array(
        'label' => 'Menu Background',
        'type' => 'color',
        'section' => 'bytebunch_colors',
    ) );

}
add_action('customize_register', 'bytebunch_customizer_register');
?>