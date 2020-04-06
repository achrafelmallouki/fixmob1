/*

	  --------------------------------------------------
      --------------------------------------------------
      --------------------------------------------------
      -------------:///////////////////////::-----------
      -----------+o+:::::::/oyhhhhs+/::::::/+o:---------
      ---------:oo-----------:hosy-----------:s+:-------
      ---------+h/-----------+/--o/-----------sy:-------
      ----------/s---------:+/----+/---------:s:--------
      -----------/+:-----:++:------/+/:-----:o:---------
      ------------:+++//+/-----------:/+//++/-----------
      ----------+/:--------------------------:+/--------
      ----------ohy:----:+ossyy/oyysso/:----+hh/--------
      ----------/hhs---+hhyso++:/++osyhy/--:hhy---------
      ----------:yhh/-:h+:------------:sy--ohho---------
      -----------+hhh/:+------/oo/------o:ohhh:---------
      ------------+hhhs/----:shhhho:---:+yhhy/----------
      -------------:oyhhysoshhhhhhhysoshhhs/------------
      ---------------:+yhhhhhhhhhhhhhhhhs/--------------
      ------------------/ohhhhhhhhhhhy+:----------------
      --------------------:+oyyyyyso/-------------------
      --------------------------------------------------
      --------------------------------------------------
      --------------------------------------------------

      Copyright © 2016 Soufiane Chraibi, All rights reserved.
      Looking for a design? contact me at hello@soufianechraibi.com

*/

$(document).ready(function() {

  // Triggerers
  setupRotator();
  
	// Actions
	$(".play-trailer").click(function() {
		$(".pop_up_video .pop_up_video_bg").addClass("animated fadeIn");
	});

	$('#searchmodel').hideseek({
		hidden_mode: true
	});

});

// Text Rotator
function setupRotator() {
  if ($('.textItem').length > 1) {
    $('.textItem:first').addClass('current').fadeIn(1000);
    setInterval('textRotate()', 6000);
  }
}

function textRotate() {
  var current = $('#text-rotator > .current');
  if (current.next().length == 0) {
    current.removeClass('current').fadeOut(1000);
    $('.textItem:first').addClass('current').fadeIn(1000);
  } else {
    current.removeClass('current').fadeOut(1000);
    current.next().addClass('current').fadeIn(1000);
  }
}


// Overlay video
(function () {

  'use strict';

  var pop_up_video = $('#pop_up_video'),
    pop_up_video_iframe = $('#pop_up_video_iframe'),
    close_pop_up_video_id = $('#pop_up_video_bg'),
  	open_pop_up_video_id = $('#open_pop_up_video'),
  	mobile_open_pop_up_video_id = $('#mobile_open_pop_up_video');

  	// Pop-up Video

  	var close_pop_up_video = function(event){
  		event.preventDefault();
  		pop_up_video_iframe.attr('src', '');
  		pop_up_video.css('display', 'none');
  	};
  	close_pop_up_video_id.on('click', close_pop_up_video);


  	var open_pop_up_video = function(event){
  		event.preventDefault();
  		pop_up_video_iframe.attr('src', 'https://player.vimeo.com/video/153339497?byline=0;autoplay=1');
  		pop_up_video.css('display', 'block');
  	};

    open_pop_up_video_id.on('click', open_pop_up_video);
    mobile_open_pop_up_video_id.on('click', open_pop_up_video);

}());

(function () {
	function resizeHalfling(){
		var halfling = $('.halfling');
		if($(window).width() > 780){

			if($(window).width()>1200)
				$('.autosize').css('fontSize',(Math.floor(($(window).width()/1200)*100)/100)+"em");

			halfling.height($(window).height());
			$('.autosize').css('paddingTop',((halfling.height()-$('.autosize').height())/2))
			var bpl = 0;
			if($(window).width()<1320)
				bpl = (1320 - $(window).width())/2;
			if($(window).width()>1320)
				bpl = ($(window).width() - 1320)/3;
			if($(window).width() > 1320) {
				if ($(window).width() / $(window).height() < 1.8 && $(window).width() / $(window).height() > 1.5)
					bpl = bpl * 2.5;
				if ($(window).width() / $(window).height() < 1.5)
					bpl = bpl * 4.5;
			}else{
				if ($(window).width() / $(window).height() < 1.8 && $(window).width() / $(window).height() > 1.5)
					bpl = bpl * 1.5;
				if ($(window).width() / $(window).height() < 1.5)
					bpl = bpl * 2;
			}
			halfling.css('backgroundPosition','-'+bpl+'px center');
			var oof = $('.onyloffphone');
			oof.find('img').width($(window).width()*.50);
			halfling.find('.onyloffphone').height($(window).height());
		}else{
			halfling.height('auto');
			halfling.css('backgroundPosition','left center')
		}
	}
	resizeHalfling();
	$(window).resize(resizeHalfling);

	var reviewsparent = $('.hreviews,.indexReviews');

	if(reviewsparent.length!=0) {
		var container = reviewsparent.find('.reviewcontainer');
		reviews = container.find('.review');

		var reviewWidth = 0,
			totalWidth = 0;

		reviewWidth = reviews[0].offsetWidth + (17 * 2);
		totalWidth = (reviewWidth * (reviews.length + 1)) + 200;

		container.css({width:totalWidth,marginLeft:0});

		var reviewMargin = 0,
			step = 0;

		function slideLeft() {
			reviewMargin = -reviewWidth;

			var item = $(container.find('.review').get(step)).clone();
			$(item).appendTo(container);
			container.animate({
				marginLeft: reviewMargin
			}, 1000, function () {
				$(container.find('.review').get(step)).remove();
				container.css('marginLeft', 0);
				//step++;
				window.setTimeout(slideLeft, 5000);
			});
		}

		window.setTimeout(slideLeft, 5000);
	}
}());
