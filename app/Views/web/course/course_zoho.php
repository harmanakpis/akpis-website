<!-- ================== Hero Section ================== -->
<section class="zoho_banner py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="best_seller">
          <a href="javascript:void(0)" class="btn btn-primary">Best Course For Accountant</a>
          <h3><b>Share this course: </b><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#shareModal"> <i class="fa-solid fa-share-nodes"></i></a></h3>
        </div>
        <div class="zoho_text">
          <h2>Invest in Your Future with <span>Zoho Books Training</span></h2>
          <p>
            Master Zoho Books with <strong>Akpis Institute’s expert-led training</strong>.
            Learn how to simplify accounting, automate workflows, and accelerate your career with
            one of the most powerful cloud-based business tools.
          </p>
           <a href="https://wa.link/gypgko" class="btn btn-lg btn-primary mt-3" target="_blank">Get Course Details</a>    
        </div>
      </div>
      <div class="col-md-6 text-center">
        <?php if (!empty($course->banner_image) && file_exists(COURSE_IMAGE. $course->banner_image)) : ?>
         <img src="<?= COURSE_IMAGE . $course->banner_image ?>" alt="Zoho Books" class="img-fluid w-75 m-auto rounded-4 shadow-lg">
        <?php else : ?>
            <img src="<?= base_url('assets/images/default-course.jpg') ?>" alt="Default Course Image" class="img-fluid w-75 m-auto rounded-4 shadow-lg">
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- About the Zoho Course start -->
 <!-- Our Alumini Work start -->
<section class="our_aluminiWork">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2">
                <h4 class="our_alumini-heading">
                    Our Alumini Work at
                </h4>
            </div>
            <div class="col-md-10">
                <div class="Our_alumini_slider">
                    <div class="responsive">
                        <?php  
                            
                        if (!empty($aluminies)) {
                            foreach ($aluminies as $aluminie) {
                        ?>
                        <div class="our_alumini">
                            <!-- <img src="./assets/image/fortune/1.png" alt="img"> -->
                                <img src="<?= ALUMINI_IMAGE . $aluminie->image ?>"  class="img">
                        </div>
                        <?php } }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Our Alumini Work Finish -->
<section class="about_the_zoho_course py-2">
  <div class="container">
    <div class="row align-items-center g-4">

      <div class="col-md-12 col-lg-6 col-xl-6">
        <img src="<?= COURSE_IMAGE ?>/about-zoho.jpg" alt="Zoho Course Training at Akpis" class="img-fluid rounded-4 shadow-sm">
      </div>

      <div class="col-md-12 col-lg-6 col-xl-6">
        <h2 class="about_course">About the Zoho Course</h2>
        <p class="zoho_about_para">
          The <strong>Zoho Course at Akpis Institute</strong> is designed to help you master Zoho’s powerful suite of business applications — from CRM and Books to Projects and Analytics.
          Whether you’re a student, fresher, or working professional, our hands-on training ensures you gain the practical skills needed to manage business operations effectively using Zoho tools.
        </p>

        <ul class="list-group mt-3">
          <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>100% practical training with live Zoho projects</li>
          <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>Expert trainers with real-world Zoho experience</li>
          <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>Industry-recognized certification from Akpis Institute</li>
          <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>Placement assistance with leading companies</li>
        </ul>

        <p class="mt-3 text-muted">
          With Akpis’s structured approach and expert guidance, you’ll become job-ready for roles like <strong>Zoho Developer</strong>, <strong>CRM Executive</strong>, and <strong>Business Automation Specialist</strong>.
        </p>

        <a class="btn btn-warning btn-lg"  href="javascript:void(0);" class="button"  data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Now with AKPIS</a>
      </div>

    </div>
  </div>
</section>
<!-- About the Zoho Course finish -->

<!-- Certified Public Accountant (CPA) start -->
<section class="certified_public pt-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="why_chooseakpis_heading">
                <h1 class="pb-4">Check & <span>Quality lectures</span> for Zoho</h1>
            </div>
            <div class="col-md-4 image-wrapper">
                <div class="youtube-icon">
                    <a onclick="show_video('https://www.youtube.com/embed/XJJZeGrDcLs')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                </div>
                <img class="course-image" src="./assets/image/desktop-image/XJJZeGrDcLs.jpg" alt="Course Overview">
            </div>
            <div class="col-md-4 image-wrapper">
                <div class="youtube-icon">
                    <a onclick="show_video('https://www.youtube.com/embed/PpLeKlJh8aU')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                </div>
                <img class="course-image" src="./assets/image/desktop-image/PpLeKlJh8aU.jpg" alt="Course Overview">
            </div>
            <div class="col-md-4 image-wrapper">
                <div class="youtube-icon">
                        <a onclick="show_video('https://www.youtube.com/embed/YBMlwzf8KeY')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                </div>
                <img class="course-image" src="./assets/image/desktop-image/YBMlwzf8KeY.jpg" alt="Course Overview">
            </div>
        </div>
    </div>
</section>

<!-- Certified Public Accountant (CPA) finish -->

<!-- Why Join The Course start -->
<section class="why_join_course_zoho py-5 bg-light">
  <div class="container">

    <!-- Section Heading -->
    <div class="row text-center mb-5">
      <div class="col-12">
        <h2 class="why_join_courseZohoHeading">
          Why Join the <span>Zoho Books Course</span> at Akpis Institute?
        </h2>
        <p class=" why_join_courseZohopara">
          Unlock new career opportunities with hands-on Zoho Books training, practical business insights, and expert mentorship.
        </p>
      </div>
    </div>

    <!-- Feature Cards -->
    <div class="row g-4 text-center">

      <div class="col-12 col-md-6 col-lg-3 col-xl-3">
        <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
          <i class="fa-solid fa-link text-primary display-5 mb-3"></i>
          <h5 class="zoho_card_heading">Integration Capabilities</h5>
          <p>Understand how Zoho Books seamlessly connects with other business tools to create an efficient workflow ecosystem.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 col-xl-3">
        <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
          <i class="fa-solid fa-laptop text-primary display-5 mb-3"></i>
          <h5 class="zoho_card_heading">User-Friendly Interface</h5>
          <p>Learn to navigate Zoho Books effortlessly and manage real-world accounting tasks with confidence.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 col-xl-3">
        <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
          <i class="fa-solid fa-chart-line text-primary display-5 mb-3"></i>
          <h5 class="zoho_card_heading">Scalability</h5>
          <p>Discover how Zoho Books supports business growth, from startups to enterprises, with advanced automation tools.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 col-xl-3">
        <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
          <i class="fa-solid fa-wallet text-primary display-5 mb-3"></i>
          <h5 class="zoho_card_heading">Affordable Pricing</h5>
          <p>Get premium-quality Zoho training at an affordable fee, ensuring high ROI for your professional development.</p>
        </div>
      </div>

    </div>


  </div>
</section>
<!-- Why Join The Course finish -->


<!-- Sripal Jain-A Visionary in Global Finance & Institute start -->

<section class="visionary_in_global">
  <div class="container">
    <h2 class="visionary_global"> <span>Shammi Saluja</span> - A pioneer in CPA personal mentorship Training, with till you pass facility</h2>
    <div class="row align-items-center">
      <div class="col-12 col-md-12 col-lg-6 col-xl-6">
        <div class="visionary_image">
          <img src="./assets/image/logo/sha.jpg" alt="img" class="visionary_img">
          <h4><a href="https://www.linkedin.com/in/cashammisaluja/"><i class="fa-brands fa-linkedin"></i>
              Shammi Saluja, CA, CPA <br>
              India’s top finance instructor</h4></a>

        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-6 col-xl-6">
        <div class="card visionary_card">
          <div>
            <h3>100% Job Assistance</h3>
            <p>We provide complete placement support with top companies, ensuring every learner gets the right opportunity to start their CPA career confidently.</p>
          </div>
        </div>

        <div class="card visionary_card">
          <div>
            <h3>Basic Fundamental Classes</h3>
            <p>Our expert-led foundation classes strengthen your core accounting and finance knowledge, making advanced CPA concepts easier to master.</p>
          </div>
        </div>

        <div class="card visionary_card">
          <div>
            <h3>Mock Tests & Practice Sessions</h3>
            <p>Regular mock tests with detailed feedback help you assess your preparation, improve time management, and boost exam confidence.</p>
          </div>
        </div>

        <div class="card visionary_card">
          <div>
            <h3>AI-Powered Learning Platform</h3>
            <p>Smart AI tools analyze your performance and suggest personalized improvements, ensuring efficient and focused exam preparation.</p>
          </div>
        </div>

        <div class="card visionary_card">
          <div>
            <h3>Comprehensive Study Plan</h3>
            <p>A structured, goal-oriented study plan designed by experts keeps your preparation on track from day one till the exam day.</p>
         
          </div>
        </div>

        <div class="card visionary_card">
          <div>
            <h3>Ongoing Support & Community</h3>
            <p>Get continuous guidance from mentors, join peer learning groups, and stay connected with our growing CPA community even after course completion.</p>
            <!-- <a href="#" class="btn btn-primary">Check Your Eligibility</a> -->
          </div>
        </div>
      </div>



    </div>
  </div>

</section>
<!-- Sripal Jain-A Visionary in Global Finance & Institute finish -->

<!-- Course Fees Structure Zoho start -->
<section class="fee_structure_zoho py-5 bg-light">
  <div class="container">

    <!-- Heading -->
    <div class="row text-center mb-4">
      <div class="col-12">
        <h2>Course <span>Fees Structure</span></h2>
        <p class="text-muted">Clear, transparent, and affordable training plans at Akpis Institute.</p>
      </div>
    </div>

    <!-- Fee List -->
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="part-cia_table table-responsive">
          <table class="table   text-center align-middle shadow-sm">
            <thead class=" table-primary ">
              <tr>
                <th class="text-nowrap">Course Combination</th>
                <th class="text-nowrap">Fees (INR)</th>
                <th class="text-nowrap">Includes</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-nowrap"><strong>Only Zoho Books</strong></td>
                <td class="text-nowrap">₹20,000 /-</td>
                <td class="text-nowrap">Full Zoho Books training + Certification</td>
              </tr>
              <tr>
                <td class="text-nowrap"><strong>Zoho + QuickBooks</strong></td>
                <td class="text-nowrap">₹27,000 /-</td>
                <td class="text-nowrap">Zoho Books + QuickBooks complete modules</td>
              </tr>
              <tr>
                <td class="text-nowrap"><strong>IFRS + Zoho + US GAAP + QuickBooks</strong></td>
                <td class="text-nowrap">₹45,000 /-</td>
                <td class="text-nowrap">Global accounting standards & multi-software training</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- CTA -->
    <div class="text-center mt-4">
      <a href="<?php echo base_url();?>akpiscourse/zoho#submit_enquirysection" class="btn btn-primary btn-lg px-4">Enroll Now</a>
      
    </div>

  </div>
</section>
<!-- Course Fees Structure Zoho finish -->

<!-- COURSE DURATION (Advanced Version) -->
<section class="course_durationZoho py-5" style="background: #000000;">
  <div class="container">

    <!-- Section Heading -->
    <div class="text-center mb-5">
      <h2 class="fw-bold display-1 text-primary">
        Course <span class="text-warning">Duration & Modules</span>
      </h2>
      <p class="text-white mx-auto" style="max-width: 700px;">
        Master <strong>Zoho Books</strong> from fundamentals to automation.
        Explore smart accounting workflows, AI tools, and advanced business insights — all with AKPIS.
      </p>
    </div>

    <!-- Accordion Start -->
    <div class="accordion zoho_accordion" id="zohoCourseAccordion">

      <!-- Module 1 -->
      <div class="accordion-item border-0 mb-4 shadow-lg rounded-4 overflow-hidden">
        <h2 class="accordion-header" id="module1">
          <button class="accordion-button fw-semibold text-dark"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <i class="fa-solid fa-book-open-reader me-3 text-primary fs-4"></i> Module 1: Introduction
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show"
          aria-labelledby="module1" data-bs-parent="#zohoCourseAccordion">
          <div class="accordion-body bg-white">
            <ul class="list-unstyled ps-3 mb-0">
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>History & Evolution of Accounting</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Cloud Era in Accounting</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Introduction to Zoho Ecosystem</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Overview of Zoho Books</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Module 2 -->
      <div class="accordion-item border-0 mb-4 shadow-lg rounded-4 overflow-hidden">
        <h2 class="accordion-header" id="module2">
          <button class="accordion-button collapsed fw-semibold text-dark"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
            aria-expanded="false" aria-controls="collapseTwo">
            <i class="fa-solid fa-gear me-3 text-primary fs-4"></i> Module 2: Basics
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse"
          aria-labelledby="module2" data-bs-parent="#zohoCourseAccordion">
          <div class="accordion-body bg-white">
            <ul class="list-unstyled ps-3 mb-0">
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Setting up Zoho Books Account</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Configuring Taxes & GST</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Recording Sales & Purchases</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Managing E-way Bills & Challans</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Understanding Financial Dashboards</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Module 3 -->
      <div class="accordion-item border-0 mb-4 shadow-lg rounded-4 overflow-hidden">
        <h2 class="accordion-header" id="module3">
          <button class="accordion-button collapsed fw-semibold text-dark"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
            aria-expanded="false" aria-controls="collapseThree">
            <i class="fa-solid fa-lightbulb me-3 text-primary fs-4"></i> Module 3: Essentials
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse"
          aria-labelledby="module3" data-bs-parent="#zohoCourseAccordion">
          <div class="accordion-body bg-white">
            <ul class="list-unstyled ps-3 mb-0">
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Project Billing and Tracking</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Connected Banking & Reconciliation</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Advanced Reporting & Analytics</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>GST Return Filing Process</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Module 4 -->
      <div class="accordion-item border-0 mb-4 shadow-lg rounded-4 overflow-hidden">
        <h2 class="accordion-header" id="module4">
          <button class="accordion-button collapsed fw-semibold text-dark"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
            aria-expanded="false" aria-controls="collapseFour">
            <i class="fa-solid fa-rocket me-3 text-primary fs-4"></i> Module 4: Advanced
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse"
          aria-labelledby="module4" data-bs-parent="#zohoCourseAccordion">
          <div class="accordion-body bg-white">
            <ul class="list-unstyled ps-3 mb-0">
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Automation of Business Workflows</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Custom Functions & Integrations</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>Data Import, Export & Auto Scanning</li>
              <li><i class="fa-solid fa-circle-check text-success me-2"></i>End-to-End Financial Optimization</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
    <!-- Accordion End -->

    <!-- Duration Info -->
    <div class="text-center mt-5">
      <h5 class="fw-bold text-white mb-0">
        Total Duration: <span class="text-primary">2 Months</span>
        <br><small class="text-white">Weekend & Weekday Batches Available</small>
      </h5>
    </div>

  </div>
</section>
 



<!-- CAREER ADVANCEMENT start -->
<section class="career_advancementzoho py-5" style="background: #f8fafc;">
  <div class="container text-center">
    <h2 class="fw-bold mb-3">
      Career <span class="text-primary">Advancement & Future Learning</span>
    </h2>
    <p class="text-muted mb-4">Discover how this course can open doors to exciting career growth and learning opportunities.</p>

    <!-- Trigger Button -->
     <a href="<?= COURSE_IMAGE .$course->prospectus ?>" target="_blank"  class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">Download Brochure <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
    <!-- <button type="button" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#careerModal">
      <i class="fa-solid fa-arrow-up-right-from-square me-2"></i> Learn More
    </button> -->
  </div>
</section>
<!-- CAREER ADVANCEMENT finish -->
<!-- Our Placement Partners start -->
<section class="placement_partners py-5">
  <div class="container">
    <div class="cma_heading">
      <h1 class="mb-0">Our <span>Placement</span> Partners</h1>

    </div>
    <div class="row">
      <div class="col-12">
            <div class="placement-slider-wrapper">
                        <div class="owl-carousel placement_carousel_1 owl-theme">
                        <?php foreach($partners as $key=> $partner){
                               if($key<=8) {
                            ?>
                             <div class="partner_img"><img src="<?= ALUMINI_IMAGE . $partner->partner_image ?>" class="img-fluid" alt="img"></div>
                        <?php } }
                        ?>
                        </div>
                        <div class="owl-carousel placement_carousel_2 owl-theme">
                        <?php foreach($partners as $key=> $partner){ 
                               if($key>8 && $key<=16) {
                            ?>
                             <div class="partner_img"><img src="<?= ALUMINI_IMAGE . $partner->partner_image ?>" class="img-fluid" alt="img"></div>
                        <?php } }
                        ?>
                        </div>
                        <div class="owl-carousel placement_carousel_3 owl-theme">
                        <?php foreach($partners as $key=> $partner){ 
                               if($key>16 && $key<=23) {
                            ?>
                             <div class="partner_img"><img src="<?= ALUMINI_IMAGE . $partner->partner_image ?>" class="img-fluid" alt="img"></div>
                        <?php } }
                        ?>
                        </div>
                </div>
      </div>
    </div>
  </div>

</section>
<!-- Our Placement Partners Finish -->

<!-- MODAL START -->
<div class="modal fade career_modalzoho" id="careerModal" tabindex="-1" aria-labelledby="careerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 rounded-4 shadow-lg">

      <!-- Modal Header -->
      <div class="modal-header border-0" style="background: linear-gradient(135deg, #007bff, #00aaff); color: white;">
        <h5 class="modal-title fw-semibold" id="careerModalLabel">
          <i class="fa-solid fa-briefcase me-2"></i> Career Advancement & Future Learning Opportunities
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body p-4">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="d-flex align-items-start">
              <i class="fa-solid fa-rocket text-primary fs-4 me-3"></i>
              <div>
                <h6 class="fw-bold">Boost Your Resume</h6>
                <p class="text-muted mb-0">Zoho certification strengthens your professional credibility and opens up new career pathways.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="d-flex align-items-start">
              <i class="fa-solid fa-users text-primary fs-4 me-3"></i>
              <div>
                <h6 class="fw-bold">Network Opportunities</h6>
                <p class="text-muted mb-0">Connect with industry professionals, mentors, and peers to expand your professional circle.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="d-flex align-items-start">
              <i class="fa-solid fa-chart-line text-primary fs-4 me-3"></i>
              <div>
                <h6 class="fw-bold">Enhanced Job Prospects</h6>
                <p class="text-muted mb-0">Gain in-demand Zoho skills that employers value and increase your chances of landing top roles.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="d-flex align-items-start">
              <i class="fa-solid fa-book-open text-primary fs-4 me-3"></i>
              <div>
                <h6 class="fw-bold">Advanced Courses</h6>
                <p class="text-muted mb-0">Continue your journey with specialized Zoho courses to deepen your expertise and stay ahead.</p>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="d-flex align-items-center">
              <i class="fa-solid fa-gift text-primary fs-4 me-3"></i>
              <div>
                <h6 class="fw-bold">Discounts & Offers</h6>
                <p class="text-muted mb-0 w-75">Get exclusive discounts and benefits as a returning student for future learning programs.</p>
                
              </div>
               <a href="https://skewezeducation.com/placements/" class="btn btn-primary text-nowrap">placements Services</a>
            
            </div>
             
          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer border-0 d-flex justify-content-between align-items-center px-4 pb-4">
        <small class="text-muted">AKPIS Learning Initiative • Empowering Career Growth</small>
        <button type="button" class="btn btn-outline-primary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- MODAL END -->

<!-- Other Course start -->
<section class="us_cma_course mt-">
  <div class="container">
    <button class="btn btn-warning">
      Courses
    </button>
    <h2 class="usa_cma_courses">Courses</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="other_course_Cma">
          <div class="card">
            <div class="card-body">
              <img src="./assets/image/courses/US-CMA.jpg" alt="US CMA" class="w-100 m-auto">
              <h3>US CMA</h3>
              <span class="badge py-2 badge-pill bg-success">#Popular</span>
              <p>The US CMA is a globally recognized certification that equips finance professionals with advanced management accounting skills.</p>
              <a href="#"><button>Know More</button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="other_course_Cma">
          <div class="card">
            <div class="card-body">
              <img src="./assets/image/courses/US-CMA.jpg" alt="US CIA" class="w-100 m-auto">
              <h3>US CIA</h3>
              <span class="badge py-2 badge-pill bg-success">#Popular</span>
              <p>This US CIA credential blends accounting expertise with analytics and information systems, preparing professionals for modern financial challenges.</p>
              <a href="#"><button>Know More</button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="other_course_Cma">
          <div class="card">
            <div class="card-body">
              <img src="./assets/image/courses/US-CMA.jpg" alt="EA" class="w-100 m-auto">
              <h3>EA (Enrolled Agent)</h3>
              <span class="badge py-2 badge-pill bg-success">#Popular</span>
              <p>The Enrolled Agent is a top-level US tax credential, allowing professionals to represent taxpayers directly before the IRS.</p>
              <a href="#"><button>Know More</button></a>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- Other Course Finsih -->
 <?php /*
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-warning border-0">
      
      <!-- Header -->
      <div class="modal-header">
        <h5 class="modal-title text-white" id="enquiryModalLabel">Enquiry Form</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- Body -->
      <div class="modal-body">
        <!-- Message area -->
        <div id="formMessage"></div>

        <form method="post" action="<?= base_url('akpiscourse/form_submit') ?>" id="submit_enquiry">
          <input type="hidden" name="course_id" value="<?= $course_id ?>">

          <!-- Name -->
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
          </div>

          <!-- Contact -->
          <div class="mb-3">
            <label for="contact" class="form-label">Phone Number</label>
             <input type="tel"  name="contact"   class="form-control shadow-sm"   placeholder="Mobile Number"   required  pattern="[6-9]{1}[0-9]{9}"   title="Enter a valid 10-digit mobile number starting with 6, 7, 8, or 9"  maxlength="10"  oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
          </div>

          <!-- Qualification -->
          <div class="mb-3">
            <label for="qualification" class="form-label">Qualification</label>
            <input type="text" class="form-control" id="qualification" name="qualification" placeholder="e.g., B.Com, CMA, CA" required>
          </div>

          <!-- Work Experience -->
          <div class="mb-3">
            <label for="work_experience" class="form-label">Work Experience (if any)</label>
            <input type="text" class="form-control" id="work_experience" name="work_experience" placeholder="e.g., 2 years in accounting">
          </div>

          <!-- Pursuing Course -->
          <div class="mb-3">
            <label for="pursuing_course" class="form-label">Are you currently pursuing any course?</label>
            <select class="form-control" id="pursuing_course" name="pursuing_course" >
              <option value="">Select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>

          <!-- Salary -->
          <div class="mb-3">
            <label for="salary" class="form-label">Salary (if working)</label>
            <input type="text" class="form-control" id="salary" name="salary" placeholder="e.g., ₹30,000/month">
          </div>

          <!-- Placement Assistance -->
          <div class="mb-3">
            <label for="placement_assistance" class="form-label">Seeking placement assistance?</label>
            <select class="form-control" id="placement_assistance" name="placement_assistance" >
              <option value="">Select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>

          <!-- State and City -->
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="state" class="form-label">State</label>
              <select id="state" name="state" class="form-control" onchange="get_Cities(this.value)" required>
                <option value="">Select State</option>
                <?php foreach ($states as $state): ?>
                  <option value="<?= $state->id ?>"><?= $state->name ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cities" class="form-label">City</label>
              <select id="cities" name="cityname" class="form-control" required>
                <option value="">Select City</option>
              </select>
            </div>
          </div>

          <!-- Preferred Date & Time -->
          <div class="mb-3">
            <label for="preferred_time" class="form-label">Preferred Date & Time to Talk</label>
            <input type="datetime-local" class="form-control" id="preferred_time" name="preferred_time">
          </div>

          <!-- Comment -->
          <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Enter your comment..." required></textarea>
          </div>

          <!-- Submit & Close -->
          <div class="modal-footer px-0">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary submit_btn">Submit</button>
          </div>
            <span class="loader" style="display:none;"></span>             
             <div id="formMessage" class="mt-3"></div>
        </form>
      </div>

    </div>
  </div>
</div>  */ ?>
<!-- Share Popup Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">
      <div class="modal-header border-0">
        <h5 class="modal-title w-100" id="shareModalLabel">Share this Course</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <p>Share via</p>
        <div class="d-flex justify-content-center gap-3">

          <!-- WhatsApp -->
          <a href="https://api.whatsapp.com/send?text=<?= urlencode($course->title . ' - ' . current_url()); ?>"
             target="_blank" class="btn btn-success rounded-circle" title="Share on WhatsApp">
             <i class="bi bi-whatsapp fs-4"></i>
          </a>

          <!-- Facebook -->
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(current_url()); ?>"
             target="_blank" class="btn btn-primary rounded-circle" title="Share on Facebook">
             <i class="bi bi-facebook fs-4"></i>
          </a>

          <!-- LinkedIn -->
          <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(current_url()); ?>"
             target="_blank" class="btn btn-info rounded-circle" title="Share on LinkedIn">
             <i class="bi bi-linkedin fs-4"></i>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- finish learning today -->


