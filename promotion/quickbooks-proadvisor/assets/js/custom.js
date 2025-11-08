jQuery(document).ready(function($) {
    var tabwrapWidth= $('.tabs-wrapper').outerWidth();
    var totalWidth=0;
    jQuery("ul li").each(function() { 
      totalWidth += jQuery(this).outerWidth(); 
    });
    if(totalWidth > tabwrapWidth){
      $('.scroller-btn').removeClass('inactive');
    }
    else{
      $('.scroller-btn').addClass('inactive');
    }

    if($("#scroller").scrollLeft() == 0 ){
      $('.scroller-btn.left').addClass('inactive');
    }
    else{
       $('.scroller-btn.left').removeClass('inactive');
    }
		var liWidth= $('#scroller li').outerWidth();
		var liCount= $('#scroller li').length;
		var scrollWidth = liWidth * liCount;

				$('.right').on('click', function(){
          $('.nav-tabs').animate({scrollLeft: '+=200px'}, 300);
          console.log($("#scroller").scrollLeft() + " px");
				});
				
				$('.left').on('click', function(){
					$('.nav-tabs').animate({scrollLeft: '-=200px'}, 300);
				});
      scrollerHide()
     
      function scrollerHide(){
        var scrollLeftPrev = 0;
        $('#scroller').scroll(function () {
            var $elem=$('#scroller');
            var newScrollLeft = $elem.scrollLeft(),
                width=$elem.outerWidth(),
                scrollWidth=$elem.get(0).scrollWidth;
            if (scrollWidth-newScrollLeft==width) {
                $('.right.scroller-btn').addClass('inactive');
            }
            else{

                 $('.right.scroller-btn').removeClass('inactive');
            }
            if (newScrollLeft === 0) {
              $('.left.scroller-btn').addClass('inactive');
            }
            else{

                 $('.left.scroller-btn').removeClass('inactive');
            }
            scrollLeftPrev = newScrollLeft;
        });
      }
	});

$(document).ready(function() {
    $('.clientslide').owlCarousel({
        loop: true,
        margin: 50,
        autoplay: false,
        autoplayTimeout: 2000,
        nav: true,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 6,
            }
        }
    })
})


$.fn.jQuerySimpleCounter = function( options ) {
    var settings = $.extend({
        start:  0,
        end:    100,
        easing: 'swing',
        duration: 400,
        complete: ''
    }, options );
    
    var thisElement = $(this);
    
    $({count: settings.start}).animate({count: settings.end}, {
        duration: settings.duration,
        easing: settings.easing,
        step: function() {
            var mathCount = Math.ceil(this.count);
            thisElement.text(mathCount);
        },
        complete: settings.complete
    });
    };
    
    
    $('#number1').jQuerySimpleCounter({end: 05,duration: 2000});
    $('#number2').jQuerySimpleCounter({end: 10,duration: 3000});
    $('#number3').jQuerySimpleCounter({end: 10,duration: 3000});
    $('#number4').jQuerySimpleCounter({end: 25,duration: 2500});
    $('#number5').jQuerySimpleCounter({end: 50,duration: 2000});
    $('#number6').jQuerySimpleCounter({end: 100,duration: 2500});

    //fixed navbar
$(window).scroll(function(){
    if ($(window).scrollTop() >= 52) {
        $('.header').addClass('fixed-header');
    }
    else {
        $('.header').removeClass('fixed-header');
    }
});

// window.onload = function () {
//     $(document).ready(function(){
//         $('#submit-form').on('submit',function (e) {
//             e.preventDefault();
//             var required = {
//                 'fname':{
//                     validate:/^[a-z ]+$/ig
//                 },
//                 'contact-email':{
//                     validate:/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
//                 },
//                 'contact-phone':{
//                     validate:/^[0-9]{10}$/ig
//                 },
//                 'option':'required'
//             };
//             var formdata = $(this).serializeArray();
//             var err = 0;
//             formdata.forEach(function (val,i) {
//                 if (required[val.name]) {
//                     if (required[val.name] == 'required') {
//                         if (val.value.trim().length == 0) {
//                             err = 1;
//                             $(`#${val.name}_err`).show().text('This Field is Required' );
//                         } else {
//                             $(`#${val.name}_err`).hide();
//                         }
//                     } else if ('validate' in required[val.name]) {
//                         if (required[val.name].validate.test(val.value.trim()) == false) {
//                             err = 1;
//                             $(`#${val.name}_err`).show().text( val.value.trim().length == 0 ? 'This Field is Required' : 'This Field is Invalid' );
//                         } else {
//                             $(`#${val.name}_err`).hide();
//                         }
//                     }                        
//                 }
//             })
//             if (err == 0) {
//             var thebtn = $('#form_submit_btn');
//             thebtn[0].disabled = true;
//                 $.ajax({
//                     url:'https://site4clientdemo.com/akpis/campaign/mail.php',
//                     type:'POST',
//                     data: new FormData(this),
//                     processData:false,
//                     contentType:false,
//                     success:function (data) {
//                         if (data.status == 'ok') {
//             $('#submit-form')[0].reset();
//             thebtn[0].disabled = false;
//                             $('#show_succ').css('display','block');
//                             $('#show_err').hide();
//                             window.location = 'https://site4clientdemo.com/akpis/campaign/thank-you.html'
//                             setTimeout(() => {
//                                 $('#show_succ').hide();
//                             }, 3000);
//                         } else {
//                             thebtn[0].disabled = false;
//                             $('#show_succ').hide();
//                             $('#show_err').css('display','block').text(data.message ? data.message : 'Error Occured, Try Again');
//                             setTimeout(() => {
//                                 $('#show_err').hide();
//                             }, 3000);
//                         }
//                     },
//                     error:function() {
//                         thebtn[0].disabled = false;
//                         $('#show_err').css('display','block');
//                         setTimeout(() => {
//                                 $('#show_err').hide();
//                         }, 3000);
//                     }
//                 })
//             }
//         })
//     })
// }

$(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });
});

$(document).ready(function () {
    $('.comic-content .col-md-2:lt(5)').show();
    $('.less').hide();
    var items =  15;
    var shown =  4;
    $('.more').click(function () {
        $('.less').show();
        shown = $('.comic-content .col-md-2:visible').length+4;
        if(shown< items) {
          $('.comic-content .col-md-2:lt('+shown+')').show(300);
        } else {
          $('.comic-content .col-md-2:lt('+items+')').show(300);
          $('.more').hide();
        }
    });
    $('.less').click(function () {
        $('.comic-content .col-md-2').not(':lt(5)').hide(300);
        $('.more').show();
        $('.less').hide();
    });
});

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
$(document).ready(function () {
    $('ol li a').click(function () {
      $('ol li a.active-1').removeClass('active-1');
      $('ol li a.active-1').addClass('font-weight-bold');
      $(this).closest('a').addClass('active-1');
    });

  });