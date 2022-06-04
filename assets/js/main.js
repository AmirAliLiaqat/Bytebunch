/****************** Function for hide message after 3 second *********************/
setTimeout(() => {
	const message = document.getElementById('showMessage');
  
	// 👇️ removes element from DOM
	message.style.display = 'none';
  
  }, 3000); // 👈️ time in milliseconds

/****************** Function for show/hide divs on login button *********************/
  function showHideItems() {
	var hideCol = document.getElementById('login-col').style.display = 'none';
    var showCol = document.getElementById('verify-col').style.display = 'block';
  }
  
/****************** Customizer file js code *********************/
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

	// Buttons Background Color - Color Control
	wp.customize( 'button_background_color_setting', function( value ) {
		value.bind( function( to ) {
			$( '.orange-btn ' ).css( 'background', to );
		} );
	});

	// Widgets Background Color - Color Control
	wp.customize( 'widgets_background_color_setting', function( value ) {
		value.bind( function( to ) {
			$( '.widget_block ' ).css( 'background', to );
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