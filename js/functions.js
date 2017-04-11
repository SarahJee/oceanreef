// Make center aligned images full-width on small screens

(function($){
	$('figure.wp-caption.aligncenter').removeAttr('style');
	$('img.aligncenter').wrap('<figure class="centered-image" />');
})(jQuery); 
