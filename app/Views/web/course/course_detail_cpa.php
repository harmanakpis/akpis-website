<!-- Desktop hero page start -->
<section class="hero_desktop">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-5">
            <div class="cpa_topper">
               <button class="cpa-btn">
               <span class="big-text">From Start to Success:</span>
               <span class="small-text">100% First Attempt Success in Mentorship Batch!</span>
               </button>
            </div>
            <div class="cpa_heading">
               <h1><?= !empty($course->banner_title) ? htmlspecialchars($course->banner_title) : '' ?>
                  <span><img src="./assets/image/logo/floag.png" alt="alt" class="img-fluid"></span>
               </h1>
               <p class="cpt_title-heading">4 Exam | 12-15 Months,</p>
               <p class="cpa_title_desc"><?= !empty($course->banner_subtitle) ? htmlspecialchars($course->banner_subtitle) : '' ?></p>
               <button type="button" class="btn btn-primary cpa_btn mb-2" data-bs-toggle="modal" data-bs-target="#enquiryModal">
               Enquire Now
               </button>
            </div>
            <div class="google_trading">
               <div class="main_google_trading">
                  <div class="font_google">
                     <i class="fa-brands fa-google"></i>
                  </div>
                  <div class="para_google">
                     <h6 class="text-nowrap">Success Stories <span>500+</span></h6>
                     <p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                     </p>
                  </div>
               </div>
            </div>
            <div class="home_main_component">
               <div class="home_component">
                  <div class="firstComponent">
                     <img src="./assets/image/desktop-image/internet.png" alt="img" class="img-fluid">
                     <div class="para_homecomponent">
                        <h4>1L+</h4>
                        <p>Global Students</p>
                     </div>
                  </div>
               </div>
               <div class="home_component">
                  <div class="firstComponent">
                     <img src="./assets/image/desktop-image/trophy.png" alt="img" class="img-fluid">
                     <div class="para_homecomponent">
                        <h4>99%</h4>
                        <p>Pass Rate</p>
                     </div>
                  </div>
               </div>
               <div class="home_component bg-dark">
                  <div class="firstComponent ">
                     <img src="./assets/image/desktop-image/skyscraper.png" alt="" class="img-fluid">
                     <div class="para_homecomponent">
                        <h4>15000 +</h4>
                        <p>Placement</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-7 mx-0">
            <div class="cpa_img">
               <img src="<?= COURSE_IMAGE . $course->banner_image ?>" alt="<?=base_url()?>/assets/image/logo/desktop_img.png" class="img-fluid">
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<!-- Desktop hero page Finish -->
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
<!-- CPA = US CA start -->
<section class="cpa_usa_ca">
   <div class="container">
      <div class="cpa_usa_heading">
         <h1>CPA = US CA</h1>
      </div>
      <?php 
         if(!empty($course->steps)){
           $steps = json_decode($course->steps);
         }
         ?>
      <div class="row">
         <div class="col-12 col-md-6 col-lg-3 col-xl-3">
            <div class="cpa-card">
               <div class="cpa-left">
                  <i class="fa-solid fa-book-open"></i>
               </div>
               <div class="cpa-right">
                  <h4>
                     <?php if($steps->{1}){echo 'Just';} ?> </h1>
                     <h5>
                     <?= !empty($steps->{1}->title) ? htmlspecialchars($steps->{1}->title) : '' ?>
                  </h4>
                  <p><?= !empty($steps->{1}->brief) ? htmlspecialchars($steps->{1}->brief) : '' ?></p>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-3 col-xl-3">
            <div class="cpa-card">
               <div class="cpa-left">
                  <i class="fa-solid fa-square-check"></i>
               </div>
               <div class="cpa-right">
                  <h5><?= !empty($steps->{2}->title) ? htmlspecialchars($steps->{2}->title) : '' ?></h5>
                  <p><?= !empty($steps->{2}->brief) ? htmlspecialchars($steps->{2}->brief) : '' ?></p>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-3 col-xl-3">
            <div class="cpa-card">
               <div class="cpa-left">
                  <i class="fa-solid fa-user-tie"></i>
               </div>
               <div class="cpa-right">
                  <h5><?= !empty($steps->{3}->title) ? htmlspecialchars($steps->{3}->title) : '' ?></h5>
                  <p><?= !empty($steps->{3}->brief) ? htmlspecialchars($steps->{3}->brief) : '' ?></p>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-3 col-xl-3">
            <div class="cpa-card">
               <div class="cpa-left">
                  <i class="fa-solid fa-phone"></i>
               </div>
               <div class="cpa-right">
                  <h5><?= !empty($steps->{4}->title) ? htmlspecialchars($steps->{4}->title) : '' ?></h5>
                  <p><?= !empty($steps->{4}->brief) ? htmlspecialchars($steps->{4}->brief) : '' ?></p>
                  <a href="<?= base_url('akpiscourse/us-cpa1/#submit_enquiryfooter') ?>">   <button class="btn btn-danger" >Register Here</button></a>
               </div>
            </div>
         </div>
      </div>
      <div class="cpa_use_btn text-center py-3">
         <a href="<?= COURSE_IMAGE .$course->prospectus ?>" target="_blank"  class="btn btn-primary">Download Free US CPA Prospectus <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
      </div>
   </div>
</section>
<!-- CPA = US CA Finish -->
<!-- Why Choose akpis start -->
<section class="why_chooseAkpis">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="why_chooseakpis_heading">
               <!-- <h1>Why Choose Akpis Education <span>(Becker Exclusive Partner)</span> for US CPA?</h1> -->
               <h1> <?= !empty($course->choose_title) ? $course->choose_title : '' ?> </h1>
               <p><?= !empty($course->choose_description) ? $course->choose_description : '' ?> </p>
            </div>
         </div>
      </div>
      <div class="row why_chooseakpis_features">
         <?php  $features = [];
            if(!empty($course->features)){
              $features = json_decode($course->features);
            }
            if (!empty($features)) {
            foreach ($features as $feature) {
            ?>
         <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
            <div class="feature_box">
               <div class="circle_icon"></div>
               <p>
                  <strong>
                  <?= !empty($feature->title) ? htmlspecialchars($feature->title) : '' ?>
                  </strong>
                  <?= !empty($feature->description) ? htmlspecialchars($feature->description) : '' ?>
               </p>
            </div>
         </div>
         <?php  }  } ?>
      </div>
      <p class="text-muted text-center">With Akpis and Gleim, you're not just preparing for CPA - you're preparing for a world-class career in finance and accounting.</p>
   </div>
</section>
<!-- Why Choose akpis finsih -->
<!-- Certified Public Accountant (CPA) start -->
<section class="certified_public py-0">
   <div class="container">
      <div class="row align-items-center">
         <div class="why_chooseakpis_heading">
            <h1 class="pb-4">Check & <span>Quality lectures</span> for US CPA?</h1>
         </div>
         <div class="col-md-4 image-wrapper">
            <div class="youtube-icon">
               <a onclick="show_video('https://www.youtube.com/embed/5gl9GD5g1Cs')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
            </div>
            <img class="course-image" src="./assets/image/desktop-image/5gl9GD5g1Cs.jpg" alt="Course Overview">
         </div>
         <div class="col-md-4 image-wrapper">
            <div class="youtube-icon">
               <a onclick="show_video('https://www.youtube.com/embed/97L2atpfGWA')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
            </div>
            <img class="course-image" src="./assets/image/desktop-image/97L2atpfGWA.jpg" alt="Course Overview">
         </div>
         <div class="col-md-4 image-wrapper">
            <div class="youtube-icon">
               <a onclick="show_video('https://www.youtube.com/embed/H0o1lGAzaZI')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
            </div>
            <img class="course-image" src="./assets/image/desktop-image/H0o1lGAzaZI.jpg" alt="Course Overview">
         </div>
      </div>
   </div>
</section>
<!-- Certified Public Accountant (CPA) finish -->
<!-- Desktop_image_cpa start -->
<section class="Desktop_imgage_cpa">
   <div class="container-fluid px-0">
      <div class="row">
         <div class="col-12">
            <img src="<?=base_url()?>/assets/image/logo/imgproject.png" alt="img" class="img-fluid">
         </div>
      </div>
   </div>
</section>
<!-- Desktop_image finish -->
<!-- Why Did Becker Choose only AKPIS for CPA in India?
   start -->
<section class="backer_choose">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-5 image-wrapper">
            <!-- <div class="youtube-icon">
               <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid">
               </div> -->
            <img class="course-image" src="<?=base_url()?>/assets/image/logo/whatapp.jpeg" alt="Course Overview">
         </div>
         <div class="col-md-7">
            <div class="para_bakerchoose">
               <h2> <?= !empty($course->glimp_title) ? htmlspecialchars($course->glimp_title) : '' ?></h2>
               <h4> <?= !empty($course->glimp_subtitle) ? htmlspecialchars($course->glimp_subtitle) : '' ?></h4>
               <p> <?= !empty($course->glimp_description) ? htmlspecialchars($course->glimp_description) : '' ?></p>
            </div>
         </div>
      </div>
      <div class="row py-4 g-4">
         <?php  $glimpe_features = [];
            if(!empty($course->glimpe_features)){
                $glimpe_features = json_decode($course->glimpe_features);
            }
            if (!empty($glimpe_features)) {
                foreach ($glimpe_features as $feature) {
            ?>
         <div class="col-12 col-md-6 col-lg-4 col-xl-4">
            <div class="cpa_evaluation">
               <?php echo $feature->icon;?>
               <h2><?php echo $feature->title;?></h2>
               <p><?php echo $feature->description;?></p>
            </div>
         </div>
         <?php
            }
            }
            ?>           
      </div>
   </div>
</section>
<!-- Learn from the #1 Global Mentor start -->
<section class="globalMentorCpa">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="heading_global mb-5">
               <h2>Learn from the <span>#1 Global Mentor </span> </h2>
            </div>
         </div>
      </div>
      <div class="row align-items-center">
         <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <div class="card">
               <div class="card-body">
                  <div class="global_mentor">
                     <img src="./assets/image/logo/ab.png" alt="img" class="img-fluid">
                  </div>
                  <div class="global_mentor_para text-center">
                     <h2>Shammi Saluja CA CPA <br>( Passed )</h2>
                     <p>With over a decade of leadership experience, my journey as Director at AKPIS EDU PVT LTD  encompasses strategic curriculum development, ensuring Instituteal offerings align with market needs. At AKPIS, our mission is to empower and innovate within the Institute sector, a challenge I embrace with a blend of financial acuity, as a Chartered Accountant, and a passion for transformative learning experiences. My commitment to excellence is complemented by a dedication to fostering an environment that values diverse perspectives and collective growth. Under the exceptional guidance of CPA passed Shammi sir, students knowledge is fostered with enhanced development</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <div class="row gy-4">
               <div class="col-md-6">
                  <div class="global_youtube_imgmain">
                     <div class="global_youtubeimg">
                        <img src="./assets/image/desktop-image/stoWuGoI0EQ.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/stoWuGoI0EQ')" class="video-btn"><img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="global_youtube_imgmain">
                     <div class="global_youtubeimg">
                        <img src="./assets/image/desktop-image/tdsIzHGA_kk.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/tdsIzHGA_kk')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="global_youtube_imgmain">
                     <div class="global_youtubeimg">
                        <img src="./assets/image/desktop-image/Cms5m6F1hz0.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/Cms5m6F1hz0')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="global_youtube_imgmain">
                     <div class="global_youtubeimg">
                        <img src="./assets/image/desktop-image/eEE6aJ9tmdg.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/eEE6aJ9tmdg')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Learn from the #1 Global Mentor End -->
<!-- Sripal Jain-A Visionary in Global Finance & Institute start -->
<section class="visionary_in_global">
   <div class="container">
      <h2 class="visionary_global"> <span>Shammi Saluja</span> - A Pioneer in CPA mentorship training with till you pass facility</h2>
      <div class="row">
         <div class="col-12 col-md-12 col-lg-6 col-xl-6">
            <div class="visionary_image">
               <img src="./assets/image/logo/sha.jpg" alt="img" class="visionary_img">
               <a href="https://www.linkedin.com/in/cashammisaluja/" target="_blank">
                  <h4> 
                     <span>
                     <i class="fa-brands fa-linkedin"></i>
                     </span> Shammi Saluja, CA, CPA <br>
                     India’s top finance instructor 
                  </h4>
               </a>
            </div>
         </div>
         <div class="col-12 col-md-12 col-lg-6 col-xl-6">
            <div class="card visionary_card">
               <div class="">
                  <h3>CPA Renowned Faculty</h3>
                  <p>One of India’s most recognized US CPA faculty, mentoring thousands of finance professionals.</p>
               </div>
            </div>
            <div class="card visionary_card">
               <div class="">
                  <h3>Personal Mentorship</h3>
                  <p>The only Indian to be featured twice among USA’s Top 40 Young Accounting Professionals by CPA Practice Advisor & AICPA.</p>
               </div>
            </div>
            <div class="card visionary_card">
               <div class="">
                  <h3>Till you pass facility</h3>
                  <p>Shammi Saluja sir's mentorship serve as a base to clear CPA exam with sure shot success. Additionally, MCQ and simulations are covered in the class itself</p>
               </div>
            </div>
            <div class="card visionary_card">
               <div class="">
                  <h3>Performance Report Analysis Reviewal</h3>
                  <p>Timely analysis of reports in the software is quite helpful to track vulnerabilities in the preparation, and strengthening of concepts.</p>
               </div>
            </div>
            <div class="card visionary_card">
               <div class="cpa_elagibility">
                  <h3>Placement Assistance</h3>
                  <p>Job alerts, mock interview preparation, list of technical questions contribute significantly for your dream job by AKPIS</p>
                  <a href="<?php echo base_url();?>akpiscourse/us-cpa1#course_roadmap" class="btn btn-primary border-0">Check your Eligibility</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- The Pathway to the CPA world start -->
<section class="pathway_tofind">
   <div class="container">
      <h2 class="pathwayfind mb-2">The Pathway to the CPA world</h2>
      <div class="row align-items-center">
         <div class="col-12 col-md-12 col-lg-6 col-xl-6">
            <div class="pathway_findtxt">
               <ul>
                  <li> AUD — Auditing and Attestation</li>
                  <li>FAR — Financial Accounting and Reporting</li>
                  <li>
                     REG — Taxation and Regulation exam
                  </li>
                  <li>TCP — Tax Compliance and Planning
                  </li>
                  <li>
                     ISC — Information Systems and Controls
                  </li>
                  <li>
                     BAR — TCP Analysis & Reporting
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-12 col-md-12 col-lg-6 col-xl-6">
            <div class="pathway_img">
               <img src="<?=base_url()?>/assets/image/logo/e-bbok.png" alt="img" class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- The Pathway to the CPA world finish -->
<!-- 100% toppers in cma batch start -->
<?php //echo '<pre>';print_r($toppers);?>
<section class="cma_batch" >
   <div class="container">
      <h2 class="pathwayfind text-primary mb-2">Enroll today for first attempt success in CPA with AKPIS Institute</h2>
      <div class="row">
         <div class="col-12">
            <div class="cma_batch_slider">
               <div class="responsive2">
                  <?php
                     if(!empty($toppers)){
                       foreach($toppers as $topper){
                         ?>
                  <div class="cma_batch_card">
                     <div class="card">
                        <div class="card-body">
                           <img src="<?= ALUMINI_IMAGE . $topper->image ?>" alt="img" class="img-fluid">
                           <h2><?php echo  $topper->name;?></h2>
                           <p><?php echo  $topper->comment;?></p>
                        </div>
                     </div>
                  </div>
                  <?php  }
                     }
                     
                       ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- 100% toppers in cma batch finish -->
<!-- Cpa Certification start -->
<section class="cpa_certifiction" id="course_roadmap">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="cpa_cer_para">
               <h2>Your CPA Certification Journey in Just 8-12 Months</h2>
               <p>
                  Here’s how you can earn your US CPA and join the ranks of top accounting professionals
               </p>
               <!-- <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                  Enroll Now
                  </button> -->
               <a href="https://wa.link/gypgko" class=" btn btn-primary mb-2 btn-lg" target="_blank">Enroll Now</a>
            </div>
         </div>
         <div class="col-md-6 scrollable-journey">
            <!-- Step 1 -->
            <div class="journey-step">
               <h5>Step 1</h5>
               <h3>Eligibility Criteria</h3>
               <ul>
                  <li><strong>To Appear for the CPA Exams (120 Credits):</strong><br> You need a graduation degree (like B.Com) plus a bridge course to meet the 120 credits.</li>
                  <li><strong>To Get the CPA License (150 Credits) or 120 Credits + 2yrs work experience:</strong><br> You must complete 150 credits, or a recognized professional qualification like Indian CA/CMA.</li>
               </ul>
               <p>You must complete 120 Credits with a bachelor's degree + 2yrs of work experience approved by NASBA.</p>
            </div>
            <!-- Step 2 -->
            <div class="journey-step">
               <h5>Step 2</h5>
               <h3>Clear the 4 Exams</h3>
               <div class="fw-bold pt-2">Core Exams</div>
               <ul>
                  <li><strong>FAR -</strong> Financial Accounting & Reporting</li>
                  <li><strong>AUD -</strong> Auditing & Attestation</li>
                  <li><strong>REG -</strong> Regulation & Taxation</li>
               </ul>
               <div class="fw-bold pt-2">Discipline (Choose any one)</div>
               <ul>
                  <li><strong>BAR -</strong> Business Analysis & Reporting</li>
                  <li><strong>ISC -</strong> Information Systems & Control</li>
                  <li><strong>TCP -</strong> Tax Compliance & Planning</li>
               </ul>
            </div>
            <!-- Step 3 -->
            <div class="journey-step">
               <h5>Step 3</h5>
               <h3>Get Placement Assistance</h3>
               <p>Leverage Akpis’s exclusive job portal & Big 4 tie-ups to land your dream job.</p>
            </div>
            <!-- Step 4 -->
            <div class="journey-step">
               <h5>Step 4</h5>
               <h3>Earn Your CPA License</h3>
               <p>Gain a globally recognized CPA credential and expand your career opportunities.</p>
            </div>
            <!-- Step 5 -->
            <div class="journey-step">
               <h5>Step 5</h5>
               <h3>Step into Leadership Roles</h3>
               <p>Work as a Senior Auditor, Tax Consultant, CFO, or Forensic Accountant.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="timeline-container">
               <div class="timeline">
                  <!-- Item 1 -->
                  <div class="timeline-item">
                     <div class="circle">1</div>
                     <div class="month">Month 5</div>
                     <div class="exam">FAR Exam</div>
                  </div>
                  <!-- Item 2 -->
                  <div class="timeline-item">
                     <div class="circle">2</div>
                     <div class="month">Month 7</div>
                     <div class="exam">AUD Exam</div>
                  </div>
                  <!-- Item 3 -->
                  <div class="timeline-item">
                     <div class="circle">3</div>
                     <div class="month">Month 10</div>
                     <div class="exam">REG Exam</div>
                  </div>
                  <!-- Item 4 -->
                  <div class="timeline-item">
                     <div class="circle">4</div>
                     <div class="month">Month 12</div>
                     <div class="exam">BAR/ISC/TCP Exam</div>
                  </div>
               </div>
               <!-- Curly brace and text -->
               <div class="brace"></div>
               <div class="brace-text">12 Months Timeline</div>
               <div class="brace-text1">Works in the us Through <br>our master's Program</div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Cpa Certification finish -->
<!-- CPA Exam Fees start -->
<section class="cpa_exam_fee">
   <div class="container">
      <div class="row">
         <div class="cpa_exam_main_heading">
            <h2>CPA Exam</h2>
         </div>
         <div class="col-12">
            <div class="pricing-wrap">
               <div class="cma_exam_price">
                  <!-- Stage I -->
                  <div class="card mb-3">
                     <div class="card-header d-flex justify-content-between align-items-center">
                        <div>Stage I <small class="text-muted">| Exam prep</small></div>
                        <span class="badge bg-success text-white">One-time</span>
                     </div>
                     <div class="card-body">
                        <p class="mb-2">
                           <strong>Akpis Live Classes + Glimps CPA Review Program</strong><br>
                           The only institute in India offering both Indian & US lecture software. Access expert live training, Glimps CPA Review resources, all four modules, physical textbooks, pre-recorded lectures, and PassMaster Software with 8500+ MCQs and simulations, plus progress tests and mock exams.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                           <span class="text-muted">Package price</span>
                           <span class="fw-bold text-success">₹1,30,000</span>
                        </div>
                     </div>
                  </div>
                  <!-- Stage II -->
                  <div class="card mb-3">
                     <div class="card-header d-flex justify-content-between align-items-center">
                        <div>Stage II <small class="text-muted">| Evaluation & State Board Application</small></div>
                        <!-- <span class="badge bg-primary text-white">Mandatory</span> -->
                     </div>
                     <div class="card-body">
                        <ul class="list-unstyled mb-0">
                           <li class="d-flex justify-content-between py-2 border-bottom">
                              <div>
                                 <strong>NIES (NASBA International Evaluation Services)</strong>
                                 <div class="small text-muted">Evaluation fee payable to US agency</div>
                              </div>
                              <!-- <div class="text-end">
                                 <div class="fw-bold text-primary">$250</div>
                                 <div class="small text-success">₹21,930</div>
                                 </div> -->
                           </li>
                           <li class="d-flex justify-content-between py-2 border-bottom">
                              <div>
                                 <strong>CPA Exam Fees (for first exam)</strong>
                                 <div class="small text-muted">Per initial exam registration</div>
                              </div>
                              <!-- <div class="text-end">
                                 <div class="fw-bold text-primary">$870</div>
                                 <div class="small text-success">₹76,690</div>
                                 </div> -->
                           </li>
                           <li class="d-flex justify-content-between py-2">
                              <div>
                                 <strong>One Time State Board Application Fee</strong>
                                 <div class="small text-muted">Valid for lifetime</div>
                              </div>
                              <!-- <div class="text-end">
                                 <div class="fw-bold text-primary">$100</div>
                                 <div class="small text-success">₹8,770</div>
                                 </div> -->
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!-- Stage III -->
                  <div class="card">
                     <div class="card-header d-flex justify-content-between align-items-center">
                        <div>Stage III <small class="text-muted">| License formality Assistance</small></div>
                        <!-- <span class="badge bg-info text-white">Per-exam</span> -->
                     </div>
                     <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                           <span>The final step is to apply for license, and suffix CPA after your name</span>
                           <!-- <div class="text-end">
                              <div class="fw-bold text-primary">$2,610</div>
                              <div class="small text-success">₹2,30,069</div>
                              </div> -->
                        </div>
                        <hr>
                        <!-- <p class="small text-muted mb-0">
                           <strong>Exchange rate used:</strong> US $1 = INR 90.00 (includes foreign currency markup fees).
                           Expenses may vary slightly depending on the evaluation agency and state board selection.
                           </p> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- CPA Exam Fees finish -->
<!-- US CPA Exams start -->
<section class="us_exam_cpa">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="use_exam_cpa">
               <h2>US CPA Exams</h2>
               <p>The international administration process for the India region is now permanently available.</p>
            </div>
         </div>
      </div>
      <div class="row g-4">
         <!-- Core Exams -->
         <div class="col-md-6">
            <div class="card exam-card shadow-lg border-0 h-100">
               <div class="card-header bg-secondary text-white p-3 d-flex align-items-center">
                  <i class="bi bi-journal-check me-2 fs-4"></i>
                  <h4 class="mb-0">3 Core Exams (Mandatory)</h4>
               </div>
               <div class="card-body">
                  <ol class="exam-list">
                     <li><strong>AUD</strong> – Auditing and Attestation</li>
                     <li><strong>FAR</strong> – Financial Accounting and Reporting</li>
                     <li><strong>REG</strong> – Taxation and Regulation</li>
                  </ol>
               </div>
            </div>
         </div>
         <!-- Discipline Exam -->
         <div class="col-md-6">
            <div class="card exam-card shadow-lg border-0 h-100">
               <div class="card-header bg-warning text-white p-3 d-flex align-items-center">
                  <i class="bi bi-award me-2 fs-4"></i>
                  <h4 class="mb-0">Discipline Exam - Choose any 1 out of 3</h4>
               </div>
               <div class="card-body">
                  <ol class="exam-list">
                     <li><strong>BAR</strong> – Business Analysis & Reporting</li>
                     <li><strong>ISC</strong> – Information Systems and Controls</li>
                     <li><strong>TCP</strong> – Tax Compliance & Planning</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- US CPA Exams finish -->
<!-- Download free CPA Class Schedules start -->
<section class="download_free_cma">
   <div class="container">
      <!-- <h2 class="down_Cma_course">
         Download free CPA Class Schedules
         </h2> -->
      <div class="row">
         <?php  /*
            $pdfs = [];
            if($course->class_Schedules_PDF){
            $pdfs = json_decode($course->class_Schedules_PDF,true);
            // echo '<pre>';print_r($pdfs);
            foreach ($pdfs as $pdf) { ?>
         <div class="col-md-3">
            <div class="btn_down_Cma">
               <a href="<?= COURSE_IMAGE . $pdf['file'] ?>" target="_blank" >
               <?= $pdf['title'] ?> <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
               </a>
            </div>
         </div>
         <?php } }  */?>
      </div>
   </div>
</section>
<!-- Download free CPA Class Schedules finish -->
<?php 
   // echo '<pre>';print_r($placement);  exit;
   ?>
<!-- Alumni Success & Placement Stories start -->
<section class="alumini_success_cma">
   <div class="container">
      <h2 class="alumini_success_header">Alumni Success & Placement Stories</h2>
      <p class="aumini_success_para">See the incredible career paths of our CPA alumni.</p>
      <div class="row">
         <div class="col-12">
            <!-- Alumni Carousel -->
            <div class="alumni-slider row">
               <?php foreach($placement as $place){ ?>
               <div class="col-md-4 col-sm-6 mb-4">
                  <div class="card text-center m-2 shadow-sm border-0" style="border-radius: 20px;">
                     <div class="card-body">
                        <img src="<?= ALUMINI_IMAGE . $place->image ?>" alt="img" class="rounded-circle border border-3 border-primary mx-auto d-block mb-3" style="width:130px; height:130px; object-fit:cover;">
                        <h5 class="card-title mb-1"><?php echo $place->name;?></h5>
                        <p class="text-muted mb-1">Placed at</p>
                        <!-- <i class="fa-brands fa-amazon"></i> -->
                        <p class="fw-semibold"><?php echo $place->placed_at;?></p>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
            <!-- <div class="alumini_viewmore text-center py-4">
               <button class="btn btn-outline-primary btn btn-lg">
                   View More <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
               </button>
               </div> -->
         </div>
      </div>
   </div>
</section>
<!-- Alumni Success & Placement Stories finish -->
<!-- Download free CPA MCQ's start -->
<section class="downloadCpaMcq">
   <div class="container">
      <h2 class="downloadmcq_heading">Download free CPA MCQ's</h2>
      <div class="row justify-content-center">
         <?php 
            $pdfs = [];
            if($course->class_Schedules_PDF){
            $pdfs = json_decode($course->class_Schedules_PDF,true);
            // echo '<pre>';print_r($pdfs);
            foreach ($pdfs as $pdf) { ?>
         <div class="col-12 col-md-6 col-lg-3 col-xl-3">
            <div class="download_mcqButton">
               <a href="<?= COURSE_IMAGE . $pdf['file'] ?>" target="_blank" >
               <?= $pdf['title'] ?> <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
               </a>
            </div>
         </div>
         <?php } } ?>
      </div>
      <div class="row py-4">
         <div class="col-12">
            <div class="impact_akspit">
               <h2 class="akspit_imapct_heading">World's Best Instructor CA CPA passed Shammi Saluja sir</h2>
               <p class="akspit_impact_para fs-5">
                  Changing lives of millions for a better future with personal attention, and innovation based learning
               </p>
            </div>
         </div>
      </div>
      <div class="row align-items-center">
         <div class="col-md-12 col-lg-8 col-xl-8">
            <div class="row g-4">
               <div class="col-md-6">
                  <div class="mcq_couting_number">
                     <h2>1L+ <span>Students</span></h2>
                     <p>Empowering professionals to achieve successful careers in Big 4 firms, Fortune 500 companies, and leading global organizations.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="mcq_couting_number">
                     <h2>1000% <span>Average ROI</span></h2>
                     <p>Transforming careers with unmatched returns through placements in Big 4s, Fortune 500s, and top global enterprises.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="mcq_couting_number">
                     <h2>20+ <span>Countries with Global Placements</span></h2>
                     <p>Graduates are shaping careers across India, North America, the Middle East, and other regions worldwide.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="mcq_couting_number">
                     <h2>300+ <span>Corporate Tie-ups</span></h2>
                     <p>Recognized for expert mentorship, Gleim-backed study materials, and AI-powered learning tools that accelerate career success.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-4 col-xl-4">
            <div class="cpa_mcq_counting position-relative">
               <!-- <img src="./assets/image/logo/sucess-thumb1.jpg" alt="img" class="img-fluid rounded-4"> -->
               <img src="./assets/image/desktop-image/bf9iFE4FwfU.jpg" alt="img" class="img-fluid rounded-4">
               <div class="youtube_icon">
                  <a onclick="show_video('https://www.youtube.com/embed/bf9iFE4FwfU')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Download free CPA MCQ's Finish -->
<!-- testomonial start -->
<section class="testominal_ouralumini">
   <div class="container">
      <h2 class="testomonial_heading">
         Testimonials From Our Alumni
      </h2>
      <?php 
         // echo '<pre>';print_r($testimonials); echo $course_id;
         ?>
      <p class="text-center text-warning pb-5">See how our CPA alumni are excelling in global finance and management roles.</p>
      <div class="row">
         <div class="col-12">
            <div class="testomoinal_slider">
               <?php 
                  if(!empty($testimonials)){
                      foreach($testimonials as $key => $test){
                  ?>
               <!-- Slide 1 -->
               <div class="card">
                  <div class="card-body text-center">
                     <div class="testomonal_star">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                     </div>
                     <div class="testonminal_paragraph">
                        <p><?php echo $test->comment;?></p>
                     </div>
                     <div class="testomonial_img">
                        <img src="<?= TESTIMONIAL_IMAGE . $test->image ?>" alt="John Doe" class="img-fluid rounded-circle" width="80">
                        <h5 class="mt-3 mb-0"><?php echo $test->name;?></h5>
                        <!-- <p class="text-muted">Chartered Accountant</p> -->
                     </div>
                  </div>
               </div>
               <?php }   } ?>        
               <!-- Slide 2 -->
               <!-- <div class="card">
                  <div class="card-body text-center">
                      <div class="testomonal_star">
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                      </div>
                      <div class="testonminal_paragraph">
                          <p>AKPIS is the best platform for US CPA aspirants! Expert faculty and structured guidance helped me successfully clear my exams.</p>
                      </div>
                      <div class="testomonial_img">
                          <img src="./assets/image/desktop-image/img2.jpg" alt="Jane Smith" class="img-fluid rounded-circle" width="80">
                          <h5 class="mt-3 mb-0">Vicky Goyal</h5>
                        
                      </div>
                  </div>
                  </div> -->
               <!-- Slide 3 -->
               <!-- <div class="card">
                  <div class="card-body text-center">
                      <div class="testomonal_star">
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                      </div>
                      <div class="testonminal_paragraph">
                          <p>AKPIS US CPA coaching was invaluable in my success. Their guidance and mentorship made my exam preparation smooth and effective.</p>
                      </div>
                      <div class="testomonial_img">
                          <img src="./assets/image/desktop-image/img3.jpg" alt="Amandeep Kaur" class="img-fluid rounded-circle" width="80">
                          <h5 class="mt-3 mb-0">Prabhneet Singh</h5>
                        
                      </div>
                  </div>
                  </div> -->
               <!-- <div class="card">
                  <div class="card-body text-center">
                      <div class="testomonal_star">
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                          <span><i class="fa-solid fa-star"></i></span>
                      </div>
                      <div class="testonminal_paragraph">
                          <p>I achieved my CPA results thanks to AKPIS. Their support provided the perfect platform to overcome doubts and succeed.</p>
                      </div>
                      <div class="testomonial_img">
                          <img src="./assets/image/desktop-image/img4.jpg" alt="Jane Smith" class="img-fluid rounded-circle" width="80">
                          <h5 class="mt-3 mb-0">Harshita Sharma</h5>
                      </div>
                  </div>
                  </div> -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- testomonial start -->
<!-- explore Webinars start -->
<?php if (!empty($webinars)) : ?>
<section class="explore_webinars ">
   <div class="container">
      <div class="row align-items-center">
         <?php //echo '<pre>';print_r($webinars);
            $date = $webinars->webinar_date;
            $time = $webinars->webinar_time;
            $datetime = new DateTime("$date $time", new DateTimeZone("UTC")); // if stored in UTC
            $datetime->setTimezone(new DateTimeZone("Asia/Kolkata")); // convert to IST
            
            ?>
         <div class="col-md-6">
            <div class="explore_webinars_text">
               <h2>Upcoming webinars</h2>
               <p>Join our free webinar to explore global finance courses and explore study and career opportunities in the USA and beyond!</p>
               <a href="https://wa.link/gypgko" class="btn btn-primary" target="_blank">Explore Webinars</a>
            </div>
         </div>
         <div class="col-md-6">
            <div class="explore_webinars_banner">
               <img src="./assets/image/students/WhatsApp.jpg" alt="img" class="img-fluid">
               <!-- <img src="<? //= ALUMINI_IMAGE . $webinars->image ?>" alt="img" class="img-fluid"> -->
               <h6><?php echo $webinars->name;?></h6>
               <p id="event"><span class="me-2"><i class="fa-solid fa-calendar-days"></i></span><strong><?php echo $datetime->format("g:i A") ?> IST</strong><br><?php echo $datetime->format("M d, Y") ?></p>
               <button type="button" class="btn btn-primary cpa_btn mb-2" data-bs-toggle="modal" data-bs-target="#enquiryModal">Register Now</button>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>
<!-- CPA Prometric Centers in India start -->
<section class="prometric_city py-5">
   <div class="container">
      <h2 class="prometriccity_heading">CPA Prometric Centers in India</h2>
      <p class="prometriccity_paragraph text-center fs-5 pb-4">The international administration process for the India region is now permanently available.</p>
      <div class="row">
         <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-4">
            <div class="cpa_city_card">
               <img src="./assets/image/city/Ahmedabad.jpg" alt="Ahmedabad">
               <div class="cpa_city_overlay">
                  <h4>Ahmedabad</h4>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-4">
            <div class="cpa_city_card">
               <img src="./assets/image/city/Bengaluru.jpg" alt="Bengaluru" class="img-fluid">
               <div class="cpa_city_overlay">
                  <h4>Bengaluru</h4>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-4">
            <div class="cpa_city_card">
               <img src="./assets/image/city/delhi.jpg" alt="Delhi" class="img-fluid">
               <div class="cpa_city_overlay">
                  <h4>Delhi</h4>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-4">
            <div class="cpa_city_card">
               <img src="./assets/image/city/chennai.jpg" alt="Chennai" class="img-fluid">
               <div class="cpa_city_overlay">
                  <h4>Chennai</h4>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-4">
            <div class="cpa_city_card">
               <img src="./assets/image/city/mumbai-taj.jpg" alt="Mumbai" class="img-fluid">
               <div class="cpa_city_overlay">
                  <h4>Mumbai</h4>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-4">
            <div class="cpa_city_card">
               <img src="./assets/image/city/kolkata.jpg" alt="Kolkata" class="img-fluid">
               <div class="cpa_city_overlay">
                  <h4>Kolkata</h4>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-4">
            <div class="cpa_city_card">
               <img src="./assets/image/city/hyderabad.jpg" alt="Hyderabad" class="img-fluid">
               <div class="cpa_city_overlay">
                  <h4>Hyderabad</h4>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-4">
            <div class="cpa_city_card">
               <img src="./assets/image/city/Thiruvananthapuram-Musuem.jpg" alt="Thiruvananthapuram" class="img-fluid">
               <div class="cpa_city_overlay">
                  <h4>Thiruvananthapuram</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- CPA Prometric Centers in India finish -->
<!-- Other Course start -->
<section class="us_cma_course">
   <div class="container">
      <button class="btn btn-warning">
      Courses
      </button>
      <h2 class="usa_cma_courses">Courses</h2>
      <div class="row">
         <div class="col-12 col-md-6 col-lg-4 col-xl-4">
            <div class="other_course_Cma">
               <div class="card">
                  <div class="card-body">
                     <img src="<?=base_url()?>/assets/image/courses/US-CMA.jpg" alt="img" class="w-100 m-auto">
                     <h3>US CMA</h3>
                     <span class="badge py-2 badge-pill bg-success badge-success">#Popular</span>
                     <p>The US Certified Management Accountant (US CMA) is a top-tier accounting credential respected by employers globally.</p>
                     <a href="javascript:void(0);"><button>Know More</button></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-4 col-xl-4">
            <div class="other_course_Cma">
               <div class="card">
                  <div class="card-body">
                     <img src="<?=base_url()?>/assets/image/courses/US-CMA.jpg" alt="img" class="w-100 m-auto">
                     <h3>US CIA</h3>
                     <span class="badge py-2 badge-pill bg-success badge-success">#Popular</span>
                     <p>A globally recognized internal audit credential from the US that equips you with expertise in risk management, governance, and data-driven assurance.</p>
                     <a href="javascript:void(0);"><button>Know More</button></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-4 col-xl-4">
            <div class="other_course_Cma">
               <div class="card">
                  <div class="card-body">
                     <img src="<?=base_url()?>/assets/image/courses/US-CMA.jpg" alt="img" class="w-100 m-auto">
                     <h3>EA (Enrolled Agent)</h3>
                     <span class="badge py-2 badge-pill bg-success badge-success">#Popular</span>
                     <p>The Enrolled Agent is a highest Tax qualification in US having a privilege of representing taxpayers before the Internal Revenue Service.</p>
                     <a href="javascript:void(0);"><button>Know More</button></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Other Course Finsih -->

<!-- Enquire Now start modal  -->

<!-- Add this in your <head> or before your custom scripts -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>