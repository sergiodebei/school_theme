$( document ).ready(function() {
	
	$('.menu > li > ul > li > ul').addClass("navinest");
	$('.menu > .nav-item').has('ul').children('a').addClass("dropdown");


	$('#close-message').click(function(){
	   note = document.getElementById("note");
	   note.style.display = 'none';
	});

	// searchsubmit risizing

	$(".search-submit").css({ 'height': $(".search-field").outerHeight() + "px" });

	$( window ).resize(function() {
		$(".search-submit").css({ 'height': $(".search-field").outerHeight() + "px" });

	});
	
	// responsive menu

	$('.nav-item').click(function(){

		// if ($(this).hasClass("shiftnav-depth-1")) {
			console.log('nopt');
			$('.nav-item').not($(this)).removeClass('shiftnav-active');
		    $(this).toggleClass('shiftnav-active');
		// }



	});

	// slideshows photogallery

    'use strict';

    var $slides = $('[data-slides]');
    var images = $slides.data('slides');
    var count = images.length;
    var slideshow = function() {
        $slides
            .css('background-image', 'url("' + images[Math.floor(Math.random() * count)] + '")')
            .show(0, function() {
                setTimeout(slideshow, 5000);
            });
    };

    slideshow();

	// $(".nav-item").click(function(){
	//   $(this).addClass('selected');
	// });

});

$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.subsection.wtul');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		
		$this.toggleClass('open');
		// $this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);


});

//to use to have an non active link
//javascript:void(0); 