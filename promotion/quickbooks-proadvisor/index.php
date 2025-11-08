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
<!DOCTYPE html>
<html>
    <head>
        <title>
           AKPIS
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="canonical" href="https://wordpress-1285171-4657113.cloudwaysapps.com/" />
        <link rel="icon" href="assets/images/logo.png" type="image/x-icon" />  
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Owl Stylesheets -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
        <link rel="stylesheet" href="assets/css/aos.css" />
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-N8ZZM86');</script>
		<!-- End Google Tag Manager -->

      
    </head>
    <body>
       <!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8ZZM86"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

        <header id="header" class="header">
            <nav class="container navbar navbar-expand-md navbar-light">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" alt="logo" data-aos="zoom-in" class="img-fluid">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <!-- <div class="col-md-3">
                        
                    </div> -->
                    <div class="col-md-10">
                       
                        <div class="collapse navbar-collapse" id="navbarText">
                            <div class="topright">
                                <ul>
                                    <li class="call" data-aos="zoom-in" data-aos-delay="200" data-aos-offset="0"><a href="tel:+918527524176"> &nbsp;+918527524176</a></li>
                                    <li class="mail" data-aos="zoom-in" data-aos-delay="400" data-aos-offset="0"><a href="mailto:support@akpisprofessionals.com"> &nbsp;support@akpisprofessionals.com</a></li>
                                </ul>
                            </div>
                            <ul class="navbar-nav ml-auto mb-2 mb-lg-0 header-info">
                                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="#whychoose">Why&nbsp;Choose&nbsp;Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#video">Video</a></li>
                                <li class="nav-item contact"><a class="nav-link" href="#contactUs" role="button" data-toggle="modal">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Banner Slider Start -->
        <div id="sliderproduct" class="carousel slide" data-ride="carousel" data-interval="10000">
            <ol class="carousel-indicators">
                <li data-target="#sliderproduct" data-slide-to="0" class="active"></li>
                <li data-target="#sliderproduct" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox" data-interval="10000000">
                <div class="carousel-item active">
                    <img src="assets/images/banner-1.jpg" alt="image"  width="100%" class="img-fluid xs-hidden">
                    <img src="assets/images/mobile-1.jpg" alt="image"  width="100%" class="img-fluid md-hidden">
                    <div class="container">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <p class="sub-heading" data-aos="fade-down" data-aos-delay="100" data-aos-offset="0">Discover the features of QuickBooks</p>
                                <h1 class="main-heading" data-aos="fade-right" data-aos-delay="300" data-aos-offset="0">Software with our  <br><span>ProAdvisor </span>Programme! </h1>
                                <p class="para" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">Start preparing for QuickBooks Certification right away to establish your credibility.
                                    </p>
                                <a href="#contactUs" role="button" data-toggle="modal" class="btn btn-default" data-aos="fade-up" data-aos-delay="600" data-aos-offset="0">Join Now</a>      
                            </div>
                        </div>
                    </div>
                </div><!--endcarousel-item-->
                <div class="carousel-item">
                    <img src="assets/images/banner-2.jpg" alt="image"  width="100%" class="img-fluid xs-hidden">
                    <img src="assets/images/mobile-2.jpg" alt="image"  width="100%" class="img-fluid md-hidden">
                    <div class="container">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <p class="sub-heading" data-aos="fade-down" data-aos-delay="100" data-aos-offset="0">ProAdvisor | Accounting Partner Rewards Programme</p>
                                <h1 class="main-heading" data-aos="fade-right" data-aos-delay="300" data-aos-offset="0">Become a certified QuickBooks <br><span>ProAdvisor </span> <span class="with-akpis">with AKPIS!</span></h1>
                                <p class="para" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">Get the expert status with our ProAdvisor Programme
                                    </p>
                                <a href="#contactUs" role="button" data-toggle="modal" class="btn btn-default" data-aos="fade-up" data-aos-delay="600" data-aos-offset="0">Join Now</a>         
                            </div>
                        </div>
                    </div>
                </div><!--endcarousel-item-->
                <a class="carousel-control-prev fa fa-angle-left" href="#sliderproduct" role="button" data-slide="prev"></a>
                <a class="carousel-control-next fa fa-angle-right" href="#sliderproduct" role="button" data-slide="next"></a>
            </div>
            <!--endslidesliderproduct-->
            <div class="banner-cont" data-aos="zoom-in">
                <p>Get Started To</p>
				<h2>Become a QuickBooks ProAdvisor</h2>
				<form action="mail/index.php" class="submit-form" id="submit-form-2"  data-seq="2" method="post" novalidate >
				    <input type="hidden" name="current_url" value="<?php echo $link;?>" />
				    <input type="hidden" name="sendMail" value="send" required>
					<div class="form-group">
						<input type="text" class="form-control" id="fname" placeholder="Enter Name" name="name" required="true" >
						<span class="myfielderr" id="name_err2">This is Required</span>
					</div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="contact-email" placeholder="Email" name="email" required="true">
                        <span class="myfielderr" id="email_err2">This is Required</span>
                    </div>
					<div class="form-group">
							<input type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control" id="contact-phone" placeholder="Phone" name="phone" min="10" required="true">
							<span class="myfielderr" id="phone_err2">This is Required</span>
						</div>
                        <div class="form-group">
							<textarea rows="3" placeholder="Message" id="" class="form-control" name="message" required></textarea>
							<span class="myfielderr" id="message_err2">This is Required</span>
						</div>
						<span id="show_succ" class="alert alert-success dnone">Thank you for your query.</span>
						<span id="show_err" class="alert alert-danger dnone">Error Occured</span>
					<button type="submit" id="form_submit_btn2" disabled name="send" class="btn btn-submit">Enquire Now</button>
                    <p class="mt-3">And Call Us: <a href="tel:1800 419 4665">1800 419 4665</a></p>
				</form>
		</div>
        </div>
        <!-- Banner Slider end -->

    <!-- Quick Book start -->
       <section class="quick-book">
        <div class="container">
            <div class="quickbook-box">
                <div class="row align-items-center">
                    <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100" data-aos-offset="0">
                        <img src="assets/images/Quickbook.jpg" class="img-fluid quick-img" />
                    </div>
                    <div class="col-md-2 text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-offset="0">
                        <img src="assets/images/plus-icon.png" class="img-fluid" />
                 
                    </div>
                    <div class="col-md-2 text-center" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="0">
                        <div class="q-logo">
                        <img src="assets/images/logo.png" class="img-fluid" />
                    </div>
                    </div>
                    <div class="col-md-2 text-center" data-aos="zoom-in" data-aos-delay="400" data-aos-offset="0">
                        <img src="assets/images/equal-icon.png" class="img-fluid" />
                  
                    </div>
                    <div class="col-md-3 text-center" data-aos="zoom-in" data-aos-delay="500" data-aos-offset="0">
                        <h5 class="qbook-answer">Assured <br>Success</h5>
                    </div>
                </div>
            </div>
        </div>
       </section>
   <!-- Quick Book end -->

 <!-- quickbook2 Start -->
 <section class="our-achievers-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="assets/images/quickbook-img.jpg" class="img-fluid" data-aos="zoom-in" data-aos-delay="100" data-aos-offset="0">
            </div>
            <div class="col-md-8">
                <div class="quick-box">
                    <h4 class="main-heading" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0"><span class="light-font">What is</span> QuickBooks?</h4>
                    <p class="mt-3" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">QuickBooks is best known for its bookkeeping software; it provides companies with a variety of accounting and financial management options. QuickBooks can be the right option whether you want to avoid manual bookkeeping or need a better alternative to your current software. Quickbooks provide four certifications: QuickBooks Desktop Pro, QuickBooks Enterprise Solutions, QuickBooks POS, and QuickBooks Online Pro.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- quickbook2 End -->

  <!-- Pro Advisor start -->
  <section class="pro-advisor-sec" id="placement">
    <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h4 class="main-heading" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">Methodology for QuickBooks <br><span data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">ProAdvisor<br>Programme</span></h4>
                    <p data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">You are qualified to participate in the QuickBooks ProAdvisor Program as soon as you register for QuickBooks Online Accountant. Earn points and rewards for what you do to advance, such as client addition, training, and programme attachment. The benefits get better as you earn more points. </p>
                </div>
                <div class="col-md-7">
                    <div class="pro-advisor">
                        <ul>
                            <li class="mb-5" data-aos="zoom-in" data-aos-delay="100" data-aos-offset="0">
                               
                                <div class="partner-con" data-number="05" style="visibility: visible;">
                                    <h4 id="number1" class="number">+05</h4>
                                    <p>Add a QuickBooks Online<br>Standard Payroll client</p>
                                </div>
                            </li>
                            <li class="mb-5" data-aos="zoom-in" data-aos-delay="200" data-aos-offset="0">
                                <div class="partner-con" data-number="10" style="visibility: visible;">
                                    <h4 id="number2" class="number">+10</h4>
                                    <p>Add a QuickBooks Online<br>Advanced Payroll client</p>
                                </div>
                            </li>
                            <li class="mb-5" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="0">
                                <div class="partner-con" data-number="10" style="visibility: visible;"> 
                                    <h4 id="number3" class="number">+10</h4>
                                    <p>Add a QuickBooks<br>Online client</p>
                                </div>
                            </li>
                            <li class="mb-5" data-aos="zoom-in" data-aos-delay="400" data-aos-offset="0">
                                <div class="partner-con" data-number="25" style="visibility: visible;">
                                    <h4 id="number4" class="number">+25</h4>
                                    <p>Add QuickBooks Online<br>Advanced client</p>
                                </div>
                            </li>
                            <li data-aos="zoom-in" data-aos-delay="500" data-aos-offset="0">
                                <div class="partner-con" data-number="50" style="visibility: visible;">
                                    <h4 id="number5" class="number">+50</h4>
                                    <p>Get QuickBooks Core<br>certified</p>
                                </div>
                            </li>
                            <li data-aos="zoom-in" data-aos-delay="600" data-aos-offset="0">
                                <div class="partner-con" data-number="100" style="visibility: visible;">
                                    <h4 id="number6" class="number">+100</h4>
                                    <p>Get QuickBooks<br>Advanced certified</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
   </section>
<!-- Pro Advisior end -->

 <!-- Pro Advisor start -->
 <section class="video-sec" id="video">
    <div class="container">
        <!-- <div class="embed-responsive embed-responsive-16by9"> -->
            <!-- <video id="background-video" playsInline autoPlay loop muted>
                <source src="https://youtu.be/J5A35ywoPi0" type="video/mp4" />
              </video> -->
        <!-- </div> -->
        <iframe width="1100" height="400" src="https://www.youtube.com/embed/ytirCUegNpE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
   </section>
<!-- Pro Advisior end -->

 <!-- advance start -->
<section class="advance-sec" id="about">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4 class="main-heading" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0"><p class="light-font">Advance your</p> expertise</h4>
            <p data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">Sign up for free live webinar or online self-study vtraining and become a certified or advanced-certified QuickBooks expert. Continue your learning with tips and tricks from our free webinars.</p>
        </div>
        <div class="col-md-4">
            <div class="advance-box">
                <ul>
                    <li data-aos="zoom-in" data-aos-delay="100" data-aos-offset="0"><img src="assets/images/proadvisor-gold.png" class="img-fluid"></li>
                    <li data-aos="zoom-in" data-aos-delay="200" data-aos-offset="0"><img src="assets/images/proadvisor-sliver.png" class="img-fluid"> </li>
                    <li data-aos="zoom-in" data-aos-delay="300" data-aos-offset="0"><img src="assets/images/proadvisor-elite.png" class="img-fluid"> </li>
                    <li data-aos="zoom-in" data-aos-delay="400" data-aos-offset="0"><img src="assets/images/proadvisor-pletinum.png" class="img-fluid"> </li>

                </ul>
            </div>
        </div>
    </div>
</div>
</section>
<!-- advance end -->

 <!-- Why Choose start -->
 <section class="why-choose-sec" id="whychoose">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="assets/images/why-choose.jpg" class="img-fluid" data-aos="zoom-in" data-aos-delay="100" data-aos-offset="0">
            </div>
            <div class="col-md-7">
                <div class="whychoose-box">
                    <h4 class="main-heading" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0"><p class="light-font">Why Choose</p> <span>AKPIS</span><br>to Obtain QuickBooks ProAdvisor Certification</h4>
                    <p data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">If you're ready to take command over QuickBooks Software, enrolling on the proAdvisor Program will make you more efficient. AKPIS has been a digital learning platform providing accounting courses for decades. We are a one-stop shop where you can learn all Quickbooks Software Solutions under one roof. We have a QuickBooks ProAdvisors team who will assist you in getting certifications. </p>
                <p data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">We are here to provide various training programmes, practical resources, study modules, Videos, and other options. When you complete your QuickBooks ProAdvisor certification at AKPIS, you'll benefit from having a higher job potential. As a result, you will become the digital accountant of choice for all companies. Your accreditation as a QuickBooks ProAdvisor will show you have a firm grasp of the available software.</p>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose end -->

<!-- Valuable start -->
    <section class="valuable-tool-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                    <h4 class="main-heading" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0"><p class="light-font">Tangible skills.
                        </p>Long-Term Success.</h4>
                    <p class="pr-5" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">There is more to QuickBooks Certification than just exams. It's a completely new degree of instruction and knowledge that positions you for success year after year. Certification badges give your marketing credibility and substance by adding renown.</p>
                   
            </div>
            <div class="col-md-4">
                <img src="assets/images/valuable-tools.png" class="img-fluid" data-aos="zoom-in" data-aos-delay="100" data-aos-offset="0">
            </div>
        </div>
    </div>
    </section>
<!-- Valuable end -->

<!-- FAQ'S start -->
     <section class="faqs-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="assets/images/faqs.png" class="img-fluid" data-aos="fade-right" data-aos-delay="100" data-aos-offset="0">
                </div>
                <div class="col-md-7">
            
                    <div class="faqs-box">
                        <h4 class="main-heading" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0"><p class="light-font">Frequently asked</p>questions</h4>
                        <div class="accordion" id="faq">
                            <div class="card" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                                    aria-expanded="true" aria-controls="faq1">What is the QuickBooks ProAdvisor Programme?</a>
                                </div>
                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                      <p>The QuickBooks ProAdvisor Program offers benefits like training, customer care, strategic marketing tools, and accountant-specific product discounts in order to help accounting pros expand their businesses, skills, and QuickBooks knowledge.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                                <div class="card-header" id="faqhead2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                    aria-expanded="true" aria-controls="faq2">How long does it take to become a QuickBooks ProAdvisor?</a>
                                </div>
                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                        <p>What is the time commitment to become a QuickBooks ProAdvisor? Getting your QuickBooks certification is a fairly quick procedure. All you need to do is learn the content for the course, which takes most people 12 to 16 hours on average, and then take the exam, which takes about two hours.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">
                                <div class="card-header" id="faqhead3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                    aria-expanded="true" aria-controls="faq3">What Advantages Come with Being a QuickBooks ProAdvisor?</a>
                                </div>
                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                        <p>One benefit of being a Certified QuickBooks ProAdvisor is having a thorough grasp of QuickBooks, the most widely used accounting programme. The Find-a-ProAdvisor online directory allows Certified QB ProAdvisors to list themselves, which facilitates networking with prospective clients and expanding one's clientele.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">
                                <div class="card-header" id="faqhead4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                                    aria-expanded="true" aria-controls="faq4">What are the requirements for Becoming a QuickBooks ProAdvisor</a>
                                </div>
    
                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                        <p><strong>Step 1:</strong> Sign up for the QuickBooks Online Accountant Program</p>
                                        <p><strong>Step 2:</strong> Prepare for the exam to become a certified QuickBooks ProAdvisor.</p>
                                        <p><strong>Step 3:</strong> Take the QuickBooks Certification Exam </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="500" data-aos-offset="0">
                                <div class="card-header" id="faqhead4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                                    aria-expanded="true" aria-controls="faq4">Is QuickBooks better for an accountant?</a>
                                </div>
    
                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                        <p>The ability to easily manage your company's money is a major benefit of using accounting software like QuickBooks. For the majority of companies, professional accounting assistance is still recommended.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                </div>
                
            </div>
        </div>
    </section>
<!-- FAQ'S Choose end -->

<!-- OUR ACHIEVERS Start -->
    <section class="our-achievers-sec">
        <div class="container">
            <h4 class="main-heading text-center" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0"><span class="light-font">Our</span> Achievers</h4>
        <div class="row d-flex justify-content-center mt-5" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a1.jpeg"> 
                <p>AKPIS Professionals definitely would make the journey a whole lot simpler. Perfect</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a2.jpeg"> 
                <p>Special shout-out to professionals for their constant support and guidance.</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a3.jpeg"> 
                <p>achieveAKPIS Professionals do their part very well</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a4.jpeg"> 
                <p> achieveIndeed, their main attractions are well experienced and friendly faculties,</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a5.jpeg"> 
                <p>achieveWith the high-quality teaching style and support, set your career goals.</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a6.jpeg"> 
                <p>achieveThe AKPIS took my CMA preparation to the very next level.</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a7.jpeg"> 
                <p>Thank You, AKPIS team, for convincing me to choose you over any other educators.</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a8.jpeg"> 
                <p>achieveThe support and encouragement of the AKPIS team were remarkable.</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a9.jpeg"> 
                <p>achieveWith AKPIS, you are destined to achieve what you have set out to.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a10.jpeg"> 
                <p>achieveThe journey with AKPIS has been brilliant.</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a11.jpeg"> 
                <p>achieveUndoubtedly all the concepts were taken up, and queries were solved.</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a12.jpeg"> 
                <p>achieveStudy tips offered by the AKPIS Instructor helped me immensely plan my exam strategy.</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a13.jpeg"> 
                <p>AKPIS has always been approachable and trouble-shooters for me.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="500" data-aos-offset="0">
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a14.jpeg"> 
                <p>achieveIndeed, every class was very engaging and helpful in achieving the goal.</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a15.jpeg"> 
                <p>achieveAKPIS gave me direction to set my career goals</p>
            </div>
            <div class="achieve-box">
                <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a16.jpeg"> 
                <p>The team of AKPIS supported me right from the academics till I got the certification.</p>
            </div>
        </div>
        </div>
    </section>
<!-- OUR ACHIEVERS End -->

<!-- OUR Gallery Start -->
    <section class="our-gallery-sec">
        <div class="container">
            <h4 class="main-heading text-center"  data-aos="fade-up" data-aos-delay="100" data-aos-offset="0"><span class="light-font">Our</span> Gallery</h4>
          
                <div class="row mt-5" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a1.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a1.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a2.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a2.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a3.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a3.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="	https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a4.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="	https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a4.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a5.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a5.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a6.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a6.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a7.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a7.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a8.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a8.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a9.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a9.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="	https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a10.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="	https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a10.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a11.jpeg1" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a11.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a12.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a12.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a13.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a13.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a14.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a14.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a15.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a15.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="	https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a16.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="	https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a16.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a17.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a17.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a18.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a18.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a19.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a19.jpeg" class="img-fluid rounded">
                  </a>
                  <a href="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a20.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                    <img src="https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US-CMA/img/a20.jpeg" class="img-fluid rounded">
                  </a>
                </div>
        </div>
    </section>
<!-- OUR Gallery End -->

<!-- our-student start -->
    <section class="our-student-sec">
        <div class="container">
            <h4 class="main-heading text-center" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0"><span class="light-font">Our Students</span> working in MNC's</h4>
                <div class="row mt-5">
                    <div class="col-md-2">
                        <img src="assets/images/tech-mahindra.jpg" class="img-fluid" data-aos="zoom-in" data-aos-delay="100" data-aos-offset="0">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/kpmg.jpg" class="img-fluid" data-aos="zoom-in" data-aos-delay="200" data-aos-offset="0">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/genpact.jpg" class="img-fluid" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="0">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/wipro.jpg" class="img-fluid" data-aos="zoom-in" data-aos-delay="400" data-aos-offset="0">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/tcs.jpg" class="img-fluid" data-aos="zoom-in" data-aos-delay="500" data-aos-offset="0">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/oracel.jpg" class="img-fluid" data-aos="zoom-in" data-aos-delay="600" data-aos-offset="0">
                    </div>
                    <!-- <div class="clientslider mt-4" data-aos="fade-up">
                        <div class="owl-carousel owl-theme clientslide">
                            <div class="item">
                                <img src="assets/images/tech-mahindra.jpg" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="assets/images/kpmg.jpg" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="assets/images/genpact.jpg" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="assets/images/wipro.jpg" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="assets/images/tcs.jpg" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="assets/images/oracel.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
    <!-- our-student end -->

    <!-- Contact start -->
    <!-- <section class="contact-sec" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="sub-heading" data-aos="fade-right"><p class="light-font-white">Have queries? Send them our way.</p>
                        Connect with us for Personal Consultation.</h4>
                </div>
                <div class="col-md-4">
                    <form data-aos="fade-left" method="post" action="mail/index.php">
                        <input type="hidden" name="current_url" value="<?php echo $link;?>" />
                        <input class="emailpick" name="email" type="email" placeholder="Enter Your Email" required />
                        <button class="" type="submit" name="subscribeMail" value="subscribe"><img src="assets/images/arrow.png" class="img-fluid"></button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
<!-- Contact end -->   

        <!-- footer start -->
        <footer class="footer">
            <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100" data-aos-offset="0">
                    <p class="para">he EA Test, also known as the Special Enrollment Examination (SEE), is a three-part exam conducted on behalf of the Internal Revenue Service by Prometric</p>
                    <h4>Our Location</h4>
                    <p class="location">A - 93 B, Lajpat Nagar 2, Delhi - 110024</p>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                    <h3>Contact Details</h3>
                    <p class="title">Email</p>
                    <p class="address"><a href="mailto:support@akpisprofessionals.com">support@akpisprofessionals.com</a></p>
                    <p class="title">Phone No.</p>
                    <p class="address"><a href="tel:+918527524176">+918527524176</a></p>
                </div>

                <div class="col-md-4" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                    <h3>Social Media</h3>
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/AKPISPROFESSIONALS/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/c/AKPISProfessionals" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/cashammisaluja/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/akpis-ca-cpa-cma-courses/?viewAsMember=true" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        </footer>
          <div class="footer-bottom">
            <a target="blank" href="#"> © 2021 AKPIS Professionals All Rights Reserved</a>
          </div>
          <div class="modal promo-banner fade" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="contactUsLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-header">
                        <p>Need More info US-CMA</p>
                        <h2 class="text-center">Get a call Back</h2>
                    </div>
                  
                    <form action="mail/index.php" class="submit-form" id="submit-form-1" data-seq="1" method="post" novalidate >
                        <input type="hidden" name="current_url" value="<?php echo $link;?>" />
                        <input type="hidden" name="sendMail" value="send" required>
                        <div class="form-group">
                            <input type="text" class="form-control" id="fname" placeholder="Enter Name" name="name" required="true" >
                            <span class="myfielderr" id="name_err1">This is Required</span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="contact-email" placeholder="Email" name="email" required="true">
                            <span class="myfielderr" id="email_err1">This is Required</span>
                        </div>
                        <div class="form-group">
                                <input type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control" id="contact-phone" placeholder="Phone" name="phone" min="10" required="true">
                                <span class="myfielderr" id="phone_err1">This is Required</span>
                            </div>
                            <div class="form-group">
                                <textarea rows="3" placeholder="Message" id="" class="form-control" name="message" required></textarea>
                                <span class="myfielderr" id="message_err1">This is Required</span>
                            </div>
                            <span id="show_succ" class="alert alert-success dnone">Thank you for your query.</span>
                            <span id="show_err" class="alert alert-danger dnone">Error Occured</span>
                            <div class="col-md-12 text-center">
                                <button type="submit" id="form_submit_btn1" disabled name="send" class="btn btn-submit">Enquire Now</button>
                                <p class="mt-3">or Call Us: <a href="tel:+919205207573">+919205207573</a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
         <!-- <a title="Quick-Book" href="assets/images/Quick-Book.pdf" target="_blank" class="downlodad-brochure">Downlodad Brochure</a> -->
          <a
          href="https://wa.me/+918527524176"
          class="whatsapp_float"
          target="_blank"
          rel="noopener noreferrer"
        >
        <i class="fa fa-whatsapp whatsapp-icon"></i>
      
        </a>

        <a
        href="tel:+918527524176"
        class="phone_float"
      >
      <i class="fa fa-phone phone-icon"></i>
      </a>
        <!-- Scroll button-->
        <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: none;"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
        <!-- Scroll button-->
      <!-- footer end -->
        <script src="assets/js/custom.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.js"></script>
        <script src="assets/js/aos.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
       <script>
        window.onload = function () {
    $(document).ready(function(){
        $("#form_submit_btn1").attr("disabled",false);
        $("#form_submit_btn2").attr("disabled",false);
        $('#submit-form-1,#submit-form-2').on('submit',function (e) {
            e.preventDefault();
            $(".myfielderr").html("");
            
            let n =  $(this)[0].attributes["data-seq"].value;
            var required = {
                'name':{
                    validate:/^[a-z ]+$/ig
                },
                'email':{
                    validate:/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
                },
                'phone':{
                    validate:/^[0-9]{10}$/ig
                },
                'option':'required'
            };
            var formdata = $(this).serializeArray();
            var err = 0;
            formdata.forEach(function (val,i) {
                if (required[val.name]) {
                    if (required[val.name] == 'required') {
                        if (val.value.trim().length == 0) {
                            err = 1;
                            $(`#${val.name}_err${n}`).show().text('This Field is Required' );
                        } else {
                            $(`#${val.name}_err${n}`).hide();
                        }
                    } else if ('validate' in required[val.name]) {
                        if (required[val.name].validate.test(val.value.trim()) == false) {
                            err = 1;
                            $(`#${val.name}_err${n}`).show().text( val.value.trim().length == 0 ? 'This Field is Required' : 'This Field is Invalid' );
                        } else {
                            $(`#${val.name}_err${n}`).hide();
                        }
                    }                        
                }
            })
            // console.log("err",err);return;
            if (err == 0) {
                let that = $(this);
            var thebtn = $(this).find(`#form_submit_btn${n}`);
            // console.log("thebtn",thebtn);
            thebtn[0].disabled = true;
            // console.log("thebtn",thebtn);return;
            
                $.ajax({
                    url:'https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/quickbooks-proadvisor/mail/index.php',
                    type:'POST',
                    data: new FormData(this),
                    processData:false,
                    contentType:false,
					dataType:"json",
                    success:function (data) {
                        console.log("data",data);
                        if (data.status == 'ok') {
                            // console.log(that);
                            that[0].reset();
                            thebtn[0].disabled = false;
                            $('#show_succ').css('display','block');
                            $('#show_err').hide();
                            window.location = 'https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/quickbooks-proadvisor/thank-you.html'
                            setTimeout(() => {
                                $('#show_succ').hide();
                            }, 3000);
                        } else {
                            thebtn[0].disabled = false;
                            $('#show_succ').hide();
                            $('#show_err').css('display','block').text(data.message ? data.message : 'Error Occured, Try Again');
                            setTimeout(() => {
                                $('#show_err').hide();
                            }, 3000);
                        }
                    },
                    error:function() {
                        thebtn[0].disabled = false;
                        $('#show_err').css('display','block');
                        setTimeout(() => {
                                $('#show_err').hide();
                        }, 3000);
                    }
                })
            }
        })
    })
}
       </script>
       <script>
        AOS.init({
        duration: 1200,
        })
</script>
    </body>
</html>