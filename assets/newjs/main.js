






document.querySelectorAll('.online_ifrs_course').forEach(section => {
  const tabButtons = section.querySelectorAll('.tab-btn');
  const tabPanels = section.querySelectorAll('.tab-panel');

  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      // Remove active from all buttons in this section
      tabButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      // Hide all panels in this section
      tabPanels.forEach(panel => panel.style.display = 'none');

      // Show selected panel
      const target = btn.getAttribute('data-tab');
      section.querySelector('#' + target).style.display = 'block';
    });
  });
});

$(document).ready(function () {
     (function($){
      var phrases = [
        "Practical live classes & doubt clearing.",
        "Flexible schedules — morning & evening batches.",
        "Mock tests and detailed study material.",
        "Personalised attention for every student."
      ];
      var typeSpeed = 60;    // ms per character
      var backSpeed = 35;    // ms per character (deleting)
      var pauseAfter = 1400; // pause after full phrase
      var loop = true;

      var pi = 0, ci = 0, typing = true;
      var $txt = $('.typed-text');

      function _type(){
        var str = phrases[pi];
        if(typing){
          // add next char
          $txt.text(str.slice(0, ci+1));
          ci++;
          if(ci === str.length){
            typing = false;
            setTimeout(_type, pauseAfter);
          } else setTimeout(_type, typeSpeed);
        } else {
          // deleting
          $txt.text(str.slice(0, ci-1));
          ci--;
          if(ci === 0){
            typing = true;
            pi = (pi + 1) % phrases.length;
            // small pause before typing next
            setTimeout(_type, 300);
            if(!loop && pi===0) return;
          } else setTimeout(_type, backSpeed);
        }
      }

      // start when DOM ready
      $(function(){ setTimeout(_type, 400); });
    })(jQuery);

    var reverseSlider = $('.secondplacement_right');

    setInterval(function () {
        reverseSlider.slick('slickPrev');
    }, 2000);

    $('.responsive').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        cssEase: 'ease-in-out',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 6,

            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 8
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 8
            }
        }

        ]
    });
    $('.responsive2').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        cssEase: 'ease-in-out',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,

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

    $('.alumni-slider').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        cssEase: 'ease-in-out',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,

            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },

        ]
    });
    $('.testomoinal_slider').slick({
        dots: true,
        infinite: true,
        speed: 800, // transition speed (1 second)
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        cssEase: 'ease-in-out',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,

            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },

        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
    


    $(document).ready(function () {
        function bindMobileMenu() {
            if ($(window).width() <= 768) {
                // Mobile view ke liye
                $("#toggle_mobile_program").off("click").on("click", function () {
                    $("#programMenu").fadeToggle(500);
                    $(this).find("i").toggleClass("rotate");
                });

                $("#cpa_mobile_program").off("click").on("click", function () {
                    $("#cpaprogramMenu").fadeToggle(500);
                    $(this).find("i").toggleClass("rotate");
                });
            } else {
                // Desktop view ke liye menus reset
                $("#programMenu, #cpaprogramMenu").removeAttr("style"); // hide/remove inline styles
                $("#toggle_mobile_program i, #cpa_mobile_program i").removeClass("rotate");
                $("#toggle_mobile_program, #cpa_mobile_program").off("click"); // disable click
            }
        }

        // Run on load
        bindMobileMenu();

        // Run on window resize
        $(window).resize(function () {
            bindMobileMenu();
        });
    });


});