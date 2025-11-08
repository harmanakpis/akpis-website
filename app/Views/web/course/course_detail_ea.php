<!-- Enrollemt hero background start -->
<?php $uri = service('uri'); $path = $uri->getPath();  ?>
<section class="enrollmetn_hero">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-7 order-2 order-md-1">
            <div class="enrollment_text">
               <div class="EAcompany_logo">
                  <img src="./assets/image/logo/logo.png" alt="img" class="img-fluid">
               </div>
               <div class="EAcopmany_heading">
                  <h2>Boost Your Career as a Tax Professional</h2>
                  <span>ENROLLED AGENT COURSE</span>
                  <div class="typed-wrap pb-3"><span class="typed-text"></span><span class="typed-cursor"></span></div>
                  <a href="https://wa.me/918527524176" target="_blank" class="btn btn-warning btn-lg border-0">Enquire Now!</a>
               </div>
            </div>
         </div>
         <div class="col-md-5 order-1 order-md-2">
            <div class="enrollment_image_hero">
               <img src="./assets/image/logo/ab.png" alt="img" class="img-fluid">
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<!-- Enrollemt hero background finish -->
<!-- Why Become an Enrolled Agent? start -->
<section class="why_enrolledagent">
   <div class="container">
      <div class="EA_heading_enrollment">
         <h2>  <?= !empty($course->banner_title) ? $course->banner_title : '' ?></h2>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="why_enrollmentAgent_para">
               <?= !empty($course->banner_subtitle) ? $course->banner_subtitle : '' ?>
            </div>
         </div>
      </div>
      <?php 
         if(!empty($course->steps)){
           $steps = json_decode($course->steps);
         }
         ?>
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="why_EAwpb_wrapper">
               <div class="whyirs row g-3">
                  <div class="card">
                     <div class="card-body why_eacard">
                        <img src="./assets/image/EA/license-agreement.png" alt="img" class="img-fluid">
                        <h2><?= !empty($steps->{1}->title) ? htmlspecialchars($steps->{1}->title) : '' ?></h2>
                        <p><?= !empty($steps->{1}->brief) ? $steps->{1}->brief : '' ?></p>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-body why_eacard">
                        <img src="./assets/image/EA/target.png" alt="img" class="img-fluid">
                        <h2><?= !empty($steps->{2}->title) ? htmlspecialchars($steps->{2}->title) : '' ?></h2>
                        <p><?= !empty($steps->{2}->brief) ? $steps->{2}->brief : '' ?></p>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-body why_eacard">
                        <img src="./assets/image/EA/circular-arrows.png" alt="img" class="img-fluid">
                        <h2><?= !empty($steps->{3}->title) ? htmlspecialchars($steps->{3}->title) : '' ?></h2>
                        <p><?= !empty($steps->{3}->brief) ? $steps->{3}->brief : '' ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="why_EAform">
               <form action="<?= base_url('akpiscourse/form_submit_data') ?>" method="POST"  class="vstack gap-2 p-3 sm:p-6 xl:p-8" style="background:#1E1E1E !important; border:2px solid #EE2737; border-radius:8px;"    id="submit_enquiryfooter">
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
                  <div class="row" >
                     <!-- Contact -->
                     <div class="col-md-6 mb-2">
                        <input type="tel"  name="contact"    id="contact"  class="form-control shadow-sm"   placeholder="Mobile Number"   required  pattern="[6-9]{1}[0-9]{9}"   title="Enter a valid 10-digit mobile number starting with 6, 7, 8, or 9"  maxlength="10"  oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)" required>
                     </div>
                     <!-- Qualification -->
                     <div class="col-md-6 mb-2">
                        <input class="form-control h-50px" type="text" placeholder="Qualification (e.g., B.Com, CMA)" name="qualification" required >
                     </div>
                  </div>
                  <div class="row">
                     <!-- Work Experience -->
                     <div class="col-md-6 mb-2">
                        <input class="form-control h-50px" type="text" placeholder="Work Experience (if any)" name="work_experience" required>
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
                  <div class="row"  id="stateCityGroup_center">
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
                     <small class="text-muted">Select your convenient date and time to talk</small>
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
   </div>
</section>
<!-- Why Become an Enrolled Agent? Finish -->
<!--Brains Behind Success start -->
<section class="certified_public">
   <div class="container">
      <div class="row align-items-center">
         <div class="why_chooseakpis_heading">
            <h1 class="pb-4">Brains <span>Building Business </span> Empires</h1>
         </div>
         <div class="col-md-4 image-wrapper">
            <div class="youtube-icon">
               <a onclick="show_video('https://www.youtube.com/embed/o7aGUBIp-tk')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
            </div>
            <img class="course-image" src="./assets/image/desktop-image/o7aGUBIp-tk.jpg" alt="Course Overview">
         </div>
         <div class="col-md-4 image-wrapper">
            <div class="youtube-icon">
               <a onclick="show_video('https://www.youtube.com/embed/y1yPIg_SQeg')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
            </div>
            <img class="course-image" src="./assets/image/desktop-image/y1yPIg_SQeg.jpg" alt="Course Overview">
         </div>
         <div class="col-md-4 image-wrapper">
            <div class="youtube-icon">
               <a onclick="show_video('https://www.youtube.com/embed/aCOCFUu3DkI')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
            </div>
            <img class="course-image" src="./assets/image/desktop-image/aCOCFUu3DkI.jpg" alt="Course Overview">
         </div>
      </div>
   </div>
</section>
<!-- Brains Behind Success finish -->
<!-- Sripal Jain-A Visionary in Global Finance & Institute start -->
<section class="visionary_in_global">
   <div class="container">
      <h2 class="visionary_global"> <span>Shammi Saluja</span> - A Visionary in Taxation & Enrolled Agent Education</h2>
      <div class="row">
         <div class="col-12 col-md-12 col-lg-6 col-xl-6">
            <div class="visionary_image">
               <img src="./assets/image/logo/sha.jpg" alt="img" class="visionary_img">
               <h4> <span>
                  <i class="fa-brands fa-linkedin"></i>
                  </span>Shammi Saluja, CA, CPA <br>
                  India’s top finance instructor
               </h4>
            </div>
         </div>
         <div class="col-12 col-md-12 col-lg-6 col-xl-6">
            <div class="card visionary_card">
               <div class="">
                  <h3>IRS-Recognized EA Mentor</h3>
                  <p>Guiding aspiring tax professionals to achieve the prestigious Enrolled Agent license through AKPIS Institute — India’s most trusted IRS-authorized training platform.</p>
               </div>
            </div>
            <div class="card visionary_card">
               <div class="">
                  <h3>Global Taxation Educator</h3>
                  <p>With years of experience in U.S. taxation, compliance, and advisory, Shammi Saluja has mentored thousands of professionals toward global careers in tax and accounting.</p>
               </div>
            </div>
            <div class="card visionary_card">
               <div class="">
                  <h3>Co-Founder of AKPIS Institute</h3>
                  <p>Leading India’s premier institute for Enrolled Agent, US CPA, and US CMA programs — building tax experts through live mentoring, exam-focused training, and real-world exposure.</p>
               </div>
            </div>
            <div class="card visionary_card">
               <div class="">
                  <h3>Influencer, Speaker & Industry Leader</h3>
                  <p>Inspiring the next generation of finance professionals with powerful insights on taxation, compliance, and international accounting practices.</p>
               </div>
            </div>
            <div class="card visionary_card">
               <div class="">
                  <h3>Media & Professional Recognition</h3>
                  <p>Featured in leading financial publications like The Times of India, The Financial Express, and News18 for contributions to U.S. taxation education in India.</p>
                  <a href="https://wa.me/918527524176" target="_blank" class="btn btn-primary border-0">Enquire Now!</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Sripal Jain-A Visionary in Global Finance & Institute finish -->
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
                        <img src="./assets/image/desktop-image/bEDXnC-GtQQ.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/bEDXnC-GtQQ')" class="video-btn"><img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="global_youtube_imgmain">
                     <div class="global_youtubeimg">
                        <img src="./assets/image/desktop-image/rt-h_O8gvz8.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/rt-h_O8gvz8')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="global_youtube_imgmain">
                     <div class="global_youtubeimg">
                        <img src="./assets/image/desktop-image/Cvgs0TqK0Us.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/Cvgs0TqK0Us')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="global_youtube_imgmain">
                     <div class="global_youtubeimg">
                        <img src="./assets/image/desktop-image/x91DjPvQ1go.jpg" alt="img" class="img-fluid">
                        <div class="youtube_icon">
                           <a onclick="show_video('https://www.youtube.com/embed/x91DjPvQ1go')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
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
<!-- Reasons to pursue Enrolled Agent Course start -->
<section class="reason_purseAgent">
   <div class="container">
     <?php 
        if(!empty($course->extrafeature)){
        $extrafeatures = json_decode($course->extrafeature);
        }
        ?>
      <div class="EA_heading_enrollment">
         <h2 class="pb-4">Reasons to pursue <span>Enrolled Agent Course</span></h2>
      </div>
      <div class="row g-4">
        <?php  if(!empty($extrafeatures)) { 
                foreach($extrafeatures as $feat){ ?>
         <div class="col-12 col-md-6 col-lg-4 col-xl-4 ea_icon">
            <div class="tax_expert">
               <img src="<?= COURSE_IMAGE .$feat->image ?>" alt="img" class="img-fluid">
               <h4><?php echo $feat->title;?></h4>
               <p><?php echo $feat->description;?></p>
            </div>
         </div>
         <?php }  } ?>
         <div class="why_reasonPurseagent text-center py-4">
            <a href="<?= COURSE_IMAGE .$course->prospectus ?>" target="_blank"  class="btn btn-primary">Download Free EA Prospectus <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
         </div>
      </div>
   </div>
</section>
<!-- Reasons to pursue Enrolled Agent Course finish-->
<!-- The steps to becoming an Enrolled Agent start -->
<section class="step_to_becoming">
   <div class="container">
   <div class="row">
      <div class="col-12">
         <div class="step_bg1">
            <h1 class="text-center  fw-bold py-3">
               Step-by-Step Guide to Become a <span>Certified Enrolled Agent</span> with AKPIS Institute
            </h1>
         </div>
      </div>
   </div>
</section>
<!-- The steps to becoming an Enrolled Agent finish -->
<!-- Gleim® Enrolled Agent Course start -->
<section class="gleim_enrolledEA">
   <div class="container">
      <div class="EA_heading_enrollment">
         <h2 class="pb-4"><span>AKPIS Institute</span> Enrolled Agent (EA) Training Program</h2>
      </div>
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="gleim-enrolled-para">
               <p>Becoming an Enrolled Agent is a career-defining step for any tax professional. At <strong>AKPIS Institute</strong>, we provide a structured training program that helps you understand IRS rules, regulations, and exam patterns. Our EA Success Guide gives you a clear roadmap to confidently tackle every part of the exam.</p>
               <p>Our program is designed for flexibility—study at your own pace while receiving expert guidance. With comprehensive coverage of all exam topics and a personalized learning path, AKPIS ensures you focus on the areas that matter most for exam success.</p>
            </div>
            <div class="accordion custom-accordion" id="eaAccordion">
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingBaseline">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBaseline" aria-expanded="false" aria-controls="collapseBaseline">
                     <strong>Build Your Baseline</strong>
                     </button>
                  </h2>
                  <div id="collapseBaseline" class="accordion-collapse collapse" aria-labelledby="headingBaseline" data-bs-parent="#eaAccordion">
                     <div class="accordion-body">
                        Begin with a <strong>diagnostic quiz</strong> so SmartAdapt can assess your knowledge level and create a <strong>custom study path</strong> based on your strengths and weaknesses.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingStudyAreas">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStudyAreas" aria-expanded="false" aria-controls="collapseStudyAreas">
                     <strong>Focus on Key Topics</strong>
                     </button>
                  </h2>
                  <div id="collapseStudyAreas" class="accordion-collapse collapse" aria-labelledby="headingStudyAreas" data-bs-parent="#eaAccordion">
                     <div class="accordion-body">
                        Strengthen your preparation by reviewing <strong>targeted outlines</strong> and watching <strong>expert video lectures</strong> chosen for you by SmartAdapt.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingMasterOutlines">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMasterOutlines" aria-expanded="false" aria-controls="collapseMasterOutlines">
                     <strong>Master the EA Exam Content</strong>
                     </button>
                  </h2>
                  <div id="collapseMasterOutlines" class="accordion-collapse collapse" aria-labelledby="headingMasterOutlines" data-bs-parent="#eaAccordion">
                     <div class="accordion-body">
                        Practice with <strong>adaptive quizzes</strong> that adjust to your progress. Each question includes <strong>detailed explanations</strong> to ensure you truly understand the topic.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFinalReview">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFinalReview" aria-expanded="false" aria-controls="collapseFinalReview">
                     <strong>Final Review & Exam Prep</strong>
                     </button>
                  </h2>
                  <div id="collapseFinalReview" class="accordion-collapse collapse" aria-labelledby="headingFinalReview" data-bs-parent="#eaAccordion">
                     <div class="accordion-body">
                        After finishing all units, take your <strong>first mock exam</strong>. Based on results, SmartAdapt guides your <strong>final review</strong>. A few days before the test, attempt the <strong>second mock exam</strong> to boost confidence and eliminate surprises on exam day.
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 image-wrapper">
            <div class="EA_exam_photo text-center">
               <div class="youtube-icon">
                  <a onclick="show_video('https://www.youtube.com/embed/T6nOkuo_AwI')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
               </div>
               <img class="course-image" src="./assets/image/desktop-image/T6nOkuo_AwI.jpg" alt="Course Overview">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Gleim® Enrolled Agent Course finish -->
<!-- IRS Requirements to Obtain Enrolled Agent Certification start -->
<section class="Irsrequirements">
   <div class="container">
      <div class="EA_heading_enrollment">
         <h2 class="pb-4">IRS Requirements to Obtain <span> Enrolled Agent Course</span> Certification</h2>
      </div>
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="irs_requirement">
               <h3>Education and Knowledge</h3>
               <p>No specific education or prior experience is required to take the EA exam. However, candidates should be comfortable with U.S. tax law and able to handle questions at an intermediate college accounting level. AKPIS Institute provides comprehensive training to ensure success.</p>
            </div>
         </div>
         <div class="col-md-6 image-wrapper">
            <div class="irs_requirementImg text-center ">
               <div class="youtube-icon">
                  <a onclick="show_video('https://www.youtube.com/embed/VNlc56GrISk')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
               </div>
               <img class="course-image" src="./assets/image/desktop-image/VNlc56GrISk.jpg" alt="Course Overview">
               <!-- <img src="./assets/image/EA/edu-1.webp" alt="img" class="img-fluid"> -->
            </div>
         </div>
         <div class="col-md-6 image-wrapper">
            <div class="irs_requirementImg text-center ">
               <div class="youtube-icon">
                  <a onclick="show_video('https://www.youtube.com/embed/aCOCFUu3DkI')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
               </div>
               <img class="course-image" src="./assets/image/desktop-image/aCOCFUu3DkI.jpg" alt="Course Overview">
               <!-- <img src="./assets/image/EA/exam-1.webp" alt="img" class="img-fluid"> -->
            </div>
         </div>
         <div class="col-md-6">
            <div class="irs_requirement">
               <h3>Examination</h3>
               <p>Pass all three parts of the Enrolled Agent exam within two years. All paid tax return preparers must have a valid Preparer Tax Identification Number (PTIN) to register. AKPIS Institute offers expert-led preparation to guide candidates through each exam section efficiently.</p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="irs_requirement">
               <h3>Ethics & Compliance</h3>
               <p>Complete a suitability check, including a tax compliance review and criminal background check. To maintain your EA designation, you must complete 2 hours of ethics continuing professional education annually. AKPIS Institute emphasizes ethical practices as part of its EA training program.</p>
            </div>
         </div>
         <div class="col-md-6 image-wrapper">
            <div class="irs_requirementImg text-center">
               <div class="youtube-icon">
                  <a onclick="show_video('https://www.youtube.com/embed/ge2bvkkITHw')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
               </div>
               <img class="course-image" src="./assets/image/desktop-image/ge2bvkkITHw.jpg" alt="Course Overview">
               <!-- <img src="./assets/image/EA/ethic-1.webp" alt="img" class="img-fluid"> -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- IRS Requirements to Obtain Enrolled Agent Certification finish -->
<!-- Job Prospects for Enrolled Agent Course start -->
<section class="job_prospectsEA">
   <div class="container">
      <div class="EA_heading_enrollment">
         <h2 class="pb-4">Career Opportunities after <span>Enrolled Agent (EA) Course</span></h2>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="EA_heading_para">
               <h4><strong>Enrolled Agents open doors to rewarding careers</strong> in Taxation, Finance, and Accounting.</h4>
               <h6>With skills in <strong>tax compliance</strong>, <strong>planning</strong>, and <strong>representation before the IRS</strong>, EA-certified professionals are valued advisors. Completing the Enrolled Agent Course equips you for diverse, high-growth roles across multiple industries.</h6>
            </div>
            <div class="row justify-content-center my-3">
               <?php
                  $careers = [
                      "Tax Consultant",
                      "Auditor",
                      "Financial Advisor",
                      "Tax Analyst",
                      "Compliance Officer",
                      "Corporate Accountant",
                      "Wealth Manager",
                      "Tax Planner",
                      "Business Advisor",
                      "Investment Consultant",
                      "Forensic Accountant",
                      "Risk Manager"
                  ];
                  // Define different colors for cards
                  $colors = [
                      "#0a9b3c", // green
                      "#007bff", // blue
                      "#ff5722", // orange-red
                      "#9c27b0", // purple
                      "#ff9800", // amber
                      "#00bcd4", // cyan
                      "#e91e63", // pink
                      "#795548", // brown
                      "#673ab7", // deep purple
                      "#009688", // teal
                      "#cddc39", // lime
                      "#f44336"  // red
                  ];
                  
                  foreach ($careers as $index => $career) {
                      $color = $colors[$index % count($colors)];
                      echo "
                          <div class='career-card' style='--card-color: $color'>
                              <div class='career-content'>
                                  <h3>" . str_replace(" ", "<br>", $career) . "</h3>
                              </div>
                          </div>
                          ";
                  }
                  ?>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="alumini_success_cma">
   <div class="container">
      <h2 class="alumini_success_header">Alumni Success & Placement Stories</h2>
      <p class="aumini_success_para">See the incredible career paths of our EA alumni.</p>
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
<!-- Job Prospects for Enrolled Agent Course finish -->
<!-- Enrolled Agent Course Curriculum start -->
<section class="enrolledCourseCurrliculam">
   <div class="container">
      <div class="EA_heading_enrollment">
         <h2 class="pb-3"><span>AKPIS Institute </span> Enrolled Agent Course Curriculum</h2>
         <p class="lead text-muted">
            Master U.S. Taxation with AKPIS Institute’s globally recognized <strong>Enrolled Agent (EA) Course</strong>.
            Our comprehensive EA syllabus is designed to help you understand U.S. tax laws, compliance, and representation
            before the IRS. This structured curriculum prepares you for all three parts of the <strong>IRS EA Exam</strong> 
            and builds your expertise in both <em>Individual and Business Taxation</em> along with <em>Representation Procedures</em>.
         </p>
         <p class="text-muted">
            Whether you’re a tax professional, accountant, or aspiring to work in U.S. taxation, our curriculum ensures
            step-by-step learning — from understanding taxpayer data to managing IRS representations effectively. 
            Learn from industry experts through real-world examples, interactive sessions, and up-to-date course materials.
         </p>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="EAexam_tabs container my-5">
               <ul class="nav nav-pills mb-4 tabs_heading" id="eaexam-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link active" id="ea-part1-tab" data-bs-toggle="pill" data-bs-target="#ea-part1" type="button" role="tab" aria-controls="ea-part1" aria-selected="true">
                     <i class="fa-solid fa-user me-2"></i> Part 1: Individual Taxation
                     </button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="ea-part2-tab" data-bs-toggle="pill" data-bs-target="#ea-part2" type="button" role="tab" aria-controls="ea-part2" aria-selected="false">
                     <i class="fa-solid fa-building me-2"></i> Part 2: Business Taxation
                     </button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="ea-part3-tab" data-bs-toggle="pill" data-bs-target="#ea-part3" type="button" role="tab" aria-controls="ea-part3" aria-selected="false">
                     <i class="fa-solid fa-shield-halved me-2"></i> Part 3: Representation & Procedures
                     </button>
                  </li>
               </ul>
               <div class="tab-content p-5 rounded shadow-lg bg-light" id="eaexam-tabContent">
                  <!-- Part 1 -->
                  <div class="tab-pane fade show active" id="ea-part1" role="tabpanel" aria-labelledby="ea-part1-tab">
                     <h4 class="fw-bold mb-3 text-primary"><i class="fa-solid fa-user me-2"></i> Part 1: Individual Taxation</h4>
                     <p class="text-muted">
                        The first part of the Enrolled Agent Exam focuses on taxation related to individuals. 
                        This module helps you understand how to prepare, analyze, and file individual tax returns, 
                        apply deductions, and manage compliance efficiently. It also covers planning strategies 
                        that can help taxpayers legally reduce their tax liabilities.
                     </p>
                     <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item"><i class="fa-solid fa-file-lines me-2 text-primary"></i> Introduction to Taxpayer Information & Data Review</li>
                        <li class="list-group-item"><i class="fa-solid fa-sack-dollar me-2 text-success"></i> Understanding Income Sources, Assets & Investment Taxation</li>
                        <li class="list-group-item"><i class="fa-solid fa-percent me-2 text-warning"></i> Deductions, Adjustments, Tax Credits & Exemptions</li>
                        <li class="list-group-item"><i class="fa-solid fa-calculator me-2 text-danger"></i> Tax Calculation, Payments & Liability Determination</li>
                        <li class="list-group-item"><i class="fa-solid fa-lightbulb me-2 text-info"></i> Tax Planning & Advisory Strategies for Individuals</li>
                        <li class="list-group-item"><i class="fa-solid fa-book me-2 text-secondary"></i> Specialized Returns: Retirement, Estate & Non-Resident Individuals</li>
                     </ul>
                  </div>
                  <!-- Part 2 -->
                  <div class="tab-pane fade" id="ea-part2" role="tabpanel" aria-labelledby="ea-part2-tab">
                     <h4 class="fw-bold mb-3 text-success"><i class="fa-solid fa-building me-2"></i> Part 2: Business Taxation</h4>
                     <p class="text-muted">
                        The second part of the EA Exam syllabus dives into <strong>Business Taxation</strong>. 
                        It focuses on understanding the tax treatment of different business entities, including sole proprietorships, 
                        partnerships, corporations, and S-Corps. Learners gain hands-on experience in business return preparation, 
                        deductions, reporting, and compliance with the IRS.
                     </p>
                     <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item"><i class="fa-solid fa-diagram-project me-2 text-primary"></i> Business Entities, Legal Structures & Tax Classifications</li>
                        <li class="list-group-item"><i class="fa-solid fa-chart-line me-2 text-success"></i> Income, Deductions, and Taxable Business Activities</li>
                        <li class="list-group-item"><i class="fa-solid fa-briefcase me-2 text-warning"></i> Partnership, Corporation & S-Corporation Taxation</li>
                        <li class="list-group-item"><i class="fa-solid fa-check-square me-2 text-danger"></i> Employment Taxation, Depreciation & Recordkeeping</li>
                        <li class="list-group-item"><i class="fa-solid fa-file-invoice-dollar me-2 text-info"></i> Business Credits, Loss Limitations & IRS Compliance</li>
                     </ul>
                  </div>
                  <!-- Part 3 -->
                  <div class="tab-pane fade" id="ea-part3" role="tabpanel" aria-labelledby="ea-part3-tab">
                     <h4 class="fw-bold mb-3 text-danger"><i class="fa-solid fa-shield-halved me-2"></i> Part 3: Representation & IRS Procedures</h4>
                     <p class="text-muted">
                        The third and final part of the EA Course focuses on IRS practices and procedures. 
                        This section prepares you to represent clients before the IRS in matters of examination, 
                        appeals, and collections. You’ll learn how to handle compliance issues and ensure ethical 
                        practices while maintaining professional standards as an IRS Enrolled Agent.
                     </p>
                     <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item"><i class="fa-solid fa-gear me-2 text-primary"></i> IRS Systems, Circular 230 & Ethical Guidelines</li>
                        <li class="list-group-item"><i class="fa-solid fa-user-check me-2 text-success"></i> Representation Rights and Responsibilities</li>
                        <li class="list-group-item"><i class="fa-solid fa-folder-open me-2 text-warning"></i> Handling Examinations, Audits & Appeals</li>
                        <li class="list-group-item"><i class="fa-solid fa-file-circle-check me-2 text-danger"></i> Compliance, Documentation & Case Management</li>
                        <li class="list-group-item"><i class="fa-solid fa-scale-balanced me-2 text-info"></i> Professional Conduct & Ethical Representation</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Enrolled Agent Course Curriculum finish -->
<!-- Our Placement Partners start -->
<section class="placement_partners ">
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
<!-- Salary Potential for Enrolled Agents start -->
<section class="salary_potentialEA py-5">
   <div class="container">
      <div class="EA_heading_enrollment text-center mb-4">
         <h2 class="pb-3">Salary Potential for <span> Enrolled Agents </span></h2>
         <p class="lead text-muted">
            The earning potential for an <strong>Enrolled Agent (EA)</strong> is highly rewarding and continues to grow as 
            the demand for skilled tax professionals increases globally. At <strong>AKPIS Institute</strong>, we prepare you 
            to not only pass the EA Exam but also to build a successful and financially stable career in U.S. taxation.
         </p>
         <p class="text-muted">
            Your salary as an Enrolled Agent depends on various factors such as experience, location, education level, 
            specialization, and the size of the organization you work with. Whether you choose to work in a public firm, 
            corporate setting, or as an independent tax consultant, the opportunities are vast and lucrative.
         </p>
      </div>
      <!-- Key Salary Factors -->
      <!-- Key Salary Factors -->
      <div class="salary_potentialEAaccordian">
         <div class="accordion" id="salaryFactorsAccordion">
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingExperience">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExperience" aria-expanded="false" aria-controls="collapseExperience">
                  <i class="fa-solid fa-briefcase me-2"></i> Experience – Salary Factors at AKPIS Institute
                  </button>
               </h2>
               <div id="collapseExperience" class="accordion-collapse collapse" aria-labelledby="headingExperience" data-bs-parent="#salaryFactorsAccordion">
                  <div class="accordion-body">
                     At <strong>AKPIS Institute</strong>, we emphasize that years of experience directly impact your career growth and salary. More professional experience typically leads to higher compensation.
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingIndustry">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIndustry" aria-expanded="false" aria-controls="collapseIndustry">
                  <i class="fa-solid fa-industry me-2"></i> Industry – Career Opportunities at AKPIS Institute
                  </button>
               </h2>
               <div id="collapseIndustry" class="accordion-collapse collapse" aria-labelledby="headingIndustry" data-bs-parent="#salaryFactorsAccordion">
                  <div class="accordion-body">
                     The industry you work in can significantly affect your salary. <strong>AKPIS Institute</strong> prepares students for high-demand sectors that offer better pay and growth opportunities.
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingSpecialization">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSpecialization" aria-expanded="false" aria-controls="collapseSpecialization">
                  <i class="fa-solid fa-user-tie me-2"></i> Specialization – Skills & Salary Insights at AKPIS
                  </button>
               </h2>
               <div id="collapseSpecialization" class="accordion-collapse collapse" aria-labelledby="headingSpecialization" data-bs-parent="#salaryFactorsAccordion">
                  <div class="accordion-body">
                     Your specialization or professional skills play a key role in determining your salary. <strong>AKPIS Institute</strong> helps students specialize in fields with high earning potential.
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Salary Tiers -->
      <div class="row text-center">
         <!-- Entry Level -->
         <div class=" col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
            <div class="EA_entry_levelPositition p-4 rounded shadow-sm bg-light h-100">
               <h2 class="text-primary mb-3"><i class="fa-solid fa-seedling"></i> Entry-Level Positions</h2>
               <p>
                  Fresh graduates or individuals beginning their journey as Enrolled Agents can expect annual packages 
                  between <strong>₹3,00,000 to ₹5,00,000</strong>. At this stage, professionals usually work under senior 
                  tax consultants, assisting with individual returns, documentation, and compliance processes.
               </p>
               <p class="text-muted small">
                  <em>Tip:</em> Completing the EA certification from <strong>AKPIS Institute</strong> enhances credibility and 
                  helps candidates secure higher entry-level salaries.
               </p>
            </div>
         </div>
         <!-- Mid Level -->
         <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
            <div class="EA_entry_levelPositition p-4 rounded shadow-sm bg-light h-100">
               <h2 class="text-success mb-3"><i class="fa-solid fa-briefcase"></i> Mid-Level Professionals</h2>
               <p>
                  With 3–5 years of experience, mid-level Enrolled Agents can earn between 
                  <strong>₹6,00,000 to ₹12,00,000</strong> annually. These professionals typically handle complex 
                  tax filings, manage client portfolios, and provide advisory services to businesses and individuals.
               </p>
               <p class="text-muted small">
                  Many AKPIS-trained EAs at this level work with <strong>Big 4 firms</strong>, MNCs, and international 
                  tax advisory companies.
               </p>
            </div>
         </div>
         <!-- Senior Level -->
         <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
            <div class="EA_entry_levelPositition p-4 rounded shadow-sm bg-light h-100">
               <h2 class="text-danger mb-3"><i class="fa-solid fa-user-tie"></i> Senior & Leadership Roles</h2>
               <p>
                  Senior Enrolled Agents with 8–10 years of experience or leadership expertise can command 
                  packages of <strong>₹15,00,000 and above</strong> per year. Some professionals working with U.S.-based 
                  clients or international tax firms even earn up to <strong>₹25,00,000+</strong> annually.
               </p>
               <p class="text-muted small">
                  Senior-level EAs are often appointed as <strong>Tax Managers, Compliance Heads,</strong> or 
                  <strong>U.S. Taxation Advisors</strong> in reputed global organizations.
               </p>
            </div>
         </div>
      </div>
      <!-- Career Growth Section -->
      <div class="row mt-5">
         <div class="col-md-12 text-center">
            <h3 class="fw-bold mb-3 text-secondary">Career Growth & Global Demand</h3>
            <p class="text-muted">
               With the globalization of finance and the increasing complexity of tax laws, <strong>Enrolled Agents</strong> 
               are in high demand not only in the U.S. but also across India, the UAE, and other international markets. 
               The EA credential from <strong>AKPIS Institute</strong> opens doors to work with multinational corporations, 
               accounting firms, outsourcing companies, and private practices.
            </p>
            <p class="text-muted">
               Whether you aim to work remotely with U.S. clients or join a global firm, becoming an Enrolled Agent 
               gives you long-term stability, flexibility, and global recognition in the field of taxation.
            </p>
         </div>
      </div>
   </div>
</section>
<!-- Salary Potential for Enrolled Agents finish -->
<!-- testomonial start -->
<section class="testominal_ouralumini">
   <div class="container">
      <h2 class="testomonial_heading">
         Testimonials From Our Alumni
      </h2>
      <p class="text-center text-warning pb-5">See how our ENROLLED AGENT alumni are excelling in global finance and management roles.</p>
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