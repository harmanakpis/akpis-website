<section class="hero_desktop">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-5">
            <div class="cpa_topper">
               <button class="cpa-btn">
               <span class="big-text">Transform Your Career with CIA Certification:</span>
               <span class="small-text">AKPIS Mentorship Batch for Aspiring Internal Auditors!</span>
               </button>
            </div>
            <div class="cpa_heading">
               <h1><?= !empty($course->banner_title) ? htmlspecialchars($course->banner_title) : '' ?>
                  <span><img src="./assets/image/logo/floag.png" alt="USA Flag" class="img-fluid"></span>
               </h1>
               <p class="cpt_title-heading">3 Exam Parts | 12-18 Months</p>
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
               <?php if (!empty($course->banner_image) && file_exists(COURSE_IMAGE. $course->banner_image)) : ?>
               <img src="<?= COURSE_IMAGE . $course->banner_image ?>" alt="Zoho Books" class="img-fluid w-75 m-auto rounded-4 shadow-lg">
               <?php else : ?>
               <img src="<?= base_url('assets/images/default-course.jpg') ?>" alt="Default Course Image" class="img-fluid w-75 m-auto rounded-4 shadow-lg">
               <?php endif; ?>
               <!-- <img src="./assets/image/logo/desktop_img.png" alt="img" class="img-fluid"> -->
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
<!-- Certified Public Accountant (CPA) start -->
<section class="certified_public">
   <div class="container">
      <div class="row align-items-center">
         <div class="why_chooseakpis_heading">
            <h1 class="pb-4">Mentors <span>Shaping Audit Leaders</span></h1>
         </div>
         <div class="col-md-4 image-wrapper">
            <div class="youtube-icon">
               <a onclick="show_video('https://www.youtube.com/embed/Dbk9Mkm-QlY')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
            </div>
            <img class="course-image" src="./assets/image/desktop-image/Dbk9Mkm-QlY.jpg" alt="Course Overview">
         </div>
         <div class="col-md-4 image-wrapper">
            <div class="youtube-icon">
               <a onclick="show_video('https://www.youtube.com/embed/m5xFbcMgbBA')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
            </div>
            <img class="course-image" src="./assets/image/desktop-image/m5xFbcMgbBA.jpg" alt="Course Overview">
         </div>
         <div class="col-md-4 image-wrapper">
            <div class="youtube-icon">
               <a onclick="show_video('https://www.youtube.com/embed/BsEBx_NuXpQ')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
            </div>
            <img class="course-image" src="./assets/image/desktop-image/BsEBx_NuXpQ.jpg" alt="Course Overview">
         </div>
      </div>
   </div>
</section>
<!-- Certified Public Accountant (CPA) finish -->
<!-- Become a Certified Internal Auditor (CIA) start -->
<section class="certified_internal_auditor">
   <div class="container">
      <div class="certified_internal_auditior_heading">
         <h2>Become a <span><strong>Certified Internal Auditor (CIA)</strong></span> with <strong>AKPIS Institute</strong></h2>
         <p>Fast-track your <strong>career in internal auditing</strong> with <strong>AKPIS Institute’s CIA certification program</strong>, recognized in <strong>130+ countries</strong>. Complete <strong>3 exams in 8-10 months</strong> and open doors to <strong>global audit opportunities</strong>.</p>
      </div>
      <div class="row">
         <?php  $glimpe_features = [];
            if(!empty($course->glimpe_features)){
                $glimpe_features = json_decode($course->glimpe_features);
            }
            if (!empty($glimpe_features)) {
                foreach ($glimpe_features as $feature) {
            ?>
         <div class="col-md-6">
            <div class="go_globalwith">
               <div class="icon_globalCIa">
                  <?php echo $feature->icon;?>
               </div>
               <div class="go_globalheader">
                  <h2><?php echo $feature->title;?></h2>
                  <p><?php echo $feature->description;?></p>
               </div>
            </div>
         </div>
         <?php
            }
            }
            ?>  
      </div>
      <div class="certified_CIA_btn text-center pt-3">
         <a href="<?= COURSE_IMAGE .$course->prospectus ?>" target="_blank"  class="btn btn-primary bg-warning btn-lg">Download Free Prospectus <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
      </div>
   </div>
</section>
<!-- Become a Certified Internal Auditor (CIA) finish -->
<!-- Why Did Gleim Choose only Akpis for CPA in India? start -->
<section class="backer_choose">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-5 image-wrapper mt-4">
            <div class="youtube-icon">
               <!-- <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"> -->
               <a onclick="show_video('https://www.youtube.com/embed/6wZl3qji-wo')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
            </div>
            <img class="course-image" src="./assets/image/desktop-image/6wZl3qji-wo.jpg" alt="Course Overview">
         </div>
         <div class="col-md-7">
            <div class="para_bakerchoose">
               <h2>What is Internal Auditing?</h2>
               <h4><?= !empty($course->choose_title) ? $course->choose_title : '' ?></h4>
               <p><?= !empty($course->choose_description) ? $course->choose_description : '' ?></p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Why Did Gleim Choose only Akpis for CPA in India?
   finsih -->
<!-- CIA Exams start -->
<section class="CIA_exam">
   <div class="container">
      <div class="row g-md-2">
         <div class="col-12">
            <div class="cma_heading text-center">
               <h2><strong>CIA Exams – Certified Internal Auditor (CIA)</strong></h2>
               <p>Achieve global recognition with the <strong>CIA credential</strong> from the <strong>Institute of Internal Auditors (IIA)</strong> and become a professional <strong>internal auditor</strong> recognized in 130+ countries.</p>
            </div>
         </div>
         <div class="col-12 col-md-9 py-3 m-auto">
            <div class="exam_parts_CIA">
               <div class="card">
                  <div class="card-header">
                     <h2 class="text-center core_exam_heading"><strong>3 Core CIA Exam Parts</strong></h2>
                  </div>
                  <div class="card-body number_exam_part_CIA">
                     <ol>
                        <li><strong>Part 1 – Internal Audit Fundamentals:</strong> Learn the essential concepts, principles, and frameworks for internal auditing.</li>
                        <li><strong>Part 2 – Internal Audit Engagement:</strong> Master risk-based auditing, planning, conducting engagements, and reporting findings effectively.</li>
                        <li><strong>Part 3 – Internal Audit Function:</strong> Understand governance, risk management, control, and strategic roles of the internal audit function.</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="certified_CIA_btn text-center mb-3">
            <a href="#" class="btn btn-primary bg-warning btn-lg text-dark fw-bold"><strong>Download Free CIA Prospectus from AKPIS Institute</strong></a>
            </div> -->
      </div>
   </div>
</section>
<!-- CIA Exams finish -->
<!-- Schedules start -->
<section class="ScheduleCIA_start">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center mb-4">
            <div class="why_akpis_cia">
               <h2><strong>CIA Exam Schedules</strong></h2>
            </div>
            <div class="why_akpis_cia_btn">
               <a href="javascript:void(0)" class="cia_akpis_btn"><strong>CIA Part-1 Schedule</strong></a>
               <a href="javascript:void(0)" class="cia_akpis_btn"><strong>CIA Part-2 Schedule</strong></a>
               <a href="javascript:void(0)" class="cia_akpis_btn"><strong>CIA Part-3 Schedule</strong></a>
            </div>
         </div>
      </div>
      <div class="row justify-content-center text-center mb-5">
         <div class="col-12">
            <div class="main_why_akpis">
               <h2><strong>Why Choose <span>AKPIS Institute</span> for CIA Certification?</strong></h2>
               <p><strong>AKPIS Institute</strong> empowers aspiring internal auditors with expert mentorship, interactive learning, and global career pathways.</p>
            </div>
         </div>
         <?php   $extrafeatures = [];
            if (!empty($course->extrafeature)) {
            $extrafeatures = json_decode($course->extrafeature, true);
            }
            
            
            
            if(!empty($extrafeatures )) {
            foreach($extrafeatures as $key=>$val){
            ?>       
         <div class="col-md-4 mb-4">
            <div class="live-interactive_class">
               <img src="<?= COURSE_IMAGE . $val['image'] ?>" alt="Interactive CIA Classes at AKPIS" class="img-fluid">
               <h3><strong><?php echo $val['title'];?></strong></h3>
               <p><?php echo $val['description'];?></p>
            </div>
         </div>
         <?php } } ?>      
      </div>
   </div>
</section>
<!-- Schedules finsih -->
<!-- 2025 CIA Exam Changes start -->
<section class="language-examCIA py-4">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="why_akpis_cia">
               <h2><strong>CIA Exam Language & Release Schedule</strong></h2>
               <p>Stay updated with the official release dates for each <strong>CIA exam language version</strong>. Plan your preparation with AKPIS Institute guidance.</p>
            </div>
         </div>
         <div class="col-12">
            <!-- Corrected + paraphrased syllabus table -->
            <div class="part-cia_table table-responsive" role="region" aria-label="Language or Exam Release Dates">
               <table class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th><strong>Exam Language</strong></th>
                        <th><strong>Release Date</strong></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>English</td>
                        <td><strong>May 28, 2025</strong></td>
                     </tr>
                     <tr>
                        <td>Japanese</td>
                        <td><strong>July 28, 2025</strong></td>
                     </tr>
                     <tr>
                        <td>Thai / Korean</td>
                        <td><strong>August 28, 2025</strong></td>
                     </tr>
                     <tr>
                        <td>Portuguese</td>
                        <td><strong>September 28, 2025</strong></td>
                     </tr>
                     <tr>
                        <td>Spanish / French</td>
                        <td><strong>October 28, 2025</strong></td>
                     </tr>
                     <tr>
                        <td>Polish / German</td>
                        <td><strong>November 28, 2025</strong></td>
                     </tr>
                     <tr>
                        <td>Turkish / Russian</td>
                        <td><strong>December 28, 2025</strong></td>
                     </tr>
                     <tr>
                        <td>Chinese (Traditional)</td>
                        <td><strong>January 28, 2026</strong></td>
                     </tr>
                     <tr>
                        <td>Chinese (Simplified) / Arabic</td>
                        <td><strong>September 28, 2026</strong></td>
                     </tr>
                     <tr>
                        <td>Challenge Exams</td>
                        <td><strong>2026</strong></td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <p class="text-center">All dates are subject to updates by the Institute of Internal Auditors. <strong>AKPIS Institute</strong> ensures students are fully informed and prepared for each exam release.</p>
         </div>
      </div>
   </div>
</section>
<!-- 2025 CIA Exam Changes finish -->
<!-- Get Insights From Our US CPA Students and Faculty start -->
<section class="insight_usStudnetFaculty">
   <div class="container">
      <div class="row align-items-center insight_student_main">
         <div class="col-md-6">
            <div class="insight_usstudent_heading">
               <h2 class="fw-bold mb-3">
                  Learn from Our CIA Students and Expert Faculty
               </h2>
               <p class="mb-4 text-warning fs-5">
                  <strong>AKPIS Institute</strong> guides you through your <strong>CIA journey</strong> with hands-on mentorship, practical insights, and exam strategies from top audit professionals.
               </p>
               <a href="https://wa.link/gypgko" class="btn btn-warning btn-lg border-0 text-dark px-4 py-2 rounded-pill shadow" target="_blank">Check Your Eligibility</a>
            </div>
         </div>
         <div class="col-md-6 text-center image-wrapper">
            <div class="youtube-icon">
               <a onclick="show_video('https://www.youtube.com/embed/Dbk9Mkm-QlY')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
            </div>
            <img class="course-image img-fluid rounded-3 shadow" src="./assets/image/desktop-image/Dbk9Mkm-QlY1.jpg" alt="Course Overview">
            <!-- <img src="./assets/image/desktop-image/IFRS+best.jpg" alt="CPA Insights" class="img-fluid rounded-3 shadow"> -->
         </div>
      </div>
   </div>
</section>
<!-- Get Insights From Our US CPA Students and Faculty finish -->
<!-- explore Webinars start -->
<section class="explore_webinars ">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="explore_webinars_text">
               <h2>Upcoming webinars</h2>
               <p>Join our free webinar to explore global finance courses and explore study and career opportunities in the USA and beyond!</p>
               <a href="https://wa.link/gypgko" class="btn btn-primary">Explore Webinars</a>
            </div>
         </div>
         <div class="col-md-6">
            <div class="explore_webinars_banner">
               <img src="./assets/image/students/learning.jpg" alt="img" class="img-fluid">
               <h6>From B.com Graduate to Global Finance Leader</h6>
               <p id="event"><span class="me-2"><i class="fa-solid fa-calendar-days"></i></span><strong>4:00 PM IST</strong><br>Sept 27, 2025</p>
               <button type="button" class="btn btn-primary cpa_btn mb-2" data-bs-toggle="modal" data-bs-target="#enquiryModal">Register Now</button>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- explore Webinars finish -->
<!-- Other Course start -->
<section class="us_cma_course">
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
                     <img src="./assets/image/courses/US-CMA.jpg" alt="img" class="w-100 m-auto">
                     <h3>US CMA</h3>
                     <span class="badge py-2 badge-pill bg-success badge-success">#Popular</span>
                     <p>The US Certified Management Accountant (US CMA) is a top-tier accounting credential respected by employers globally.</p>
                     <a href="#"><button>Know More</button></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="other_course_Cma">
               <div class="card">
                  <div class="card-body">
                     <img src="./assets/image/courses/US-CMA.jpg" alt="img" class="w-100 m-auto">
                     <h3>US CIA</h3>
                     <span class="badge py-2 badge-pill bg-success badge-success">#Popular</span>
                     <p>A globally recognized internal audit credential from the US that equips you with expertise in risk management, governance, and data-driven assurance.</p>
                     <a href=""><button>Know More</button></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="other_course_Cma">
               <div class="card">
                  <div class="card-body">
                     <img src="./assets/image/courses/US-CMA.jpg" alt="img" class="w-100 m-auto">
                     <h3>EA (Enrolled Agent)</h3>
                     <span class="badge py-2 badge-pill bg-success badge-success">#Popular</span>
                     <p>The Enrolled Agent is a highest Tax qualification in US having a privilege of representing taxpayers before the Internal Revenue Service.</p>
                     <a href="#"><button>Know More</button></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Other Course Finsih -->

<!-- Enquire Now start modal  -->
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
</div>   */?>
<!-- Enquire Now Finish -->
<!-- finish learning today -->