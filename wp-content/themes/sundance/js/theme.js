( function( $ ) {
	$( window ).load( function() {
		$( '.featured' ).css( {
			display: 'none'
		} );

		$( '.featured:first-child' ).css( {
			display: 'list-item'
		} );

		$( '.featured-posts-wrapper' ).animate( {
			opacity:1
		},400 );

		$( '.featured-posts' ).flexslider( {
			animation: 'fade',
			slideshow: false
		} );

		$( '.featured-posts-super-wrapper' ).removeClass( 'loading' );
	} );
} )( jQuery );