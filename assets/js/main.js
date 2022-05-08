(function( $ ) {
	"use strict";

	// Header Background Color - Color Control
	wp.customize( 'header_background_color_setting', function( value ) {
		value.bind( function( to ) {
			$( '.site-header' ).css( 'backgroundColor', to );
		} );
	});

    // Header Background Image - Image Control
	wp.customize( 'header_background_image_setting', function( value ) {
		value.bind( function( to ) {
			$( '.site-header' ).css( 'background-image', 'url( ' + to + ')' );
		} );
	});

	// Body Background Color - Color Control
	wp.customize( 'body_background_color_setting', function( value ) {
		value.bind( function( to ) {
			$( '.site-body' ).css( 'backgroundColor', to );
		} );
	});

    // Body Background Image - Image Control
	wp.customize( 'body_background_image_setting', function( value ) {
		value.bind( function( to ) {
			$( '.site-body' ).css( 'background-image', 'url( ' + to + ')' );
		} );
	});

	// Footer Background Color - Color Control
	wp.customize( 'footer_background_color_setting', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer' ).css( 'backgroundColor', to );
		} );
	});

    // Footer Background Image - Image Control
	wp.customize( 'footer_background_image_setting', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer' ).css( 'background-image', 'url( ' + to + ')' );
		} );
	});

})( jQuery );