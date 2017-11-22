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
			$('.search-field').removeClass('expanded');

		} else {
			$('.search-field').addClass('expanded').focus();

		}

	});

	$('.search-field').on('blur', function(){
			$('.search-field').removeClass('expanded');
	});

})(jQuery);
