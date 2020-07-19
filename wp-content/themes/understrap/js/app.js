jQuery(document).ready(function($) {
	//navigation mobile
	var navbarToggler = document.querySelector('.navbar-toggler');

	navbarToggler.addEventListener('click', function() {
		navbarToggler.classList.toggle('active');
	});

	var slideUp = {
		distance: '50%',
		origin: 'bottom',
		opacity: 0,
		delay: 150,
		ease: 'ease',
		viewOffset: {
			top: 60
		}
	};

	ScrollReveal().reveal('.slide-up', slideUp);


	$('.owl-carousel').owlCarousel({
		items: 1,
		nav: true,
		loop: true,
	});

});