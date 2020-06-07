jQuery(document).ready(function($) {
	//navigation mobile
	var navbarToggler = document.querySelector('.navbar-toggler');

	navbarToggler.addEventListener('click', function() {
		navbarToggler.classList.toggle('active');
	});


	$('.owl-carousel').owlCarousel({
		items: 1,
		nav: true,
		loop: true,
	});
});