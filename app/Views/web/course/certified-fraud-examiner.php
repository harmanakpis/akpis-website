<!-- Desktop hero page start -->
<section class="hero_desktop">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="cpa_topper">
                    <button class="cpa-btn">
                        <span class="big-text">Master Fraud Investigation:</span>
                        <span class="small-text">CFE Certification Training by Akpis Institute</span>
                    </button>
                </div>
                <div class="cpa_heading">
                    <h1 class="text-warning fw-bold">Certified <span class="text-primary">Fraud Examiner</span></h1>
                    <p> Join Akpis Institute’s premier CFE (Certified Fraud Examiner) program and gain expertise in fraud detection, prevention, and investigation. Learn from certified industry experts, practice real-world case studies, and earn the credential recognized globally to advance your career in forensic accounting, risk management, and compliance.</p>

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
                            <h6 class="text-nowrap">Goggle <span>4.7/5</span></h6>
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
                                <p>Students Trained Globally</p>

                            </div>
                        </div>
                    </div>
                    <div class="home_component">
                        <div class="firstComponent">
                            <img src="./assets/image/desktop-image/trophy.png" alt="img" class="img-fluid">

                            <div class="para_homecomponent">
                                <h4>99%</h4>
                                <p>Exam Pass Rate</p>

                            </div>
                        </div>
                    </div>
                    <div class="home_component bg-dark">
                        <div class="firstComponent ">
                            <img src="./assets/image/desktop-image/skyscraper.png" alt="" class="img-fluid">
                            <div class="para_homecomponent">
                                <h4>15000 +</h4>
                                <p>Placed in Fraud & Risk Roles</p>

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


<section class="achive-your-dreams-cma-usa p-0 pb-2">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-md-6">
                <div class="para_achieve_dreamUsa">
                    <h2>About CFE <span>Certification Course</span></h2>
                    <p>
                        The Certified Fraud Examiner (CFE) course is designed to provide students with the skills and knowledge necessary to detect, investigate, and prevent fraud. This program provides a comprehensive understanding of fraud examination techniques, legal issues, and the latest technologies used to identify and prevent fraud. Participants will gain a deeper understanding of how fraud can impact an organization, as well as the importance of ethical practices when analyzing and reporting fraud. The course is designed for professionals looking to expand their career opportunities and increase their knowledge in the area of fraud examination.
                    </p>
                    <h2>Prerequisite</h2>
                    <p>You must have at least two years of professional experience in a field related to the detection or deterrence of fraud. At the time you are certified, you must have at least two years of professional experience in a field either directly or indirectly related to the detection or deterrence of fraud.</p>

                </div>
                <!-- YouTube Video Placeholder -->

                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wbJ8OKMpNeg?si=KzV-_gdHEOzRSnVR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    <!-- WhatsApp Icon (you can use image or font awesome) -->
                    <a href="https://wa.me/918527524176"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                            class="whatsapp-icon"></a>
                </div>


            </div>

            <!-- Right Form -->
            <div class="col-md-6 vstack">
                <img src="./assets/image/cfe/acfe.png" class="" alt="image">
                <form action="https://akpisprofessionals.com/akpiscourse/form_submit_data" method="POST" class="vstack gap-2 p-3 sm:p-6 xl:p-8" style="background:#1E1E1E !important; border:2px solid #EE2737; border-radius:8px;" id="submit_enquiryfooter" data-gtm-form-interact-id="0">

                    <h4 class="" style="color:#FFFFFF !important">
                        CFE Certification Webinar
                        Unlock Your Fraud Detection Skills with Expert Guidance by AKPIS Professionals
                    </h4>
                    <p class="" style="color:#FFFFFF !important; margin:auto;">
                        Join our exclusive webinar to explore the world of fraud examination, understand the CFE exam structure, and gain insights from seasoned professionals. Learn strategies to excel in fraud detection, prevention, and investigation.
                    </p>

                    <input type="hidden" value="23" name="course_id">

                    <div class="row">
                        <!-- Name -->
                        <div class="col-md-6 mb-2">
                            <input class="form-control h-50px" type="text" placeholder="Full Name" name="name" required="">
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-2">
                            <input class="form-control h-50px" type="email" placeholder="Your Email" name="email" required="">
                        </div>
                    </div>

                    <div class="row">
                        <!-- Contact -->
                        <div class="col-md-6 mb-2">
                             <input type="tel"  name="contact"    id="contact"  class="form-control shadow-sm"   placeholder="Mobile Number"   required  pattern="[6-9]{1}[0-9]{9}"   title="Enter a valid 10-digit mobile number starting with 6, 7, 8, or 9"  maxlength="10"  oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)" required>
                        </div>

                        <!-- Qualification -->
                        <div class="col-md-6 mb-2">
                            <input class="form-control h-50px" type="text" placeholder="Qualification (e.g., B.Com, CMA)" name="qualification" required="">
                        </div>
                    </div>

                    <div class="row">
                        <!-- Work Experience -->
                        <div class="col-md-6 mb-2">
                            <input class="form-control h-50px" type="text" placeholder="Work Experience (if any)" name="work_experience">
                        </div>

                        <!-- Currently Pursuing Course -->
                        <div class="col-md-6 mb-2">
                            <select class="form-control h-50px" name="pursuing_course" required="" data-gtm-form-interact-field-id="3">
                                <option value="">Currently Pursuing Any Course?</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Salary -->
                        <div class="col-md-6 mb-2">
                            <input class="form-control h-50px" type="text" placeholder="Salary (if working)" name="salary">
                        </div>

                        <!-- Placement Assistance -->
                        <div class="col-md-6 mb-2">
                            <select class="form-control h-50px" name="placement_assistance" required="" data-gtm-form-interact-field-id="4">
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
                        <input type="datetime-local" class="form-control h-50px" name="preferred_time" placeholder="Preferred Date &amp; Time to Talk" data-gtm-form-interact-field-id="0">
                    </div>

                    <!-- Comment -->
                    <div class="mb-3">
                        <textarea class="form-control" id="comment" rows="3" name="comment" required="" placeholder="Enter your comments here..."></textarea>
                    </div>

                    <!-- Submit -->
                    <div class="m-auto">
                        <button type="submit" class="btn btn-primary btn-md btn-block text-white" style="background:#EE2737; border:none;">
                            Register for Free Webinar
                        </button>
                    </div>
                    <span class="loader" style="display:none;"></span>    
                    <div id="footerFormMessagemiddle" class=""></div>
                </form>

            </div>
        </div>
    </div>
</section>


<!-- Exam Info start -->
<section class="exam_info_cfe bg-light py-3">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- Exam Details -->
            <div class="col-md-6">
                <div class="exam_info_list">
                    <h4 class="mb-3">CFE Computer-Based Examination</h4>
                    <ul class="list-group">
                        <li class="list-group-item d-flex align-items-start">
                            <i class="fas fa-check text-success  me-2 mt-1"></i>
                            <div><strong>Exam Format:</strong> Multiple Choice</div>
                        </li>
                        <li class="list-group-item d-flex align-items-start">
                            <i class="fas fa-check text-success me-2 mt-1"></i>
                            <div><strong>No. of Questions:</strong> 100 per section</div>
                        </li>
                        <li class="list-group-item d-flex align-items-start">
                            <i class="fas fa-check text-success me-2 mt-1"></i>
                            <div><strong>Number of Sections:</strong> Four core sections covering key fraud domains</div>
                        </li>
                        <li class="list-group-item d-flex align-items-start">
                            <i class="fas fa-check text-success me-2 mt-1"></i>
                            <div><strong>Exam Duration:</strong> 120 minutes per section</div>
                        </li>
                        <li class="list-group-item d-flex align-items-start">
                            <i class="fas fa-check text-success me-2 mt-1"></i>
                            <div><strong>Important Note:</strong> Each exam is dynamically generated from a master question database, ensuring no two exams are identical</div>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Skills You Can Learn -->
            <div class="col-md-6">
                <div class="cfe_exam_skill">
                    <h4 class="text-success mb-3">Key Skills You Will Master</h4>
                    <p>
                        The CFE Certification course by <strong>Akpis Institute</strong> develops practical fraud investigation skills. Participants will learn how to:
                    </p>
                    <ul>
                        <li>Identify fraud red flags and risk indicators in business processes.</li>
                        <li>Conduct thorough investigations, including interviews and evidence collection.</li>
                        <li>Analyze financial statements for anomalies and fraudulent transactions.</li>
                        <li>Understand legal frameworks and compliance requirements related to fraud.</li>
                        <li>Document and present findings effectively to stakeholders and management.</li>
                        <li>Implement fraud prevention strategies to safeguard organizations.</li>
                    </ul>
                    <p>These skills are essential for building a successful career as a Certified Fraud Examiner across industries such as banking, corporate finance, auditing, and forensic accounting.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Exam Info finish -->
<section class="certified_public py-0">
    <div class="container">
            <div class="row align-items-center">
                <div class="why_chooseakpis_heading">
                    <h1 class="pb-4">Check & <span>Quality lectures</span> for Certified Fraud Examiner (CFE)?</h1>
                </div>
                <div class="col-md-4 image-wrapper">
                    <div class="youtube-icon">
                        <a onclick="show_video('https://www.youtube.com/embed/wbJ8OKMpNeg')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                    </div>
                    <img class="course-image" src="./assets/image/desktop-image/wbJ8OKMpNeg.jpg" alt="Course Overview">
                </div>
                 <div class="col-md-4 image-wrapper">
                    <div class="youtube-icon">
                        <a onclick="show_video('https://www.youtube.com/embed/exRBCYe15rY')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                   </div>
                    <img class="course-image" src="./assets/image/desktop-image/exRBCYe15rY.jpg" alt="Course Overview">
                </div>
                <div class="col-md-4 image-wrapper">
                    <div class="youtube-icon">
                         <a onclick="show_video('https://www.youtube.com/embed/RVonA_dOKVI')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                    </div>
                    <img class="course-image" src="./assets/image/desktop-image/RVonA_dOKVI.jpg" alt="Course Overview">
                </div>
            

            </div>
        </div>

    </section>
<!-- Our Training Modalities start -->
<section class="our_training_modalities_cfe py-4">
    <div class="container">
        <div class="our_training_moduleCfa">
            <h2>Our Training Modalities at AKPIS Institute</h2>
        </div>
        <div class="row text-center pt-5 g-4">
            <div class="col-md-4">
                <div class=" traning_card p-3">
                    <i class="fas fa-chalkboard-teacher fa-3x text-primary mb-3"></i>
                    <h5 class="mb-2">Interactive Online Classes</h5>
                    <p class="mb-0">
                        Join live instructor-led sessions with experienced Certified Fraud Examiner trainers at AKPIS Institute, designed for real-time engagement and practical learning.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="traning_card p-3">
                    <i class="fas fa-users fa-3x text-success mb-3"></i>
                    <h5 class="mb-2">Public Classroom Training</h5>
                    <p class="mb-0">
                        Participate in structured classroom sessions that provide hands-on experience, industry-standard techniques, and guidance from certified professionals.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="traning_card p-3">
                    <i class="fas fa-building fa-3x text-warning mb-3"></i>
                    <h5 class="mb-2">Corporate & Customized Training</h5>
                    <p class="mb-0">
                        Tailored fraud examination and risk management programs for organizations, enhancing employee skills, compliance awareness, and ROI through AKPIS Institute’s expert methodology.
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Our Training Modalities finish -->
<!-- Key Features start -->
<section class="key_features-CFA py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="key_feature_img">
                    <img src="<?= COURSE_IMAGE ?>cfe.png" alt="<?=base_url()?>/assets/image/logo/desktop_img.png" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="key_feature_txt">
                    <h2>Key Features of the Certified Fraud Examiner (CFE) Course</h2>
                    <p>
                        The <strong>Certified Fraud Examiner (CFE) Course at AKPIS Institute</strong> is designed to build advanced skills in fraud prevention, investigation, and financial forensics.
                        This globally recognized certification empowers professionals to safeguard organizations from financial misconduct and fraud risks.
                    </p>
                    <ul class="list-group py-2">
                        <li class="list-group-item">
                            <strong>Fraud Risk Assessment:</strong> Learn to identify, evaluate, and mitigate potential fraud risks within an organization.
                        </li>
                        <li class="list-group-item">
                            <strong>Forensic Accounting:</strong> Develop analytical skills to examine financial records and uncover fraudulent activities effectively.
                        </li>
                        <li class="list-group-item">
                            <strong>Legal & Ethical Framework:</strong> Understand essential laws, compliance standards, and ethical practices in fraud investigation.
                        </li>
                        <li class="list-group-item">
                            <strong>Criminology & Behavioral Insights:</strong> Study the mindset and behavior of fraudsters to recognize early signs of misconduct.
                        </li>
                    </ul>
                    <p>Completing the <strong>CFE Course from AKPIS Institute</strong> enhances your professional credibility and opens global career opportunities in auditing, risk management, compliance, and investigation roles.</p>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- Key Features finish -->
<!-- Why Choose akpis start -->

<section class="why_chooseAkpis">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="why_chooseakpis_heading">
                    <h1>Why Choose AKPIS Institute for the <span> Certified Fraud Examiner (CFE)</span> Course?</h1>

                    <p>
                        Advance your career in fraud prevention, forensic accounting, and investigation with
                        <strong>AKPIS Institute’s Certified Fraud Examiner (CFE) training program.</strong>
                        AKPIS combines globally recognized CFE content with expert-led guidance, case-based learning, and one-on-one mentorship—helping professionals gain the skills and confidence needed to detect and prevent financial fraud worldwide.
                    </p>
                </div>
            </div>

        </div>
        <div class="row why_chooseakpis_features">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="feature_box">
                    <div class="circle_icon"></div>
                    <p><strong>Globally Recognized Curriculum:</strong> Learn from an updated, ACFE-aligned syllabus that prepares you for every domain of the CFE exam—Fraud Prevention, Investigation, Law, and Financial Transactions.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="feature_box">
                    <div class="circle_icon"></div>
                    <p><strong>Experienced CFE Mentors:</strong> Gain practical insights from Certified Fraud Examiners and financial experts with extensive experience in auditing, risk, and compliance domains.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="feature_box">
                    <div class="circle_icon"></div>
                    <p><strong>Live Interactive Classes:</strong> Attend engaging online sessions designed for conceptual clarity, exam preparation, and real-world case discussions on fraud detection.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="feature_box">
                    <div class="circle_icon"></div>
                    <p><strong>Comprehensive Study Resources:</strong> Access exclusive AKPIS learning materials, practice exams, and digital tools to strengthen your CFE exam readiness.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="feature_box">
                    <div class="circle_icon"></div>
                    <p><strong>Personalized Mentorship:</strong> Get 1-on-1 mentor support for your preparation journey—covering everything from study plans to practical fraud case analysis.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="feature_box">
                    <div class="circle_icon"></div>
                    <p><strong>Flexible Learning Options:</strong> Choose from online live classes, recorded lectures, or blended learning formats—suitable for both working professionals and students.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="feature_box">
                    <div class="circle_icon"></div>
                    <p><strong>Exam-Focused Preparation:</strong> Practice with real CFE-style questions, mock exams, and time-bound assessments to build speed, accuracy, and confidence.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="feature_box">
                    <div class="circle_icon"></div>
                    <p><strong>Career Support & Guidance:</strong> AKPIS provides dedicated placement assistance, helping CFE aspirants secure roles in auditing, investigation, and compliance across top organizations.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="feature_box">
                    <div class="circle_icon"></div>
                    <p><strong>Trusted by Finance Professionals:</strong> Join a growing community of AKPIS-trained CFEs working across Big 4 firms, banks, consulting companies, and government agencies.</p>
                </div>
            </div>
        </div>

        <p class="text-muted text-center mt-4">
            With <strong>AKPIS Institute</strong>, you don’t just prepare for the <strong>Certified Fraud Examiner (CFE) exam</strong> — you prepare to become a trusted professional in global fraud prevention and financial integrity.
        </p>
    </div>


</section>

<!-- Why Choose akpis finsih -->

<?php 
// echo '<pre>';print_r($placement);  exit;
?>

<!-- Alumni Success & Placement Stories finish -->

<!-- ========================================
     Become CFE Certified - AKPIS Institute
========================================= -->
<section class="become_cfe_certified py-5">
    <div class="container">

        <!-- Section 1 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <div class="become_cfe_certified_txt" data-aos="fade-right">
                    <h2>Become a Certified Fraud Examiner (CFE)</h2>
                    <p>Build a future in fraud prevention and investigation with <strong>AKPIS Institute</strong>. Our Certified Fraud Examiner (CFE) training program helps you master investigative techniques, analytical reasoning, and ethical standards essential for uncovering and preventing fraud globally.</p>
                </div>
            </div>
            <div class="col-md-6 text-center" data-aos="fade-left">
                <div class="become_cfe_certified_img">
                    <img src="assets/images/12.jpg" alt="CFE Training at AKPIS" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="row align-items-center flex-row-reverse mb-5">
            <div class="col-md-6">
                <div class="become_cfe_certified_txt" data-aos="fade-left">
                    <h2>Learn from Industry Experts</h2>
                    <p>Our expert-led sessions are conducted by seasoned professionals in forensic accounting and fraud investigation. With interactive discussions, live case studies, and exam-based practice, we ensure that every learner develops practical skills and exam readiness.</p>
                </div>
            </div>
            <div class="col-md-6 text-center" data-aos="fade-right">
                <div class="become_cfe_certified_img">
                    <img src="assets/images/11.jpg" alt="AKPIS Expert Instructors" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <div class="become_cfe_certified_txt" data-aos="fade-right">
                    <h2>Comprehensive Curriculum</h2>
                    <p>AKPIS Institute’s CFE program covers fraud prevention, financial transactions, investigation techniques, and legal aspects of fraud. Our structured modules combine theoretical understanding with applied knowledge to make you career-ready and globally competitive.</p>
                </div>
            </div>
            <div class="col-md-6 text-center" data-aos="fade-left">
                <div class="become_cfe_certified_img">
                    <img src="assets/images/13.jpg" alt="CFE Course Overview" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>

        <!-- Final Paragraph -->
        <div class="row">
            <div class="col-md-12 text-center mt-4" data-aos="fade-up">
                <p>After completing the <strong>CFE Certification Training</strong> with AKPIS Institute, you’ll be fully equipped to clear the CFE exam and take on roles in auditing, risk management, compliance, or forensic investigation.</p>
                <p><strong>Enroll today</strong> to start your professional journey with AKPIS Institute.<br>
                    <a href="https://wa.link/gypgko" target="_blank"><button class="btn btn=lg btn-primary">
                            Enroll Now
                        </button></a>
            </div>
        </div>

    </div>
</section>


<!-- start learning today -->
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
</div> */?>
<!-- finish learning today -->
