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

    <meta property="og:site_name" content="US-CPA - AKPIS">

    <meta property="og:url" content="https://akpisprofessionals.com/promotion/new-US-CPA/">

    <meta property="og:title" content="US-CPA - AKPIS" />

    <meta property="og:description" content="The CPA(Certified Public Accountant) exam covers four papers holistically, i.e., Statement of Auditing Standards, US GAAP and IFRS, US Federal Taxation, and Business Environment and Concepts. As it is governed by the American Institute of Certified Public Accountants(AICPA) it is recognized globally as a single level exam. To know more about the exam and to crack it in merely 9 months, reach out to AKPIS professionals. We are here to assist you in this endeavour."
    />

    <meta property="og:image" content="https://akpisprofessionals.com/promotion/new-US-CPA/img-2/Banner-2.jpg" />

    <meta property="og:image:secure_url" content="https://akpisprofessionals.com/promotion/new-US-CPA/img-2/Banner-2.jpg" />

    <meta property="og:image:type" content="image/jpg" />

    <meta property="og:image:width" content="400" />

    <meta property="og:image:height" content="300" />

    <link rel="shortcut icon" href="img/logo.jpg" />

    <title>US-CPA- AKPIS</title>



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

                    <img src="img-2/Banner-1.jpg" alt="banner-1">

                </div>

                <div class="swiper-slide">

                    <img src="img-2/banner-2.jpg" alt="banner-2">

                </div>

                <div class="swiper-slide">

                    <img src="img-2/banner-3.jpg" alt="banner-3">

                </div>

                <div class="swiper-slide">

                    <img src="img-2/banner-4.jpg" alt="banner-4">

                </div>

                <div class="swiper-slide">

                    <img src="img-2/banner-5.jpg" alt="banner-5">

                </div>

                <div class="swiper-slide">

                    <img src="img-2/banner-6.jpg" alt="banner-6">

                </div>
                <div class="swiper-slide">

                    <img src="img-2/banner-7.jpg" alt="banner-6">

                </div>

            </div>

            <div class="swiper-button-next"></div>

            <div class="swiper-button-prev"></div>

            <!-- <div class="swiper-pagination"></div> -->

        </div>

        <div class="banner-form" id="enquire">

            <div class="form-inner">

                <h3>Need More info US-CPA</h3>

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

                        <input type="number" name="number" class="form-control" id="phone1" placeholder="Enter Phone*" maxlength="10" required>

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

                <p>or Call Us: <a href="tel:18004194665">+919205207573</a></p>

            </div>

        </div>

    </section>

    <!-- banner slider end -->

    <section class="free-section">
        <div class="container">
            <div class="text-center">
                <a href="javascript:void(0);" class="btn-theme" onclick="freePopDiv()" data-aos="fade-up" data-aos-duration="3000">Free Advance Fundamentals Lectures Of US-CPA</a>
            </div>
        </div>
    </section>

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

                    <h3>ENROLL NOW<strong>TAKE A STEP TOWARDS SUCCESS </strong></h3>

                    <h6>Are you ready to take your career to the next pedestal? AKPIS can make that happen. Enrol in our US Certified Public accountant Course and get started. </h6>

                    <p>We, at AKPIS, are the leading professionals in the field of US CPA courses. Our CPA course will provide you with the right set of tools and a handful of knowledge, not just to clear an exam but to build your wisdom. When someone learns
                        from the finest sources, they build confidence and discover their true potential. From the A to Z of accounting, everything is right here for you to learn at your own pace from AKPIS. After clearing the exam, one can guarantee
                        a career of unimaginable opportunities.</p>

                    <ul>

                        <li>Learn from those recognized in the field.</li>

                        <li>The most demanding online live course is available right at your fingertips.</li>

                        <li>Secure an enormous amount of opportunities with a US CPA certification.</li>

                        <li>One on one classroom training and doubt sessions.</li>

                        <li>Handcrafted batches to meet like-minded individuals.</li>

                        <li>Lots of sample papers and previous year's exam analysis papers.</li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <img src="img-2/about-us.png" alt="pic" class="w-100" data-aos="zoom-in" data-aos-duration="3000">

                </div>

            </div>

        </div>

    </section>

    <!-- section-2 -->



    <!-- section-5 -->

    <section class="section-5">

        <div class="container">

            <video width="100%" controls controlsList="nodownload" poster="img-2/main-video.jpg" data-aos="zoom-in" data-aos-duration="3000">



                <source src="video/main vdo.mp4" type="video/mp4">



                Your browser does not support HTML video.



            </video>

            <div class="row py-5">

                <div class="col-md-4">

                    <div class="iconbox" data-aos="fade-down" data-aos-duration="2000">

                        <h4>Education</h4>

                        <p>We have been offering innovative US-CPA classes that are phenomenally designed as per the dynamic tax laws, current trends and requirements. </p>

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

                    <img src="img-2/WHY-CHOOSE.jpg" class="w-100" alt="akpis" data-aos="zoom-in" data-aos-duration="3000">

                </div>

                <div class="col-md-6 position-relative">

                    <h3>WHY CHOOSE <strong>AKPIS Professionals for US CPA Courses</strong></h3>

                    <h6>Thorough exam coverage:</h6>
                    <ol>
                        <li>
                            PAPER 1: Cover SAS(Statement of Auditing Standards)
                            <br><br>
                            <ul>


                                <li>Audit Sampling </li>

                                <li>Professional responsibilities and ethics</li>

                                <li>Internal control</li>

                                <li>Planning and supervision</li>

                                <li>Corroborative Audit Evidence</li>

                                <li>Audit Reports</li>
                            </ul>
                        </li>

                        <li>
                            PAPER 2: Cover US GAAP and IFRS
                            <br><br>
                            <ul>


                                <li>Financial reporting, conceptual framework and miscellaneous</li>

                                <li>PP&E, investments and intangibles</li>

                                <li>Deferred taxes, equity, EPS and cash flows</li>

                                <li>Current Assets and Liabilities</li>

                                <li>Governmental accounting</li>

                                <li>Leases, Bonds and Pensions</li>

                                <li>Foreign currency, consolidation, partnerships and NPO</li>
                            </ul>
                        </li>



                    </ol>



                    <span id="dots"> </span>

                    <span id="more">

                        <ol start="3">
                            <li>
                                PAPER 3: Cover US Federal Taxation
                                <br><br>
                                <ul>
                            
    
                                    <li>Taxation of corporations</li>
    
                                    <li>Taxation of individuals</li>
            
                                    <li>Supplementary Taxation Topics</li>
            
                                    <li>Business Law</li>
            
                                    <li>Property transactions and Depreciation</li>
    
                                    <li>Taxation of other Entities</li>
    
                                    <li>Statutory Reg and Business Structures</li>
                                </ul>
                            </li>


                            <li>
                                PAPER 4: Covers Business Environment and Concepts
                                <br><br>
                                <ul>
                            
    
                                    <li>Financial management</li>
    
                                    <li>Corporate governance, internal control and ERM</li>
            
                                    <li>Performance measures</li>
            
                                    <li>Information technology</li>
            
                                    <li>Cost Management</li>
    
                                    <li>Financial Planning and Risk Management</li>
    
                                    <li>Economic Concepts and Strategy</li>
                                </ul>
                            </li>
                        </ol>

                        <h6>Holistic exam preparation and uplift your resume:</h6>

                        <ul>

                            <li>Get hold of the opportunity of getting one of the most important certifications of all time with AKPIS professionals.  </li>

                            <li>No more jotting down things and overfilling the brain. Understand what you learn. </li>

                            <li> Learn with practical experience and case studies. </li>

                            <li> Do not miss the opportunity of uplifting your curriculum vitae with the addition of the certification of CPA USA.</li>

                        </ul>

                        <h6> Real-time doubt sessions and flexible batch timings:</h6>

                        <ul>

                            <li>Batches are handcrafted to suit your needs and to help you gel with like-minded people. </li>

                            <li>After enrolling in the course, the students can choose the time for classes as per the way they
                                 like, from live online classes and video lectures to real-time doubt sessions, AKPIS has got you covered.  </li>

                            <li> Avail of the benefits of either online or offline classes. </li>

                            <li>Adaptive course so that you can learn and walk shoulder to shoulder even if you are not from a commerce background. </li>

                        </ul>
                        <h6>Simplified learning and guaranteed returns:</h6>

                        <ul>

                            <li>Who would have thought working in an MNC will be just a cakewalk? Just book a slot at AKPIS 
                                and clear the exam with flying colours with a guarantee.</li>

                            <li>Even if you change streams, understand everything with clarity or ask multiple times, we at AKPIS believe in value education. </li>

                            <li>No more worrying over notes, we help you polish your note-making skills so that you can make accurate and precise notes. </li>

                            <li>Refer to the video lectures as many times as you want. We make learning and relearning fun. </li>
                        </ul>

                    </span>

                    <button onclick="myFunction1()" id="myBtn" class="btn-theme">Learn More</button>

                </div>

            </div>

        </div>

    </section>

    <!-- section-6 -->



    <!-- section-7 -->

    <!-- <section class="section-7">

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

                        <p>The EA Exam in 3-6 Months and become “US-CPA”</p>

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

    </section> -->



    <section class="section-7">
        <div class="container">
            <div class="pi-charts " data-aos="fade-down" data-aos-duration="2000">
                <div class="row">
                    <div class="col-md-6">
                        <div class="chart-details">
                            <h4>Question Content Breakdown</h4>
                            <div class="chart-box ">
                                <img src="img-2/blue-graph.png" data-aos="zoom-in" data-aos-duration="3000">
                            </div>
                            <ul>
                                <li>18-20% Ethics professional responsibilities and general principles</li>
                                <li>25-30% Assessing Risk and Developing a Planned Response</li>
                                <li>18-25% Forming Conclusion and Reporting</li>
                                <li>35-40% Performing Further Procedures and Obtaining Evidence</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="chart-details rightside">
                            <h4>Score Breakdown</h4>
                            <div class="chart-box ">
                                <img src="img-2/red-graph.png" data-aos="zoom-in" data-aos-duration="3000">
                            </div>
                            <ul>
                                <li>50% Multiple-Choice Questions</li>
                                <li>50% Task-Based Simulations</li>
                            </ul>
                        </div>
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

                    <h3>Top-notch exam preparation<strong> from AKPIS for all the 4 papers of US CPA
                        </strong></h3>

                    <ul>

                        <li>Be a part of the team of the gold standard in the field of accounting and finance.</li>

                        <li>With expert guidance from professionals in the field, get your hands on the most advanced and 360-degree teaching-learning approach. </li>

                        <li>Play a crucial role in financial plans and transactions after getting the CPA certification. </li>

                        <li>Be a game-changer by getting the highest global qualification-CPA certification. Get recognised as a premier accountant and get hired across the MNCs, Big 4s, and industries across the globe.</li>

                        <li>Get yourself tested by the faculty of AKPIS by the use of highly advanced teaching techniques. </li>
                        <li>Get an exam assistant from the staff and make the right choice for your career after clearing the exam.</li>
                        <li>Be a part of the discussion forum and learn mind-boggling facts with a team of dedicated and committed individuals.</li>
                    </ul>

                </div>

                <div class="col-md-6">

                    <img src="img-2/UNLIMITED-BENEFITS-1.jpg" alt="akpis" class="w-100" data-aos="zoom-in" data-aos-duration="3000">

                </div>

            </div>

            <div class="row mt-5">

                <div class="col-md-6">

                    <img src="img-2/UNLIMITED-BENEFITS.jpg" alt="akpis" data-aos="zoom-in" data-aos-duration="3000">

                </div>

                <div class="col-md-6">

                    <h3>Did you introspect today?
                        <strong> the first step to success and a bright future by becoming a US CPA
                         </strong></h3>

                    <ul>

                        <li>Understand finance and accounting ethics in detail, starting from the base to the top.</li>

                        <li>Did you know that a successful career in the MNCs is possible after availing yourself of the AKPIS US CPA course?</li>

                        <li>Have you made up your mind for a bright future and sitting on the highest pedestal of your career by getting your CPA license.</li>

                        <li>Enjoy the unlimited perks of being a Certified Professional Accountant.</li>

                        <li>Book your slot at the table of elites by contacting us for a seat at the US CPA course for AKPIS professionals.</li>

                        <li>Clear the exam in merely 9 months.</li>

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

                    <video width="100%" controls controlsList="nodownload" poster="img-2/thum-1.jpg" data-aos="zoom-in" data-aos-duration="3000">



                        <source src="video/vid1.mp4" type="video/mp4">

    

                        Your browser does not support HTML video.

    

                    </video>

                </div>

                <div class="col-md-5">

                    <video width="100%" controls controlsList="nodownload" poster="img-2/thum-2.jpg" data-aos="zoom-in" data-aos-duration="3000">



                        <source src="video/vid2.mp4" type="video/mp4">

    

                        Your browser does not support HTML video.

    

                    </video>

                    <video width="100%" controls controlsList="nodownload" poster="img-2/thum-3.jpg" data-aos="zoom-in" data-aos-duration="3000">



                        <source src="video/vid3.mp4" type="video/mp4">

    

                        Your browser does not support HTML video.

    

                    </video>

                </div>

            </div>

        </div>

    </section>

    <!-- section-9 -->

    <!-- section-10 -->

    <!-- <section class="section-10">

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

    </section> -->

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

                    <img src="img-2/RO.png" alt="akpis" class="w-100" data-aos="zoom-in" data-aos-duration="3000">

                </div>

                <div class="col-md-4">

                    <img src="img-2/Jasmi.png" alt="akpis" class="w-100" data-aos="zoom-in" data-aos-duration="3000">

                </div>

                <div class="col-md-4">

                    <img src="img-2/Rhi.png" alt="akpis" class="w-100" data-aos="zoom-in" data-aos-duration="3000">

                </div>

            </div>

        </div>

    </section>

    <!-- section-12 -->


    <!-- success stories -->
    <section class="success-story">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h3>Student<strong> success story</strong></h3>

                </div>

            </div>

            <div class="row">

                <div class="col-md-4">

                    <video width="100%" controls controlsList="nodownload" poster="img-2/Thumb 1.jpg" data-aos="zoom-in" data-aos-duration="3000">



                        <source src="video/success-1.mp4" type="video/mp4">

    

                        Your browser does not support HTML video.

    

                    </video>
                    <h5>
                        How a House wife can pass CPA EXAM? | How to prepare for US CPA? | AKPIS
                    </h5>

                </div>

                <div class="col-md-4">

                    <video width="100%" controls controlsList="nodownload" poster="img-2/Thumb 2.jpg" data-aos="zoom-in" data-aos-duration="3000">



                        <source src="video/success-2.mp4" type="video/mp4">

    

                        Your browser does not support HTML video.

    

                    </video>
                    <h5>
                        B.Com Student CPA Journey #US CPA Coaching#US CPA Exam #cpaexam#CPA

                    </h5>

                </div>

                <div class="col-md-4">

                    <video width="100%" controls controlsList="nodownload" poster="img-2/Thumb 3.jpg" data-aos="zoom-in" data-aos-duration="3000">



                        <source src="video/success-3.mp4" type="video/mp4">


    

                        Your browser does not support HTML video.
                        

    

                    </video>
                    <h5>US CPA Student Interview | How To Pass US CPA Exam | AKPIS CPA CMA IFRS ACCA</h5>
                </div>

            </div>

        </div>

    </section>
    <!-- success stories -->

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

                    <h3>GIFT YOURSELF A FREE DEMO CLASS,<strong> 24 HRS FREE TRIAL AND LOTS OF DISCOUNTS.</strong></h3>

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

                        <p>The CPA(Certified Public Accountant) exam covers four papers holistically, i.e., Statement of Auditing Standards, US GAAP and IFRS, US Federal Taxation, and Business Environment and Concepts. As it is governed by the American Institute
                            of Certified Public Accountants(AICPA) it is recognized globally as a single level exam. To know more about the exam and to crack it in merely 9 months, reach out to AKPIS professionals. We are here to assist you in this endeavour.
                        </p>

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

            <h3>Need More info US-CPA</h3>

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

                    <input type="number" name="number" class="form-control" id="phone2" placeholder="Enter Phone*" maxlength="10" required>

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

            <h3>Download Brochure for US-CPA</h3>

            <form name="enquiry-form" onsubmit="return validateForm('phone3', 'phone-error3')" action="download/index.php" method="post">

                <!-- <input type="hidden" class="form-control" name="enquery-form" id="enquery-form" value="enquery-form" placeholder="Enquery Form"> -->

                <div class="form-group">

                    <input type="text" name="name" class="form-control" id="your-name" placeholder="Enter Name*" required>

                    <span class="error" id="your-name-error"></span>

                </div>

                <div class="form-group">

                    <input type="number" name="number" class="form-control" id="phone3" placeholder="Enter Phone*" maxlength="10" required>

                    <span class="error" id="phone-error3"></span>

                </div>

                <div class="form-group">

                    <button type="submit" name="send" value="sendMail" class="fr-sub form-control">Download</button>
                    <!-- <input type="button" value="Enquire Now" name="send" class="fr-sub form-control" id="formsubmit"> -->

                </div>

            </form>

        </div>

    </div>

    <div class="free load" id="freePop">

        <a href="javascript:void(0);" alt="close" onclick="closeForm()"><i class="fas fa-times-circle"></i></a>

        <div class="form-inner ">

            <h3>US-CPA <strong>Free Courses</strong></h3>

            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-4 ">
                        <a href="https://youtu.be/kRcdPUnUeHE" target="_blank">
                            <div class="img-cap">
                                <img src="img-2/link-1.jpg" alt="img">
                                <h5>Deferred Tax IAS 12 ASC 706 Lecture 1#USCPA #ACCA#USCMA #CA FINAL</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://youtu.be/eTM66QEj6Z4" target="_blank">
                            <div class="img-cap">
                                <img src="img-2/link-2.jpg" alt="img">
                                <h5>IAS 12 Lecture 2 #USCPA #IFRS #DIPLOMA IN IFRS</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://youtu.be/D31mwI_IRPo" target="_blank">
                            <div class="img-cap">
                                <img src="img-2/link-3.jpg" alt="img">
                                <h5>US CPA /US CMA fundamental Lecture 1</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <a href="https://youtu.be/RXFRRMJzo1E" target="_blank">
                            <div class="img-cap">
                                <img src="img-2/link-4.jpg" alt="img">
                                <h5>US CPA US CMA Advance Fundamental Lecture 2</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://youtu.be/OhhKVx-ybPU" target="_blank">
                            <div class="img-cap">
                                <img src="img-2/link-5.jpg" alt="img">
                                <h5>US CPA US CMA Fundamental Lecture day 3 I US CPA I US CMA </h5>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

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