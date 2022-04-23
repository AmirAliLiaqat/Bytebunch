<?php
/**
 * Functions File.
 *
 * @package ByteBunch
*/

/************** Function using for adding theme supports **************/
function bytebunch_theme_setup() {
    
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size('home-featured', 640, 400, array('center', 'center'));
    add_image_size('single-post', 580, 272, array('center', 'center'));

    add_theme_support('automatic-feed-links');
    
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'bytebunch' )
    ) );

    register_nav_menus( array(
        'secondary'   => __( 'Secondary Menu', 'bytebunch' )
    ) );
}
add_action('after_setup_theme', 'bytebunch_theme_setup');

/************** Function using for adding styles and scripts links **************/
function bytebunch_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('style-login', get_template_directory_uri() . '/assets/css/login.css');
    wp_enqueue_style('style-register', get_template_directory_uri() . '/assets/css/register.css');
    wp_enqueue_style('style-contact', get_template_directory_uri() . '/assets/css/contact.css');
    wp_enqueue_style('style-media', get_template_directory_uri() . '/assets/css/media-query.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');

    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/main.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', ['jquery']);

}
add_action('wp_enqueue_scripts', 'bytebunch_scripts');

/************** Function using for adding sidebar widgets **************/
function bytebunch_widgets_init() {
    register_sidebar( array(
        'name'                 =>  __( 'Primary Sidebar', 'bytebunch' ),
        'id'                      =>  'main-sidebar',
        'description'        =>  'Main Sidebar on Right Side',
        'before_widget'  =>  '<div id="%1$s" class="box %2$s">',
        'after_widget'    =>  '</div>',
        'before_title'     =>  '<h3 class="widget_title">',
        'after_title'       =>  '</h3>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Login Widget 1', 'bytebunch' ),
        'id'                     =>  'login-1',
        'before_widget' =>  '<p id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '<p>',
        'before_title'    =>  '<h2 class="widget-title">',
        'after_title'      =>  '</h2>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Login Widget 2', 'bytebunch' ),
        'id'                     =>  'login-2',
        'before_widget' =>  '<p id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '<p>',
        'before_title'    =>  '<h2 class="widget-title">',
        'after_title'      =>  '</h2>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Footer Widget 1', 'bytebunch' ),
        'id'                     =>  'footer-1',
        'before_widget' =>  '<p id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '<p>',
        'before_title'    =>  '<h3 class="widget-title">',
        'after_title'      =>  '</h3>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Footer Widget 2', 'bytebunch' ),
        'id'                     =>  'footer-2',
        'before_widget' =>  '<div><a id="%1$s" class="tags %2$s">',
        'after_widget'   =>  '</a></div>',
        'before_title'    =>  '<h3 class="widget-title">',
        'after_title'      =>  '</h3>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Footer Widget 3', 'bytebunch' ),
        'id'                     =>  'footer-3',
        'before_widget' =>  '<p id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '</p>',
        'before_title'    =>  '<h3 class="widget-title">',
        'after_title'      =>  '</h3>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Footer Widget 4', 'bytebunch' ),
        'id'                     =>  'footer-4',
        'before_widget' =>  '<p id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '</p>',
        'before_title'    =>  '<h3 class="widget-title">',
        'after_title'      =>  '</h3>',
    ) );
}
add_action('widgets_init', 'bytebunch_widgets_init');

// Kirki Embedded.
require get_template_directory() . '/inc/kirki-config.php';

// Adding Customizer File.
// require get_template_directory() . '/inc/customizer.php';

?>