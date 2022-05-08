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
        'priority'		=> 10,
	) );

	$wp_customize->add_section('bytebunch_body', array(
        'title'			=> __( 'Body Background', 'bytebunch' ),
        'description'	=> __( 'Set background color and/or background image for the body', 'bytebunch' ),
        'panel'  => 'bytebunch_settings',
        'priority'		=> 10,
	) );

	$wp_customize->add_section('bytebunch_footer', array(
        'title'			=> __( 'Footer Background', 'bytebunch' ),
        'description'	=> __( 'Set background color and/or background image for the footer', 'bytebunch' ),
        'panel'  => 'bytebunch_settings',
        'priority'		=> 10,
	) );

    /************************* Header Background *************************/
	$wp_customize->add_setting('header_background_color_setting', array(
        'sanitize_callback'	=> 'bytebunch_sanitize_hex_color',
        'default' => '#000',
        'transport' => 'postMessage',
    ));

	$wp_customize->add_control (new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
        'settings'		=> 'header_background_color_setting',
        'section'		=> 'bytebunch_header',
        'label'			=> __( 'Header Background Color', 'bytebunch' ),
        'description'	=> __( 'Select the background color for header.', 'bytebunch' ),
    ) ) );

	$wp_customize->add_setting('header_background_image_setting', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'header_background_image', array(
		'settings'		=> 'header_background_image_setting',
		'section'		=> 'bytebunch_header',
		'label'			=> __( 'Header Background Image', 'bytebunch' ),
		'description'	=> __( 'Select the background image for header.', 'bytebunch' ),
	) ) );

    /************************* Body Background *************************/
	$wp_customize->add_setting('body_background_color_setting', array(
        'sanitize_callback'	=> 'bytebunch_sanitize_hex_color',
        'default' => '#f2f2f2',
        'transport'	=> 'postMessage',
    ));

	$wp_customize->add_control (new WP_Customize_Color_Control( $wp_customize, 'body_background_color', array(
        'settings'		=> 'body_background_color_setting',
        'section'		=> 'bytebunch_body',
        'label'			=> __( 'Body Background Color', 'bytebunch' ),
        'description'	=> __( 'Select the background color for body.', 'bytebunch' ),
    ) ) );

	$wp_customize->add_setting('body_background_image_setting', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
	
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'body_background_image', array(
		'settings'		=> 'body_background_image_setting',
		'section'		=> 'bytebunch_body',
		'label'			=> __( 'Body Background Image', 'bytebunch' ),
		'description'	=> __( 'Select the background image for body.', 'bytebunch' ),
	) ) );

	/************************* Widgets Background *************************/
	$wp_customize->add_setting('widgets_background_color_setting', array(
        'sanitize_callback'	=> 'bytebunch_sanitize_hex_color',
        'default' => '#fff',
        'transport'	=> 'postMessage',
    ));

	$wp_customize->add_control (new WP_Customize_Color_Control( $wp_customize, 'widgets_background_color', array(
        'settings'		=> 'widgets_background_color_setting',
        'section'		=> 'bytebunch_body',
        'label'			=> __( 'Widgets Background Color', 'bytebunch' ),
        'description'	=> __( 'Select the background color for widgets.', 'bytebunch' ),
    ) ) );

	/************************* Buttons Background *************************/
	$wp_customize->add_setting('button_background_color_setting', array(
        'sanitize_callback'	=> 'bytebunch_sanitize_hex_color',
        'default' => '#e55a21',
        'transport'	=> 'postMessage',
    ));

	$wp_customize->add_control (new WP_Customize_Color_Control( $wp_customize, 'button_background_color', array(
        'settings'		=> 'button_background_color_setting',
        'section'		=> 'bytebunch_body',
        'label'			=> __( 'Buttons Background Color', 'bytebunch' ),
        'description'	=> __( 'Select the background color for buttons.', 'bytebunch' ),
    ) ) );

    /************************* Footer Background *************************/
	$wp_customize->add_setting('footer_background_color_setting', array(
        'sanitize_callback'	=> 'bytebunch_sanitize_hex_color',
        'default' => '#101010',
        'transport'	=> 'postMessage',
    ));

	$wp_customize->add_control (new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
        'settings'		=> 'footer_background_color_setting',
        'section'		=> 'bytebunch_footer',
        'label'			=> __( 'Footer Background Color', 'bytebunch' ),
        'description'	=> __( 'Select the background color for footer.', 'bytebunch' ),
    ) ) );

	$wp_customize->add_setting('footer_background_image_setting', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
	
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'footer_background_image', array(
		'settings'		=> 'footer_background_image_setting',
		'section'		=> 'bytebunch_footer',
		'label'			=> __( 'Footer Background Image', 'bytebunch' ),
		'description'	=> __( 'Select the background image for footer.', 'bytebunch' ),
	) ) );

	$wp_customize->add_setting( 'footer_copyright_text', array(
		'capability' => 'edit_theme_options',
		'default' => 'Lorem Ipsum',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	  
	$wp_customize->add_control( 'footer_copyright_text', array(
		'type' => 'text',
		'section' => 'bytebunch_footer', // Add a default or your own section
		'label' => __( 'Footer Copyright Text' ),
		'description' => __( 'This is a text box for the footer copyright section.' ),
	) );
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

		.orange-btn  {
			<?php if ( get_theme_mod( 'button_background_color_setting' ) ) { ?>
				background: <?php echo get_theme_mod( 'button_background_color_setting' ); ?>;
			<?php } ?>
		}

		.widget_block  {
			<?php if ( get_theme_mod( 'widgets_background_color_setting' ) ) { ?>
				background-color: <?php echo get_theme_mod( 'widgets_background_color_setting' ); ?>;
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