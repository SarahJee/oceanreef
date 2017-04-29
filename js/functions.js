// Make center aligned images full-width on small screens

jQuery(document).ready(function( $ ) {

	// var p1 = $('.projects .project:nth-child(1)').width();
	// var p2 = $('.projects .project:nth-child(2)').width();
	// var p3 = $('.projects .project:nth-child(3)').width();

	// var padd = p1 + p2 + p3;

	//console.log(padd);

	//var proj_con = $('.projects').width();

	//$('.projects').css('max-width', padd + 50);

	//$('.projects .project img').each(function(index) {
		//var width = $(this).width();

		//$(this).css('width', width + 2 )
		//console.log(width);
	//});

	// cache container
	var $container = $('.projects');
	// initialize isotope
	$(window).load(function(){
		$container.imagesLoaded( function(){


			$container.isotope({
				//itemSelector: '.project',
				//percentPosition: true,
				masonry: {
				    columnWidth: 275,
				    gutterWidth: 10,
				      fitWidth: true
				  }
			});

		});
	});
	
	// filter items when filter link is clicked
	$('#filters select').change(function(){
	  var selector = $(this).val();
	  $container.isotope({ filter: selector });

	  console.log(selector);
	  //return false;
	});

});

(function($){
	$('figure.wp-caption.aligncenter').removeAttr('style');
	$('img.aligncenter').wrap('<figure class="centered-image" />');
})(jQuery); 
