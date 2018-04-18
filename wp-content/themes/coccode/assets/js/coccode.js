$(document).ready(function() {
 	
 	
 	// Carousel HOME PAGE
	$("#home-carousel").owlCarousel({
		loop:true,
	    nav:true,
	    margin: 0,
	    dots: true,
		autoplay:false,
	    autoplayTimeout:6000,
	    autoplaySpeed: 1000,
	    navSpeed: 1000,
	    dragEndSpeed: 1000,
	    dotsSpeed: 1000,
	    autoplayHoverPause:true,
	    responsiveClass:true,
		responsive:{
			0:{
				items:1
			}
		}
	});
	
	
	// Isotope PORTFOLIO
	var $grid = $('.grid').isotope({
		itemSelector: '.grid-item',
		layoutMode: 'fitRows'	
	});
	
	// filter items on button click
	$('.filter-button-group').on( 'click', 'button', function() {
	  var filterValue = $(this).attr('data-filter');
	  $grid.isotope({ filter: filterValue });
	  //$(this).toggleClass('active');
	});
	// change is-checked class on buttons
	  $('.button-group').each( function( i, buttonGroup ) {
	    var $buttonGroup = $( buttonGroup );
	    $buttonGroup.on( 'click', 'button', function() {
	      $buttonGroup.find('.is-checked').removeClass('is-checked');
	      $( this ).addClass('is-checked');
	    });
	});
 
});


// NAVIGATION
function openNav() {
    document.getElementById("mySidenav").style.width = "50%";
    $( "#menuOverlay" ).fadeIn(400);
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    $( "#menuOverlay" ).fadeOut(400);
}