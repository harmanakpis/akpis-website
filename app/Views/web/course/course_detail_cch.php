<!-- CCH Cloud Hero Section Start -->
<section class="enrollmetn_hero py-5">
   <div class="container">
      <div class="row align-items-center">
         <!-- Left Content -->
         <div class="col-md-7 order-2 order-md-1">
            <div class="enrollment_text">
               <div class="EAcompany_logo mb-3">
                  <img src="./assets/image/logo/logo.png" alt="AKPIS Institute Logo" class="img-fluid">
               </div>
               <div class="difs_heading">
                  <h2 class="fw-bold text-white mb-2">
                     Simplify US Taxation with <span class="text-primary">CCH Cloud Software</span>
                  </h2>
                  <span class="d-block fs-4 text-uppercase text-warning fw-semibold">
                  Smart, Secure & Scalable Tax Management
                  </span>
                  <div class="typed-wrap pb-3">
                     <span class="typed-text">Automation • Accuracy • Compliance</span>
                  </div>
                  <p class="text-white mb-4">
                     Manage clients, prepare returns, and e-file securely — all in one cloud platform.
                     With <strong>CCH Cloud</strong>, your firm gains efficiency, accuracy, and complete compliance
                     for every tax season. Experience automation that saves time and ensures audit-ready precision.
                  </p>
                  <a  href="https://wa.link/gypgko" target="_blank" class="btn btn-warning btn-lg border-0 fw-bold shadow-sm">
                  Enquire Now
                  </a>
               </div>
            </div>
         </div>
         <!-- Right Image -->
         <div class="col-md-5 order-1 order-md-2 text-center">
            <div class="enrollment_image_hero">
               <img src="./assets/image/logo/ab.png" alt="IFRS Course by AKPIS Institute" class="img-fluid ">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- CCH Cloud Hero Section Finish -->
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
<!-- About course start-->
<section class="about_coursecch">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="about_coursecch">
               <h2>About COURSE <span>CCH</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="about_cch_text">
               <h3>About the Course</h3>
               <p>
                  CCH Axcess™ Tax training by <strong>Wolters Kluwer Professional & Client Services</strong>
                  is designed to empower tax professionals with the skills to manage end-to-end
                  digital tax workflows efficiently. The program focuses on simplifying complex
                  compliance tasks through automation, cloud integration, and real-time data accuracy.
               </p>
               <p>
                  Through hands-on sessions and expert-led modules, learners gain a deeper understanding
                  of tax return preparation, review processes, and workflow optimization. This training
                  helps professionals save time, reduce manual errors, and confidently leverage
                  the full potential of CCH Axcess™ Tax for client management and reporting.
               </p>
               <button class="btn btn-primary btn-lg">Explore More</button>
            </div>
         </div>
         <div class="col-md-6">
            <div class="about_course_img bg-dark ">
               <?php if (!empty($course->banner_image) && file_exists(COURSE_IMAGE. $course->banner_image)) : ?>
               <img src="<?= COURSE_IMAGE . $course->banner_image ?>" alt="Zoho Books" class="img-fluid w-75 m-auto rounded-4 shadow-lg">
               <?php else : ?>
               <img src="<?= base_url('assets/images/default-course.jpg') ?>" alt="Default Course Image" class="img-fluid w-75 m-auto rounded-4 shadow-lg">
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- About course finish-->
<!-- Learn Virtually Anywhere. Award-Winning Training Company. start -->
<section class="virtually_anywhere_xero">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-7">
            <div class="gallery">
               <span style="--i:1"><img src="./assets/image/acca//Sequence 01.00_00_58_09.Still002.png" alt=""></span>
               <span style="--i:2"><img src="./assets/image/acca//Sequence 01.00_04_46_14.Still001.png" alt=""></span>
               <span style="--i:3"><img src="./assets/image/acca/DSC00051.jpg" alt=""></span>
               <span style="--i:4"><img src="./assets/image/acca//Sequence 01.00_00_58_09.Still002.png" alt=""></span>
               <span style="--i:5"><img src="./assets/image/acca//Sequence 01.00_04_46_14.Still001.png" alt=""></span>
               <span style="--i:6"><img src="./assets/image/acca/DSC00051.jpg" alt=""></span>
               <span style="--i:7"><img src="./assets/image/acca//Sequence 01.00_04_46_14.Still001.png" alt=""></span>
               <span style="--i:8"><img src="./assets/image/acca/DSC00051.jpg" alt=""></span>
               <!-- <span style="--i:4"><img src="https://i.ibb.co/f0Yt9bM/pic4.jpg" alt=""></span>
                  <span style="--i:5"><img src="https://i.ibb.co/g4hxBfz/pic5.jpg" alt=""></span>
                  <span style="--i:6"><img src="https://i.ibb.co/FgdgX20/pic10.jpg" alt=""></span>
                  <span style="--i:7"><img src="https://i.ibb.co/kDjJwhB/pic7.jpg" alt=""></span>
                  <span style="--i:8"><img src="https://i.ibb.co/9n7mHQt/pic8.jpg" alt=""></span> -->
            </div>
         </div>
         <div class="col-md-5">
            <div class="vitually_anywhere_para">
               <h2>Join AKPIS for CCH Excellence</h2>
               <p>
                  Join over <strong>100,000+ learners</strong> who have advanced their careers with
                  <strong>AKPIS Institute’s CCH Axcess™ Tax Training</strong>. Get
                  <strong>industry-recognized certification</strong>, practical learning from
                  experts, affordable pricing, and <strong>24/7 student support</strong>.
               </p>
               <div class="key_program_highlight_xero">
                  <h4>Key Program Highlights:</h4>
                  <ul>
                     <li>Comprehensive <strong>CCH Axcess™ Tax Training</strong> designed by industry professionals.</li>
                     <li>Learn directly from <strong>qualified CCH experts</strong> with real-world tax experience.</li>
                     <li>Structured curriculum covering <strong>tax compliance, automation, and workflow efficiency</strong>.</li>
                     <li>Career-oriented guidance to help you achieve <strong>global job opportunities</strong>.</li>
                     <li>Proven track record of high student satisfaction and placement success.</li>
                     <li>Hands-on projects simulating real-world tax and accounting tasks.</li>
                     <li>Interactive, flexible, and engaging learning experience at <strong>AKPIS Institute</strong>.</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Learn Virtually Anywhere. Award-Winning Training Company. finish -->
<!-- Why Choose CCH? start -->
<section class="why_choose_cch ">
   <div class="container">
      <div class="row text-center">
         <div class="col-12">
            <div class="about_coursecch">
               <h2>Why Choose <span>CCH</span></h2>
               <p class="text-white fw-normal fs-5">
                  Efficiently managing complex taxation workflows with CCH Axcess™
               </p>
            </div>
         </div>
      </div>
      <div class="row g-4 text-center">
         <!-- Card 1 -->
         <div class="col-md-3 col-sm-6">
            <div class="live-interactive_class">
               <i class="fa-solid fa-building-columns text-primary fs-1 mb-3"></i>
               <h3>Used by Top U.S. Firms</h3>
               <p class="text-white small">
                  Trusted by major accounting firms and the Big 4 for advanced tax solutions.
               </p>
            </div>
         </div>
         <!-- Card 2 -->
         <div class="col-md-3 col-sm-6">
            <div class="live-interactive_class">
               <i class="fa-solid fa-cloud text-info fs-1 mb-3"></i>
               <h3>Cloud-Based Access</h3>
               <p class=" small">
                  Work anytime, anywhere with secure cloud-based access and real-time updates.
               </p>
            </div>
         </div>
         <!-- Card 3 -->
         <div class="col-md-3 col-sm-6">
            <div class="live-interactive_class">
               <i class="fa-solid fa-gear text-warning fs-1 mb-3"></i>
               <h3>Integrated Management</h3>
               <p class=" small">
                  Seamless integration with Practice Management and Workflow tools.
               </p>
            </div>
         </div>
         <!-- Card 4 -->
         <div class="col-md-3 col-sm-6">
            <div class="live-interactive_class">
               <i class="fa-solid fa-calculator text-success fs-1 mb-3"></i>
               <h3 class="">Powerful for Complex Returns</h3>
               <p class=" small">
                  Simplifies the preparation of returns like 1040, 1065, and 1120 with precision.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Why Choose CCH? finish -->
<section class="cch_circle_section py-5 text-center">
   <div class="container">
      <div class="row">
         <div class="about_coursecch">
            <h2 class="fw-bold mb-4">Explore CCH Axcess™ Modules with <span class="text-primary">AKPIS Institute</span></h2>
            <p class="text-muted mb-5 fs-5">
               Unlock professional expertise with our comprehensive modules designed for U.S. Tax Professionals.
            </p>
         </div>
      </div>
      <div class="circle_grid">
         <!-- Module 1 -->
         <div class="circle_item">
            <i class="fa-solid fa-user-graduate"></i>
            <h5>Tax Preparer</h5>
            <p>Learn CCH Axcess™ basics: Dashboard, Worksheet View, and Review Tools.</p>
         </div>
         <!-- Module 2 -->
         <div class="circle_item">
            <i class="fa-solid fa-file-invoice-dollar"></i>
            <h5>Form 1040</h5>
            <p>Master individual return filing — deductions, K-1 imports, and multi-state entries.</p>
         </div>
         <!-- Module 3 -->
         <div class="circle_item">
            <i class="fa-solid fa-handshake"></i>
            <h5>Form 1065</h5>
            <p>Workflow for partnership returns — Schedules L, M-1, M-2, and apportionment.</p>
         </div>
         <!-- Module 4 -->
         <div class="circle_item">
            <i class="fa-solid fa-building"></i>
            <h5>Form 1120 / 1120-S</h5>
            <p>Corporate return preparation — worksheets, schedules, and state data management.</p>
         </div>
         <!-- Module 5 -->
         <div class="circle_item">
            <i class="fa-solid fa-gears"></i>
            <h5>Process Admin</h5>
            <p>Admin role tools: Batch Manager, e-file tracking, and team optimization.</p>
         </div>
         <!-- Module 6 -->
         <div class="circle_item">
            <i class="fa-solid fa-envelope-open-text"></i>
            <h5>Correspondence</h5>
            <p>Customize letters, templates, and client communications with CCH Axcess™.</p>
         </div>
         <!-- Module 7 -->
         <div class="circle_item">
            <i class="fa-solid fa-cloud"></i>
            <h5>My1040Data Cloud</h5>
            <p>Secure cloud data sharing and collaboration for U.S. tax teams.</p>
         </div>
      </div>
   </div>
</section>
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
                  <?php } } ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Our Placement Partners Finish -->
<!-- About Instructor. start -->
<section class="about_instructor">
   <div class="container">
      <div class="row">
         <div class="cma_heading">
            <h1 class="pt-4">Mentor for <span> US CMA</span></h1>
         </div>
         <div class="col-12">
            <div class="about_instructor_title text-center">
               <h2>Shammi Singh Saluja is a leading faculty for US CMA with years of experience in guiding students to success. He is known for her clear teaching style, practical insights, and motivational approach. Many students credit him as the best coach for passing both parts of the CMA exam. His mentorship combines expert knowledge with personalized guidance, making complex concepts easy to understand.</h2>
               <img src="./assets/image/courses//linkin.png" alt="img" class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</section>
