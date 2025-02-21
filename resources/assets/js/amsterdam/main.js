
$(document).ready(function(){
	
	(function () {
		$('#hamburger').on('click', function() { // ICON CLICK

			if(!$(this).hasClass("active")){
			
				window.scrollTo(0,0);
				$(this).addClass("active");
				$('.hamb-wrp').addClass("vanish");
				$('#header-menu').addClass("show");
				$('section#header-menu').removeClass("fixed");
			
			}else{

				$(this).removeClass("active");
				$('.hamb-wrp').removeClass("vanish");

    			$('#header-menu').removeClass("show");

    			$('section#header-menu').addClass("fixed");
			}

			$('.bar').toggleClass('animate');
		
		}) // ICON CLICK END
	})(); // FUNC END


	//COUNTER

	var clock = $('.your-clock').FlipClock(new Date("October 24, 2017 07:30:00"),{
    	clockFace: 'DailyCounter',
   		countdown: true
   });


	//SPONSORS

	(function () {
		$.fn.visible = function(partial) {
    
		    var $t            = $(this),
		        $w            = $(window),
		        viewTop       = $w.scrollTop(),
		        viewBottom    = viewTop + $w.height(),
		        _top          = $t.offset().top,
		        _bottom       = _top + $t.height(),
		        compareTop    = partial === true ? _bottom : _top,
		        compareBottom = partial === true ? _top : _bottom;
	    
	    	return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  		};
	})();

	var win = $(window);

	var allMods = $(".sponsor");
	var allanimRight = $(".content-wrap");
	var allanimTop = $(".wrp");

	allMods.each(function(i, el) {
	  var el = $(el);
	  if (el.visible(true)) {
	    el.addClass("visible"); 
	  } 
	});

	win.scroll(function(event) {
	  
	  allanimRight.each(function(i, animRight) {
	    var animRight = $(animRight);
	    if (animRight.visible(true)) {
	      animRight.addClass("animated fadeInRight"); 
	    }else{
	    	animRight.removeClass("animated fadeInRight");
	    } 
	  });
  
	});

	win.scroll(function(event) {
	  
	  allanimTop.each(function(i, allanimTop) {
	    var allanimTop = $(allanimTop);
	    if (allanimTop.visible(true)) {
	      allanimTop.addClass("animated fadeInTop"); 
	    }else{
	    	allanimTop.removeClass("animated fadeInTop");
	    } 
	  });
  
	});

	win.scroll(function(event) {
	  
	  allMods.each(function(i, el) {
	    var el = $(el);
	    if (el.visible(true)) {
	      el.addClass("come-in"); 
	    } 
	  });
  
	}); //SPONSORS END



	//MAINSPONSORS EFFECT

	var mainsponsors = $(".mainsponsors-wrap > div");

	mainsponsors.each(function(i) {
	  var el = $(this);
	  setTimeout(
		function() {
			el.addClass("visible");
		}, i*500); 
	});


	//MENU

	var viewportWidth = $(window).width();
    	if (viewportWidth < 1100) {
            $(".more > a").click(function(event){
				if(!$(this).parent().hasClass("showmob")){
				$(this).parent().addClass("showmob");
				$(this).parent().siblings().removeClass("showmob");
			}else{
				$(this).parent().removeClass("showmob");
			}
			event.preventDefault();
			});
    	}

	$(window).resize(function () {
    	var viewportWidth = $(window).width();
    	if (viewportWidth < 1100) {
            $(".more > a").click(function(event){
				if(!$(this).parent().hasClass("showmob")){
				$(this).parent().addClass("showmob");
				$(this).parent().siblings().removeClass("showmob");
			}else{
				$(this).parent().removeClass("showmob");
			}
			event.preventDefault();
			});
    	}
    });


		$(".more").mouseover(function(){
        $("#header-menu").addClass("black");
    });
    $(".dropdownbox").mouseleave(function(){
        if ($(window).scrollTop() == 0) {
            $("#header-menu").removeClass("black");
        }
    });

	$("#more > a").mouseover(function(){
		$(".first-ul li").each(function(){
			$(this).show();
			$(this).find(".second-ul").removeClass("visib");
		});
	});

	$(".second-ul").mouseleave(function(){
		$(".first-ul li").each(function(){
			$(this).show();
			$(this).find(".second-ul").removeClass("visib");
		});
	});


	//SCROLLING BAR

	$(window).scroll(function() {    
    	var scroll = $(window).scrollTop();

    	if (scroll >= 100) {
        	$("#unleash-logo").addClass("show");
    	} else {
        	$("#unleash-logo").removeClass("show");
    	}
	});

	$(window).resize(function () {
    	var viewportWidth = $(window).width();
    	if (viewportWidth > 1100) {
            $('#header-menu').removeClass("show");
            $('#hamburger').removeClass("active");
            $('.bar').removeClass('animate');
            $('.more').removeClass("showmob");
    	}
	});

	// Get the modal
	var modal = document.getElementsByClassName('myModal');

	// Get the button that opens the modal
	var btn = document.getElementsByClassName('book');

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	$('.popup').click(function() { 
		let popupName = $(this).data('popupdata');
		$('#'+popupName).css("display", "flex");
		  grecaptcha.render(popupName+'-captcha', {
          'sitekey' : '6Ld7QUkUAAAAAK2tq3dnMv2AbRwPfFc4GUR9Exsu',
		  'callback': reCaptchaVerify,
		  'expired-callback': reCaptchaExpired
        });		
	})

	$('.close').click(function() { 
		$('.modal').css("display", "none")
	})


	
	    // Form handle 
    $(document).on("change", "#FullName", function () {
        var c = $(this).val().split(" "), a = "", b = "";
        $.each(c, function (e, d) {
            e == c.length - 1 ? b += d : a += d + " "
        });
        a.slice(0, -1);
        $('[data-field="fname"]').val(a);
        $('[data-field="fname"]').html(a);
        $('[data-field="lname"]').val(b);
        $('[data-field="lname"]').html(b)
    });

    if (window.location.href.indexOf('#ThankYouForEnquiry') != -1) {
			$('#thankyou').css("display", "flex")
    }        

    if (window.location.href.indexOf('#ThankYouForSigningUp') != -1) {
			$('#thankyousign').css("display", "flex")
    }  	

var bindFunct = function(){
	
	$('[name="CTAForms"]').one('submit', function(e) {
		  e.preventDefault();
		if (doSubmit) {
			let formID = $(this).attr('id');
			document.getElementById(formID).submit(); 
		} else {
			alert('Please, complete the captcha!');
			bindFunct();
		}		  
	});	
}	
$('[name="CTAForms"]').one('submit', function(e) {
    e.preventDefault();
    // do your things ...
		
		
	if (doSubmit) {
		let formID = $(this).attr('id');
		document.getElementById(formID).submit(); 
    } else {
		alert('Please, complete the captcha!');
		bindFunct();
	}
    // and when you done:
    
});	
	
}); // READY END

function reCaptchaVerify(response) {
        doSubmit = true;
}

function reCaptchaExpired () {
    /* do something when it expires */
}