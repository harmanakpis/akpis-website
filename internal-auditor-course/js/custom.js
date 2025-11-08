var metas = document.getElementsByTagName('meta');
var i;
if (navigator.userAgent.match(/iPhone/i)) {
  for (i=0; i<metas.length; i++) {
    if (metas[i].name == "viewport") {
      metas[i].content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
    }
  }
  document.addEventListener("gesturestart", gestureStart, false);
}
function gestureStart() {
  for (i=0; i<metas.length; i++) {
    if (metas[i].name == "viewport") {
      metas[i].content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
    }
  }
}



var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
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

/*function myFunction() {
    var x = document.getElementById("enquire");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}*/

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

function myFunpop() {         
        
    var correct_way = /^[A-Z a-z]+$/;
    var email12 = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    /*var phone12 =/^[0-9]+$/;*/
    var phone12 =/^[0-9]{10}+$/;

    var f = document.getElementById("your_name2").value;
        g = document.getElementById("your_number2").value;
        h = document.getElementById("your_email2").value;

    if (f =="") {
        document.getElementById("your-name-error").innerHTML = "Please fill Full Name"; 
        return false;               
    }else{
        document.getElementById("your-name-error").innerHTML = ""; 
        
    }

    if (f.match(correct_way))
        true;  
    else{
        document.getElementById("your-name-error").innerHTML ="Please fill only alphabet";
    return false;
   }           

   if (g =="") {
        document.getElementById("your-phone-error").innerHTML ="Please fill Phone Number";
        return false;
   }else{
        document.getElementById("your-phone-error").innerHTML ="";
   }

   if (g.length>10) {
        document.getElementById('your-phone-error').innerHTML ="Mobile number must be 10 digit";
        return false;
   }else{
        document.getElementById('your-phone-error').innerHTML ="";
   }

   if (g.length<10) {
        document.getElementById('your-phone-error').innerHTML ="Mobile number must be 10 digit";
        return false;
   }else{
        document.getElementById('your-phone-error').innerHTML ="";
   }
   
   if (g.match(phone12)){

        return true;  
   }

    else{

        document.getElementById("your-phone-error").innerHTML ="Please fill only numbers";

    return false;

   } 

   if (h =="") {
        document.getElementById("your-email-error").innerHTML ="Please fill email id";
        return false;
   }else{
        document.getElementById("your-email-error").innerHTML ="";
   }
   
   if (h.match(email12))

        true;  

    else{

        document.getElementById("your-email-error").innerHTML ="Please fill correct email";

    return false;

   } 

}

function closeForm() {
    var x = document.getElementById("enquireForm");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
    var v = document.getElementById("downloadForm");
    if (v.style.display === "block") {
        v.style.display = "none";
    }
    var t = document.getElementById("freePop");
    if (t.style.display === "block") {
        t.style.display = "none";
    }
    document.body.classList.remove('backdrop');
}