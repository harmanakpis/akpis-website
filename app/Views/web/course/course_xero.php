<!-- Xero Training start -->
<section class="xero_training_hero">
    <div class="container">
        <div class="row g-2">
            <div class="col-md-6  order-2 order-md-1">
                <div class="best_seller">
                    <a href="javascript:void(0)" class="btn btn-primary">Best Seller</a>
                    <h3><b>Share this course: </b><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#shareModal"> <i class="fa-solid fa-share-nodes"></i></a></h3>
                </div>
                <div class="best_seller_hero">
                    <h2><span>Xero </span> Training</h2>
                    <p>Hands-On Xero Training for Smarter Financial Management.</p>
                    <p class="best_seller_para"> Gain expertise in Xero to simplify accounting tasks and enhance financial reporting. Start mastering Xero today for efficient business bookkeeping!</p>
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
            <div class="col-md-6  order-1 order-md-2">
                <div class="xero_img_banner">
                     <?php if (!empty($course->banner_image) && file_exists(COURSE_IMAGE. $course->banner_image)) : ?>
                    <img src="<?= COURSE_IMAGE . $course->banner_image ?>" alt="Zoho Books" class="img-fluid w-lg-75 m-auto rounded-4 shadow-lg">
                    <?php else : ?>
                        <img src="<?= base_url('assets/images/default-course.jpg') ?>" alt="Default Course Image" class="img-fluid w-75 m-auto rounded-4 shadow-lg">
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- Xero Training finish -->
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

<!-- Learn Virtually Anywhere. Award-Winning Training Company. start -->
<section class="virtually_anywhere_xero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                <div class="vitually_anywhere_para">
                    <h2>High-Quality Training Awaits You</h2>
                    <p>Join over 100000+ learners who have taken up training with myTectra. Get High-Quality Training, Certification, Best Price and 24/7 Customer Care.</p>
                    <div class="key_program_highlight_xero">
                        <h4>Key Program Highlights:</h4>
                        <ul>
                            <li>Delivering top-notch education to equip you with essential skills.</li>
                            <li>Learn from industry experts with real-world experience.</li>
                            <li>A thorough curriculum covering all necessary topics.</li>
                            <li>Dedicated support to help you secure job placements.</li>
                            <li>High ratings reflecting our commitment to quality.</li>
                            <li>Hands-on experience through real-world projects.</li>
                            <li>Personalized, engaging learning for better outcomes.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-7 col-xl-7">
                <div class="gallery">
                    <span style="--i:1"><img src="./assets/image/acca//Sequence 01.00_00_58_09.Still002.png" alt=""></span>
                    <span style="--i:2"><img src="./assets/image/acca//Sequence 01.00_04_46_14.Still001.png" alt=""></span>
                    <span style="--i:3"><img src="./assets/image/acca/DSC00051.jpg" alt=""></span>
                    <span style="--i:4"><img src="./assets/image/acca//Sequence 01.00_00_58_09.Still002.png" alt=""></span>
                    <span style="--i:5"><img src="./assets/image/acca//Sequence 01.00_04_46_14.Still001.png" alt=""></span>
                    <span style="--i:6"><img src="./assets/image/acca/DSC00051.jpg" alt=""></span>
                    <span style="--i:7"><img src="./assets/image/acca//Sequence 01.00_04_46_14.Still001.png" alt=""></span>
                    <span style="--i:8"><img src="./assets/image/acca/DSC00051.jpg" alt=""></span>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- Learn Virtually Anywhere. Award-Winning Training Company. finish -->

<!-- About Program Xero Start -->
<section class="about_program_xero py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Left Column: Text -->
            <div class="col-lg-6">
                <div class="about_programxero_heading">
                    <h2 class="fw-bold mb-3">About the Xero Program</h2>
                    <p class="text-muted mb-4">
                        <strong>Xero</strong> is a powerful cloud-based accounting software trusted by small and medium-sized businesses worldwide.
                        Our comprehensive <strong>myTectra training program</strong> equips you with hands-on experience — from basic setup
                        to advanced financial automation — ensuring you master every aspect of Xero.
                    </p>

                    <button class="btn btn-primary mb-2 shadow-sm">
                        <i class="fa-solid fa-book-open me-2"></i> Course Overview
                    </button>

                    <!-- Xero Curriculum Accordion Start -->

                    <div class="mb-2">
                        <h2 class="fw-bold">Curriculum Overview</h2>
                        <p class="text-muted">Master Xero from setup to advanced automation — all modules included.</p>
                    </div>

                    <div class="accordion overflow-hidden" id="xeroAccordion">

                        <!-- 1. Introduction to Xero -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
                                    aria-expanded="true" aria-controls="collapse1">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Introduction to Xero
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>Overview of Xero</li>
                                        <li>Versions and features</li>
                                        <li>Xero’s cloud-based advantages</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Navigating Xero -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Navigating Xero
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>User interface and dashboard</li>
                                        <li>Keyboard shortcuts</li>
                                        <li>Customizing the dashboard</li>
                                        <li>Managing multiple organizations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Setting Up Your Xero Organization -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Setting Up Your Xero Organization
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>Creating a new organization</li>
                                        <li>Setting up organization preferences</li>
                                        <li>Company information and branding</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Chart of Accounts and Contacts -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Chart of Accounts and Contacts
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>Understanding the chart of accounts</li>
                                        <li>Adding, editing, and deleting accounts</li>
                                        <li>Managing contacts (customers and suppliers)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Recording Transactions in Xero -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Recording Transactions in Xero
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>Entering sales and invoices</li>
                                        <li>Recording expenses and bills</li>
                                        <li>Managing purchases and payments</li>
                                        <li>Tracking inventory</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 6. Bank Reconciliation in Xero -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Bank Reconciliation in Xero
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>Importing bank statements</li>
                                        <li>Reconciling bank transactions</li>
                                        <li>Handling transfers and bank rules</li>
                                        <li>Bank feeds and online banking</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 7. Financial Reporting -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Financial Reporting in Xero
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>Generating financial statements</li>
                                        <li>Customizing reports</li>
                                        <li>Budgeting and cash flow forecasting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 8. Customization and Settings -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Customization and Settings
                                </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>Preferences and settings</li>
                                        <li>Templates and forms customization</li>
                                        <li>User roles and permissions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 9. Payroll and Employee Management -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Payroll and Employee Management
                                </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>Setting up payroll (if applicable)</li>
                                        <li>Creating employee profiles</li>
                                        <li>Running payroll and paying taxes</li>
                                        <li>Payroll reporting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 10. Advanced Features and Integrations -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Advanced Features and Integrations
                                </button>
                            </h2>
                            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>Xero Add-ons and third-party integrations</li>
                                        <li>Xero mobile app</li>
                                        <li>Advanced accounting features</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 11. Troubleshooting and Support -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Troubleshooting and Support
                                </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>Common Xero issues and error messages</li>
                                        <li>Finding help and resources within Xero</li>
                                        <li>Q&A and problem-solving sessions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 12. Final Project and Certification -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading12">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                    <i class="fa-solid fa-circle-check text-primary me-2"></i> Final Project and Certification
                                </button>
                            </h2>
                            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                                data-bs-parent="#xeroAccordion">
                                <div class="accordion-body">
                                    <ul class="mb-0 ps-3">
                                        <li>Practical exercises and real-world scenarios</li>
                                        <li>Course review and assessment</li>
                                        <li>Final examination</li>
                                        <li>Certification of completion</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Brochure Download -->
                    <div class="mt-2">
                        <a href="<?= COURSE_IMAGE .$course->prospectus ?>" target="_blank"  class="btn btn-outline-primary btn-lg" >
                            <i class="fa-solid fa-file-pdf me-2"></i> Download the Brochure
                        </a>
                        <p class="text-muted mt-2">All course details included</p>
                    </div>

                    <!-- Xero Curriculum Accordion End -->

                </div>

            </div>

            <!-- Right Column: Image -->
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <img src="./assets/image/acca/xero.png" alt="Xero Training" class="img-fluid rounded-4 shadow-lg">

                </div>
            </div>
        </div>
</section>
<!-- About Program Xero Finish -->


<!-- Learning Path Start -->
<section class="learning_pathxero">
    <div class="container">
        <!-- Section Heading -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3">Learning Path</h2>
                <p class="text-muted">
                    Master new skills to achieve your career goals with our structured and practical learning journey.
                </p>
            </div>
        </div>

        <!-- Learning Path Steps -->
        <div class="row g-4 justify-content-center">
            <!-- Demo Session -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 rounded-4">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fa-solid fa-chalkboard-user fa-3x text-primary"></i>
                        </div>
                        <h4 class="fw-semibold mb-3">Demo Session</h4>
                        <p class="text-muted">
                            Participate in a live demo session to explore course content. Meet instructors, interact with
                            fellow learners, and understand the teaching approach to gauge the course’s relevance to your goals.
                        </p>

                    </div>
                </div>
            </div>

            <!-- Add more steps like this if needed -->
            <!-- Example -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 rounded-4">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fa-solid fa-book-open-reader fa-3x text-success"></i>
                        </div>
                        <h4 class="fw-semibold mb-3">Core Modules</h4>
                        <p class="text-muted">
                            Dive into structured modules that build your expertise step by step, covering all essential topics in depth.
                        </p>

                    </div>
                </div>
            </div>

            <!-- Example -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 rounded-4">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fa-solid fa-award fa-3x text-warning"></i>
                        </div>
                        <h4 class="fw-semibold mb-3">Final Certification</h4>
                        <p class="text-muted">
                            Complete the final project, clear assessments, and earn an industry-recognized certificate showcasing your skills.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Learning Path Finish -->

<!-- Course Features zero start -->
<section class="course_feature_xero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="course_feature_xeroHeading">
                    <h2>Course Features</h2>
                </div>
            </div>
        </div>
        <div class="row mt-2 g-4">
            <!-- Expert Trainers -->
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 text-center p-3">
                    <div class="card-body">
                        <i class="fa-solid fa-chalkboard-user fa-3x text-primary mb-3"></i>
                        <h4 class="fw-semibold mb-2">Expert Trainers</h4>
                        <p class="text-muted">
                            Courses are delivered by experienced working professionals and subject matter experts with real-world experience.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Hands-On Training -->
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 text-center p-3">
                    <div class="card-body">
                        <i class="fa-solid fa-laptop-code fa-3x text-success mb-3"></i>
                        <h4 class="fw-semibold mb-2">Hands-On Training</h4>
                        <p class="text-muted">
                            We provide learners with practical experience through real-world scenarios, projects, and interactive exercises.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Customizable Corporate Training -->
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 text-center p-3">
                    <div class="card-body">
                        <i class="fa-solid fa-building-user fa-3x text-warning mb-3"></i>
                        <h4 class="fw-semibold mb-2">Customizable Corporate Training</h4>
                        <p class="text-muted">
                            Tailored training solutions designed to meet the specific needs of organizations and teams.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Certifications & Assistance -->
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 text-center p-3">
                    <div class="card-body">
                        <i class="fa-solid fa-certificate fa-3x text-danger mb-3"></i>
                        <h4 class="fw-semibold mb-2">Certifications & Assistance</h4>
                        <p class="text-muted">
                            Certifications offered by myTectra align with international standards and we also help you to prepare for globally recognized certifications.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Global Recognition -->
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 text-center p-3">
                    <div class="card-body">
                        <i class="fa-solid fa-globe fa-3x text-info mb-3"></i>
                        <h4 class="fw-semibold mb-2">Global Recognition</h4>
                        <p class="text-muted">
                            Trusted by individuals and enterprises worldwide, with a track record of successful alumni and partnerships.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 24 x 7 Expert Support -->
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 text-center p-3">
                    <div class="card-body">
                        <i class="fa-solid fa-headset fa-3x text-secondary mb-3"></i>
                        <h4 class="fw-semibold mb-2">24 x 7 Expert Support</h4>
                        <p class="text-muted">
                            We have a 24x7 online support team to resolve all your technical queries through a ticket-based tracking system, for a lifetime.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- Course Features xero finish -->

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

<!-- Career Services start -->
<section class="carrer_servicexero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="course_feature_xeroHeading">
                    <h2>Career Services</h2>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <div class="carrer_service_img">
                    <img src="./assets/image/acca/corporate.png" alt="img" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <div class="placement-assistance border-electric">
                    <h4 class="fw-semibold text-primary mt-2">
                        <i class="fa-solid fa-briefcase me-2  text-warning"></i> Placement Assistance
                    </h4>
                    <div class="row g-4 pt-4">
                        <!-- Card 1 -->
                        <div class="col-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="card h-100 text-center shadow-lg border-0 p-4 rounded-4 feature-card">
                                <i class="fa-solid fa-clipboard-check text-info fs-1 mb-3"></i>
                                <h5>Exclusive Access</h5>
                                <p class="mb-0">Get exclusive access to <strong>myTectra Job Portal</strong></p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="card h-100 text-center shadow-lg border-0 p-4 rounded-4 feature-card">
                                <i class="fa-solid fa-user-tie text-success fs-1 mb-3"></i>
                                <h5>Mock Interviews</h5>
                                <p class="mb-0"><strong>Preparation</strong> for real interview scenarios</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="card h-100 text-center shadow-lg border-0 p-4 rounded-4 feature-card">
                                <i class="fa-brands fa-linkedin text-primary fs-1 mb-3"></i>
                                <h5>Resume & LinkedIn</h5>
                                <p class="mb-0">Professional <strong>Profile Building</strong></p>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="col-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="card h-100 text-center shadow-lg border-0 p-4 rounded-4 feature-card">
                                <i class="fa-solid fa-comments text-warning fs-1 mb-3"></i>
                                <h5>Soft Skill Training</h5>
                                <p class="mb-0">Access to <strong>Soft Skill Enhancement</strong> sessions</p>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="col-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="card h-100 text-center shadow-lg border-0 p-4 rounded-4 feature-card">
                                <i class="fa-solid fa-user-graduate text-danger fs-1 mb-3"></i>
                                <h5>Career Guidance</h5>
                                <p class="mb-0"><strong>One-on-one</strong> career mentorship sessions</p>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="col-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="card h-100 text-center shadow-lg border-0 p-4 rounded-4 feature-card">
                                <i class="fa-solid fa-laptop-code text-secondary fs-1 mb-3"></i>
                                <h5>Live Projects</h5>
                                <p class="mb-0">Gain hands-on experience with <strong>real-world projects</strong></p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>


</section>
<!-- Career Services finish -->
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