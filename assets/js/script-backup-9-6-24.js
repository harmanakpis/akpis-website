(function($) {
    "use strict";

(function () {
    $('.hamburger-menu').on('click', function() {
        $('.bar').toggleClass('animate');
    $('.mobile-menu').toggleClass('active');
    return false;
    })
  $('.has-children').on ('click', function() {
           $(this).children('ul').slideToggle('slow', 'swing');
       $('.icon-arrow').toggleClass('open');
    });
})();

$(window).scroll(function(){
      if ($(this).scrollTop() > 120) {
          $('header').addClass('fixed');
      } else {
          $('header').removeClass('fixed');
      }
});



/* ================ Revolution Slider. ================ */
  if($('.tp-banner').length > 0){
    $('.tp-banner').show().revolution({
          delay:6000,
          startheight: 1040,
          startwidth: 1430,
          hideThumbs: 1000,
          navigationType: 'none',
          touchenabled: 'on',
          onHoverStop: 'on',
          navOffsetHorizontal: 0,
          navOffsetVertical: 0,
          dottedOverlay: 'none',
          fullWidth: 'on'
    });
  }
  if($('.tp-banner-full').length > 0){
    $('.tp-banner-full').show().revolution({
      delay:6000,
          hideThumbs: 1000,
          navigationType: 'none',
          touchenabled: 'on',
          onHoverStop: 'on',
          navOffsetHorizontal: 0,
          navOffsetVertical: 0,
          dottedOverlay: 'none',
          fullScreen: 'on'
    });
  } 


/* ================ testimonials ================ */
    $(document).ready(function() {
        $('.coures-slider').owlCarousel({
        margin:40,
        autoplay:true,
        loop:true,
        nav: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
          
        responsive:{
            0:{
                items:1,
                smartSpeed: 700,
                autoplay:true,
                loop:true
                
            },
            720:{
                items:1
                
            },
            1000:{
                items:3
                
            }
        }

    });
        

        $('.alu-slider').owlCarousel({
        margin:0,
        dots:false,
        loop:true,
        autoplay: true,
        smartSpeed:2000,
        fluidSpeed: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,  
        responsive:{
            0:{
                items:3
                
            },
            720:{
                items:5
                
            },
            1000:{
                items:8
                
            }
        }
    });
    
    $('.review-slider').owlCarousel({
        margin:15,
        autoplay:true,
        loop:true,
        nav: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
                
            },
            720:{
                items:1
                
            },
            1000:{
                items:4
                
            }
        }
    });
    
    $('.aluslider').owlCarousel({
        margin:0,
        autoplay:true,
        loop:true,
        nav: false,
        dots:true,
        center: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
                
            },
            720:{
                items:1
                
            },
            1000:{
                items:3
                
            }
        }
    });
    
    var $videoSrc;  
    $('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
    });
    console.log($videoSrc);
    // when the modal is opened autoplay it  
    $('#myvideo').on('shown.bs.modal', function (e) {
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#galvideo").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })
    // stop playing the youtube video when I close the modal
    $('#myvideo').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#galvideo").attr('src',$videoSrc); 
    })

    
    

    $('.team-slider').owlCarousel({
        margin:30,
        autoplay:true,
        loop:true,
        nav: true,
        dots: false,  
        responsive:{
            0:{
                items:1,
                autoplay:true,
                loop:true
                
            },
            720:{
                items:1
                
            },
            1000:{
                items:5
                
            }
        }
    });

    $(document).ready(function() {

    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;

    var videoSlider = $('.video-slide-sec');
    sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: true,
        autoplay: false, 
        dots: false,
        loop: true,
        video:true,
        smartSpeed: 2000,
        responsiveRefreshRate: 200,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    }).on('changed.owl.carousel', syncPosition);


     videoSlider.on('translate.owl.carousel', function (e) {
    $('.owl-item .item video').each(function () {
    // pause playing video - after sliding
    $(this).get(0).pause();
     });
    });



    sync2
        .on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: 4,
            margin:30,
            dots: false,
            nav: true,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100,
            responsive:{
            0:{
                items:2,
                margin:10
            },
            720:{
                items:2,
                margin:10
                
            },
            1000:{
                items:4
                
            }
        }
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });
});

        
            

        /*const $videos = $('.video-gal-sec .video-over-con');
        $('.play-btn').on('click', e => {
        let $video = $(e.target).closest('.video-gal-sec').find('video-over-con');
        $videos.toggle();
        });*/

        $(".play-btn").click(function(){
            $(".owl-item.active").toggleClass("video-con-hide");
        });


        $('.stat-number').each(function () {
   var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
   $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
   }, {
      duration: 5000,
      step: function (func) {
         $(this).text(parseFloat(func).toFixed(size));
      }
        });
    });


});//main-close

})(jQuery);

var videos = document.getElementsByClassName("video-file");
var circlePlayButton = document.getElementsByClassName("play-btn");
for (let i = 0; i < circlePlayButton.length; i++) {
  let playBtn = circlePlayButton[i];
  let video = videos[i];
  function togglePlay() {
    if (video.paused || video.ended) {
        video.play();
    } else {
        video.pause();
    }
  }
  playBtn.addEventListener('click', togglePlay);
  video.addEventListener("playing", function () {
    playBtn.style.opacity = 0;
    
  });
  video.addEventListener("pause", function () {
      playBtn.style.opacity = 1;
      
  });
}

