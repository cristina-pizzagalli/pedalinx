$(function() {
	var overlay = document.querySelector( 'div.overlay' ),
		closeBttn = overlay.querySelector( 'button.overlay-close' );
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		support = { transitions : Modernizr.csstransitions };
		

	function toggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			var onEndTransitionFn = function( ev ) {
				if( support.transitions ) {
					if( ev.propertyName !== 'visibility' ) return;
					this.removeEventListener( transEndEventName, onEndTransitionFn );
				}
				classie.remove( overlay, 'close' );
			};
			if( support.transitions ) {
				overlay.addEventListener( transEndEventName, onEndTransitionFn );
			}
			else {
				onEndTransitionFn();
			}
		}
		else if( !classie.has( overlay, 'close' ) ) {
			classie.add( overlay, 'open' );
			$('.scroll-pane').jScrollPane();
		}
	}

  $('.product-wrapper .product').click(function (event) {
    var $target = $(event.currentTarget);
    var $img = $('<img>').attr('src', $target.data('image'));
    $('#overlay-image').html($img).zoom();
    $('#overlay-name').html($target.data('name'));
    $('#overlay-cost').html($target.data('cost'));
    $('#overlay-description').html($target.data('description'));
    $('#overlay-details').html($target.data('details'));
    toggleOverlay();
  });
  
  $('#main').on('click', '.overlay', function () {
	  toggleOverlay();
	});
  
	closeBttn.addEventListener( 'click', toggleOverlay );
});