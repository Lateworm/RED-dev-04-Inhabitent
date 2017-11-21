/**
 * search-toggle.js
 *
 * Toggles visibilty of the search field.
 *
 */

(function ($) {

	$('#search-button').on('click', function (e) {
		e.preventDefault();



		if ( $('.search-field').hasClass('expanded') ) {
			$('.search-field').toggleClass('expanded');

		} else {
			$('.search-field').toggleClass('expanded');

		};




	
	});

})(jQuery);
