<?php //echo '<pre>';print_r($aluminies);?>
<section class="achive-your-dreams-cma-usa">
   <div class="container">
      <div class="row align-items-center">
         <!-- Left Content -->
         <div class="col-md-6">
            <div class="para_achieve_dreamUsa">
               <!-- <h2>Achieve your dreams and grow with <span>CMA USA</span></h2> -->
               <h2><?= !empty($course->banner_title) ? $course->banner_title : '' ?></h2>
               <?= !empty($course->banner_subtitle) ? $course->banner_subtitle : '' ?>
            </div>
            <div class="video-container">
               <iframe width="560" height="315" src="<?= !empty($course->banner_video) ? $course->banner_video : '' ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
               <!-- WhatsApp Icon (you can use image or font awesome) -->
               <a href="https://wa.me/918527524176"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                  class="whatsapp-icon"></a> 
            </div>
         </div>
         <!-- Right Form -->
         <div class="col-md-6 vstack">
            <img src="/assets/images/cma_ima.png" class=""  alt="image">
            <form action="akpiscourse/form_submit_data" method="POST"  class="vstack gap-2 p-3 sm:p-6 xl:p-8" style="background:#1E1E1E !important; border:2px solid #EE2737; border-radius:8px;"    id="submit_enquiryfooter">
               <h4 class="h4 text-center mb-3" style="color:#FFFFFF !important">
                  CMA USA Webinar<br>
                  Discover Your Potential with Expert Guidance by AKPIS Professionals
               </h4>
               <input type="hidden" value="<?php echo $course_id;?>" name="course_id">
               <div class="row">
                  <!-- Name -->
                  <div class="col-md-6 mb-2">
                     <input class="form-control h-50px" type="text" placeholder="Full Name" name="name" required>
                  </div>
                  <!-- Email -->
                  <div class="col-md-6 mb-2">
                     <input class="form-control h-50px" type="email" placeholder="Your Email" name="email" required>
                  </div>
               </div>
               <div class="row">
                  <!-- Contact -->
                  <div class="col-md-6 mb-2">
                     <input type="tel"  name="contact"    id="contact"  class="form-control shadow-sm"   placeholder="Mobile Number"   required  pattern="[6-9]{1}[0-9]{9}"   title="Enter a valid 10-digit mobile number starting with 6, 7, 8, or 9"  maxlength="10"  oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)" required>
                  </div>
                  <!-- Qualification -->
                  <div class="col-md-6 mb-2">
                     <input class="form-control h-50px" type="text" placeholder="Qualification (e.g., B.Com, CMA)" name="qualification" required>
                  </div>
               </div>
               <div class="row">
                  <!-- Work Experience -->
                  <div class="col-md-6 mb-2">
                     <input class="form-control h-50px" type="text" placeholder="Work Experience (if any)" name="work_experience" >
                  </div>
                  <!-- Currently Pursuing Course -->
                  <div class="col-md-6 mb-2">
                     <select class="form-control h-50px" name="pursuing_course" >
                        <option value="">Currently Pursuing Any Course?</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                     </select>
                  </div>
               </div>
               <div class="row">
                  <!-- Salary -->
                  <div class="col-md-6 mb-2">
                     <input class="form-control h-50px" type="text" placeholder="Salary (if working)" name="salary" >
                  </div>
                  <!-- Placement Assistance -->
                  <div class="col-md-6 mb-2">
                     <select class="form-control h-50px" name="placement_assistance"  >
                        <option value="">Seeking Placement Assistance?</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                     </select>
                  </div>
               </div>
               <div class="row" id="stateCityGroup_center">
                  <!-- State -->
                  <div class="col-md-6 mb-2">
                     <select id="state_c" onchange="getCities(this.value)" name="state" class="form-control h-50px"  required>
                        <option value="">Select State</option>
                        <?php foreach($states as $state): ?>
                        <option value="<?= $state->id ?>"><?= $state->name ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
                  <!-- City -->
                  <div class="col-md-6 mb-2">
                     <select id="cityname" name="cityname" class="form-control h-50px" required>
                        <option value="">Select City</option>
                     </select>
                  </div>
               </div>
               <!-- Preferred Date & Time -->
               <div class="mb-2">
                  <input type="datetime-local" class="form-control h-50px" name="preferred_time" placeholder="Preferred Date & Time to Talk" >
                  <small class="text-muted" style="color:#fff!important;"> Select your convenient date and time to talk</small>
               </div>
               <!-- Comment -->
               <div class="mb-3">
                  <textarea class="form-control" id="comment" rows="3" name="comment"  placeholder="Enter your comments here..."></textarea>
               </div>
               <!-- Submit -->
               <div class="mt-3">
                  <button type="submit" class="btn btn-primary btn-md btn-block text-white w-100 get_in_touch" style="background:#EE2737; border:none;">
                  Enquire Now
                  </button>
               </div>
               <span class="loader" style="display:none;"></span>             
               <div id="footerFormMessagemiddle" class="mt-3"></div>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- Content Partner start -->
<section class="content_partner_cma">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="content_partner">
               <h2><?= !empty($course->enrol_title) ? $course->enrol_title : '' ?></h2>
               <p><?= !empty($course->enrol_description) ? htmlspecialchars($course->enrol_description) : '' ?></p>
               <p class="content_succsss">AKPIS  Mock tests + Shammi Sir Mentorship + Amanpreet CMA mam connectivity with students = FIRST attempt success in CMA</p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="content_partner_img text-center">
               <img src="./assets/image/logo/content_partner.jpeg" alt="img" class="img-fluid rounded-2">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Content Partner finish -->
<!-- Sripal Jain-A Visionary in Global Finance & Institute start -->
<section class="visionary_in_global">
   <div class="container">
      <h2 class="visionary_global"> <span>Shammi Saluja</span> - A Pioneer in US CMA training program for quality teaching</h2>
      <div class="row">
         <div class="col-12 col-md-12 col-lg-6 col-xl-6">
            <div class="visionary_image">
               <img src="./assets/image/logo/sha.jpg" alt="img" class="visionary_img">
               <a href="https://www.linkedin.com/in/cashammisaluja/" target="_balnk">
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
               <div class="visionary_card">
                  <h3>AKPIS provides comprehensive CMA training with expert mentorship from Shammi Sir and Aman Ma’am, ensuring concept clarity and exam confidence.</h3>
                  <ul>
                     <li>The institute offers interactive live and recorded classes, allowing students to learn anytime and anywhere.</li>
                     <li>Students get access to AKPIS Smart Learning Software, featuring MCQ practice, essay writing modules, and performance analytics.</li>
                     <li>Personal doubt-solving sessions and one-on-one mentorship help every student strengthen weak areas.</li>
                     <li>AKPIS provides real exam simulations that mirror the CMA testing interface for better time management.</li>
                     <li>Detailed study planners and progress trackers keep students disciplined and exam-ready.</li>
                     <li>The institute offers exclusive study materials, summarized notes, and section-wise test banks.</li>
                     <li>Regular mock tests and performance reviews help students measure improvement continuously.</li>
                     <li>AKPIS ensures a supportive community learning environment with peer discussions and mentor guidance.</li>
                  </ul>
                  <p>With high pass rates and global recognition, AKPIS stands as one of the best institutes for US CMA aspirants in India.</p>
                  <a href="akpiscourse/us-cma1#course_roadmap" class="btn btn-primary border-0">Check your Eligibility</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Sripal Jain-A Visionary in Global Finance & Institute finish -->
<!-- CMA = Why Choose CMA USA start -->
<section class="cma_why_choose">
   <div class="container">
      <div class="cma_heading">
         <h1>Why Choose <span>US CMA </span> Course?</h1>
      </div>
      <?php 
         if(!empty($course->steps)){
           $steps = json_decode($course->steps);
         }
         ?>
      <div class="row">
         <!-- Card 1 -->
         <div class="col-12 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
            <div class="cma-card">
               <div class="cma-left">
                  <i class="fa-solid fa-graduation-cap"></i>
               </div>
               <div class="cma-right">
                  <h5><?= !empty($steps->{1}->title) ? htmlspecialchars($steps->{1}->title) : '' ?></h5>
                  <p><?= !empty($steps->{1}->brief) ? htmlspecialchars($steps->{1}->brief) : '' ?></p>
               </div>
            </div>
         </div>
         <!-- Card 2 -->
         <div class="col-12 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
            <div class="cma-card">
               <div class="cma-left">
                  <i class="fa-solid fa-certificate"></i>
               </div>
               <div class="cma-right">
                  <h5><?= !empty($steps->{2}->title) ? htmlspecialchars($steps->{2}->title) : '' ?></h5>
                  <p><?= !empty($steps->{2}->brief) ? htmlspecialchars($steps->{2}->brief) : '' ?></p>
               </div>
            </div>
         </div>
         <!-- Card 3 -->
         <div class="col-12 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
            <div class="cma-card">
               <div class="cma-left">
                  <i class="fa-solid fa-earth-americas"></i>
               </div>
               <div class="cma-right">
                  <h5><?= !empty($steps->{3}->title) ? htmlspecialchars($steps->{3}->title) : '' ?></h5>
                  <p><?= !empty($steps->{3}->brief) ? htmlspecialchars($steps->{3}->brief) : '' ?></p>
               </div>
            </div>
         </div>
         <!-- Card 4 -->
         <div class="col-12 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
            <div class="cma-card">
               <div class="cma-left">
                  <i class="fa-solid fa-building"></i>
               </div>
               <div class="cma-right">
                  <h5><?= !empty($steps->{4}->title) ? htmlspecialchars($steps->{4}->title) : '' ?></h5>
                  <p><?= !empty($steps->{4}->brief) ? htmlspecialchars($steps->{4}->brief) : '' ?></p>
                  <button class="btn btn-danger">Register Here</button>
               </div>
            </div>
         </div>
      </div>
      <div class="cma_use_btn text-center py-3">
         <a href="<?= COURSE_IMAGE .$course->prospectus ?>" target="_blank"  class="btn btn-primary">Download Free CMA USA Prospectus <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
      </div>
   </div>
</section>
<!-- CMA = Why Choose CMA USA Finish -->
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
                        <img src="./assets/image/desktop-image/pyyI0mChz78.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/pyyI0mChz78')" class="video-btn"><img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="global_youtube_imgmain">
                     <div class="global_youtubeimg">
                        <img src="./assets/image/desktop-image/9pv-5wOp_mk.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/9pv-5wOp_mk')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="global_youtube_imgmain">
                     <div class="global_youtubeimg">
                        <img src="./assets/image/desktop-image/fp9NkRTRAlE.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/fp9NkRTRAlE')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="global_youtube_imgmain">
                     <div class="global_youtubeimg">
                        <img src="./assets/image/desktop-image/M5GvfD614zI.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/M5GvfD614zI')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
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
<!-- RoadMap Image start -->
<section class="cma_roadmapstart" id="course_roadmap">
   <div class="container-fluid">
      <div class="cma_heading">
         <h1><Span>Proccessed</Span> Roadmap</h1>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="cpa_cer_para">
               <h2>Your CMA Certification Journey in Just 8-12 Months</h2>
               <p>
                  Here’s how you can earn your US CMA and join the ranks of top accounting professionals
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
               <h3>Eligibility Criteria Only CMA</h3>
               <ul>
                  <li><strong>To Appear for the CPA Exams (120 Credits):</strong><br> You can qualify for the US CPA license with a recognized professional qualification like Indian CMA. CMA holders can fulfill the 150-credit requirement without needing additional courses.</li>
               </ul>
            </div>
            <!-- Step 3 -->
            <div class="journey-step">
               <h5>Step 2</h5>
               <h3>Placement Assistance : </h3>
               <ol class="list-group">
                  <li class="list-item">Mock interview preparation  
                  </li>
                  <li>Technical questions list</li>
                  <li>Regular follow ups</li>
                  <li>End to end support for placement</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <img src="./assets/image/courses//cma_roadmap.jpg" alt="img" class="img-fluid">
      </div>
   </div>
   </div>
</section>
<!-- RoadMap Image Finish -->
<!-- About Instructor. start -->
<section class="about_instructor">
   <div class="container">
      <div class="row">
         <div class="cma_heading">
            <h1 class="pt-4">Mentor for <span> US CMA</span></h1>
         </div>
         <div class="col-12">
            <div class="about_instructor_title text-center">
               <h2>Shammi Singh Saluja is a leading faculty for US CMA with years of experience in guiding students to success. He is known for her clear teaching style, practical insights, and motivational approach. Many students credit him as the best coach for passing both parts of the CMA exam. His  mentorship combines expert knowledge with personalized guidance, making complex concepts easy to understand.</h2>
               <img src="./assets/image/courses//linkin.png" alt="img" class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- About Instructor. Finsih -->
<!-- Why Akpis is Students No.1 Choice start -->
<section class="akpis_student_noone">
   <div class="container">
      <div class="cma_heading">
         <h1 class="pt-4 mb-0">Why is <span>Akpis</span> Institute the best for first time success in US CMA</h1>
      </div>
      <div class="row">
         <div class="row g-4">
            <!-- Card 1 -->
            <?php  $glimpe_features = [];
               if(!empty($course->glimpe_features)){
                   $glimpe_features = json_decode($course->glimpe_features);
               }
               if (!empty($glimpe_features)) {
                   foreach ($glimpe_features as $feature) {
               ?>
            <div class="col-12 col-md-6 col-lg-4">
               <div class="card akpis-card card-1">
                  <?php echo $feature->icon;?>
                  <div class="card-title"> <?php echo $feature->title;?></div>
                  <div class="card-text"> <?php echo $feature->description;?></div>
               </div>
            </div>
            <?php
               }
               }
               ?>   
         </div>
      </div>
   </div>
</section>
<!-- Why Akpis is Students No.1 Choice Finish -->
<!-- NorthStar Academy Ecosystem start -->
<section class="akpis_ecosysytem">
   <div class="container">
      <div class="cma_heading">
         <h1 class="pt-4 mb-0"><span>Akpis Institute</span>Ecosystem</h1>
         <p class="text-center fs-md-5 w-md-50 m-auto pb-4">Akpis Institute offers expert-led CMA US training with a proven track record of success, ensuring comprehensive support and high pass rates to fast-track your accounting career.</p>
      </div>
      <div class="row">
         <div class="col-12  col-md-6 col-lg-4 col-xl-4">
            <div class="akpis_ecosystemcard gap-4 text-center">
               <h4>Email and WhatsApp Connectivity</h4>
               <img src="./assets/image/courses/WhatsAppImage.jpeg" alt="img" class="img-fluid">
               <p>AKPIS ensures seamless communication through email and WhatsApp, allowing students to quickly clarify doubts, receive updates, and get study tips. This connectivity ensures that support is always available, even outside regular class hours.</p>
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">
               Enquire Now
               </button>
               <!-- <a href="#" class="btn btn-primary">Enquire Now</a> -->
            </div>
         </div>
         <div class="col-12  col-md-6 col-lg-4 col-xl-4">
            <div class="akpis_ecosystemcard gap-4 text-center">
               <h4>Personalized Zoom Sessions</h4>
               <img src="./assets/image/courses/zoom.jpeg" alt="img" class="img-fluid">
               <p>The institute offers one-on-one or small group Zoom sessions, tailored to each student’s learning needs. These personalized sessions help clarify difficult concepts, provide focused guidance, and strengthen weak areas efficiently.</p>
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">
               Enquire Now
               </button>
            </div>
         </div>
         <div class="col-12  col-md-6 col-lg-4 col-xl-4">
            <div class="akpis_ecosystemcard gap-4 text-center">
               <h4>Performance Report Analysis and Review</h4>
               <img src="./assets/image/courses/report.jpeg" alt="img" class="img-fluid">
               <p>AKPIS provides detailed performance reports after tests and practice exams, highlighting strengths and areas for improvement. Faculty review these reports with students, giving strategic advice to improve scores and track progress consistently.</p>
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">
               Enquire Now
               </button>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- NorthStar Academy Ecosystem Finsih -->
<!-- Alumni Success & Placement Stories start -->
<section class="alumini_success_cma">
   <div class="container">
      <h2 class="alumini_success_header">Alumni Success & Placement Stories</h2>
      <!-- <p class="aumini_success_para">See the incredible career paths of our CMA alumni.</p> -->
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
                        <?php 
                           if(!empty($place->placed_at)){ ?>
                        <p class="text-muted mb-1">Placed at</p>
                        <p class="fw-semibold"><?php echo $place->placed_at;?></p>
                        <?php     }else{ ?>
                        <p class="text-muted mb-1">Certified</p>
                        <p class="fw-semibold">Enrolled Agent (EA) - IRS USA</p>
                        <?php  }
                           ?>
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
<!-- testomonial start -->
<section class="testominal_ouralumini">
   <div class="container">
      <h2 class="testomonial_heading">
         Testimonials From Our Alumni
      </h2>
      <p class="text-center text-warning pb-5">See how our CMA alumni are excelling in global finance and management roles.</p>
      <div class="row">
         <div class="col-12">
            <div class="testomoinal_slider">
               <!-- Slide 1 -->
               <?php $ind = 1; foreach ($testimonials as $t => $te) { ?>
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
                        <p>
                           <?=$te->comment?>
                           <!-- <a href="#">Read More</a> -->
                        </p>
                     </div>
                     <div class="testomonial_img">
                        <img src="<?= TESTIMONIAL_IMAGE . $te->image ?>" class="img-fluid rounded-circle" width="80">
                        <h5 class="mt-3 mb-0"><?=$te->name?></h5>
                        <!-- <p class="text-muted">Chartered Accountant</p> -->
                     </div>
                  </div>
               </div>
               <?php $ind++; } ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- testomonial start -->
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
<!-- CMA US Admission Process Start -->
<!-- CMA US Admission Process Start -->
<section class="cma_us_admission">
   <div class="container">
      <h2 class="cma_us_admission_header">Your Roadmap to <span>CMA US Success</span></h2>
      <p class="cma_us_admission_para">Follow these simple steps to begin your professional accounting journey and achieve your CMA dreams with confidence!</p>
      <div class="row">
         <div class="col-md-4">
            <div class="enroll_cma_program text-center p-4 rounded shadow-sm transition">
               <i class="fa-solid fa-user-pen mb-3 enroll-icon"></i>
               <h4 class="mb-2 fw-semibold">Step 1: Register for the CMA Program</h4>
               <p class="text-muted small">
                  Join the IMA and officially register for the CMA US program to start your global finance journey.
               </p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="enroll_cma_program text-center p-4 rounded shadow-sm transition">
               <i class="fa-solid fa-book-open mb-3 enroll-icon"></i>
               <h4 class="mb-2 fw-semibold">Step 2: Begin Your Preparation</h4>
               <p class="text-muted small">
                  Get access to expert-led training and comprehensive study materials designed to help you master every concept.
               </p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="enroll_cma_program text-center p-4 rounded shadow-sm transition">
               <i class="fa-solid fa-graduation-cap mb-3 enroll-icon"></i>
               <h4 class="mb-2 fw-semibold">Step 3: Take the CMA Exams</h4>
               <p class="text-muted small">
                  Appear for both Part 1 and Part 2 of the CMA US exams and move one step closer to becoming a Certified Management Accountant.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- CMA US Admission Process End -->
   <!-- Enquiry Modal -->
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
               <form method="post" action="akpiscourse/form_submit" id="submit_enquiry">
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
   </div> 
   */ ?>