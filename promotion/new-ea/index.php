<?php


	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
		$link = "https://"; 
	}else{
		$link = "http://"; 
	}
	
	// Append the host(domain name, ip) to the URL. 
	$link .= $_SERVER['HTTP_HOST']; 
   
	// Append the requested resource location to the URL 
	if(!empty($_SERVER['REQUEST_URI'])){
		$link .= $_SERVER['REQUEST_URI']; 
	}
	

?>
<!doctype html>

<html lang="en">



<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N8ZZM86');
    </script>
    <!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-238854941-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-238854941-1');
</script>



    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:title" content="EA - AKPIS" />

    <meta property="og:description" content="The EA Test, also known as the Special Enrollment Examination (SEE), is a three-part exam conducted on behalf of the Internal Revenue Service by Prometric. Each section is a separate 100-question exam with a time limit of 3.5 hours to complete all of the questions."
    />

    <meta property="og:image" content="http://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-ea/img/banner-2.jpg" />

    <meta property="og:image:secure_url" content="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-ea/img/banner-2.jpg" />

    <meta property="og:image:type" content="image/jpg" />

    <meta property="og:image:width" content="400" />

    <meta property="og:image:height" content="300" />

    <link rel="shortcut icon" href="img/logo.jpg" />

    <title>EA - AKPIS</title>



    <link rel="stylesheet" href="fontawesome/css/all.css">

    <link rel="stylesheet" href="css/swiper.css">

    <link href="css/lightboxed.css" rel="stylesheet" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>



<body onload="myForm()">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8ZZM86"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- header start -->

    <header>

        <nav class="container navbar navbar-expand-md d-flex navbar-light">

            <a class="navbar-brand" href="#"><img src="img/logo.jpg" alt="logo"></a>

            <div class="contact-details">

                <a href="tel:+918527524176"><img src="img/call-icon.png" alt="call"> +918527524176</a>

                <a href="mailto:support@akpisprofessionals.com"><img src="img/mail-icon.png" alt="mail"> support@akpisprofessionals.com</a>

            </div>

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="d-flex ml-md-auto">

                <div class="collapse navbar-collapse" id="navbarText">

                    <ul class="navbar-nav mr-0">

                        <li class="nav-item active">

                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#about">About Us</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#why">Why Us</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#demo">Lectures</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#achieve">Achievers</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#gallery">Gallery</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#contact">Contact</a>

                        </li>

                    </ul>

                </div>

            </div>

        </nav>

    </header>

    <!-- header end -->



    <!-- banner slider start -->

    <section class="banner-section">

        <!-- Swiper -->

        <div class="swiper mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <img src="img/banner-1.jpg" alt="banner-1">

                </div>

                <div class="swiper-slide">

                    <img src="img/banner-2.jpg" alt="banner-2">

                </div>

                <div class="swiper-slide">

                    <img src="img/Banner-3.jpg" alt="banner-3">

                </div>

                <div class="swiper-slide">

                    <img src="img/Banner-4.jpg" alt="banner-4">

                </div>

                <div class="swiper-slide">

                    <img src="img/Banner-5.jpg" alt="banner-5">

                </div>

                <div class="swiper-slide">

                    <img src="img/Banner-6.jpg" alt="banner-6">

                </div>

            </div>

            <div class="swiper-button-next"></div>

            <div class="swiper-button-prev"></div>

            <!-- <div class="swiper-pagination"></div> -->

        </div>

        <div class="banner-form" id="enquire">

            <div class="form-inner">

                <h3>Need More info Enrolled Agent</h3>

                <h4>Get a call Back</h4>

                <form name="enquiry-form" onsubmit="return validateForm('phone1', 'phone-error1')" action="mail/index.php" method="post">
					<input type="hidden" name="current_url" value="<?php echo $link;?>" />
                    <!-- <input type="hidden" class="form-control" name="enquery-form" id="enquery-form" value="enquery-form" placeholder="Enquery Form"> -->

                    <div class="form-group">

                        <input type="text" name="name" class="form-control" id="your-name" placeholder="Enter Name*" required>

                        <span class="error" id="your-name-error"></span>

                    </div>

                    <div class="form-group">

                        <input type="email" name="email" class="form-control" id="your-email" placeholder="Enter Email*" required>

                        <span class="error" id="your-email-error"></span>

                    </div>

                    <div class="form-group">

                        <input type="number" name="number" id="phone1" class="form-control" placeholder="Enter Phone*" required>

                        <span class="error" id="phone-error1"></span>

                    </div>

                    <div class="form-group">

                        <textarea class="form-control" name="message" id="your-message" placeholder="Message*" required></textarea>

                        <span class="error" id="your-message-error"></span>

                    </div>

                    <!--  <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LdY-bkfAAAAAA3g5kt3Zu9f50tpMVihVLc0tT0Q"></div>
                    </div> -->

                    <div class="form-group">

                        <button type="submit" name="send" value="sendMail" class="fr-sub form-control">Enquire Now</button>
                        <!-- <input type="button" value="Enquire Now" name="send" class="fr-sub form-control" id="formsubmit"> -->

                    </div>

                </form>

                <p>or Call Us: <a href="tel:+919205207573">9205207573</a></p>

            </div>

        </div>

    </section>

    <!-- banner slider end -->

    <!-- <section class="free-section">
        <div class="container">
            <div class="text-center">
                <a href="javascript:void(0);" class="btn-theme" onclick="freePopDiv()" data-aos="fade-up" data-aos-duration="3000">Free Advance Fundamentals Lectures Of US-CMA</a>
            </div>
        </div>
    </section> -->

    <!-- section-1 -->

    <section class="section-1" data-aos="fade-up" data-aos-duration="3000">

        <div class="container">

            <img src="img/glem.jpg" alt="gliem" class="w-100">

        </div>

    </section>

    <!-- section-1 -->



    <!-- section-2 -->

    <section class="section-2" id="about">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <h3>ENROLL NOW <strong>GIVE WINGS TO YOUR CAREER</strong></h3>

                    <h6>If you wish to give wings to your career, then opting for an Enrolled Agent Course in Delhi from AKPIS Professionals can be it.</h6>

                    <p>We, at AKPIS, work meticulously with you, for your growth. Our Enrollment Agent course training institute in Delhi will provide you with the right knowledge and the tools to make the most out of your dream. Learning US taxes, Audits,
                        etc, from our professionals will help you upskill your career. A fantastic salary package is a cherry on the cake. With the right guidance from AKPIS Professionals, you can dream big and accomplish it against all odds. Get your
                        hands on a career of immense growth in US Taxation in merely 3 months. Guarantee yourself an average salary package of 4.5 Lakh p.a. as a fresher and 14 Lakh p.a. as an experience.</p>

                    <ul>

                        <li>In demand online live course training</li>

                        <li>Adjustable batch timings</li>

                        <li>Secure a guaranteed career growth </li>

                        <li>Professional and skilled faculty</li>

                        <li>Interactive classroom training with one on one doubt sessions</li>

                        <li>Exam-oriented preparation with lots of practice sets</li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <img src="img/pic-1.jpg" alt="pic" class="w-100" data-aos="zoom-in" data-aos-duration="3000">

                </div>

            </div>

        </div>

    </section>

    <!-- section-2 -->



    <!-- section-5 -->

    <section class="section-5">

        <div class="container">

            <video width="100%" controls controlsList="nodownload" poster="img/v-1.jpg" data-aos="zoom-in" data-aos-duration="3000">



                <source src="video/v4.mp4" type="video/mp4">



                Your browser does not support HTML video.



            </video>

            <div class="row py-5">

                <div class="col-md-4">

                    <div class="iconbox" data-aos="fade-down" data-aos-duration="2000">

                        <h4>Education</h4>

                        <p>We have been offering innovative EA classes that are phenomenally designed as per the dynamic tax laws, current trends and requirements. </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="iconbox" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300">

                        <h4>Employment</h4>

                        <p>Join our interactive training course and explore the corporate world by working for Big 4/other USA MNCs into tax and accounting.</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="iconbox" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="600">

                        <h4>Entrepreneurship</h4>

                        <p>We provide the opportunity to learn US Taxes, Audits, Business tax to step into the awesome career in USA taxation as an entrepreneur.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- section-5 -->



    <!-- section-6 -->

    <section class="section-6" id="why">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <img src="img/Why-Us.png" class="w-100" alt="akpis" data-aos="zoom-in" data-aos-duration="3000">

                </div>

                <div class="col-md-6 position-relative">

                    <h3>WHY CHOOSE <strong>AKPIS PROFESSIONALS</strong></h3>

                    <h6>Interactive classroom training with one on one doubt sessions</h6>

                    <ul>

                        <li>Grab the best opportunity to become a professional Enrolled Agent with a concurrent Enrolled Agent course. Uplift your skills and make a mark with an impactful Curriculum Vitae. Get your hands on the chance to learn tax preparation
                            either online with live streaming or in a classroom.</li>

                        <li>Learn with practical experience and case studies.</li>

                        <li>Get the chance to interact with the feature of Interactive Training at AKPIS Professional institutes.</li>

                        <li>A concurrent learning experience for tax preparation exams.</li>

                    </ul>

                    <h6>Adjustable batch timing</h6>

                    <ul>

                        <li>Learning could not have been any more fun if it was not for AKPIS Professionals. All you have to do is join a leading lot of Enrolled Agent courses in Delhi with us. Candidates have the freedom to opt from the varying batch timing
                            and learn at their own pace. Crack the exam in a go by joining the classes offered by experts in the field. </li>

                        <li>Adaptive Enrollment Agent Training Course at AKPIS.</li>

                        <li>Learn at your own pace with adjustable batch timings.</li>

                        <li>Avail of the benefits of either offline or live online classes.</li>

                    </ul><span id="dots"> </span>

                    <span id="more">

                        <h6>Professional and skilled faculty</h6>

                        <ul>

                            <li>We make learning fun. With world-class faculty and professional teachers, get help to crack the toughest exam of all times. AKPIS Professionals balance teaching with fun, giving you the chance to get hands-on experience through

                                the use of case studies. Get a better hold of the concepts with training in topics ranging from individual taxes, business tax, and tax representation, to name a few. Reach the zenith of success and flourish your career with

                                the right guidance.</li>

                            <li>Well versed and experienced teaching professionals.</li>

                            <li>Get acquainted with the trends of taxes in the current scenario.</li>

                            <li>In-depth and thorough knowledge.</li>

                        </ul>

                        <h6>Exam-oriented preparation with lots of practice sets</h6>

                        <ul>

                            <li>When you learn from the right sources, you can never go wrong. We at AKPIS Professionals provide you with numerous practice sets and MCQs so that you can polish your skills. Get guidance from the teachers in online or offline classes

                                wherever you get stuck. When you join the Enrollment Agent course at AKPIS, we will ensure to give you the right guidance so that you pass the exam with flying colours.</li>

                            <li>Detailed and handwritten notes for understanding.</li>

                            <li>Finest and enormous EA test back study guide. </li>

                            <li>Practice sets in accordance with the exams. </li>

                        </ul>

                    </span>

                    <button onclick="myFunction1()" id="myBtn" class="btn-theme">Learn More</button>

                </div>

            </div>

        </div>

    </section>

    <!-- section-6 -->



    <!-- section-7 -->

    <section class="section-7">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h3>Career <strong>Growth chart</strong></h3>

                    <img src="img/arrow.png" alt="arrow" class="arrow w-100">

                    <div class="icon-midbox m1" data-aos="fade-up-right" data-aos-duration="2000" data-aos-delay="100" data-aos-easing="linear">

                        <h4>JOIN AKPIS</h4>

                        <p>Tax Academy as an “EA Student”</p>

                        <img src="img/right-arrow.png" alt="arrow">

                    </div>

                    <div class="icon-midbox m2" data-aos="fade-up-right" data-aos-duration="2000" data-aos-delay="500" data-aos-easing="linear">

                        <h4>PASS</h4>

                        <p>The EA Exam in 3-6 Months and become “Enrolled Agent”</p>

                        <img src="img/right-arrow.png" alt="arrow">

                    </div>

                    <div class="icon-midbox m3" data-aos="fade-up-right" data-aos-duration="2000" data-aos-delay="1000" data-aos-easing="linear">

                        <img src="img/right-arrow.png" alt="arrow">

                        <h4>Become a tax professionals</h4>

                        <p>Practice US Taxation in Your Employment as a Partner / Practice Manager offering unique Tax & Financial Planning Solutions</p>

                    </div>

                    <div class="icon-midbox m4" data-aos="fade-up-right" data-aos-duration="2000" data-aos-delay="1500" data-aos-easing="linear">

                        <img src="img/right-arrow.png" alt="arrow">

                        <h4>Join Big Four and Mnc’s </h4>

                        <p>Serve the Organization by Training Others also become Successful Tax & Finance Professionals (EA/CPA/CFP) with your Real Time Industry Experience</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- section-7 -->



    <!-- section-8 -->

    <section class="section-8">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <h3>GET YOUR HANDS ON <strong>WORLD-CLASS LEARNING AND CAREER GROWTH IN US TAXATION IN JUST 3 MONTHS</strong></h3>

                    <ul>

                        <li>As a Fresher: Earn the benefits of a salary pack of up to 7.0 Lakhs per annum.</li>

                        <li>As an Experienced: Earn the benefits of a salary pack of up to 18.5 Lakhs p.a.</li>

                        <li>As an Experienced: Direct entry in the Big 4 Standards after the EA qualification.</li>

                        <li>Guarantee yourself a secure 40 years career with immense growth in the US Taxation industry with a 40 days investment at AKPIS Professionals.</li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <img src="img/pic-3.jpg" alt="akpis" class="w-100" data-aos="zoom-in" data-aos-duration="3000">

                </div>

            </div>

            <div class="row mt-5">

                <div class="col-md-6">

                    <img src="img/pic-4.jpg" alt="akpis" data-aos="zoom-in" data-aos-duration="3000">

                </div>

                <div class="col-md-6">

                    <h3>TIME TO INTROSPECT <strong>WHY YOU DID NOT MAKE IT INTO THE BIG 4 AS AN EXPERIENCED ASSISTANCE MANAGER</strong></h3>

                    <ul>

                        <li>Understand the why’s and how’s.</li>

                        <li>Did you avail yourself of the EA course in US Taxation at AKPIS Taxation?</li>

                        <li>What are you waiting for? Make a move today.</li>

                        <li>Enjoy the immense benefits of being a US certified Enrollment Agent.</li>

                        <li>Book yourself in the Enrollment Agent Course with us at the earliest!</li>

                    </ul>

                </div>

            </div>

        </div>

    </section>

    <!-- section-8 -->



    <!-- section-9 -->

    <section class="section-9" id="demo">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h3>Demo <strong>Lectures</strong></h3>

                </div>

            </div>

            <div class="row">

                <div class="col-md-7">

                    <video width="100%" controls controlsList="nodownload" poster="img/v-2.jpg" data-aos="zoom-in" data-aos-duration="3000">



                        <source src="video/v1.mp4" type="video/mp4">

    

                        Your browser does not support HTML video.

    

                    </video>

                </div>

                <div class="col-md-5">

                    <video width="100%" controls controlsList="nodownload" poster="img/v-3.jpg" data-aos="zoom-in" data-aos-duration="3000">



                        <source src="video/v2.mp4" type="video/mp4">

    

                        Your browser does not support HTML video.

    

                    </video>

                    <video width="100%" controls controlsList="nodownload" poster="img/v-4.jpg" data-aos="zoom-in" data-aos-duration="3000">



                        <source src="video/v3.mp4" type="video/mp4">

    

                        Your browser does not support HTML video.

    

                    </video>

                </div>

            </div>

        </div>

    </section>

    <!-- section-9 -->



    <!-- section-10 -->

    <section class="section-10">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h3>EA Course <strong>Exam Details</strong></h3>

                    <p>EA exam has three parts.</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">

                        <li class="nav-item">

                            <a class="nav-link active" id="pills-Individuals-tab" data-toggle="pill" href="#pills-Individuals" role="tab" aria-controls="pills-Individuals" aria-selected="true">Individuals</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" id="pills-Business-tab" data-toggle="pill" href="#pills-Business" role="tab" aria-controls="pills-Business" aria-selected="false">Business</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" id="pills-Representation-tab" data-toggle="pill" href="#pills-Representation" role="tab" aria-controls="pills-Representation" aria-selected="false">Representation</a>

                        </li>

                    </ul>

                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-Individuals" role="tabpanel" aria-labelledby="pills-Individuals-tab">

                            <ul>

                                <li>Preliminary Work with Taxpayer Data – 17 questions</li>

                                <li>Income and Assets – 21 questions</li>

                                <li>Deductions and Credits – 21 questions</li>

                                <li>Taxation and Advice – 14 questions</li>

                                <li>Specialized Returns for Individuals – 12 questions</li>

                            </ul>

                        </div>

                        <div class="tab-pane fade" id="pills-Business" role="tabpanel" aria-labelledby="pills-Business-tab">

                            <ul>

                                <li>Business Entities – 28 questions</li>

                                <li>Business Financial Information – 39 questions</li>

                                <li>Specialized Returns and Taxpayers – 18 questions</li>

                            </ul>

                        </div>

                        <div class="tab-pane fade" id="pills-Representation" role="tabpanel" aria-labelledby="pills-Representation-tab">

                            <ul>

                                <li>Practices and Procedures – 25 questions</li>

                                <li>Representation before the IRS – 24 questions</li>

                                <li>Specific Types of Representation – 19 questions</li>

                                <li>Filing Process – 17 questions</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- section-10 -->



    <!-- section-11 -->

    <section class="section-11" id="achieve">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h3>Our <strong>Achievers</strong></h3>

                    <p>Great education. Great outcomes.</p>

                </div>

            </div>

        </div>

        <div class="container-fluid">

            <div class="achieve-team">

                <div class="row1">

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a1.jpeg" alt="achieve">

                        <p>AKPIS Professionals definitely would make the journey a whole lot simpler. Perfect</p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a2.jpeg" alt="achieve">

                        <p>Special shout-out to professionals for their constant support and guidance.</p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a3.jpeg" alt="achieve">

                        <p>AKPIS Professionals do their part very well</p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a4.jpeg" alt="achieve">

                        <p>Indeed, their main attractions are well experienced and friendly faculties, </p>

                    </div>

                </div>

                <div class="row2">

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a5.jpeg" alt="achieve">

                        <p> With the high-quality teaching style and support, set your career goals.</p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a6.jpeg" alt="achieve">

                        <p>The AKPIS took my CMA preparation to the very next level.</p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a7.jpeg" alt="achieve">

                        <p>Thank You, AKPIS team, for convincing me to choose you over any other educators. </p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a8.jpeg" alt="achieve">

                        <p>The support and encouragement of the AKPIS team were remarkable.</p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a9.jpeg" alt="achieve">

                        <p>With AKPIS, you are destined to achieve what you have set out to. </p>

                    </div>

                </div>

                <div class="row3">

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a10.jpeg" alt="achieve">

                        <p> The journey with AKPIS has been brilliant.</p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a11.jpeg" alt="achieve">

                        <p>Undoubtedly all the concepts were taken up, and queries were solved. </p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a12.jpeg" alt="achieve">

                        <p>Study tips offered by the AKPIS Instructor helped me immensely plan my exam strategy.</p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a13.jpeg" alt="achieve">

                        <p>AKPIS has always been approachable and trouble-shooters for me. </p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a14.jpeg" alt="achieve">

                        <p>Indeed, every class was very engaging and helpful in achieving the goal. </p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a15.jpeg" alt="achieve">

                        <p>AKPIS gave me direction to set my career goals. </p>

                    </div>

                </div>

                <div class="row4">

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a16.jpeg" alt="achieve">

                        <p>The team of AKPIS supported me right from the academics till I got the certification. </p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a17.jpeg" alt="achieve">

                        <p>The classes and lessons are valuable, offering every information you want.</p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a18.jpeg" alt="achieve">

                        <p>Every course is well structured and consists of excellent teaching and learning styles.</p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a19.jpeg" alt="achieve">

                        <p>Excellent certification courses are available that help in setting career goals.</p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a20.jpeg" alt="achieve">

                        <p>AKPIS teaching and online classes are tremendously effective in clearing the concept. </p>

                    </div>

                </div>

                <div class="row5">

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a21.jpeg" alt="achieve">

                        <p>The quality of study material, classes, and teachers' knowledge are commendable. </p>

                    </div>

                    <div class="achieve" data-aos="flip-right" data-aos-duration="3000">

                        <img src="img/a22.jpeg" alt="achieve">

                        <p>Undoubtedly, AKPIS provides dedicated efforts and excellent material to achieve certification. </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- section-11 -->



    <!-- section-12 -->

    <section class="section-12">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h3>Our <strong>Students</strong></h3>

                </div>

            </div>

            <div class="row">

                <div class="col-md-4">

                    <img src="img/c1.png" alt="akpis" class="w-100" data-aos="zoom-in" data-aos-duration="3000">

                </div>

                <div class="col-md-4">

                    <img src="img/c2.png" alt="akpis" class="w-100" data-aos="zoom-in" data-aos-duration="3000">

                </div>

                <div class="col-md-4">

                    <img src="img/c3.png" alt="akpis" class="w-100" data-aos="zoom-in" data-aos-duration="3000">

                </div>

            </div>

        </div>

    </section>

    <!-- section-12 -->



    <!-- section-13 -->

    <section class="section-13" id="gallery">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h3>Our <strong>Gallery</strong></h3>

                </div>

            </div>

            <div class="row gallery1 sec1">

                <div class="col-md-12 gallery-col">

                    <img class="lightboxed column" rel="group2" src="img/a1.jpeg" data-link="img/a1.jpeg" alt="Image Alt" data-caption="1" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a2.jpeg" data-link="img/a2.jpeg" alt="Image Alt" data-caption="2" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a3.jpeg" data-link="img/a3.jpeg" alt="Image Alt" data-caption="3" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a4.jpeg" data-link="img/a4.jpeg" alt="Image Alt" data-caption="4" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a5.jpeg" data-link="img/a5.jpeg" alt="Image Alt" data-caption="5" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a6.jpeg" data-link="img/a6.jpeg" alt="Image Alt" data-caption="6" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a7.jpeg" data-link="img/a7.jpeg" alt="Image Alt" data-caption="7" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a8.jpeg" data-link="img/a8.jpeg" alt="Image Alt" data-caption="8" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a9.jpeg" data-link="img/a9.jpeg" alt="Image Alt" data-caption="9" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a10.jpeg" data-link="img/a10.jpeg" alt="Image Alt" data-caption="10" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a11.jpeg" data-link="img/a11.jpeg" alt="Image Alt" data-caption="11" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a12.jpeg" data-link="img/a12.jpeg" alt="Image Alt" data-caption="12" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a13.jpeg" data-link="img/a13.jpeg" alt="Image Alt" data-caption="13" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a14.jpeg" data-link="img/a14.jpeg" alt="Image Alt" data-caption="14" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a15.jpeg" data-link="img/a15.jpeg" alt="Image Alt" data-caption="15" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a16.jpeg" data-link="img/a16.jpeg" alt="Image Alt" data-caption="16" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a17.jpeg" data-link="img/a17.jpeg" alt="Image Alt" data-caption="17" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a18.jpeg" data-link="img/a18.jpeg" alt="Image Alt" data-caption="18" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a19.jpeg" data-link="img/a19.jpeg" alt="Image Alt" data-caption="19" data-aos="flip-down" data-aos-duration="2000" />

                    <img class="lightboxed column" rel="group2" src="img/a20.jpeg" data-link="img/a20.jpeg" alt="Image Alt" data-caption="20" data-aos="flip-down" data-aos-duration="2000" />

                </div>

            </div>

        </div>

    </section>

    <!-- section-13 -->



    <!-- section-14 -->

    <section class="section-14">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h3>Our Students <strong>Working in mnc's</strong></h3>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="swiper SwiperCat">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide">

                                <img src="img/cl1.jpg" alt="client" class="w-100">

                            </div>

                            <div class="swiper-slide">

                                <img src="img/cl2.jpg" alt="client" class="w-100">

                            </div>

                            <div class="swiper-slide">

                                <img src="img/cl3.jpg" alt="client" class="w-100">

                            </div>

                            <div class="swiper-slide">

                                <img src="img/cl4.jpg" alt="client" class="w-100">

                            </div>

                            <div class="swiper-slide">

                                <img src="img/cl5.jpg" alt="client" class="w-100">

                            </div>

                            <div class="swiper-slide">

                                <img src="img/cl6.jpg" alt="client" class="w-100">

                            </div>

                            <div class="swiper-slide">

                                <img src="img/cl7.jpg" alt="client" class="w-100">

                            </div>

                            <div class="swiper-slide">

                                <img src="img/cl8.jpg" alt="client" class="w-100">

                            </div>

                            <div class="swiper-slide">

                                <img src="img/cl9.jpg" alt="client" class="w-100">

                            </div>

                            <div class="swiper-slide">

                                <img src="img/cl10.jpg" alt="client" class="w-100">

                            </div>

                        </div>

                        <div class="swiper-button-next"></div>

                        <div class="swiper-button-prev"></div>

                        <div class="swiper-pagination"></div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- section-14 -->



    <!-- section-15 -->

    <!--<section class="section-15">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <h3>GRAB THE CHANCE TO JOIN <strong>THE FINEST ENROLLMENT AGENT COURSE TRAINING INSTITUTE!</strong></h3>

                </div>

                <div class="col-md-4">

                    <form action="subscribe/index.php" method="post" class="form-inline">

                        <input type="email" name="email" id="mail" placeholder="Enter Your Email">

                        <button type="submit" class="btn btn-submit">

                            <img src="img/long-arrow.png" alt="arrow" class="w-100">

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>-->

    <!-- section-15 -->



    <!-- footer -->

    <footer id="contact">

        <div class="footer-section">

            <div class="container">

                <div class="row">

                    <div class="col-md-4">

                        <p>The EA Test, also known as the Special Enrollment Examination (SEE), is a three-part exam conducted on behalf of the Internal Revenue Service by Prometric. Each section is a separate 100-question exam with a time limit of 3.5 hours
                            to complete all of the questions.</p>

                        <br><br>

                        <h4>Our Location</h4>

                        <p><strong>A - 93 B, Lajpat Nagar 2, Delhi - 110024</strong></p>

                    </div>

                    <div class="col-md-4">

                        <h4>Contact Details</h4>

                        <h6>Email</h6>

                        <a href="mailto:support@akpisprofessionals.com">support@akpisprofessionals.com</a>

                        <h6>Phone No.</h6>

                        <a href="tel:+918527524176">+918527524176</a>

                    </div>

                    <div class="col-md-4">

                        <h4>Social Media</h4>

                        <a href="https://www.facebook.com/AKPISPROFESSIONALS/" target="_blank"><i class="fab fa-facebook-f"></i></a>

                        <a href="https://www.youtube.com/c/AKPISProfessionals" target="_blank"><i class="fab fa-youtube"></i></a>

                        <a href="https://www.instagram.com/cashammisaluja/" target="_blank"><i class="fab fa-instagram"></i></a>

                        <a href="https://www.linkedin.com/company/akpis-ca-cpa-cma-courses/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin-in"></i></a>

                    </div>

                </div>

            </div>

        </div>

        <div class="footer-bottom text-center">

            <p>Copyright © 2022 AKPIS Professionals | All Rights Reserved</p>

        </div>

    </footer>

    <!-- footer -->

    <div class="banner-form load" id="enquireForm">

        <a href="javascript:void(0);" alt="close" onclick="closeForm()"><i class="fas fa-times-circle"></i></a>

        <div class="form-inner">

            <h3>Need More info Enrolled Agent</h3>

            <h4>Get a call Back</h4>
            <form name="enquiry-form" onsubmit="return validateForm('phone2', 'phone-error2')" action="mail/index.php" method="post">
				<input type="hidden" name="current_url" value="<?php echo $link;?>" />
                <!-- <input type="hidden" class="form-control" name="enquery-form" id="enquery-form" value="enquery-form" placeholder="Enquery Form"> -->

                <div class="form-group">

                    <input type="text" name="name" class="form-control" id="your-name" placeholder="Enter Name*" required>

                    <span class="error" id="your-name-error"></span>

                </div>

                <div class="form-group">

                    <input type="email" name="email" class="form-control" id="your-email" placeholder="Enter Email*" required>

                    <span class="error" id="your-email-error"></span>

                </div>

                <div class="form-group">

                    <input type="number" name="number" class="form-control" placeholder="Enter Phone*" id="phone2" required>

                    <span class="error" id="phone-error2"></span>

                </div>

                <div class="form-group">

                    <textarea class="form-control" name="message" id="your-message" placeholder="Message*" required></textarea>

                    <span class="error" id="your-message-error"></span>

                </div>

                <!--  <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LdY-bkfAAAAAA3g5kt3Zu9f50tpMVihVLc0tT0Q"></div>
                </div> -->

                <div class="form-group">

                    <button type="submit" name="send" value="sendMail" class="fr-sub form-control">Enquire Now</button>
                    <!-- <input type="button" value="Enquire Now" name="send" class="fr-sub form-control" id="formsubmit"> -->

                </div>

            </form>

            <p>or Call Us: <a href="tel:18004194665">+919205207573</a></p>

        </div>

    </div>


    <div class="banner-form load" id="downloadForm">

        <a href="javascript:void(0);" alt="close" onclick="closeForm()"><i class="fas fa-times-circle"></i></a>

        <div class="form-inner">

            <h3>Download Brochure for EA</h3>

            <form name="enquiry-form" onsubmit="return validateForm('phone3', 'phone-error3')" action="download/index.php" method="post">

                <!-- <input type="hidden" class="form-control" name="enquery-form" id="enquery-form" value="enquery-form" placeholder="Enquery Form"> -->

                <div class="form-group">

                    <input type="text" name="name" class="form-control" id="your-name" placeholder="Enter Name*" required>

                    <span class="error" id="your-name-error"></span>

                </div>

                <div class="form-group">

                    <input type="number" name="number" class="form-control" id="phone3" placeholder="Enter Phone*" required>

                    <span class="error" id="phone-error3"></span>

                </div>

                <div class="form-group">

                    <button type="submit" name="send" value="sendMail" class="fr-sub form-control">Download</button>
                    <!-- <input type="button" value="Enquire Now" name="send" class="fr-sub form-control" id="formsubmit"> -->

                </div>

            </form>

        </div>

    </div>

    <div class="banner-form load" id="freePop">

        <a href="javascript:void(0);" alt="close" onclick="closeForm()"><i class="fas fa-times-circle"></i></a>

        <div class="form-inner">

            <h3>US-CMA Free Courses</h3>



        </div>

    </div>

    <!-- <a href="docs/2021 CMA Exam Guide.pdf" target="_blank" class="fix-btn">Download Brochure</a> 

    <a href="javascript:void(0);" class="fix-btn" onclick="downloadBrochure()">Download Brochure</a>-->

    <a href="javascript:void(0);" class="fix-btn2" onclick="myForm()">Enquire Now</a>
    <!-- <a href="#enquire" class="fix-btn3">Enquire Now</a> -->

    <a href="https://wa.me/918527524176" target="_blank" class="w-aap"><img src="img/w-aap.png" alt="w-aap" data-aos="zoom-in" data-aos-duration="3000"></a>

    <a href="#" ID="backToTop"></a>

    <!-- jQuery and Bootstrap -->

    <script src="js/jquery-3.6.0.min.js"></script>

    <script src="js/bootstrap.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="fontawesome/js/all.min.js"></script>

    <script src="js/swiper.js"></script>

    <script src="js/custom.js"></script>

    <script src="js/lightboxed.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <script>
        AOS.init();
    </script>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

</body>
<script type="text/javascript">
    function validateForm(phnDiv, divId = false) {
        rtrn = true;
        phnValue = $('#' + phnDiv).val();
        if (phnValue.length != 10 || phnValue == '') {
            rtrn = false;
            if (divId) {
                $("#" + divId).html('Please enter 10 digit phone no.');
            } else {
                alert('Please enter 10 digit phone no.');
            }
        }
        return rtrn;
    }
</script>


</html>