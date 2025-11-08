
<!-- Enrollment Hero Section Start -->
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
                        <h2 class="fw-bold text-white mb-2"><?= !empty($course->banner_title) ? $course->banner_title : '' ?></h2>
                        <span class="d-block fs-4 text-uppercase text-warning fw-semibold">ACCA Diploma in IFRS (DipIFR)</span>
                        <div class="typed-wrap pb-3">
                            <span class="typed-text"></span><span class="typed-cursor"></span>
                        </div>
                         <p class="text-white mb-4">
                            <?= !empty($course->banner_subtitle) ? $course->banner_subtitle : '' ?>
                        </p>
                        <a href="https://wa.link/gypgko" class="btn btn-warning btn-lg border-0 fw-bold shadow-sm" target="_blank">
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
<!-- Enrollment Hero Section Finish -->



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

<!-- Careers After International Financial Reporting Standards start -->
<section class="carrer_after_financial_report py-5">
    <div class="container">
        <div class="carrer_after_heading">
            <h2>Explore <span>Global Finance Careers</span> with a Diploma in IFRS at AKPIS Institute</h2>
            <p>The <strong>Diploma in International Financial Reporting (DipIFR)</strong> from AKPIS Institute empowers accounting and finance professionals with practical IFRS knowledge. Enhance your technical skills, gain international exposure, and unlock career opportunities in accounting, auditing, and finance roles worldwide.</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                <div class="carrer_afterCardifrs">
                    <h2>IFRS Career Growth</h2>
                    <p class="text-baseline">Graduates of the <strong>DipIFR program at AKPIS Institute</strong> are highly valued by multinational companies, top accounting firms, and financial institutions. Mastering IFRS opens doors to global positions, career advancement, and international recognition in the finance sector.</p>
                    <div class="carrer_counter_ifrs">
                        <div>
                            <p>95%</p>
                            <span>Global Employability</span>
                        </div>
                        <div>
                            <p>65K+</p>
                            <span>Professionals Trained</span>
                        </div>
                        <div>
                            <p>130+</p>
                            <span>Countries Reached</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                <div class="carrer_afterCard">
                    <h2 class="text-center">Average Salary After DipIFR – India vs USA vs Dubai</h2>
                    <table class="table table-bordered table-striped text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>Position</th>
                                <th>India (₹)</th>
                                <th>USA (USD)</th>
                                <th>Dubai (AED)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Accountant</td>
                                <td>₹5,00,000</td>
                                <td>$54,000</td>
                                <td>120,000 AED</td>
                            </tr>
                            <tr>
                                <td>Accounting Manager</td>
                                <td>₹9,00,000</td>
                                <td>$76,000</td>
                                <td>210,000 AED</td>
                            </tr>
                            <tr>
                                <td>Assistant Controller</td>
                                <td>₹12,00,000</td>
                                <td>$79,000</td>
                                <td>220,000 AED</td>
                            </tr>
                            <tr>
                                <td>Controller</td>
                                <td>₹15,00,000</td>
                                <td>$88,000</td>
                                <td>250,000 AED</td>
                            </tr>
                            <tr>
                                <td>Senior Financial Analyst</td>
                                <td>₹13,00,000</td>
                                <td>$85,000</td>
                                <td>230,000 AED</td>
                            </tr>
                            <tr>
                                <td>Director of Finance</td>
                                <td>₹20,00,000</td>
                                <td>$95,000</td>
                                <td>300,000 AED</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                <div class="company-logos">
                    <h2>Top Hiring Companies</h2>
                    <marquee direction="up" scrollamount="2" behavior="scroll" height="300" onmouseover="this.stop();" onmouseout="this.start();">
                    <div style="display: flex; flex-direction: column; gap: 10px;">
                        <?php 
                        if (!empty($aluminies)) {
                            // Loop through alumni images 2 per row
                            $chunks = array_chunk($aluminies, 2);
                            foreach ($chunks as $row) { ?>
                                <div style="display: flex; justify-content: space-between;">
                                    <?php foreach ($row as $aluminie) { ?>
                                        <img 
                                            src="<?= ALUMINI_IMAGE . $aluminie->image ?>" 
                                            alt="<?= !empty($aluminie->name) ? htmlspecialchars($aluminie->name) : 'Alumni Company'; ?>" 
                                            class="img-fluid" 
                                            style="max-width:48%; height:auto;"
                                        >
                                    <?php } ?>
                                </div>
                        <?php } } else { ?>
                            <p>No alumni data available.</p>
                        <?php } ?>
                    </div>
                </marquee>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Careers After International Financial Reporting Standards finish -->
<!-- Why IFRS Professionals start -->
<section class="why_ifrs">
    <div class="container">
        <div class="carrer_after_heading">
            <h2>Why Choose <span>IFRS Professionals</span></h2>
            <p>Boost your global finance career with the <strong>Diploma in IFRS (DipIFR)</strong> from <strong>AKPIS Institute</strong>. Gain expertise in international accounting standards, enhance your professional credibility, and open doors to top finance roles worldwide.</p>
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="why_ifrsm_card">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-globe fa-2x card-icon"></i>
                            <p>IFRS-certified professionals from <strong>AKPIS Institute</strong> enjoy a global advantage, equipped to manage financial reporting across multinational corporations and international markets.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="why_ifrsm_card">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-award fa-2x card-icon"></i>
                            <p>The <strong>DipIFR program</strong> is globally recognized, helping finance professionals secure high-paying roles in accounting, auditing, corporate finance, and consultancy across diverse industries.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="why_ifrsm_card">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line fa-2x card-icon"></i>
                            <p>With the increasing adoption of IFRS standards worldwide, demand for certified IFRS professionals is skyrocketing, making it the perfect time to elevate your career through <strong>AKPIS Institute</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why IFRS Professionals finish -->
<section class="alumini_success_cma mt-4">
        <div class="container">
            <h2 class="alumini_success_header">Alumni Success & Placement Stories</h2>
            <p class="aumini_success_para">See the incredible career paths of our IFRS alumni.</p>
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
                                      <p class="fw-semibold">Diploma in IFRS</p>      
                                   <?php  }
                                    ?>
                                   
                                   
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            </div>
        </div>

</section>

<!-- Online IFRS Course start -->
<section class="online_ifrs_course py-5">
    <div class="container">
        <div class="carrer_after_heading text-center mb-5">
            <h2>Online <span>Diploma in IFRS Course</span></h2>
            <p>AKPIS Institute offers a comprehensive <strong>Diploma in IFRS (DipIFR)</strong> online program for finance and accounting professionals seeking to master <strong>international financial reporting standards</strong>. This course equips candidates with practical knowledge, enabling them to understand global accounting principles, apply IFRS to real-world scenarios, and stay competitive in today’s international finance market.</p>
            <p>With the global adoption of IFRS, professionals trained through this program are highly sought after by <strong>multinational corporations</strong>, <strong>top accounting firms</strong>, and leading financial institutions. Our flexible online learning platform provides expert guidance, interactive study materials, and a structured approach to ensure successful completion of the diploma.</p>
            <p>Join <strong>AKPIS Institute</strong> today to advance your career, gain international recognition, and become a certified IFRS professional equipped for the global finance industry.</p>
        </div>

        <div class="row" style="display:flex; gap:30px;">
            <!-- Tabs Left -->
            <div class="tabs" style="position:relative; flex:1; max-width:200px;">
                <!-- Persistent vertical line -->
                <div class="vertical-line" style="position:absolute; left:0px; top:0; bottom:0; width:5px; background:#f28f18; z-index:0;"></div>

                <!-- Tab Buttons -->
                <button class="tab-btn active" data-tab="details">Course Details</button>
                <button class="tab-btn" data-tab="benefits">Course Benefits</button>
                <button class="tab-btn" data-tab="eligibility">Eligibility</button>
                <button class="tab-btn" data-tab="exam">Exam Details</button>
                <button class="tab-btn" data-tab="fees">Fees & Costs</button>
            </div>

            <!-- Content Right -->
            <div class="tab-content" style="flex:3; background:#f9f9f9; padding:25px; border-radius:12px;">
                <div class="tab-panel" id="details">
                    <h3 class="mb-2"><strong>Diploma in IFRS Course Details</strong></h3>
                    <ul class="list-group">
                        <li class="list-group-item">Understanding the <strong>international framework for financial reporting</strong></li>
                        <li class="list-group-item">Elements and structure of <strong>financial statements</strong></li>
                        <li class="list-group-item">Presentation of accounts, additional disclosures, and reporting requirements</li>
                        <li class="list-group-item">Preparation of <strong>consolidated financial statements</strong> for subsidiaries, associates, and joint arrangements</li>
                        <li class="list-group-item">Practical application of IFRS in <strong>corporate finance, auditing, and accounting processes</strong></li>
                        <li class="list-group-item">Insights into global financial reporting trends and updates</li>
                    </ul>
                </div>

                <div class="tab-panel" id="benefits" style="display:none;">
                    <h3 class="mb-2"><strong>Benefits of Enrolling in DipIFR at AKPIS Institute</strong></h3>
                    <ul class="list-group list-group-item-action">
                        <li class="list-group-item">Gain in-depth knowledge of <strong>IFRS</strong> and international accounting principles</li>
                        <li class="list-group-item">Enhance career prospects in accounting, auditing, finance, and corporate roles</li>
                        <li class="list-group-item">Access a globally recognized qualification that boosts <strong>employability</strong></li>
                        <li class="list-group-item">Learn practical application of IFRS through real-world <strong>case studies</strong></li>
                        <li class="list-group-item">Flexible online learning with expert faculty guidance and interactive support</li>
                        <li class="list-group-item">Stay updated with <strong>international financial reporting standards</strong> and regulatory changes</li>
                        <li class="list-group-item">Opportunities to work in <strong>top MNCs and financial institutions</strong> worldwide</li>
                    </ul>
                </div>

                <div class="tab-panel" id="eligibility" style="display:none;">
                    <h3 class="mb-3"><strong>Eligibility Criteria for DipIFR</strong></h3>
                    <ul class="list-group">
                        <li class="list-group-item">Graduates with a relevant degree and at least two years of accounting or finance experience</li>
                        <li class="list-group-item">ACCA affiliates or candidates holding ACCA IFRS certificate with relevant work experience</li>
                        <li class="list-group-item">Professionals with three years of relevant finance or accounting experience</li>
                        <li class="list-group-item">Working finance executives aiming to enhance their IFRS knowledge and career growth</li>
                        <li class="list-group-item">Chartered Accountants or equivalent professionals seeking international recognition</li>
                        <li class="list-group-item">Students or professionals with a strong interest in global financial reporting standards</li>
                    </ul>
                </div>

                <div class="tab-panel" id="exam" style="display:none;">
                    <h3><strong>Diploma in IFRS Exam Structure</strong></h3>
                    <p>The <strong>DipIFR exam</strong> consists of a single written paper lasting 3 hours and 15 minutes, conducted twice a year. A minimum score of 50% is required to pass.</p>
                    <table border="1" cellpadding="5" style="width:100%; border-collapse:collapse;">
                        <tr>
                            <th>Exam</th>
                            <th>Marks Distribution</th>
                            <th>Total Marks</th>
                        </tr>
                        <tr>
                            <td>Single Paper</td>
                            <td>4 questions, each worth 25 marks</td>
                            <td>100</td>
                        </tr>
                    </table>
                </div>

                <div class="tab-panel" id="fees" style="display:none;">
                    <h3><strong>DipIFR Fees & Costs (INR)</strong></h3>
                    <ul class="list-group">
                        <li class="list-group-item">Initial Registration Fee: <strong>₹8,500</strong></li>
                        <li class="list-group-item">Exam Fee: <strong>₹11,500</strong></li>
                        <li class="list-group-item">Exam Registration Deadline: <strong>26-April</strong></li>
                        <li class="list-group-item">Examination Periods: <strong>June & December annually</strong></li>
                        <li class="list-group-item">Optional Study Material & Online Support Packages: <strong>₹5,000</strong></li>
                    </ul>
                    <p>AKPIS Institute offers flexible payment options for Indian students and working professionals, making it convenient to enroll and complete the <strong>DipIFR program</strong> online. Join today and step confidently towards a successful international finance career.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Online IFRS Course finish -->




<!-- Still Confused? start -->
<section class="still_confused">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7"></div>
            <div class="col-md-5">
                <div class="still_confused_heading">
                    <h2>Need Guidance?</h2>
                    <p>Not sure which path to take in your finance career? Connect with our <strong>IFRS experts at AKPIS Institute</strong> and get personalized advice to achieve your professional goals.</p>
                    <!-- <button class="btn btn-primary btn-lg">Connect with Experts</button> -->
                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Connect with Experts
                    </button>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Still Confused? finish -->
<!--Brains Behind Success start -->
<section class="certified_public">
    <div class="container">
         <div class="row align-items-center">
                <div class="why_chooseakpis_heading">
                        <h1 class="pb-4">Brains <span>Building Business </span> Empires</h1>
                    </div>
                <div class="col-md-4 image-wrapper">
                    <div class="youtube-icon">
                        <a onclick="show_video('https://www.youtube.com/embed/kiyys_wVe0o')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                    </div>
                    <img class="course-image" src="./assets/image/desktop-image/kiyys_wVe0o.jpg" alt="Course Overview">
                </div>
                <div class="col-md-4 image-wrapper">
                    <div class="youtube-icon">
                        <a onclick="show_video('https://www.youtube.com/embed/V70FE7L2RC4')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                    </div>
                    <img class="course-image" src="./assets/image/desktop-image/V70FE7L2RC4.jpg" alt="Course Overview">
                </div>
                <div class="col-md-4 image-wrapper">
                    <div class="youtube-icon">
                         <a onclick="show_video('https://www.youtube.com/embed/taz-0TtGBuE')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                    </div>
                    <img class="course-image" src="./assets/image/desktop-image/taz-0TtGBuE.jpg" alt="Course Overview">
                </div>
            </div>
    </div>

</section>

<!-- Brains Behind Success finish -->
<!-- Who should do Diploma IFRS Akpis ? start -->
<section class="diploma_ifrs py-5">
    <div class="container">
        <div class="carrer_after_heading text-center mb-5">
            <h2>Who Should Pursue <span>Diploma in IFRS at AKPIS Institute</span></h2>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <div class="dp_ifrs_para">
                    <p>The <strong>Diploma in IFRS (DipIFR)</strong> from <strong>AKPIS Institute</strong> is ideal for finance and accounting professionals who want to enhance their international expertise. This includes:</p>
                    <ul class="list-group">
                        <li class="list-group-item">Chartered Accountants, Cost & Management Accountants, Company Secretaries</li>
                        <li class="list-group-item">Finance Managers, Financial Controllers, CFO aspirants</li>
                        <li class="list-group-item">Semi-qualified CAs, CSs, CMAs, and MBA Finance graduates</li>
                        <li class="list-group-item">M.Com, B.Com, BBA, and professionals working in Accounting & Finance domains</li>
                        <li class="list-group-item">Individuals seeking global career opportunities in financial reporting and compliance</li>
                    </ul>
                </div>
                <div class="carrer_position mt-4">
                    <a href="#" class="text-decoration-none">Job Positions After DipIFR</a>
                    <div class="career-buttons mt-2">
                        <button class="career-btn btn-1">Accountant</button>
                        <button class="career-btn btn-2">Internal Auditor</button>
                        <button class="career-btn btn-3">Compliance Officer</button>
                        <button class="career-btn btn-4">Chief Financial Officer</button>
                        <button class="career-btn btn-5">Finance Manager</button>
                        <button class="career-btn btn-6">Finance Controller</button>
                        <button class="career-btn btn-7">Finance Director</button>
                        <button class="career-btn btn-8">Consolidation & Reporting Manager</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <div class="dp_ifrs">
                    <img src="upload/course/businessman.jpg" alt="Diploma in IFRS at AKPIS Institute" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Who should do Diploma IFRS Akpis ? finish -->


<!-- Why Choose AKPIS Institute for IFRS start -->
<section class="why_chooseAkpis">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="why_chooseakpis_heading">
                    <h1><?= !empty($course->choose_title) ? $course->choose_title : '' ?></h1>
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
                    <p><strong><?= !empty($feature->title) ? htmlspecialchars($feature->title) : '' ?></strong>  <?= !empty($feature->description) ? htmlspecialchars($feature->description) : '' ?></p>
                </div>
            </div>
               <?php  }  } ?>      
        </div>

        <p class="text-muted text-center">With <strong>AKPIS Institute</strong>, your <strong>Diploma in IFRS</strong> journey is more than a qualification — it’s your gateway to a global finance career.</p>
    </div>
</section>
<!-- Why Choose AKPIS Institute for IFRS finish -->


<!-- How to Become a DipIFR Certified at AKPIS Institute start -->
<section class="become_an_acca">
    <div class="carrer_after_heading text-center mb-5">
        <h2>How to Become <strong>DipIFR Certified</strong> at <strong>AKPIS Institute</strong>?</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 become_an_accaifcr">
                <div class="roadmap">

                    <div class="steps">
                        <div class="step">
                            <div class="marker">1</div>
                            <div class="label">Register</div>
                            <div class="content">
                                <div class="title">Register with AKPIS</div>
                                <div class="desc">Sign up for the <strong>Diploma in IFRS (DipIFR)</strong> online program at AKPIS Institute. Keep your educational and professional documents ready for verification.</div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="marker">2</div>
                            <div class="label">Start</div>
                            <div class="content">
                                <div class="title">Start Learning</div>
                                <div class="desc">Join our expert-led live classes, access recorded sessions, and practice with interactive e-learning modules and mock questions tailored for IFRS.</div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="marker">3</div>
                            <div class="label">Pass</div>
                            <div class="content">
                                <div class="title">Pass the DipIFR Exam</div>
                                <div class="desc">Appear for the exam in the June or December window. A minimum passing score of 50% is required to earn your certification.</div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="marker">4</div>
                            <div class="label">Certificate</div>
                            <div class="content">
                                <div class="title">Receive Your DipIFR Certificate</div>
                                <div class="desc">Upon passing, AKPIS Institute provides your <strong>Diploma in IFRS</strong> certification, validating your global financial reporting expertise.</div>
                            </div>
                        </div>
                    </div>

                    <div class="actions mt-4">
                        <!-- <button class="btn">Download Brochure</button> -->
                        <a href="<?= COURSE_IMAGE .$course->prospectus ?>" target="_blank"  class="btn btn-primary">Download Brochure <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
                        <a class="btn secondary"  href="javascript:void(0);" class="button"  data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How to Become a DipIFR Certified at AKPIS Institute finish -->

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
                                 <img src="./assets/image/desktop-image/t1YGATUjmJc.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                  <a onclick="show_video('https://www.youtube.com/embed/t1YGATUjmJc')" class="video-btn"><img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                                </div>

                            </div>

                        </div>  


                    </div>
                    <div class="col-md-6">
                        <div class="global_youtube_imgmain">
                            <div class="global_youtubeimg">
                              <img src="./assets/image/desktop-image/TIWRvAWal4c.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                    <a onclick="show_video('https://www.youtube.com/embed/TIWRvAWal4c')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="global_youtube_imgmain">
                            <div class="global_youtubeimg">
                              <img src="./assets/image/desktop-image/I09z7l5cMqc.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                  <a onclick="show_video('https://www.youtube.com/embed/I09z7l5cMqc')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="global_youtube_imgmain">
                            <div class="global_youtubeimg">
                               <img src="./assets/image/desktop-image/RFB8TRmdTm4.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                    <a onclick="show_video('https://www.youtube.com/embed/RFB8TRmdTm4')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
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
<!--  IFRS Course Trainer start -->
<section class="ifrs_courseTrainer">
    <div class="container">
        <div class="row">
            <div class="cma_heading">
                <h1 class="pt-4"><strong>IFRS Course</strong><span> Trainer</span></h1>
            </div>
            <div class="col-12">
                <div class="about_instructor_title text-center">
                    <h2>
                        <strong>Mr. Shammi Saluja</strong> is a renowned <strong>Finance and Management Accounting</strong> educator with over <strong>22 years of professional teaching experience</strong>.
                        He has successfully mentored thousands of students and professionals in accounting, finance, and IFRS standards.
                        Recognized for his interactive teaching methods and deep conceptual clarity, he is admired by learners as one of the most inspiring mentors in the finance education space.
                    </h2>
                    <img src="./assets/image/courses/linkin.png" alt="IFRS Trainer - Mr. Shammi Saluja" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- IFRS Course Trainer finish -->

<section class="testominal_ouralumini">
    <div class="container">
        <h2 class="testomonial_heading">Testimonials From Our DipIFR Alumni</h2>
        <p class="text-center text-warning pb-5">See how <strong>AKPIS-trained IFRS professionals</strong> are excelling in Big 4 firms, MNCs, and global finance roles.</p>
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
<!-- Student Reviews for DipIFR Course finish -->

