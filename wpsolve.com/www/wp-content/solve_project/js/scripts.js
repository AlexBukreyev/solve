$(function(){
	if($('.headCarousel').length > 0){
		$('.headCarousel').owlCarousel({
		    loop:true,
		    margin:0,
		    nav:false,
		    items:1,
		})
	}

	if($('.workCarousel').length > 0){
		$('.workCarousel').owlCarousel({
		    loop:true,
		    margin:0,
		    nav:true,
		    navText:["",""], 
		    responsive:{
		        0:{
		            items:1
		        },
		        767:{
		            items:2
		        },
		    }
		})
	}
	if($('.logoCarusel').length > 0){
		$('.logoCarusel').owlCarousel({
		    loop:true,
		    margin:30,
		    nav:true,
		    navText:["",""],
		    responsive:{
		        0:{
		            items:2
		        },
		        767:{
		            items:3
		        },
		        1000:{
		            items:7,
		        },

		    } 
		})
	}
	
	if($('.feedBackCarusel').length > 0){
		$('.feedBackCarusel').owlCarousel({
		    loop:true,
		    margin:50,
		    nav:false,
		    dotsEach: true,
		    responsive:{
		        0:{
		            items:1
		        },
		        767:{
		            items:2
		        },
		    }
		})
	}

	if($('.actionSlide').length > 0){
		$('.actionSlide').owlCarousel({
		    loop:true,
		    margin:5,
		    nav:false,
		    dotsEach: true,
		    items:1,
		})
	}

	if($('.worldCarusel').length > 0){
		$('.worldCarusel').owlCarousel({
		    loop:true,
		    margin:50,
		    nav:true,
		    navText:["",""], 
		    dotsEach: true, 
		    responsive:{
		        0:{
		            items:1
		        },
		        767:{
		            items:2
		        },
		        1000:{
		            items:4
		        },
		    }
		})
	}

	if($('.teamSlider').length > 0){
		$('.teamSlider').owlCarousel({
		    loop:true,
		    margin:50,
		    nav:true,
		    navText:false,
		    dotsEach: true,  
		    responsive:{
		        0:{
		            items:1
		        },
		        480:{
		            items:2
		        },
		        767:{
		            items:3
		        },
		        1200:{
		            items:4
		        },
		    }
		})
	}

	if($('.combo').length > 0){
		//$('.combo').selectize();
	}

	$(".topBlock .menuBtn").click(function(){
		$(this).toggleClass('active');
		$(".topBlock .mainMenu").fadeToggle();
	});
	
	$(".topBlock .collBtn").click(function(){
		$(this).toggleClass('active');
		$(".head .headIn .phoneBlock").fadeToggle();
	});

	$(".cooperationIn dl dt").click(function(){
		if($(this).hasClass('open')){
			$(this).removeClass('open');
		}else{
			$(".cooperationIn dl dt").removeClass('open');
			$(this).addClass('open');
		}
		
	});

	

	$(window).resize(function(event) {
		$(".head .headIn .phoneBlock").removeAttr('style')
		$(".topBlock .collBtn").removeClass('active')
	});

	$( window ).on( "orientationchange", function( event ) {
		$(".topBlock .mainMenu").removeAttr('style')
		$(".topBlock .menuBtn").removeClass('active')

		if($('.teamSlider').length > 0){
			$('.teamSlider').trigger('destroy.owl')
			$('.teamSlider').removeClass("owl-loaded");
			$('.teamSlider').removeClass("owl-carousel");
			var items = $('.teamSlider').find('.owl-stage-outer').html()
			$('.teamSlider').prepend(items)
			$('.teamSlider').find('.owl-stage-outer').remove();
			setTimeout(function(){
				$('.teamSlider').owlCarousel({
				    loop:true,
				    margin:50,
				    nav:true,
				    navText:false,
				    dotsEach: true,  
				    responsive:{
				        0:{
				            items:1
				        },
				        480:{
				            items:2
				        },
				        767:{
				            items:3
				        },
				        1200:{
				            items:4
				        },
				    }
				})
			}, 100)
		}
	});

	$(".shippingCosts .delivery a").click(function(){
		$(this).parent(".delivery").hide();
		$(this).parent(".delivery").next(".table").show();
	});

	$(".actions-prev").click(function(event) {
		$(".workCarousel .owl-prev").trigger('click')
	});
	$(".actions-next").click(function(event) {
		$(".workCarousel .owl-next").trigger('click')
	});

	$(".newWorld .arr-prev").click(function(event) {
		$(".worldCarusel .owl-prev").trigger('click')
	});
	$(".newWorld .arr-next").click(function(event) {
		$(".worldCarusel .owl-next").trigger('click')
	});


	$(".modal-body form .tabBtn").click(function(event) {
		if($(this).hasClass('open')){
			$(this).removeClass('open')
		}else{
			$(".modal-body form .tabBtn").removeClass('open');
			$(this).addClass('open')
		}
		
	});

	

	$("#registrationBtn, #registrationBtn2").click(function(event) {
		setTimeout(function(){
			$('#registration').modal('show')
		}, 1000)
	});
	$(".modal-body form .alredyReg, .backToLogin a").click(function(event) {
		setTimeout(function(){
			$('#popupLogin').modal('show')
		}, 1000)
	});

	$(".forgot a").click(function(event) {
		setTimeout(function(){
			$('#popupForgot').modal('show')
		}, 1000)
	});

	var windowClicked = false;
	$(".chatBtn").click(function(event) {
		$('.chat').toggleClass('open');
		var chat = $(".chat .chatBody").offset().top - 10
		$("html, body").animate({scrollTop: chat}, 500)
		windowClicked = true;
	});

	$(".chat .closeChat").click(function(event) {
		$('.chat').removeClass('open');
	});
	
	$(".chat .chatBody").click(function(event) {
		windowClicked = true;
	});

	$(window).click(function(){
		if(windowClicked == true){
			windowClicked = false;
		} else{
			$('.chat').removeClass('open');
			$(".langBox").removeClass('active');
			$(".langBox ul").fadeOut();
		}
	});

	
	
	$(".langBox .select").click(function(){
		$(".langBox").addClass('active');
		$(".langBox ul").fadeToggle();
		windowClicked = true;
	});
	
	$(".langBox ul a").click(function(){
		var lang = $(this).text();
		$(".langBox ul li").removeClass('active');
		$(this).parent('li').addClass('active');
		$(".langBox .select").text(lang)
	});

	
	$("body").on("click", ".fileBlock a", function(event) {
		$(this).parent('.fileBlock').find('input').trigger('click')
	});

	$('body').on("change", ".fileBlock input",function(event) {
		$(this).parent('.fileBlock').find('span').text($(this).val());
		
		
		if($(".fileBlock").length <= 5){
			$(".atach").append('<div class="fileBlock"> \
				                  <a>Обзор_</a> \
				                  <input type="file"> \
				                  <span> Файл не выбран</span> \
				                </div>')
		}
	});


	
	$(".atachFile a").click(function(event) {
		$('.atachFile input').trigger('click')
	});

	
	$('.atachFile input').change(function(event) {
		var valInput =  $(this).val();
		var valSpan = $('.atachFile span').text()
		$('.atachFile span').text( valInput + ", " + valSpan);
	});
	

	if($('.fancybox').length > 0){
		$('.fancybox').fancybox();
	}


	
	if($("#range1").length != 0){
		$( "#range1" ).slider({
			range: "max",
			min: 1,
			max: 100,
			value: 60,
			slide: function( event, ui ) {
				$( "#range1val" ).val( ui.value );
				$( "#val1" ).text( ui.value );
				$(".calculator .img:nth-child(1) .space").height(ui.value);
			}
		});
		$(".calculator .img:nth-child(1) .space").height($( "#range1" ).slider( "value" ))
		$( "#range1val" ).val( $( "#range1" ).slider( "value" ) );
		$( "#val1" ).text( $( "#range1" ).slider( "value" ) ); 
	
		$( "#range1val" ).keyup(function(event) {
			var val = parseInt($(this).val());
			if(val > 100){
				val = 100;
				$(this).val(val);
			}else if(val < 1){
				val = 1;
				$(this).val(val);
			}
			$(".calculator .img:nth-child(1) .space").height(val)
			$( "#val1" ).text(val); 

			$( "#range1" ).slider({
				range: "max",
				min: 1,
				max: 100,
				value: val,
				slide: function( event, ui ) {
					$( "#range1val" ).val( ui.value );
					$( "#val1" ).text( ui.value );
					$(".calculator .img:nth-child(1) .space").height(ui.value);
				}
			});
		});
	}


	if($("#range2").length != 0){
		$( "#range2" ).slider({
			range: "max",
			min: 0,
			max: 100000,
			value: 6000,
			slide: function( event, ui ) {
				$( "#range2val" ).val( ui.value );
				$( "#val2" ).text( ui.value );
				if(ui.value/1000 < 1){
					$(".calculator .img:nth-child(3) .space").height(1);
				}else{
					$(".calculator .img:nth-child(3) .space").height(ui.value/1000);
				}
			}
		});
		$(".calculator .img:nth-child(3) .space").height($( "#range1" ).slider( "value" ))
		$( "#range2val" ).val( $( "#range2" ).slider( "value" ) );
		$( "#val2" ).text( $( "#range2" ).slider( "value" ) ); 


		$( "#range2val" ).keyup(function(event) {
			var val = parseInt($(this).val());
			if(val > 100000){
				val = 100000;
				$(this).val(val);
			}else if(val < 1){
				val = 1;
				$(this).val(val);
			}
			$(".calculator .img:nth-child(3) .space").height(val/1000)
			$( "#val2" ).text(val); 

			$( "#range2" ).slider({
				range: "max",
				min: 0,
				max: 100000,
				value: val,
				slide: function( event, ui ) {
					$( "#range2val" ).val( ui.value );
					$( "#val2" ).text( ui.value );
					if(ui.value/1000 < 1){
						$(".calculator .img:nth-child(3) .space").height(1);
					}else{
						$(".calculator .img:nth-child(3) .space").height(ui.value/1000);
					}
				}
			});
		});

	}

	if($("#range3val").length != 0){
		var val = $("#range3val").val();
		$(".calculator .img:nth-child(5) .space").height(val/10)
		$( "#val3" ).text( val ); 
		if(val >= 2){
			$("#amplitude").show();
		}else{
			$("#amplitude").hide();
		}


		$("#range3val").keyup(function(event) {
			var val = $(this).val();
			$( "#val3" ).text( val );
			if(val/10 < 1){
				$(".calculator .img:nth-child(5) .space").height(1);
				
			}else if(val/10 > 120){
				$(".calculator .img:nth-child(5) .space").height(120);
			}else{
				$(".calculator .img:nth-child(5) .space").height(val/10);
			}

			if(val >= 2){
				$("#amplitude").show();
			}else{
				$("#amplitude").hide();
			}
			
		});
	}



	var modalTop = "";
	$('.modal').on('show.bs.modal', function (e) {
	  	var modalTop = $(window).scrollTop();
	  	$(".wrapper").addClass('fix'); 
	  	$(".wrapper").css({top: -modalTop});
	});

	var winScroll
	$('.modal').on('hide.bs.modal', function (e) {
	  	winScroll = $(".wrapper").css('top');
	  	winScroll = parseInt(winScroll) * -1;
	  	$("html, body").animate({scrollTop: winScroll}, 0.001);
	  	$(".wrapper").removeClass('fix');
	  	
	})

	$("body").on('click', '.modal-backdrop', function(event) {
		$('.modal').modal('hide')
	});
	


	
	
	

});










