var metas = document.getElementsByTagName('meta');
var i;
if (navigator.userAgent.match(/iPhone/i)) {
    for (i = 0; i < metas.length; i++) {
        if (metas[i].name == "viewport") {
            metas[i].content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
        }
    }
    document.addEventListener("gesturestart", gestureStart, false);
}

function gestureStart() {
    for (i = 0; i < metas.length; i++) {
        if (metas[i].name == "viewport") {
            metas[i].content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
        }
    }
}



var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    loop: false,
    spaceBetween: 0,
    centeredSlides: true,
    speed: 5000,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        waitForTransition: true,
    },
    effect: "cube",
    grabCursor: true,
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowScale: 0.94,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".SwiperCat", {
    loop: true,
    centeredSlides: false,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});


function myFunction1() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Learn More";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Learn Less";
        moreText.style.display = "inline";
    }
}

jQuery(document).ready(function($) {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('#backToTop').fadeIn('slow');
        } else {
            $('#backToTop').fadeOut('slow');
        }
    });
    $('#backToTop').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });
});

// function myFunction() {
//     var x = document.getElementById("enquire");
//     if (x.style.display === "block") {
//         x.style.display = "none";
//     } else {
//         x.style.display = "block";
//     }
// }


function myForm() {
    document.body.classList.add('backdrop');
    var z = document.getElementById("enquireForm");
    z.style.display = "block";
}

function downloadBrochure() {
    document.body.classList.add('backdrop');
    var y = document.getElementById("downloadForm");
    y.style.display = "block";
}

function freePopDiv() {
    document.body.classList.add('backdrop');
    var u = document.getElementById("freePop");
    u.style.display = "block";
}

function closeForm() {
    var x = document.getElementById("enquireForm");
    var inputname = document.getElementById("enquiry_popup_form_name");
    var inputname = document.getElementById("enquiry_popup_form_email");
    var inputname = document.getElementById("enquiry_popup_form_phone");
    var inputname = document.getElementById("enquiry_popup_form_city");

    if (x.style.display === "block") {
        x.style.display = "none";
    }
    
    
    document.body.classList.remove('backdrop');
    inputname.value = '';    

}