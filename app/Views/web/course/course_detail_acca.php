
<!-- Enrollemt hero background start -->
<section class="enrollmetn_hero">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-7 order-2 order-md-1">
                <div class="enrollment_text">
                    <div class="EAcompany_logo">
                        <img src="./assets/image/desktop-image/ACCA.png" alt="img" class="img-fluid gleim_logo rounded-5">
                        <img src="./assets/image/logo/logo.png" alt="img" class="img-fluid">
                    </div>
                    <div class="EAcopmany_heading">
                        <h2>Become an ACCA (UK CA)</h2>
                        <span>Recognized in 180+ countries, valued by top companies, and completed in just 2 years.</span>
                        <div class="typed-wrap pb-3"><span class="typed-text"></span><span class="typed-cursor"></span></div>
                          <a href="https://wa.link/gypgko" class="btn btn-warning btn-lg border-0 fw-bold shadow-sm" target="_blank">
                            Enquire Now
                        </a>
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
                <h1 class="pb-4">Brains <span>Behind Billions</span> </h1>
            </div>
            <div class="col-md-4 image-wrapper">
                    <div class="youtube-icon">
                        <a onclick="show_video('https://www.youtube.com/embed/ctELIJUPdlY')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                    </div>
                    <img class="course-image" src="./assets/image/desktop-image/ctELIJUPdlY.jpg" alt="Course Overview">
                </div>
                 <div class="col-md-4 image-wrapper">
                    <div class="youtube-icon">
                        <a onclick="show_video('https://www.youtube.com/embed/AlYRy5SyZFc')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                   </div>
                    <img class="course-image" src="./assets/image/desktop-image/AlYRy5SyZFc.jpg" alt="Course Overview">
                </div>
                <div class="col-md-4 image-wrapper">
                    <div class="youtube-icon">
                         <a onclick="show_video('https://www.youtube.com/embed/I5fBeVdy_DY')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                    </div>
                    <img class="course-image" src="./assets/image/desktop-image/I5fBeVdy_DY.jpg" alt="Course Overview">
            </div>
        </div>
    </div>

</section>
<!-- Certified Public Accountant (CPA) finish -->
<!-- Why Choose ACCA? start -->
<section class="why_choose_ACCA">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="why_choose_acca_heading">
                    <h2>Why Choose ACCA?</h2>
                    <p>Because it gets you recognition in 180+ countries and top jobs</p>
                </div>

            </div>

        </div>
        <div class="row g-4">
             <?php   $extrafeatures = [];
                if (!empty($course->extrafeature)) {
                $extrafeatures = json_decode($course->extrafeature, true);
                }

            

                if(!empty($extrafeatures )) {
                foreach($extrafeatures as $key=>$val){
            ?>
            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                <div class="why_chooseAccacard">
                    <div class="icon_whychooseAccacard">
                        <img src="<?= COURSE_IMAGE . $val['image'] ?>" alt="img" class="img-fluid">
                    </div>
                    <div class="why_card_content">
                        <h4><?php echo $val['title'];?></h4>
                        <p class="text-white"><?php echo $val['description'];?></p>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
        <!-- <div class="text-center">
            <button class="btn btn-lg btn-warning border-0 mt-4">Download Schedules <span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></button>
        </div> -->

    </div>

</section>

<!-- Why Choose ACCA? Finish -->

<!-- About ACCA start -->
<section class="about_acca py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- Left Side - Video -->
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <div class="about_acca_video ratio ratio-16x9 rounded-4 overflow-hidden shadow-lg">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/9Z1278A3mYo?si=UJH54wyKBRNWICPk"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Right Side - Content -->
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <div class="about_acca_content">
                    <h2 class="mb-3">About the ACCA Course</h2>
                    <p class="mb-3">
                        The <strong>ACCA (Association of Chartered Certified Accountants)</strong> qualification is one of the most respected credentials in the field of accounting and finance. It equips students with the skills, knowledge, and values to build successful careers across industries and countries.
                    </p>
                    <ul class="list-unstyled">
                        <li> Globally recognized professional qualification</li>
                        <li> Offers flexibility in exams and learning methods</li>
                        <li> Provides career opportunities in 180+ countries</li>
                        <li> Focuses on ethics, professionalism, and technical skills</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About ACCA finish -->

<!-- Who Can Apply? start -->
<section class="who_can_applyACCA">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="why_choose_acca_heading">
                    <h2>Who Can Apply?</h2>
                    <p class="text-white">Learn the criteria to appear for ACCA and unlock endless career opportunities</p>
                </div>

            </div>
            <div class="col-md-6">
                <div class="who_can_apply_card">
                    <div class="card">
                        <div class="card-header">
                            Minimum Academic Requirement
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Completed 10+2 (Class 12)</li>
                                <li>Minimum 65% in English and Mathematics/Accounts</li>
                                <li>Minimum 50% in other subjects</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="who_can_apply_card">
                    <div class="card">
                        <div class="card-header">
                            Didn't meet the 10+2 marks criteria?
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>You can still enter ACCA through the Foundation in Accountancy (FIA) route. Once you complete FIA, you become eligible to progress to the ACCA qualification.</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <!-- <button class="btn btn-lg btn-warning border-0 mt-4">Download Prospectus<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></button> -->
        </div>
    </div>

</section>
<!-- Who Can Apply? finish -->

<!-- 100% Placement Assistance start -->
<section class="placement_assistanceACCA">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="why_choose_acca_heading">
                    <h2>100% Placement Assistance</h2>
                    <p>We guarantee 100% placement support with top salaries and career growth opportunities for our ACCA students</p>
                </div>
            </div>
        </div>
        <div class="row gx-4 gy-4 align-items-start">
            <!-- Step 1 -->
            <div class="col-12 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Step 1</span>
                        <h5 class="card-title mb-2">Guaranteed Placement Support</h5>
                        <p class="card-text text-muted mb-0">100% — dedicated career coaches, mock interviews, resume & portfolio review to make you job-ready.</p>
                        <div class="mt-3">
                            <span class="fs-5 fw-bold">100%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-12 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Step 2</span>
                        <h5 class="card-title mb-2">Average Salary (Freshers)</h5>
                        <p class="card-text text-muted mb-0">Typical packages for freshers:</p>
                        <div class="mt-3">
                            <span class="fs-5 fw-bold">5 to 7 LPA</span>
                            <div class="text-muted small">(Freshers)</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-12 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Step 3</span>
                        <h5 class="card-title mb-2">Average Hike (Professionals)</h5>
                        <p class="card-text text-muted mb-0">Professionals typically see salary hikes after upskilling.</p>
                        <div class="mt-3">
                            <span class="fs-5 fw-bold">20% to 40%</span>
                            <div class="text-muted small">Average Hike</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-12 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <span class="badge bg-info text-dark mb-2">Step 4</span>
                        <h5 class="card-title mb-2">Industry Partners</h5>
                        <p class="card-text text-muted mb-0">Collaborations for placements, live projects and guest sessions.</p>
                        <div class="mt-3">
                            <span class="fs-5 fw-bold">30+</span>
                            <div class="text-muted small">Industry Partners</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>
<!-- 100% Placement Assistance finish -->

<!-- Why Choose akpis start -->

<section class="why_chooseAkpis">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="why_chooseakpis_heading">
                     <h1>Why Choose <span>Akpis </span>Institute for ACCA?</h1>
                    <p>Launch your global accounting and finance career with India’s most trusted ACCA training provider. AKPIS Institute, an approved learning partner, combines ACCA’s globally recognized curriculum with expert faculty, personalized mentoring, 24×7 student support, and top-tier placement assistance — giving you everything you need to ace the ACCA exams and excel in international finance roles.<p>
                </div>
            </div>

        </div>
        <div class="row why_chooseakpis_features">
                <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Global ACCA Curriculum + Akpis Expertise:</strong> Get trained with ACCA’s globally recognized syllabus, enriched by Akpis’s expert faculty and practical approach.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>High Pass Rate & Proven Success:</strong> Akpis students consistently achieve top results in ACCA exams through structured mentoring and smart preparation strategies.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Approved Learning Partner:</strong> Study with official ACCA-approved resources, updated syllabus coverage, and guidance aligned with global standards.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Dual LMS Access:</strong> Learn through Akpis LMS for class recordings, notes, and doubt sessions—plus access to ACCA Smart Learning materials and mock exams.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Expert Faculty & Mentorship:</strong> Learn from experienced ACCA professionals and industry experts offering live sessions and one-on-one mentoring support.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>24×7 Student Support:</strong> Get constant academic and technical support through Akpis’s AI-powered tools and mentor guidance for all ACCA levels.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Exam-Oriented Tools & Analytics:</strong> Practice with adaptive mock tests, topic-wise performance reports, and personalized improvement feedback.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Career & Placement Support:</strong> Avail dedicated placement assistance with Akpis’s tie-ups across Big 4 firms, global MNCs, and finance companies.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Global Alumni Network:</strong> Connect with successful Akpis ACCA alumni working across Big 4, Fortune 500, and global financial institutions.</p>
                    </div>
                </div>
            </div>


        <p class="text-muted text-center">With Akpis, you're not just preparing for ACCA — you're preparing for a global career in finance and accounting.</p>
    </div>


</section>

<!-- Why Choose akpis finsih -->

<!-- Learn from the #1 Global Mentor start -->
<section class="globalMentorCpa">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading_global mb-5">
                    <h2>Learn from the #1 Global mentor</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="global_mentor">
                            <img src="./assets/image/logo/ab.png" alt="img" class="img-fluid">
                        </div>
                        <div class="global_mentor_para text-center">
                            <h2>Shammi Saluja CA CPA <br />(Passed)</h2>
                            <p>With over a decade of leadership experience, my journey as Director at AKPIS EDU PVT LTD encompasses strategic curriculum development, ensuring Instituteal offerings align with market needs. At AKPIS, our mission is to empower and innovate within the Institute sector, a challenge I embrace with a blend of financial acuity, as a Chartered Accountant, and a passion for transformative learning experiences. My commitment to excellence is complemented by a dedication to fostering an environment that values diverse perspectives and collective growth Under the exceptional guidance of CPA passed Shammi sir, students knowledge is fostered with enhanced development.</p>
                        </div>

                    </div>
                </div>



            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="row">
                        <div class="global_youtube_imgmain image-wrapper">
                            <div class="youtube-icon">
                                <a onclick="show_video('https://www.youtube.com/embed/ctELIJUPdlY')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                            </div>
                            <img class="course-image" src="./assets/image/desktop-image/ctELIJUPdlY.jpg" alt="Course Overview">
                        </div>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- Learn from the #1 Global Mentor End -->

<!-- Cpa Certification start -->
<section class="acca_certification">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="acca_cer_para cpa_cer_para">
                    <h2>Your ACCA Certification Journey Made Simple</h2>
                    <p>
                        Here’s how you can become a globally recognized ACCA professional and accelerate your international finance career.
                    </p>
                    <a href="https://wa.link/gypgko" target="_blank" class="btn btn-primary">
                        Enroll Now
                    </a>
                </div>
            </div>

            <div class="col-md-6 scrollable-journey">

                <!-- Step 1 -->
                <div class="journey-step">
                    <h5>Step 1</h5>
                    <h3>Check Your Eligibility</h3>
                    <ul>
                        <li><strong>Minimum Qualification:</strong> 10+2 with 65% in Accounts and English, and 50% in other subjects.</li>
                        <li><strong>Graduates (B.Com/BBA/BMS):</strong> May get exemption from some Applied Knowledge papers.</li>
                    </ul>
                    <p>Start your ACCA journey right after 12th or after graduation — flexible entry routes are available.</p>
                </div>

                <!-- Step 2 -->
                <div class="journey-step">
                    <h5>Step 2</h5>
                    <h3>Clear 13 ACCA Papers</h3>
                    <div class="fw-bold pt-2">Applied Knowledge</div>
                    <ul>
                        <li>Business and Technology (BT)</li>
                        <li>Management Accounting (MA)</li>
                        <li>Financial Accounting (FA)</li>
                    </ul>

                    <div class="fw-bold pt-2">Applied Skills</div>
                    <ul>
                        <li>Corporate and Business Law (LW)</li>
                        <li>Performance Management (PM)</li>
                        <li>Taxation (TX)</li>
                        <li>Financial Reporting (FR)</li>
                        <li>Audit and Assurance (AA)</li>
                        <li>Financial Management (FM)</li>
                    </ul>

                    <div class="fw-bold pt-2">Strategic Professional</div>
                    <ul>
                        <li>Strategic Business Leader (SBL)</li>
                        <li>Strategic Business Reporting (SBR)</li>
                        <li>Two Optional Papers: AFM / APM / ATX / AAA</li>
                    </ul>
                </div>

                <!-- Step 3 -->
                <div class="journey-step">
                    <h5>Step 3</h5>
                    <h3>Gain Practical Experience</h3>
                    <p>Complete 36 months (3 years) of relevant work experience and achieve 9 performance objectives through your job or internship.</p>
                </div>

                <!-- Step 4 -->
                <div class="journey-step">
                    <h5>Step 4</h5>
                    <h3>Ethics and Professional Skills Module</h3>
                    <p>Complete the online ethics module to build leadership, integrity, and professional judgment — essential for every ACCA professional.</p>
                </div>

                <!-- Step 5 -->
                <div class="journey-step">
                    <h5>Step 5</h5>
                    <h3>Become a Certified ACCA Member</h3>
                    <p>Earn your ACCA designation and open doors to global opportunities in auditing, taxation, consulting, and finance leadership roles.</p>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- Cpa Certification finish -->

<!-- ACCA Course Curriculum start -->
<section class="acca_course_curriculam">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="why_choose_acca_heading">
                    <h2>ACCA Course Curriculum</h2>
                    <p>ACCA consists of 13 subjects which are divided into three levels: Knowledge, Skills and Essentials.</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="acca_curriculam_card">
                    <img src="./assets/image//logo//logo.png" alt="img" class="img-fluid">
                    <h3 class="fw-bolder">Level 1</h3>
                    <p>Knowledge</p>
                    <p>3 subject</p>
                    <div class="text-start">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#knowMoreModal">
                            Know More
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                   <div class="acca_curriculam_card">
                    <img src="./assets/image//logo//logo.png" alt="img" class="img-fluid">
                    <h3 class="fw-bolder">Level 2</h3>
                    <p>Skills</p>
                    <p>6 subject</p>
                    <div class="text-start">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#knowMoreModal1">
                            Know More
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="acca_curriculam_card">
                    <img src="./assets/image//logo//logo.png" alt="img" class="img-fluid">
                    <h3 class="fw-bolder">Level 3</h3>
                    <p>Essentials</p>
                    <p>4 subject</p>
                    <div class="text-start">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#knowMoreModal2">
                            Know More
                        </button>
                    </div>
                </div>
            </div>
        </div>

</section>

<!-- ACCA Course Curriculum finish -->

<div class="modal fade" id="knowMoreModal" tabindex="-1" aria-labelledby="knowMoreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="knowMoreModalLabel">Knowledge Level Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <ul class="list-unstyled">
                    <li><i class="fa-solid fa-star text-primary me-2"></i>Business and Technology (BT)</li>
                    <li><i class="fa-solid fa-star text-primary me-2"></i>Financial Accounting (FA)</li>
                    <li><i class="fa-solid fa-star text-primary me-2"></i>Management Accounting (MA)</li>
                </ul>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="knowMoreModal1" tabindex="-1" aria-labelledby="knowMoreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="knowMoreModalLabel">Knowledge Level Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <ul class="list-unstyled">
                    <li><i class="fa-solid fa-star text-primary me-2"></i>Business and Technology (BT)</li>
                    <li><i class="fa-solid fa-star text-primary me-2"></i>Financial Accounting (FA)</li>
                    <li><i class="fa-solid fa-star text-primary me-2"></i>Management Accounting (MA)</li>
                </ul>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="knowMoreModal2" tabindex="-1" aria-labelledby="knowMoreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="knowMoreModalLabel">Knowledge Level Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <ul class="list-unstyled">
                    <li><i class="fa-solid fa-star text-primary me-2"></i>Business and Technology (BT)</li>
                    <li><i class="fa-solid fa-star text-primary me-2"></i>Financial Accounting (FA)</li>
                    <li><i class="fa-solid fa-star text-primary me-2"></i>Management Accounting (MA)</li>
                </ul>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>

        </div>
    </div>
</div>
