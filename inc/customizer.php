<?php

// Function for register panels, sections, settings & controls...
function bytebunch_customizer_register( $wp_customize ) {
	if ( ! isset( $wp_customize ) ) {
		return;
	}

    $wp_customize->add_panel('bytebunch_settings', array(
        'title'  => 'Home Settings',
        'description'  => '',
        'priority'  => 10,
    ));

	$wp_customize->add_section('bytebunch_header', array(
        'title'			=> __( 'Header Background', 'bytebunch' ),
        'description'	=> __( 'Set background color and/or background image for the header', 'bytebunch' ),
        'panel'  => 'bytebunch_settings',
        'priority'		=> 9,
	) );

	$wp_customize->add_section('bytebunch_body', array(
        'title'			=> __( 'Body Background', 'bytebunch' ),
        'description'	=> __( 'Set background color and/or background image for the body', 'bytebunch' ),
        'panel'  => 'bytebunch_settings',
        'priority'		=> 9,
	) );

	$wp_customize->add_section('bytebunch_footer', array(
        'title'			=> __( 'Footer Background', 'bytebunch' ),
        'description'	=> __( 'Set background color and/or background image for the footer', 'bytebunch' ),
        'panel'  => 'bytebunch_settings',
        'priority'		=> 9,
	) );

    /************************* Header Background *************************/
	$wp_customize->add_setting('header_background_color_setting', array(
        'sanitize_callback'	=> 'sk_sanitize_hex_color',
        'default' => '#000',
        'transport' => 'postMessage',
    ));

	$wp_customize->add_control (new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
        'settings'		=> 'header_background_color_setting',
        'section'		=> 'bytebunch_header',
        'label'			=> __( 'Header Background Color', 'bytebunch' ),
        'description'	=> __( 'Select the background color for header.', 'bytebunch' ),
    ) ) );

    /************************* Body Background *************************/
	$wp_customize->add_setting('body_background_color_setting', array(
        'sanitize_callback'	=> 'sk_sanitize_hex_color',
        'default' => '#f2f2f2',
        'transport'	=> 'postMessage',
    ));

	$wp_customize->add_control (new WP_Customize_Color_Control( $wp_customize, 'body_background_color', array(
        'settings'		=> 'body_background_color_setting',
        'section'		=> 'bytebunch_body',
        'label'			=> __( 'Body Background Color', 'bytebunch' ),
        'description'	=> __( 'Select the background color for body.', 'bytebunch' ),
    ) ) );

    /************************* Footer Background *************************/
	$wp_customize->add_setting('footer_background_color_setting', array(
        'sanitize_callback'	=> 'sk_sanitize_hex_color',
        'default' => '#101010',
        'transport'	=> 'postMessage',
    ));

	$wp_customize->add_control (new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
        'settings'		=> 'footer_background_color_setting',
        'section'		=> 'bytebunch_footer',
        'label'			=> __( 'Footer Background Color', 'bytebunch' ),
        'description'	=> __( 'Select the background color for footer.', 'bytebunch' ),
    ) ) );
}
add_action( 'customize_register', 'bytebunch_customizer_register' );

// Function to enqueue customizer javascript...
function bytebunch_customizer_live_preview() {
	wp_enqueue_script( 'bytebunch-theme-customizer', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'customize-preview' ), '1.0.0', true );
}
add_action( 'customize_preview_init', 'bytebunch_customizer_live_preview' );

// Function for customizer css...
function bytebunch_customizer_css() {
?>
	<style type="text/css">
		.site-header {
			<?php if ( get_theme_mod( 'header_background_color_setting' ) ) { ?>
				background-color: <?php echo get_theme_mod( 'header_background_color_setting' ); ?>;
			<?php } ?>
			<?php if ( get_theme_mod( 'header_background_image_setting' ) != '' ) { ?>
				background-image: url(<?php echo get_theme_mod( 'header_background_image_setting' ); ?>);
			<?php } ?>
		}
		
		.site-body {
			<?php if ( get_theme_mod( 'body_background_color_setting' ) ) { ?>
				background-color: <?php echo get_theme_mod( 'body_background_color_setting' ); ?>;
			<?php } ?>
			<?php if ( get_theme_mod( 'body_background_image_setting' ) != '' ) { ?>
				background-image: url(<?php echo get_theme_mod( 'body_background_image_setting' ); ?>);
			<?php } ?>
		}

		.site-footer {
			<?php if ( get_theme_mod( 'footer_background_color_setting' ) ) { ?>
				background-color: <?php echo get_theme_mod( 'footer_background_color_setting' ); ?>;
			<?php } ?>
			<?php if ( get_theme_mod( 'footer_background_image_setting' ) != '' ) { ?>
				background-image: url(<?php echo get_theme_mod( 'footer_background_image_setting' ); ?>);
			<?php } ?>
		}
	</style>
<?php
} 
add_action( 'wp_head', 'bytebunch_customizer_css');
?>