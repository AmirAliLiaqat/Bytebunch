<?php
/**
 * Customizer Config.
 *
 * @package ByteBunch
*/
Kirki::add_config( 'bytebunch_options', array(
    'capability' => 'edit_theme_options',
    'options_type' => 'theme_mod',
) );

Kirki::add_panel( 'header_settings', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Header Settings', 'kirki' ),
    'description' => esc_html__( 'Manage Header & Menu Layout', 'kirki' ),
    'icon'    => 'dashicons-admin-tools',
) );

Kirki::add_section( 'header_layout_settings', array(
    'title'       => esc_html__( 'Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Header Layout', 'kirki' ),
    'panel'       => 'header_settings',
    'priority'    => 160,
) );

Kirki::add_section( 'menu_settings', array(
    'title'       => esc_html__( 'Menu Settings', 'kirki' ),
    'description' => esc_html__( 'Manage Menu Layout & Settings', 'kirki' ),
    'panel'       => 'header_settings',
    'priority'    => 160,
) );

Kirki::add_section( 'typography_settings', array(
    'title'       => esc_html__( 'Typography', 'kirki' ),
    'description' => esc_html__( 'Text Styles & Options', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-editor-spellcheck',
) );

Kirki::add_section( 'homepage_settings', array(
    'title'       => esc_html__( 'Homepage Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Homepage Layout', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-layout',
) );

Kirki::add_section( 'footer_settings', array(
    'title'       => esc_html__( 'Footer Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Footer Copyright Text', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-edit',
) );

/**************************** Field For Home Background Control ****************************/
Kirki::add_field( 'bytebunch_options', [
    'type'            => 'background',
    'settings'      => 'background_setting',
    'label'           => esc_html__( 'Home All Sections Background Control', 'kirki' ),
    'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
    'section'       => 'header_layout_settings',
    'default'       => [
        'background-color'           => '#000',
        'background-image'          => '',
        'background-repeat'         => 'repeat',
        'background-position'       => 'center center',
        'background-size'             => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport' => 'auto',
    'output'      => [
        [
            'element' => 'header, footer, .copyright_text',
        ],
    ],
] );

/**************************** Field For Body Background Control ****************************/
Kirki::add_field( 'bytebunch_options', [
    'type'            => 'background',
    'settings'      => 'body_background_setting',
    'label'           => esc_html__( 'Body Background Control', 'kirki' ),
    'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
    'section'       => 'header_layout_settings',
    'default'       => [
        'background-color'           => '#f2f2f2',
        'background-image'          => '',
        'background-repeat'         => 'repeat',
        'background-position'       => 'center center',
        'background-size'             => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport' => 'auto',
    'output'      => [
        [
            'element' => 'body',
        ],
    ],
] );

/**************************** Field For Nav Background Control ****************************/
Kirki::add_field( 'bytebunch_options', [
    'type'            => 'background',
    'settings'      => 'menu_background_setting',
    'label'           => esc_html__( 'Menu Background', 'kirki' ),
    'description' => esc_html__( 'Background controls are pretty complex! (but useful if used properly)', 'kirki' ),
    'section'       => 'menu_settings',
    'default'       => [
        'background-color'           => '#000',
        'background-image'          => '',
        'background-repeat'         => 'repeat',
        'background-position'       => 'center center',
        'background-size'             => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport' => 'auto',
    'output'      => [
        [
            'element' => '.navbar .container .collapse ul li',
        ],
    ],
] );

/**************************** Field For Nav Hover Background Control ****************************/
Kirki::add_field( 'bytebunch_options', [
    'type'            => 'background',
    'settings'      => 'menu_active_background_setting',
    'label'           => esc_html__( 'Menu Active & Hover', 'kirki' ),
    'description' => esc_html__( 'Background controls are pretty complex! (but useful if used properly)', 'kirki' ),
    'section'       => 'menu_settings',
    'default'       => [
        'background-color'           => '#e55a21',
        'background-image'          => '',
    ],
    'transport' => 'auto',
    'output'      => [
        [
            'element' => '.navbar .container .collapse ul li:hover',
        ],
    ],
] );

/**************************** Field For Home Typography ****************************/
Kirki::add_field( 'bytebunch_options', [
    'type'    => 'typography',
    'settings'    => 'heading_settings',
    'label'       => esc_html__( 'Headings', 'kirki' ),
    'section'     => 'typography_settings',
    'default'     => [
        'font-family'     => 'Roboto',
        'variant'         => 'regular',
        'font-style'      => 'normal',
        // 'color'           => '#000',
        'font-size'       => '1.4em',
        'line-height'     => '0',
        'letter-spacing'  => '0',
        'text-transform'  => 'none',
        'text-decoration' => 'none',
        // 'text-align'      => 'left',
    ],
    'choices' => [
        'fonts' => [
            'google'   => [ 'popularity', 50 ],
            'standard' => [
                'Georgia,Times,"Times New Roman",serif',
                'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
            ],
        ],
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'h2',
        ],
    ],
] );

/**************************** Field For Button Background Control ****************************/
Kirki::add_field( 'bytebunch_options', [
    'type'            => 'background',
    'settings'      => 'button_background_setting',
    'label'           => esc_html__( 'Button Background Control', 'kirki' ),
    'description' => esc_html__( 'Change the all site buttons background color', 'kirki' ),
    'section'       => 'homepage_settings',
    'default'       => [
        'background-color'           => '#e55a21',
    ],
    'transport' => 'auto',
    'output'      => [
        [
            'element' => '.wp-block-group__inner-container button, .orange-btn, input[type="submit"]',
        ],
    ],
] );

/**************************** Field For Button Hover Background Control ****************************/
Kirki::add_field( 'bytebunch_options', [
    'type'            => 'background',
    'settings'      => 'button_hover_background_setting',
    'label'           => esc_html__( 'Button Hover Color Control', 'kirki' ),
    'description' => esc_html__( 'Change the all site buttons hover color', 'kirki' ),
    'section'       => 'homepage_settings',
    'default'       => [
        'background-color'           => '#000',
    ],
    'transport' => 'auto',
    'output'      => [
        [
            'element' => '.wp-block-group__inner-container button:hover, .orange-btn:hover, input[type="submit"]:hover',
        ],
    ],
] );

/**************************** Field For Toogle Sidebar ****************************/
Kirki::add_field( 'bytebunch_options', [
    'type'    => 'switch',
    'settings'    => 'toggle_home_sidebar',
    'label'       => esc_html__( 'Switch Field', 'kirki' ),
    'description' => esc_html__( 'Homepage Sidebar', 'kirki' ),
    'section'     => 'homepage_settings',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'kirki' ),
        'off' => esc_html__( 'Disable', 'kirki' ),
    ],
] );

/**************************** Field For Home Page Layout Control ****************************/
Kirki::add_field( 'bytebunch_options', [
        'type'        => 'radio-image',
        'setting'     => 'homepage_layout',
        'label'       => __( 'Site Layout', 'superminimal' ),
        'description' => __( 'Change The Homepage Layout', 'superminimal' ),
        'section'     => 'homepage_settings',
        'default'     => 'sidebar-right',
        'priority'    => 10,
        'choices'     => array(
          'sidebar-left' => trailingslashit( get_template_directory_uri() ) . '/images/first-layout.png',
          'fullwidth' => trailingslashit( get_template_directory_uri() ) . '/images/second-layout.png',
          'sidebar-right' => trailingslashit( get_template_directory_uri() ) . '/images/third-layout.png',
        ),
] );

/**************************** Field For Footer Menu Show/Hide ****************************/
Kirki::add_field( 'bytebunch_options', [
    'type'    => 'switch',
    'settings'    => 'toggle_footer_menu',
    'label'       => esc_html__( 'Switch Field', 'kirki' ),
    'description' => esc_html__( 'Footer Menu', 'kirki' ),
    'section'     => 'footer_settings',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'kirki' ),
        'off' => esc_html__( 'Disable', 'kirki' ),
    ],
] );

/**************************** Field For Footer Copyright Show/Hide ****************************/
Kirki::add_field( 'bytebunch_options', [
    'type'    => 'switch',
    'settings'    => 'toggle_footer_copyright',
    'label'       => esc_html__( 'Switch Field', 'kirki' ),
    'description' => esc_html__( 'Footer Copyright', 'kirki' ),
    'section'     => 'footer_settings',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'kirki' ),
        'off' => esc_html__( 'Disable', 'kirki' ),
    ],
] );

/**************************** Field For Footer Copyright Text Control ****************************/
Kirki::add_field( 'bytebunch_options', [
    'type'    => 'text',
    'settings' => 'footer_copyright_text',
    'label'    => esc_html__( 'Footer Copyright', 'kirki' ),
    'section'  => 'footer_settings',
    'default'  => esc_html__( '© Copyright 2021. Theme by ByteBunch.', 'kirki' ),
    'priority' => 10,
] );

?>