
(function($) {

	skel.breakpoints({
		xlarge:	'(max-width: 1680px)',
		large:	'(max-width: 1280px)',
		medium:	'(max-width: 980px)',
		small:	'(max-width: 736px)',
		xsmall:	'(max-width: 480px)'
	});

	$(function() {

		var	$window = $(window),
			$body = $('body');

			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 100);
			});

			$('form').placeholder();

			skel.on('+medium -medium', function() {
				$.prioritize(
					'.important\\28 medium\\29',
					skel.breakpoint('medium').active
				);
			});

	});

	document.addEventListener('DOMContentLoaded', function() {
		const words = ['Hard Money.', 'Accessible.', 'Empowering.', 'Freedom.', 'Decentralized.', 'Permissionless.','Blue Collar.', 'Prosperity.', 'Currency.', 'Progressive.', 'Sustainable.'];
		let index = 0;
		const element = document.getElementById('cycle');
	
		function updateText() {
			index = (index + 1) % words.length;
			element.textContent = words[index];
		}
	
		setInterval(updateText, 1750);
	});
	

})(jQuery);