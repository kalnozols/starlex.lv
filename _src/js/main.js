

jQuery(window).load(function() {

$('video').show();
$('.loader-wrap').addClass('ready');

	var cur = 0,    // Start Slide Index. We'll use ++cur to increment index 
        pau = 5000, // Pause Time (ms)
        fad = 0,  // Fade Time (ms)
        $ga = $('#videos'),   // Cache Gallery Element
        $sl = $('> .myVideo', $ga), // Cache Slides Elements
        $sbar = $('.progress-bar'),
        $vtitle = $('.video-title'),
        tot = $sl.length,      // We'll use cur%tot to reset to first slide
        itv ;       // Used to clear on mouseenter
 
//$sl.hide().eq( cur ).show(); // Hide all Slides but desired one
$sl.css({ "opacity": "0", "transition-delay":"0.5s"}).eq( cur ).css({ "opacity": '1', "transition": "all 0.5s"}); // Hide all Slides but desired one
$sbar.removeClass('active').eq( cur ).addClass('active'); // Hide all Slides but desired one
$vtitle.removeClass('active').eq( cur ).addClass('active'); // Hide all Slides but desired one

function stopFn() { clearInterval(itv); }
function loopFn() { itv = setInterval(fadeFn, pau); }
function fadeFn() { 
    $sl.css({ "opacity": "0", "transition-delay":"0.5s"}).eq(++cur%tot).stop().css({ "opacity": '1', "transition": "all 0.5s"}); 
    $sbar.removeClass('active').eq(cur%tot).stop().addClass('active'); 
    $vtitle.removeClass('active').eq( cur%tot ).stop().addClass('active');
}
// function fadeFn() { $sl.hide(fad).eq(++cur%tot).stop().slideDown(fad); }
$ga.hover( stopFn, loopFn );

// loopFn(); // Finally, Start

$sbar.removeClass('active');
$sl.get(0).pause(); 
setTimeout(loopFn, 0);
function delayprogress() {$sbar.eq(0).addClass('active'); $sl.get(0).play(); }

setTimeout(delayprogress, 0);

$(".play-video").click( function(e){
	e.preventDefault();
	var ccc = $(this).data('video');
	stopFn();	
	cur = ccc -1;
    $sl.css({ "opacity": "0", "transition-delay":"0.5s"}).eq(cur).stop().css({ "opacity": '1', "transition": "all 0.5s"}); 
    $sbar.removeClass('active').eq(cur).stop().addClass('active'); 
    $vtitle.removeClass('active').eq( cur).stop().addClass('active');	
	loopFn(); 
}  ); 

});



/* jQuery.enllax.js - v1.1.0 | copyright 2015, MMK Jony | https://github.com/mmkjony/enllax.js | released under the MIT license */
!function(t){"use strict";t.fn.enllax=function(r){var a=t(window).height(),n=t(document).height(),o=t.extend({ratio:0,type:"background",direction:"vertical"},r),e=t("[data-enllax-ratio]");e.each(function(){var r,e,s,i=t(this),c=i.offset().top,l=i.outerHeight(),p=i.data("enllax-ratio"),d=i.data("enllax-type"),x=i.data("enllax-direction");r=p?p:o.ratio,e=d?d:o.type,s=x?x:o.direction;var f=Math.round(c*r),u=Math.round((c-a/2+l)*r);"background"==e?"vertical"==s?i.css({"background-position":"center "+-f+"px"}):"horizontal"==s&&i.css({"background-position":-f+"px center"}):"foreground"==e&&("vertical"==s?i.css({"-webkit-transform":"translateY("+u+"px)","-moz-transform":"translateY("+u+"px)",transform:"translateY("+u+"px)"}):"horizontal"==s&&i.css({"-webkit-transform":"translateX("+u+"px)","-moz-transform":"translateX("+u+"px)",transform:"translateX("+u+"px)"})),t(window).on("scroll",function(){var o=t(this).scrollTop();f=Math.round((c-o)*r),u=Math.round((c-a/2+l-o)*r),"background"==e?"vertical"==s?i.css({"background-position":"center "+-f+"px"}):"horizontal"==s&&i.css({"background-position":-f+"px center"}):"foreground"==e&&n>o&&("vertical"==s?i.css({"-webkit-transform":"translateY("+u+"px)","-moz-transform":"translateY("+u+"px)",transform:"translateY("+u+"px)"}):"horizontal"==s&&i.css({"-webkit-transform":"translateX("+u+"px)","-moz-transform":"translateX("+u+"px)",transform:"translateX("+u+"px)"}))})})}}(jQuery);

        (function($){
            
            //Plugin activation
            $(window).enllax();
            
//            $('#some-id').enllax();
            
//            $('selector').enllax({
//                type: 'background', // 'foreground'
//                ratio: 0.5,
//                direction: 'vertical' // 'horizontal'
//            });
            
        })(jQuery);
        

 AOS.init({
	easing: 'ease-in-out-sine',
	 disable: 'mobile'
  }); 

// makes the parallax elements
function parallaxIt() {
	// create variables
	var $fwindow = $(window);
	var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

	var $contents = [];
	var $backgrounds = [];

	// for each of content parallax element
	$('[data-type="content"]').each(function(index, e) {
		var $contentObj = $(this);

		$contentObj.__speed = ($contentObj.data('speed') || 1);
		$contentObj.__fgOffset = $contentObj.offset().top;
		$contents.push($contentObj);
	});

	// for each of background parallax element
	$('[data-type="background"]').each(function() {
		var $backgroundObj = $(this);

		$backgroundObj.__speed = ($backgroundObj.data('speed') || 1);
		$backgroundObj.__fgOffset = $backgroundObj.offset().top;
		$backgrounds.push($backgroundObj);
	});

	// update positions
	$fwindow.on('scroll resize', function() {
		scrollTop = window.pageYOffset || document.documentElement.scrollTop;

		$contents.forEach(function($contentObj) {
			var yPos = $contentObj.__fgOffset - scrollTop / $contentObj.__speed;

			$contentObj.css('top', yPos);
		});

		$backgrounds.forEach(function($backgroundObj) {
			var yPos = -((scrollTop - $backgroundObj.__fgOffset) / $backgroundObj.__speed);

			$backgroundObj.css({
				backgroundPosition: '50% ' + yPos + 'px'
			});
		});
	});

	// triggers winodw scroll for refresh
	$fwindow.trigger('scroll');
}


// Single page skatā atveramie logi
$(document).ready(function () {
	    $('.open-item').on('click', function (e) {
        e.preventDefault();
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
        } else {
            $(this).addClass('open');
        }
    });
});


// Range slider
$(document).ready(function() {
    $("#price-slider").slider({
        min: 0,
        max: 1000000,
        step: 100,
        values: [300000, 700000],
        slide: function(event, ui) { for (var i = 0; i < ui.values.length; ++i) { $("input.priceValue[data-index=" + i + "]").val(ui.values[i]); }
        }
    });
    $("input.priceValue").change(function() { var $this = $(this); $("#price-slider").slider("values", $this.data("index"), $this.val()); });
});

$(document).ready(function() {
    $("#area-slider").slider({
        min: 10,
        max: 1000,
        step: 1,
        values: [300, 700],
        slide: function(event, ui) {for (var i = 0; i < ui.values.length; ++i) {$("input.areaValue[data-index=" + i + "]").val(ui.values[i]);}
        }
    });
    $("input.areaValue").change(function() {var $this = $(this);$("#area-slider").slider("values", $this.data("index"), $this.val());});
});
$(document).ready(function() {
    $("#room-slider").slider({
        min: 1,
        max: 10,
        step: 1,
        values: [2, 7],
        slide: function(event, ui) {for (var i = 0; i < ui.values.length; ++i) {$("input.roomValue[data-index=" + i + "]").val(ui.values[i]);}
        }
    });
    $("input.roomValue").change(function() {var $this = $(this);$("#room-slider").slider("values", $this.data("index"), $this.val());});
});
$(document).ready(function() {
    $("#floor-slider").slider({
        min: 1,
        max: 30,
        step: 1,
        values: [5, 25],
        slide: function(event, ui) {for (var i = 0; i < ui.values.length; ++i) {$("input.floorValue[data-index=" + i + "]").val(ui.values[i]);}
        }
    });
    $("input.floorValue").change(function() {var $this = $(this);$("#floor-slider").slider("values", $this.data("index"), $this.val());});
});


/// Image slider priekš search
$(document).ready(function () {
//    var divs = $('.image-wrap>div');
    var now = 0; // currently shown div
 //   divs.hide().first().show(); // hide all divs except first

    $(".next-img").click(function (e) {
    	e.preventDefault();
     	$(this).parent().find('.image-wrap>div').eq(now).hide();
        now = (now + 1 < $(this).parent().find('.image-wrap>div').length) ? now + 1 : 0;
        $(this).parent().find('.image-wrap>div').eq(now).show(); // show next
    });
    $(".prev-img").click(function (e) {
    	e.preventDefault();
        $(this).parent().find('.image-wrap>div').eq(now).hide();
        now = (now > 0) ? now - 1 : $(this).parent().find('.image-wrap>div').length - 1;
        $(this).parent().find('.image-wrap>div').eq(now).show(); // show previous
    });
});  


// Lielais slaideris single estate un jaunie projekti
$(document).ready(function() {
    var now = 0; // currently shown div

    $(".next-img").click(function (e) {
    	e.preventDefault();
     	$(this).parent().find('.image-wrap>a.single-image').eq(now).hide();
        now = (now + 1 < $(this).parent().find('.image-wrap>a.single-image').length) ? now + 1 : 0;
        $(this).parent().find('.image-wrap>a.single-image').eq(now).show(); // show next
    });
    $(".prev-img").click(function (e) {
    	e.preventDefault();
        $(this).parent().find('.image-wrap>a.single-image').eq(now).hide();
        now = (now > 0) ? now - 1 : $(this).parent().find('.image-wrap>a.single-image').length - 1;
        $(this).parent().find('.image-wrap>a.single-image').eq(now).show(); // show previous
    });


	$('#animated-thumbnials').lightGallery({
	    thumbnail:true
	}); 

		$('#animated-img').lightGallery({
	    thumbnail:true
	}); 
}); 

// Menu pie search atvērt/aizvērt filtru
$(document).ready(function () {
	    $('.open-filter').on('click', function (e) {
        e.preventDefault();
        $(this).hide(); $(this).prev('div').show();
        $('.topsearch .row').hide();
    });
	    $('.closed-filter').on('click', function (e) {
        e.preventDefault();
        $(this).hide(); $(this).next('div').show();
        $('.topsearch .row').show();
    });
});

$(document).ready(function () {
     $('.nav-burger').on('click', function () {
        
        if ($('.menus').hasClass('open')){  $('.menus').removeClass('open'); $('.burger').show(); $('.close-menu').hide(); }
        else { $('.menus').addClass('open'); $('.burger').hide(); $('.close-menu').show(); }        
    });

});

// Single.php left block fixed position
 $(window).scroll(function(){
    
  if( $('.left-block').length ) {
    if( $(window).width() > 800) {
        var lbh = $(".left-block").height()+50;
        var srh = $(window).height();
        var sgt = $(".search-grid").offset().top;
        var ttp = $(this).scrollTop();
      if( lbh < srh ){
              if ((ttp > 160) && ( (ttp+lbh) < sgt )) {
                  $('.left-block').addClass('fixed');
                  $('.left-block-empty').addClass('empty');
              } else {
                  $('.left-block').removeClass('fixed');
                  $('.left-block-empty').removeClass('empty');
              }
         
      } 
    }
  }
});

 // Slide to top
 $("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});