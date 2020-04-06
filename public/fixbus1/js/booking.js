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

	// Slick Summary
	$('.summary-sticky').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 7,
		slidesToScroll: 6,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots:false

				}
			}

		]
	});


	// Slick Date/time-date
	/*
	 $('.bus-availability').slick({
	 dots: true,
	 infinite: false,
	 speed: 300,
	 arrows:true,
	 draggable:true,
	 slidesToShow: 2,
	 slidesToScroll: 2,
	 responsive: [
	 {
	 breakpoint: 1024,
	 settings: {
	 slidesToShow: 2,
	 slidesToScroll: 2,
	 infinite: false,
	 dots: true
	 }
	 },
	 {
	 breakpoint: 600,
	 settings: {
	 slidesToShow: 2,
	 slidesToScroll: 2
	 }
	 },
	 {
	 breakpoint: 480,
	 settings: {
	 slidesToShow: 1,
	 slidesToScroll: 1
	 }
	 }
	 ]
	 });
	 */



	// Actions
	/*
	 $('.step-content .step-content-foot button[name="next"]').click(function() {
	 $('.summary-sticky').addClass('animated fadeInUpBig');
	 });
	 */

	$('.mobile-brands li a').addClass('animated fadeIn');

	$('.minimize').click(function() {
		$('.summary-sticky').animate({height: "49px"}).speed('fast').ease('swing');
		//$('.minimize').addClass('animated fadeOut');
		//$('.maximize').addClass('animated fadeIn');
	});
	$('.maximize').click(function() {
		$('.summary-sticky').animate({height: "349px"});
		//$('.maximize').addClass('animated fadeOut');
		//$('.minimize').addClass('animated fadeIn');

	});


});


// Booking Page
var systemLoginState = 0;
var calluserid;
var callusername;

$(function() {
	var step = 0;
	var stepItem = $('.step-progress .step-slider .step-slider-item');

	// Step Next
	$('.step-content .step-content-foot button[name="next"]').on('click', function() {
		var instance = $(this);
		if (stepItem.length - 1 < step) {
			return;
		}
		if (step == (stepItem.length - 2)) {
			instance.addClass('out');
			instance.siblings('button[name="finish"]').removeClass('out');
		}
		$(stepItem[step]).addClass('active');
		$('.step-content-body').addClass('out');
		// $('.step-content-body').addClass('animated fadeInRight');
		$('#' + stepItem[step + 1].dataset.id).removeClass('out');
		step++;
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		if($(stepItem[step]).data("id") == "schedule")
		{
			initSlider();
		}
	});

	// Step Last
	$('.step-content button[name="finish"]').on('click', function() {
		console.log('laststuff');
		if (step == stepItem.length) {
			return;
		}
		$(stepItem[stepItem.length - 1]).addClass('active');
		$('.step-content-body').addClass('out');
		$('#stepLast').removeClass('out');
		$('.step-content-foot').hide();
	});

	// Step Previous
	$('.step-content button[name="prev"], ' +
		'.step-content .back-button[name="prev"]').on('click', function() {
		/* Check login status, if loggedon skip account goback page ... */
		if ( stepItem[step-1].dataset.id == "account" && systemLoginState ) {
			step--;
		}
		var instance = $(this);
		$('.step-content-body').removeClass('active');
		$('.step-content-body').addClass('out');
		if (step <= 0) {
			return;
		}
		$('#' + stepItem[step-1].dataset.id).removeClass('out');
		$(stepItem[step-1]).addClass('active');
		step--;
		$('html, body').animate({ scrollTop: 0 }, 'fast');
	});
});


function initSlider()
{
	$('.bus-availability').width($('.bus-availability').parent().width()*.92);
	setTimeout(function(){
		$("#moment_slider").lightSlider({
			item: 3,
			autoWidth: false,
			slideMove: 1, // slidemove will be 1 if loop is true
			slideMargin: 0,

			responsive : [
				{
					breakpoint:800,
					settings: {
						item:2,
						slideMove:1,
						slideMargin:6,
					}
				},
				{
					breakpoint:480,
					settings: {
						item:1,
						slideMove:1
					}
				}
			],

			speed: 400, //ms'
			auto: false,
			adaptiveHeight: true,
			pauseOnHover: false,
			loop: false,
			slideEndAnimation: true,
			pause: 2000,

			keyPress: false,
			controls: true,
			prevHtml: '',
			nextHtml: '',

			pager: true
		});
	}, 100)
}


Number.prototype.pad = function(size) {
	var s = String(this);
	while (s.length < (size || 2)) {s = "0" + s;}
	return s;
};

var requestedRapair = 0;

$(function() {
	var brands = $('.mobile-brands > li,.list-inline.selection > li');
	var brandID = 0;
	var brandName = "";
	var brandImg = "";
	var modelID = 0;
	var modelName = "";
	var colorID = 0;
	var adress = [];
	var time = [];
	var fixID = 0;
	var accID = 0;
	var timedate = {};
	if(brands.length == 0)
		return false;
	function activateBrands() {
		brands.find('a').off('click').click(function () {
			var item = $(this);
			var bid = item.data('id');
			brandID = bid;
			brandName = item.data('name');
			brandImg = item.data('img');
			$.get(BASE_URL + 'booking/getModels/' + bid, function (response) {
				var models = JSON && JSON.parse(response) || $.parseJSON(response);
				var html = '';
				/*<li><a href="#">6s Plus</a></li>*/
				$.each(models, function (i, model) {
					html += '<li><a href="javascript:void(0)" data-name="'+model.name+'" data-id="' + model.id + '">' + model.name + '</a></li>';
				});
				$('#modelslist').html(html);
				activateModels();
				$('.step-content .step-content-foot button[name="next"]').click();
			});
		});
	}

	function quickSelect(){

		$('#searchmodellist').find('a').click(function(e){

			var e = $(this);
			brandID = e.attr('data-bid');
			brandName = e.attr('data-bname');
			brandImg = e.attr('data-bimg');
			modelName = e.attr('data-mname');
			modelID = e.attr('data-mid');

			$('#phonesummary').html('<img class="device-icon" src="'+BASE_URL+brandImg+'">'+
				'	<i class="swipe-indicator fa fa-chevron-right visible-xs"></i>'+
				'	<p class="model">'+modelName+'</p>'+
				'<span>'+brandName+'</span>');
			$('#phonesummary').parent().addClass('active');

			$.get(BASE_URL + 'booking/getColors/' + brandID + '/' + modelID, function (response) {
				var colors = JSON && JSON.parse(response) || $.parseJSON(response);
				var html = '';
				/*<li><a href="#">6s Plus</a></li>*/
				$.each(colors, function (i, color) {
					html += '<li><a href="javascript:void(0)" data-id="' + color.id + '"><div class="gold-label" style="background-color:'+color.color+'"></div>' + color.name + '</a></li>';
				});
				$('#colorlist').html(html);
				activateColors();
				$('.step-content .step-content-foot button[name="next"]').click();
				$('.step-content .step-content-foot button[name="next"]').click();
			});
		});
	}

	function activateModels(){
		var models = $('#modelslist');
		models.find('a').off('click').click(function () {
			var item = $(this);
			var mid = item.data('id');
			modelName = item.data('name');
			modelID = mid;

			$('#phonesummary').html('<img class="device-icon" src="'+BASE_URL+brandImg+'">'+
				'	<i class="swipe-indicator fa fa-chevron-right visible-xs"></i>'+
				'	<p class="model">'+modelName+'</p>'+
				'<span>'+brandName+'</span>');
			$('#phonesummary').parent().addClass('active');

			$.get(BASE_URL + 'booking/getColors/' + brandID + '/' + mid, function (response) {
				var colors = JSON && JSON.parse(response) || $.parseJSON(response);
				var html = '';
				/*<li><a href="#">6s Plus</a></li>*/
				$.each(colors, function (i, color) {
					html += '<li><a href="javascript:void(0)" data-id="' + color.id + '"><div class="gold-label" style="background-color:'+color.color+'"></div>' + color.name + '</a></li>';
				});
				$('#colorlist').html(html);
				activateColors();
				$('.step-content .step-content-foot button[name="next"]').click();
			});
		});
	}

	function activateColors(){
		var models = $('#colorlist');
		models.find('a').off('click').click(function () {
			var item = $(this);
			var mid = item.data('id');
			colorID = mid;
			$.get(BASE_URL + 'booking/getIssues/' + brandID + '/' + modelID + '/' + colorID, function (response) {
				var issues = JSON && JSON.parse(response) || $.parseJSON(response);
				var html = '';
				/*<li><a href="#">6s Plus</a></li>*/
				$.each(issues, function (i, issue) {
					html += '<li><a class="defect" href="javascript:void(0)" data-img="'+issue.img+'" data-price="'+issue.price+'" data-name="'+issue.title+'" data-id="'+issue.id+'"><img src="'+BASE_URL+issue.img+'">'+issue.title+'</a></li>';
				});
				html += '';
				$('#issuelist').html(html);
				activateOverview();
				$('.step-content .step-content-foot button[name="next"]').click();
			});
		});
	}

	function activateOverview(){
		var view = $('#overviewScreen');
		$('#issuelist').find('a').off('click').click(function () {
			var item = $(this);
			var mid = item.data('id');
			issueID = mid;
			fixID = mid;
			$('#fixsummary').html('<img class="component-icon" src="'+BASE_URL+item.data('img')+'">'+
				'	<p class="model">'+item.data('name')+'</p>'+
				'<span>&euro;'+item.data('price')+'</span>');
			$('#fixsummary').parent().addClass('active');
			$('.clear-all').html('&euro;'+item.data('price'));
			$.get(BASE_URL + 'booking/getOverview/' + brandID + '/' + modelID + '/' + colorID + '/' + issueID, function (response) {
				var data = JSON && JSON.parse(response) || $.parseJSON(response);
				if(data.fixes==null){
					data.fixes = {
						repairtime:"Unknown",
						title:"Unknown Defect",
						img:"images/devices/components/display.svg",
						stock:"999",
						warrantytime:"Unknown",
						whenrepair:"<li>The phone acts weird, or restarts without any errors</li>",
						solutions:"Examine what is broken and repair if possible",
						what:"Depends on what is broken",
						extra:"<li></li>"
					};

				}
				/*view.find('.brandphoto').attr('src',BASE_URL + data.brand.img);*/
				/*data.brand.name + ' ' + data.model.name + */
				view.find('.productinfo').html(data.brand.name + ' - ' + data.model.name + '<small> '+ data.color.name +'</small><br/><span>' + (data.fixes.title).capitalizeFirstLetter() + ' reparatie</span>');
				//view.find('.fullname').html((data.fixes.title).capitalizeFirstLetter() + ' reparatie');
				view.find('.fullname').html((data.fixes.title).capitalizeFirstLetter() + '<span  style="font-weight: 200; font-family: gilroyextra, uniform, helvetica, Arial;"> | ' + data.brand.name + ' ' + data.model.name + '</span>');
				view.find('.componentIcon').attr('src',BASE_URL + data.fixes.img);
				/*view.find('.componentName').html(data.fixes.title);*/
				view.find('.repairtime').html(data.fixes.repairtime+' minuten');
				var s = data.fixes.stock;
				var stock = "";
				if(s>0)
					stock = "On stock";
				else if(s==0 || s<0)
					stock = "In bestelling";
				else
					stock = s;
				view.find('#stock').html(stock);
				view.find('.warrantyTime').html(data.fixes.warrantytime);
				/*view.find('.phoneColor').attr('style','background-color:'+data.color.color);*/
				/*view.find('.colorName').html(data.color.name);*/
				view.find('.phone-conditions').html(data.fixes.whenrepair);
				view.find('.solutions').html(data.fixes.solutions);
				view.find('.what').html(data.fixes.what);
				view.find('.beforeorder').html(data.fixes.extra);
				view.find('.productprice').html('&euro; '+data.fixes.price);
				view.find('.clear-all').html('&euro; '+data.fixes.price);
				$('.step-content .step-content-foot button[name="next"]').click();

				$('#confirmdevice').off('click').click(function(){
					$('.step-content .step-content-foot button[name="next"]').click();
					loadAdress();
				});
				$('#confirmdevice2').off('click').click(function(){
					$('.step-content .step-content-foot button[name="next"]').click();
					loadAdress();
				});
			});
		});
	}

	function loadAdress(){
		var view = $('#overviewScreen2');
		$.get(BASE_URL + 'booking/getOverview/' + brandID + '/' + modelID + '/' + colorID + '/' + issueID, function (response) {
			var data = JSON && JSON.parse(response) || $.parseJSON(response);
			if(data.fixes==null){
				data.fixes = {
					repairtime:"Unknown",
					title:"Unknown Defect",
					img:"images/devices/components/display.svg",
					stock:"999",
					warrantytime:"Unknown",
					whenrepair:"<li>The phone acts weird, or restarts without any errors</li>",
					solutions:"Examine what is broken and repair if possible",
					what:"Depends on what is broken",
					extra:"<li></li>"
				};

			}
			/*view.find('.brandphoto').attr('src',BASE_URL + data.brand.img);*/
			/*data.brand.name + ' ' + data.model.name + */
			view.find('.productinfo').html(data.brand.name + ' - ' + data.model.name + '<small> '+ data.color.name +'</small><br/><span>' + (data.fixes.title).capitalizeFirstLetter() + ' reparatie</span>');
			view.find('.fullname').html((data.fixes.title).capitalizeFirstLetter() + ' reparatie');
			view.find('.componentIcon').attr('src',BASE_URL + data.fixes.img);
			/*view.find('.componentName').html(data.fixes.title);*/
			view.find('.repairtime').html(data.fixes.repairtime+' minuten');
			var s = data.fixes.stock;
			var stock = "";
			if(s>0)
				stock = "On stock";
			else if(s==0 || s<0)
				stock = "In bestelling";
			else
				stock = s;
			view.find('#stock').html(stock);
			view.find('.warrantyTime').html(data.fixes.warrantytime);
			/*view.find('.phoneColor').attr('style','background-color:'+data.color.color);*/
			/*view.find('.colorName').html(data.color.name);*/
			view.find('.phone-conditions').html(data.fixes.whenrepair);
			view.find('.solutions').html(data.fixes.solutions);
			view.find('.what').html(data.fixes.what);
			view.find('.beforeorder').html(data.fixes.extra);
			view.find('.productprice').html('&euro; '+data.fixes.price);
			view.find('.clear-all').html('&euro; '+data.fixes.price);
			
		});
		var item = $('#searchlocation');
		var item2 = $('#searchlocation2');
        var rege = /^[1-9][0-9]{3} ?(?!sa|sd|ss)[a-z]{2}$/i;
		$('#postalcode,#number').on('change',function(){
			if(rege.test($('#postalcode').val()) && $('#number').val().length>0) {
				$('.errormsg').remove();
				$('#viewErrorMsg').html('<div class="errormsg" style="color: #64b2f5;">Laden..</div>');
				$('#postalHnrOke').addClass('glyphicon glyphicon-ok form-control-feedback');
				$('#postalCodeOke').addClass('glyphicon glyphicon-ok form-control-feedback');
				$.get(BASE_URL + 'booking/getAdress/' + $('#postalcode').val() + '/' + $('#number').val(), function (response) {
					$('.errormsg').remove();
					var tadress = JSON && JSON.parse(response) || $.parseJSON(response);
					if (tadress.street == null) {
						$('#viewErrorMsg').html('<div class="errormsg" style="font-size: 13px;">Uw postcode dient telefonisch ingevoerd te worden, neem contact met ons op. <a href="tel:0800-1567">0800-1567</a><br /><br /></div>');
						$('#searchlocation').hide();
						$('#street').val('');
						$('#street').removeAttr('disabled');
						$('#city').val('');
						$('#city').removeAttr('disabled');
					}else{
						$('#searchlocation').show();
						$('#street').val(tadress.street).attr('disabled','disabled');
						$('#city').val(tadress.city).attr('disabled','disabled');
					}
				});
			}else{
				if(!rege.test($('#postalcode').val()) ){
					$('#searchlocation').hide();
					$('.errormsg').remove();
					$('#viewErrorMsg').html('<div class="errormsg">Vul aub een geldige postcode in: ex. 1234AB</div>');
					$('#postalCodeFailed').addClass('glyphicon glyphicon-remove form-control-feedback');
					$('#postalCodeOke').removeClass('glyphicon glyphicon-ok form-control-feedback');
				}else{
					$('.postalcheck').remove();
					$('#postalCodeOke').addClass('glyphicon glyphicon-ok form-control-feedback');
					$('#postalCodeFailed').removeClass('glyphicon glyphicon-ok form-control-feedback');
					$('#viewErrorMsg').html('');
				}
			}
		});

		item.off('click').click(function(){
			if($('#street').val().length!==0 && $('#city').val().length!==0) {
				$.get(BASE_URL + 'booking/getAdress/' + $('#postalcode').val() + '/' + $('#number').val(), function (response) {
					adress = JSON && JSON.parse(response) || $.parseJSON(response);
					if (adress.street == null) {
						$('#viewErrorMsg').html('<div class="errormsg">Uw postcode dient telefonisch ingevoerd te worden. neem contact met ons op. <a href="tel:0800-1567">0800-1567</a></div>');
						$('#searchlocation').hide();
					}else{
						$('#searchlocation').show();
					}
					adress.notes = $('#notes').val();
					adress.addition = $('#addition').val();
					$('.step-content .step-content-foot button[name="next"]').click();
					updateTimes();
				});
			}else{
				$('.errormsg').remove();
				if($('#postalcode').val().length==0 && $('#number').val().length==0){
					$('#viewErrorMsg').html('<div class="errormsg">Vul alle velden in.</div>');
				} else {
					if($('#postalcode').val().length==0){
						$('#postalcode').addClass('error');
						$('#viewErrorMsg').html('<div class="errormsg">Voor een juiste locatie dient u uw postcode op te geven</div>');
					}else{
						$('#postalcode').removeClass('error');
					}
					if($('#number').val().length==0){
						$('#number').addClass('error');
						$('#viewErrorMsg').html('<div class="errormsg">Voor een juiste locatie dient u uw huisnummer op te geven</div>');
					}else{
						$('#number').removeClass('error');
					}
				}
			}
		});
		item2.off('click').click(function(){
			if($('#street').val().length!==0 && $('#city').val().length!==0) {
				$.get(BASE_URL + 'booking/getAdress/' + $('#postalcode').val() + '/' + $('#number').val(), function (response) {
					adress = JSON && JSON.parse(response) || $.parseJSON(response);
					if (adress.street == null) {
						$('#viewErrorMsg').html('<div class="errormsg">Uw postcode dient telefonisch ingevoerd te worden. neem contact met ons op. <a href="tel:0800-1567">0800-1567</a></div>');
						$('#searchlocation').hide();
					}else{
						$('#searchlocation').show();
					}
					adress.notes = $('#notes').val();
					adress.addition = $('#addition').val();
					$('.step-content .step-content-foot button[name="next"]').click();
					updateTimes();
				});
			}else{
				$('.errormsg').remove();
				if($('#postalcode').val().length==0 && $('#number').val().length==0){
					$('#viewErrorMsg').html('<div class="errormsg">Vul alle velden in.</div>');
				} else {
					if($('#postalcode').val().length==0){
						$('#postalcode').addClass('error');
						$('#viewErrorMsg').html('<div class="errormsg">Voor een juiste locatie dient u uw postcode op te geven</div>');
					}else{
						$('#postalcode').removeClass('error');
					}
					if($('#number').val().length==0){
						$('#number').addClass('error');
						$('#viewErrorMsg').html('<div class="errormsg">Voor een juiste locatie dient u uw huisnummer op te geven</div>');
					}else{
						$('#number').removeClass('error');
					}
				}
			}
		});
	}

	function updateTimes(){
		var view = $('#overviewScreen3');
		$.get(BASE_URL + 'booking/getOverview/' + brandID + '/' + modelID + '/' + colorID + '/' + issueID, function (response) {
			var data = JSON && JSON.parse(response) || $.parseJSON(response);
			if(data.fixes==null){
				data.fixes = {
					repairtime:"Unknown",
					title:"Unknown Defect",
					img:"images/devices/components/display.svg",
					stock:"999",
					warrantytime:"Unknown",
					whenrepair:"<li>The phone acts weird, or restarts without any errors</li>",
					solutions:"Examine what is broken and repair if possible",
					what:"Depends on what is broken",
					extra:"<li></li>"
				};

			}
			/*view.find('.brandphoto').attr('src',BASE_URL + data.brand.img);*/
			/*data.brand.name + ' ' + data.model.name + */
			view.find('.productinfo').html(data.brand.name + ' - ' + data.model.name + '<small> '+ data.color.name +'</small><br/><span>' + (data.fixes.title).capitalizeFirstLetter() + ' reparatie</span>');
			$('.address').html($('#street').val() + ' ' + $('#number').val() + ' ' + $('#addition').val() + ' te ' + $('#city').val());
			view.find('.fullname').html((data.fixes.title).capitalizeFirstLetter() + ' reparatie');
			view.find('.componentIcon').attr('src',BASE_URL + data.fixes.img);
			/*view.find('.componentName').html(data.fixes.title);*/
			view.find('.repairtime').html(data.fixes.repairtime+' minuten');
			var s = data.fixes.stock;
			var stock = "";
			if(s>0)
				stock = "On stock";
			else if(s==0 || s<0)
				stock = "In bestelling";
			else
				stock = s;
			view.find('#stock').html(stock);
			view.find('.warrantyTime').html(data.fixes.warrantytime);
			/*view.find('.phoneColor').attr('style','background-color:'+data.color.color);*/
			/*view.find('.colorName').html(data.color.name);*/
			view.find('.phone-conditions').html(data.fixes.whenrepair);
			view.find('.solutions').html(data.fixes.solutions);
			view.find('.what').html(data.fixes.what);
			view.find('.beforeorder').html(data.fixes.extra);
			view.find('.productprice').html('&euro; '+data.fixes.price);
			view.find('.clear-all').html('&euro; '+data.fixes.price);
			
		});
		$.get(BASE_URL+'booking/getTimes/'+adress.area,function(response){
			locked = JSON && JSON.parse(response) || $.parseJSON(response);
			$.each(locked,function(index,time){
				var hour = parseInt(time.hour);
				var i = $('.timecheck.day'+time.day+'.month'+time.month+'.time'+hour.pad());
				i.addClass('disabled');
				i.html('<div class="overlayed-lock" style="font-size: 12pt;">vol</div>'+i.html());
			});

			var d = new Date();
			var n = d.getHours()+4;
			var sn = 8;
			while(sn<n){
				if(sn<=n) {
					var currentDay = $('.timecheck.day' + d.getDate() + '.month' + (d.getMonth()+1) + '.time' + (sn.pad()));
					currentDay.addClass('disabled');
					currentDay.html('<div class="overlayed-lock"><i class="fa fa-lock"></i></div>' + currentDay.html());
				}
				sn++;
			}
			
			// Before 8:00 ?? Close blocks today before 8 ...
			if ( d.getHours() <= 8 ) {
				var myDate = new Date();
				myDate.setDate(myDate.getDate());
				for ( var cc = 0; cc < 3; cc++ ) {
					var sn = cc + 8;
					var currentDay = $('.timecheck.day' + (myDate.getDate()) + '.month' + (myDate.getMonth()+1) + '.time' + (sn.pad()));
					currentDay.addClass('disabled');
					currentDay.html('<div class="overlayed-lock"><i class="fa fa-lock"></i></div>' + currentDay.html());
				}
			}
			
			// After 21:00 ?? Close blocks next day ...
			if ( d.getHours() >= 21 ) {
				var myDate = new Date();
				myDate.setDate(myDate.getDate() + 1);
				for ( var cc = 0; cc < 3; cc++ ) {
					var sn = cc + 8;
					var currentDay = $('.timecheck.day' + (myDate.getDate()) + '.month' + (myDate.getMonth()+1) + '.time' + (sn.pad()));
					currentDay.addClass('disabled');
					currentDay.html('<div class="overlayed-lock"><i class="fa fa-lock"></i></div>' + currentDay.html());
				}
			}

			$('.timecheck').off('click').click(function(){
				if($(this).hasClass('disabled'))
					return false;
				var d = $(this).parent();
				timedate = {
					day: d.data('day'),
					month: d.data('month'),
					year: d.data('year'),
					time: this.value
				};
				time = d.data('day')+' '+d.data('month')+' '+d.data('year')+' '+this.value;
				jQuery('#timesummary').html('<img class="component-icon" src="'+BASE_URL+'images/devices/components/calendar.svg">'+
					'	<p class="model">'+this.value+'</p>'+
					'<span>'+d.data('day')+'/'+d.data('month')+'/'+d.data('year')+'</span>');
				jQuery('#timesummary').parent().addClass('active');
				jQuery('.step-content .step-content-foot button[name="next"]').click();
				jQuery.get(BASE_URL+'booking/getAccessories/'+modelID+'/'+fixID,function(resp){

					if(resp=='') {
						$('.step-content .step-content-foot button[name="next"]').click();
						jQuery.get(BASE_URL+'booking/islogged/',function(resp){
							if(resp=='1') {
								systemLoginState = 1;
								loadSummary();
							}else{
								systemLoginState = 0;
								jQuery('#allreadyUser').off('click').click(function(){
									jQuery('.booking-account').animate({
										height:0,
										opacity: 0
									});
									jQuery('.booking-login').show();
									jQuery('.booking-login').animate({
										opacity:1
									});
									jQuery('#letsdologin').click(function(){

										var el = jQuery(this);
										var p = el.parent();
										var formvalues = p.serialize();
										jQuery.post(BASE_URL+'booking/login',formvalues,function(response) {
											resp = JSON && JSON.parse(response) || $.parseJSON(response);
											if (resp.status == true) {
												loadSummary();
											} else {
												alert('Je hebt niet alle velden ingevuld of je gegevens zijn onjuist. Probeer opnieuw!');
											}
										});
									});
								});
								jQuery('#submitLogin').off('click').click(function(e){

									var el = jQuery(this);
									var p = el.parent();
									var m = p.find('#email');
									var mail = p.find('#email').val();
									var pass = (p.find('#guestmode').length > 0)?p.find('#password').val():-1;
									var formvalues = jQuery('.booking-account > form').serialize();
									jQuery.post(BASE_URL+'booking/register',formvalues,function(response){
										resp = JSON && JSON.parse(response) || $.parseJSON(response);
										if(resp.success==true){
											loadSummary();
										}else{
											if(resp.why=='mail'){
												alert('Dit mail adres is al in gebruik.');
											}else{
												alert('Vul alle velden correct in.');
											}
										}
									})
								});
								jQuery('#submitLogin2').off('click').click(function(e){

									var el = jQuery(this);
									var p = el.parent();
									var m = p.find('#email');
									var mail = p.find('#email').val();
									var pass = (p.find('#guestmode').length > 0)?p.find('#password').val():-1;
									var formvalues = jQuery('.booking-account2 > form').serialize();
									jQuery.post(BASE_URL+'booking/register',formvalues,function(response){
										resp = JSON && JSON.parse(response) || $.parseJSON(response);
										if(resp.success==true){
											loadSummary();
										}else{
											if(resp.why=='mail'){
												alert('Dit mail adres is al in gebruik.');
											}else{
												alert('Vul alle velden correct in.');
											}
										}
									})
								});
							}
						});
					}else
						pickAcc(resp);
				});
			});
		});
	}

	
	function pickAcc(resp)
	{
		var d = new Date();
		var view = $('#overviewScreen4');
		var timeTxt;
		if ( timedate.day + '-' + timedate.month + '-' + timedate.year == ( d.getDate() ) + '-' + ( d.getMonth() + 1 ) + '-' + d.getFullYear() ) {
			timeTxt = "Vandaag <b>tussen</b> " + timedate.time;
		} else if ( 
			timedate.day + '-' + timedate.month + '-' + timedate.year == ( d.getDate() + 1 ) + '-' + ( d.getMonth() + 1 ) + '-' + d.getFullYear() ||
			timedate.day + '-' + timedate.month + '-' + timedate.year == '1-' + ( d.getMonth() + 2 ) + '-' + d.getFullYear()
		) {
			timeTxt = "Morgen <b>tussen</b> " + timedate.time;
		} else {
			timeTxt = timedate.day + "-" + timedate.month + "-" + timedate.year + " <b>tussen</b> " + timedate.time;
		}
		view.find('.dateTimeRepair').html(timeTxt);
		$.get(BASE_URL + 'booking/getOverview/' + brandID + '/' + modelID + '/' + colorID + '/' + issueID, function (response) {
			var data = JSON && JSON.parse(response) || $.parseJSON(response);
			if(data.fixes==null){
				data.fixes = {
					repairtime:"Unknown",
					title:"Unknown Defect",
					img:"images/devices/components/display.svg",
					stock:"999",
					warrantytime:"Unknown",
					whenrepair:"<li>The phone acts weird, or restarts without any errors</li>",
					solutions:"Examine what is broken and repair if possible",
					what:"Depends on what is broken",
					extra:"<li></li>"
				};

			}
			/*view.find('.brandphoto').attr('src',BASE_URL + data.brand.img);*/
			/*data.brand.name + ' ' + data.model.name + */
			view.find('.productinfo').html(data.brand.name + ' - ' + data.model.name + '<small> '+ data.color.name +'</small><br/><span>' + (data.fixes.title).capitalizeFirstLetter() + ' reparatie</span>');
			view.find('.fullname').html((data.fixes.title).capitalizeFirstLetter() + ' reparatie');
			view.find('.componentIcon').attr('src',BASE_URL + data.fixes.img);
			/*view.find('.componentName').html(data.fixes.title);*/
			view.find('.repairtime').html(data.fixes.repairtime+' minuten');
			var s = data.fixes.stock;
			var stock = "";
			if(s>0)
				stock = "On stock";
			else if(s==0 || s<0)
				stock = "In bestelling";
			else
				stock = s;
			view.find('#stock').html(stock);
			view.find('.warrantyTime').html(data.fixes.warrantytime);
			/*view.find('.phoneColor').attr('style','background-color:'+data.color.color);*/
			/*view.find('.colorName').html(data.color.name);*/
			view.find('.phone-conditions').html(data.fixes.whenrepair);
			view.find('.solutions').html(data.fixes.solutions);
			view.find('.what').html(data.fixes.what);
			view.find('.beforeorder').html(data.fixes.extra);
			view.find('.productprice').html('&euro; '+data.fixes.price);
			view.find('.clear-all').html('&euro; '+data.fixes.price);
			
		});
		jQuery('#accessories-list').html(resp);
		jQuery('.access-choice').off('click').click(function(){
			var el = jQuery(this);
			var aid = el.data('id');
			var name = el.find('span').html();
			var img = el.find('img').attr('src');
			accID = aid;
			var view = $('#overviewScreen4');
			var d = new Date();
			var timeTxt;
			var viewnew = $('#overviewScreen5');
			viewnew.find('.productinfo').html(view.find('.productinfo').html());
			viewnew.find('.productprice').html(view.find('.productprice').html());
			if ( timedate.day + '-' + timedate.month + '-' + timedate.year == ( d.getDate() ) + '-' + ( d.getMonth() + 1 ) + '-' + d.getFullYear() ) {
				timeTxt = "Vandaag <b>tussen</b> " + timedate.time;
			} else if ( 
				timedate.day + '-' + timedate.month + '-' + timedate.year == ( d.getDate() + 1 ) + '-' + ( d.getMonth() + 1 ) + '-' + d.getFullYear() ||
				timedate.day + '-' + timedate.month + '-' + timedate.year == '1-' + ( d.getMonth() + 2 ) + '-' + d.getFullYear()
			) {
				timeTxt = "Morgen <b>tussen</b> " + timedate.time;
			} else {
				timeTxt = timedate.day + "-" + timedate.month + "-" + timedate.year + " <b>tussen</b> " + timedate.time;
			}
			viewnew.find('.dateTimeRepair').html(timeTxt);
			jQuery('#accessorysummary').html('<img class="component-icon" src="'+img+'"><p>'+name+'</p>');
			jQuery('#accessorysummary').parent().addClass('active');
			jQuery.get(BASE_URL+'booking/islogged/',function(resp){
				$('.step-content .step-content-foot button[name="next"]').click();
				if(resp=='1') {
					systemLoginState = 1;
					loadSummary();
				}else{
					systemLoginState = 0;
					jQuery('#allreadyUser').off('click').click(function(){
						jQuery('.booking-account').animate({
							height:0,
							opacity: 0
						});
						jQuery('.booking-login').show();
						jQuery('.booking-login').animate({
							opacity:1
						});
						jQuery('#letsdologin').click(function(){
							var el = jQuery(this);
							var p = el.parent();
							var formvalues = p.serialize();
							jQuery.post(BASE_URL+'booking/login',formvalues,function(response) {
								resp = JSON && JSON.parse(response) || $.parseJSON(response);
								if (resp.status == true) {
									systemLoginState = 1;
									// pageUserId
									calluserid = resp.id;
									callusername = resp.name;
									loadSummary();
								} else {
									alert('Je login details kloppen niet of zijn onjuist ingevoerd. Probeer opnieuw!');
								}
							});
						});
					});
					jQuery('#submitLogin').off('click').click(function(e){

						var el = jQuery(this);
						var p = el.parent();
						var m = p.find('#email');
						var mail = p.find('#email').val();
						var phone = p.find('#phone').val();
						var pass = p.find('#password').val();
						var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
						if((m = regex.exec(mail)) == null){
							p.find('#email').addClass('error');
							alert('Please provide a valid mail adress.');
							return false;
						}else{
							p.find('#email').removeClass('error');
						}
						if(!phone.match(/^(\+\d{1,3}[- ]?)?\d{10}$/) || (phone.match(/0{5,}/))){
							p.find('#phone').addClass('error');
							alert('Please provide a valid phone number.');
							return false;
						}else{
							p.find('#phone').removeClass('error');
						}
						var formvalues = jQuery('.booking-account > form').serialize();
						jQuery.post(BASE_URL+'booking/register',formvalues,function(response){
							resp = JSON && JSON.parse(response) || $.parseJSON(response);
							if(resp.success==true){
								systemLoginState = 1;
								calluserid = resp.id;
								callusername = resp.name;
								loadSummary();
							}else{
								if(resp.why=='mail'){
									alert('This mail adress is allready in use.');
								}else{
									alert('Unknown error please try again');
								}
							}
						})
					});
					jQuery('#submitLogin2').off('click').click(function(e){

						var el = jQuery(this);
						var p = el.parent();
						var m = p.find('#email');
						var mail = p.find('#email').val();
						var pass = p.find('#password').val();
						var phone = p.find('#phone').val();
						var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
						if((m = regex.exec(mail)) == null){
							p.find('#email').addClass('error');
							alert('Please provide a valid mail adress.');
							return false;
						}else{
							p.find('#email').removeClass('error');
						}
						if(!phone.match(/^(\+\d{1,3}[- ]?)?\d{10}$/) || (phone.match(/0{5,}/))){
							p.find('#phone').addClass('error');
							alert('Please provide a valid phone number.');
							return false;
						}else{
							p.find('#phone').removeClass('error');
						}
						var formvalues = jQuery('.booking-account2 > form').serialize();
						jQuery.post(BASE_URL+'booking/register',formvalues,function(response){
							resp = JSON && JSON.parse(response) || $.parseJSON(response);
							if(resp.success==true){
								systemLoginState = 1;
								calluserid = resp.id;
								callusername = resp.name;
								loadSummary();
							}else{
								if(resp.why=='mail'){
									alert('This mail adress is allready in use.');
								}else{
									alert('Uknown error please try again');
								}
							}
						})
					});
				}
			});

		});
	}

	function loadSummary()
	{
		jQuery.post(BASE_URL+'booking/orderSummary',{
			pageUserId:calluserid,
			adress:adress,
			brand:brandID,
			model:modelID,
			color:colorID,
			repair:fixID,
			date:timedate,
			acce: accID
		},function(response){
			var resp = JSON && JSON.parse(response) || $.parseJSON(response);
			$('.lobrandmodel').html('<strong>Telefoon:</strong>&nbsp;&nbsp;'+resp.cellphone);
			$('.locolor').html('<strong>Kleur:</strong>&nbsp;&nbsp;'+resp.color);
			$('.lofix').html('<strong>Reparatie:</strong>&nbsp;&nbsp;'+resp.fix);
			$('.lowhen').html('<strong>Tijd:</strong>&nbsp;&nbsp;'+resp.time);
			$('.loacce').html('<strong>Accessoire:</strong>&nbsp;&nbsp;'+resp.acce);
			$('.lobrandimage').html('<img src="' + resp.brandimg + '">');
			$('.loprice').html('&euro;'+resp.total);
			$('.clear-all').html('&euro;'+resp.total);
			$('.step-content button[name="finish"]').click(function(){
				if ( !requestedRapair ) {
					requestedRapair = 1;
					jQuery.post(BASE_URL+'booking/doRealOrderMethod',{
							pageUserId:calluserid,
							adress:adress,
							brand:brandID,
							model:modelID,
							color:colorID,
							repair:fixID,
							date:timedate,
							acce: accID
						},function(response){
							var resp = JSON && JSON.parse(response) || $.parseJSON(response);
							jQuery.get(BASE_URL+'booking/setComplete/'+resp.id,function(){
								goog_report_conversion(BASE_URL+'booking/setComplete/'+resp.id);
							})
						});
				}
			});
		});
		$('.step-content .step-content-foot button[name="next"]').click();
	}

	activateBrands();
	quickSelect();
});

String.prototype.capitalizeFirstLetter = function() {
	return this.charAt(0).toUpperCase() + this.slice(1);
}

/* <![CDATA[ */
goog_snippet_vars = function() {
	var w = window;
	w.google_conversion_id = 873533367;
	w.google_conversion_label = "SKtrCJeZhW8Qt5_EoAM";
	w.google_remarketing_only = false;
}
// DO NOT CHANGE THE CODE BELOW.
goog_report_conversion = function(url) {
	goog_snippet_vars();
	window.google_conversion_format = "3";
	var opt = new Object();
	opt.onload_callback = function() {
		if (typeof(url) != 'undefined') {
			//window.location = url;
		}
	}
	var conv_handler = window['google_trackConversion'];
	if (typeof(conv_handler) == 'function') {
		conv_handler(opt);
	}
}
/* ]]> */