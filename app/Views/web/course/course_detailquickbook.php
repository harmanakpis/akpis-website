<!-- quick bannner start -->
<section class="quickbook_banner_hero">
  <div class="container-fluid px-0">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-6 col-xl-6">
        <div class="quickbooksbanner_txt ps-2">
          <h2><span>QuickBooks Training in India</span> by AKPIS Institute</h2>
          <p>
            Master <strong>QuickBooks accounting software</strong> with expert-led training from
            <strong>AKPIS Institute</strong>. Learn to manage small business finances, automate payroll,
            and analyze cash flow efficiently. This <strong>QuickBooks Certification Course</strong> helps
            you reconcile bank feeds, track GST/VAT, manage inventory, and prepare accurate financial reports
            — empowering you with essential bookkeeping and accounting skills.
          </p>
          <h6><span><i class="fa-solid fa-check"></i></span> Gain practical <strong>QuickBooks bookkeeping skills</strong> for career growth.</h6>
          <h6><span><i class="fa-solid fa-check"></i></span> Learn how to manage <strong>inventory and payroll</strong> effectively in any business setup.</h6>
          <h6><span><i class="fa-solid fa-check"></i></span> Build <strong>financial management proficiency</strong> for smarter business operations.</h6>
          <a href="https://wa.link/gypgko" class="btn btn-warning btn-lg border-0 fw-bold shadow-sm" target="_blank">Enquire Now</a>     
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-6 col-xl-6">
        <div class="quickbooksbanner">
          <!-- <img src="./assets/image/quickbooks/network-connection.png" alt="img" class="img-fluid"> -->
          <img src="<?= COURSE_IMAGE . $course->banner_image ?>" alt="<?=base_url()?>/assets/image/logo/desktop_img.png" class="img-fluid">
        </div>
      </div>
    </div>
  </div>


</section>
<!-- quick bannner finish -->
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
 <?php   $features = [];
         if (!empty($course->features)) {
         $features = json_decode($course->features, true);
        }

  ?>


<section class="quickbooks_training py-5">
  <div class="container">
    <h2 class="text-center quickbook_module">QuickBooks Training in India — Course Outline by AKPIS Institute</h2>

    <div class="row g-4">
      <p class="text-center quickbook_module mb-4" style="letter-spacing: 0.8px;">
        The <strong> QuickBooks Training Course by AKPIS Institute </strong> is designed to help you gain
        practical accounting and bookkeeping skills through real-world business applications. Whether you’re
        a student, accountant, or entrepreneur, this <strong> QuickBooks Certification Course </strong> equips
        you to confidently manage business finances using the world’s leading accounting software.
      </p>
      <!-- Left Column -->
       <div class="col-md-6">
        <div class="quickbook_module">
          <ul>
            <?php foreach($features as $key =>$feat){ 
                if($key<5){
                ?>
            <li><strong><?php echo $feat['title'];?></strong>
              <ul>
            <?php echo $feat['description'];?>    
            </ul>
            </li>
              <?php }  }?>  
         

          </ul>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-md-6">
        <div class="quickbook_module">
              <ul>
            <?php foreach($features as $key =>$feat){ 
                if($key>4){
                ?>
            <li><strong><?php echo $feat['title'];?></strong>
              <ul>
            <?php echo $feat['description'];?>    
            </ul>
            </li>
              <?php }  }?>  
         

          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Who should attend this QuickBooks Training Course? start -->
<section class="attend_this_Quickbooks py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="attend_this_QuickbooksHeading">

          <h2>Who Should Attend the <span>QuickBooks Training Course in India?</span></h2>
          <p>
            The <strong>QuickBooks Training Course by AKPIS Institute</strong> is ideal for individuals and professionals who want to
            enhance their <strong>accounting, bookkeeping, and financial management</strong> skills. This course is suitable for anyone
            looking to efficiently manage business finances using <strong>QuickBooks Accounting Software</strong>.
          </p>
          <ul>
            <li>Small and Medium Business Owners</li>
            <li>Entrepreneurs and Start-up Founders</li>
            <li>Accounting and Finance Professionals</li>
            <li>Office Administrators and Team Leaders</li>
            <li>Bookkeepers and Account Assistants</li>
            <li>Finance Managers and Auditors</li>
            <li>Students pursuing Commerce or Accounting degrees</li>
          </ul>

          <h2>Prerequisites for the <span>QuickBooks Certification Course</span></h2>
          <p>
            There are no formal prerequisites to join the <strong>QuickBooks Training in India</strong>.
            However, having a basic understanding of accounting terms, financial statements, or bookkeeping
            principles can help learners grasp the software concepts more easily.
          </p>

          <h2>QuickBooks Training Course Overview</h2>
          <p>
            The <strong>QuickBooks Certification Course by AKPIS Institute</strong> provides hands-on training on how to use
            <strong>QuickBooks Online and QuickBooks Desktop</strong> to simplify daily accounting operations.
            Participants will learn how to manage invoices, track expenses, process payroll, and generate financial reports —
            empowering them to make informed business decisions.
          </p>
          <p>
            This <strong>QuickBooks Course in India</strong> is designed for beginners as well as professionals who wish to upgrade their
            accounting software skills. It helps small business owners, accountants, and finance executives streamline financial processes,
            maintain accurate records, and ensure compliance with taxation and reporting standards.
          </p>
          <p>
            With expert-led guidance from <strong>AKPIS Institute</strong>, participants will gain real-world experience in using
            QuickBooks for effective business financial management and reporting.
          </p>

          <h2>Course Objectives</h2>
          <ul>
            <li>To understand and apply QuickBooks fundamentals effectively</li>
            <li>To manage company financial data and daily transactions efficiently</li>
            <li>To automate bookkeeping, payroll, and expense tracking</li>
            <li>To generate, customize, and analyze financial reports accurately</li>
            <li>To improve career prospects with professional QuickBooks certification</li>
          </ul>

          <p>
            Upon successful completion of this <strong>QuickBooks Certification Course in India</strong>, learners will have the
            confidence and technical skills to use QuickBooks efficiently for any business size. They’ll be equipped to enhance
            accuracy, productivity, and decision-making in financial management roles.
          </p>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Who should attend this QuickBooks Training Course? Finish -->
<!-- What’s included in this QuickBooks Training Course? start -->
<section class="included-this-quickBooks py-5">
  <div class="container">
    <div class="included-this-box">
      <h2>What’s Included in This <span>QuickBooks Training Course?</span></h2>
      <ul class="included-list">
        <li>🎓 Expert-Led Interactive Training Sessions</li>
        <li>📚 Comprehensive Digital Study Materials & Practice Files</li>
        <li>💡 Real-World Accounting Scenarios & Case Studies</li>
        <li>🧾 Step-by-Step Guidance on QuickBooks Features & Tools</li>
        <li>🏆 Certificate of Completion from AKPIS Institute</li>
      </ul>
      <p class="highlight-text">
        You’ll also gain exclusive access to the <strong>AKPIS Learning Portal</strong> — your one-stop platform for recordings, assignments, and study resources.
      </p>
      <div class="lab-box">
        <h4>💼 Practical Learning Labs</h4>
        <p>
          Our virtual labs simulate real business environments, allowing you to practice bookkeeping, invoicing, tax management, and financial reporting under expert supervision — helping you master QuickBooks through hands-on experience.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- What’s included in this QuickBooks Training Course? finish -->
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
                                 <img src="./assets/image/desktop-image/YHURBUHB7w8.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                  <a onclick="show_video('https://www.youtube.com/embed/YHURBUHB7w8')" class="video-btn"><img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                                </div>

                            </div>

                        </div>  


                    </div>
                    <div class="col-md-6">
                        <div class="global_youtube_imgmain">
                            <div class="global_youtubeimg">
                              <img src="./assets/image/desktop-image/shBNwsYwtGQ.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                    <a onclick="show_video('https://www.youtube.com/embed/shBNwsYwtGQ')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="global_youtube_imgmain">
                            <div class="global_youtubeimg">
                              <img src="./assets/image/desktop-image/VBSzhIepMVM.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                  <a onclick="show_video('https://www.youtube.com/embed/VBSzhIepMVM')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="global_youtube_imgmain">
                            <div class="global_youtubeimg">
                               <img src="./assets/image/desktop-image/d05TrqDv9BI.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                    <a onclick="show_video('https://www.youtube.com/embed/d05TrqDv9BI')" class="video-btn"> <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid"></a>
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
<!-- Ways to take QuickBooks Training start -->
<section class="take_quickbooks py-5">
  <div class="container">
    <?php //echo '<pre>';print_r($course);?>
    <!-- Online Instructor-Led Learning -->
    <div class="row">
      <div class="col-12">
        <div class="take_quickbooksheading text-center mb-4">
          <h2>Ways to Take <span>QuickBooks Training with AKPIS</span></h2>
          <p class="lead fw-semibold">Online Instructor-Led QuickBooks Courses</p>
          <p>
            Learn QuickBooks from anywhere in India through <strong>AKPIS Institute’s Online Instructor-Led QuickBooks Training</strong>.
            Join live, interactive sessions led by certified trainers, practice accounting and bookkeeping skills in real time, and enjoy the flexibility of learning online while gaining hands-on experience.
            Perfect for professionals, accountants, and students aiming to become QuickBooks certified.
          </p>
        </div>
      </div>
    </div>

    <!-- Online Learning Features -->
    <div class="row take-quickbooks-row g-4">
       
        <?php   $extrafeatures = [];
         if (!empty($course->extrafeature)) {
         $extrafeatures = json_decode($course->extrafeature, true);
        }

       

        if(!empty($extrafeatures )) {
          foreach($extrafeatures as $key=>$val){
      ?>
      <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card take-quickbooks-card h-100 text-center">
          <div class="card-body">
            <img src="<?= COURSE_IMAGE . $val['image'] ?>" alt="Live Online QuickBooks Classes" class="img-fluid mb-3">
            <h4><?php echo $val['title'];?></h4>
            <p><?php echo $val['description'];?></p>
          </div>
        </div>
      </div>
      <?php } } ?>
     
      <div class="col-md-4 d-flex justify-content-center align-items-center">
        <a href="<?= COURSE_IMAGE .$course->prospectus ?>" target="_blank"  class="btn btn-primary">Download Brochure <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
      </div>
    </div>

    <!-- Onsite Learning -->
    <div class="row mt-5">
      <div class="col-12">
        <div class="take_quickbooks_heading text-center mb-4">
          <h2>Onsite <span>QuickBooks Training</span></h2>
          <p>
            AKPIS Institute also offers <strong>In-House Onsite QuickBooks Training</strong> for organizations across India.
            Deliver expert-led sessions at your workplace, streamline team learning, and enhance professional development for accountants and finance teams.
          </p>
        </div>
      </div>
    </div>

    <!-- Onsite Learning Benefits -->
    <div class="row g-4">
      <div class="col-12 col-md-6 col-md-3 col-xl-3">
        <div class="Tailored_learning_experience p-3">
          <div class="card h-100 text-center">
            <div class="card-body">
              <h2>Customized Learning Experience</h2>
              <p>Tailor the QuickBooks course to fit your team’s specific business goals and project needs.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-md-3 col-xl-3">
        <div class="Tailored_learning_experience p-3">
          <div class="card h-100 text-center">
            <div class="card-body">
              <h2>Optimize Your Training Budget</h2>
              <p>Cut unnecessary costs while investing fully in upskilling your finance and accounting team.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-md-3 col-xl-3">
        <div class="Tailored_learning_experience p-3">
          <div class="card h-100 text-center">
            <div class="card-body">
              <h2>Team Collaboration</h2>
              <p>Promote teamwork and discussions among employees while learning practical QuickBooks skills together.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-md-3 col-xl-3">
        <div class="Tailored_learning_experience p-3">
          <div class="card h-100 text-center">
            <div class="card-body">
              <h2>Track Employee Progress</h2>
              <p>Monitor your team’s progress and performance with our structured QuickBooks assessments.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-3">
        <!-- <a href="#" class="btn btn-warning btn-lg">Enroll Now with AKPIS</a> -->
        <a class="btn btn-warning btn-lg"  href="javascript:void(0);" class="button"  data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Now with AKPIS</a>
      </div>
    </div>
  </div>
</section>
<!-- Ways to take QuickBooks Training finish -->

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


<!-- QuickBooks Training Schedule start -->
<section class="quickbooks_training_schedule_start">
  <div class="container">
    <div class="row">
      <div class="quickbook-trading-schedule-books">
        <h2 class="pb-2">QuickBooks<span> Training Schedule with AKPIS </span></h2>
        <p class="text-center pb-2">Flexible training options designed for professionals, students, and corporate teams across India.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="quickbooks_training_schedule_tabs">
          <ul class="nav nav-pills justify-content-center mb-4" id="training-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="online-led-tab" data-bs-toggle="pill" data-bs-target="#online-led" type="button" role="tab" aria-controls="online-led" aria-selected="true">
                <i class="bi bi-person-video3 me-2"></i>Live Online Training
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="self-paced-tab" data-bs-toggle="pill" data-bs-target="#self-paced" type="button" role="tab" aria-controls="self-paced" aria-selected="false">
                <i class="bi bi-laptop me-2"></i> Self-Paced Online
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="onsite-tab" data-bs-toggle="pill" data-bs-target="#onsite" type="button" role="tab" aria-controls="onsite" aria-selected="false">
                <i class="bi bi-geo-alt me-2"></i> Onsite Training
              </button>
            </li>
          </ul>

          <div class="tab-content" id="training-tabContent">
            <!-- Online Instructor-Led -->
            <div class="tab-pane fade show active" id="online-led" role="tabpanel" aria-labelledby="online-led-tab">
              <div class="training-card">
                <h3>Interactive Live Online QuickBooks Training with AKPIS</h3>
                <p>Join AKPIS Institute’s <strong>Live Online QuickBooks Training</strong> and experience a fully interactive learning journey. Learn directly from certified QuickBooks instructors who guide you through accounting, bookkeeping, and financial reporting processes used in real businesses. Our live sessions include Q&A, group exercises, and real-world problem-solving activities designed to help you master QuickBooks effectively.</p>
                <p>Perfect for professionals, accounting students, and entrepreneurs across India, our online instructor-led courses are scheduled to fit your availability while maintaining a high level of engagement and practical learning.</p>
                <ul>
                  <li>Step-by-step guidance from expert QuickBooks instructors</li>
                  <li>Flexible batch timings suitable for learners in all time zones</li>
                  <li>Hands-on exercises and collaborative group activities</li>
                  <li>Access to additional learning resources through AKPIS Learning Portal</li>
                </ul>
                <a href="https://wa.link/gypgko" class="btn  btn-primary mt-3" target="_blank">Join Class</a>
              </div>
            </div>

            <!-- Online Self-Paced -->
            <div class="tab-pane fade" id="self-paced" role="tabpanel" aria-labelledby="self-paced-tab">
              <div class="training-card">
                <h3>Self-Paced Online QuickBooks Course</h3>
                <p>Our <strong>Self-Paced Online QuickBooks Training</strong> allows you to learn at your own speed from anywhere in India. Access pre-recorded modules that cover everything from basic accounting to advanced bookkeeping, including GST, invoicing, and payroll management. Ideal for busy professionals and students who want to prepare for QuickBooks certification without compromising their schedule.</p>
                <p>AKPIS ensures that self-paced learners also receive quizzes, downloadable practice files, and a dashboard to track progress, ensuring that every student gains practical knowledge and confidence in using QuickBooks for real-world business applications.</p>
                <ul>
                  <li>24/7 access to comprehensive QuickBooks modules</li>
                  <li>Progress tracking and performance dashboard</li>
                  <li>Practice exercises, quizzes, and downloadable resources</li>
                  <li>Learn accounting and bookkeeping skills applicable to Indian businesses</li>
                </ul>
                <a href="#" class="btn btn-success mt-3">Start Learning</a>
              </div>
            </div>

            <!-- Onsite -->
            <div class="tab-pane fade" id="onsite" role="tabpanel" aria-labelledby="onsite-tab">
              <div class="training-card">
                <h3>Corporate Onsite QuickBooks Training by AKPIS</h3>
                <p>AKPIS Institute delivers <strong>customized Onsite QuickBooks Training</strong> for corporate teams and organizations. Our trainers come to your workplace and provide hands-on sessions tailored to your business needs, helping your team understand and apply QuickBooks features in day-to-day operations. This option is perfect for accounting teams, finance departments, and business managers looking to enhance efficiency.</p>
                <p>Each session includes practical exercises, collaborative learning, and real-world case studies so your team can immediately implement QuickBooks solutions effectively. AKPIS Onsite Training is designed to maximize learning while minimizing disruption to your business operations.</p>
                <ul>
                  <li>Customized corporate curriculum to suit your business processes</li>
                  <li>Hands-on practice with real accounting data</li>
                  <li>Team collaboration exercises and group discussions</li>
                  <li>Performance tracking and employee skill development</li>
                </ul>
                <a href="#" class="btn btn-warning mt-3">Book Onsite Training</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- QuickBooks Training Schedule finish -->
<section class="alumini_success_cma">
        <div class="container">
            <h2 class="alumini_success_header">Alumni Success & Placement Stories</h2>
            <p class="aumini_success_para">See the incredible career paths of our QuickBooks alumni as they thrive in accounting, bookkeeping, and financial management roles around the world.</p>
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
                                    <p class="text-muted mb-1">Achieved</p>
                                    <p class="fw-semibold">QuickBooks ProAdvisor Certification</p>
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
<!-- CPA Prometric Centers in India start -->
<section class="prometric_city py-5">
  <div class="container">
    <h2 class="prometriccity_heading">QuickBooks Centers in India</h2>
    <p class="prometriccity_paragraph text-center fs-5 pb-4">The international administration process for the India region is now permanently available.</p>
    <div class="row">
      <div class="col-12 col-md-6 col-md-3 col-xl-3 mb-4">
        <div class="cpa_city_card">
          <img src="./assets/image/city/Ahmedabad.jpg" alt="Ahmedabad">
          <div class="cpa_city_overlay">
            <h4>Ahmedabad</h4>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-md-3 col-xl-3 mb-4">
        <div class="cpa_city_card">
          <img src="./assets/image/city/Bengaluru.jpg" alt="Bengaluru" class="img-fluid">
          <div class="cpa_city_overlay">
            <h4>Bengaluru</h4>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-md-3 col-xl-3 mb-4">
        <div class="cpa_city_card">
          <img src="./assets/image/city/delhi.jpg" alt="Delhi" class="img-fluid">
          <div class="cpa_city_overlay">
            <h4>Delhi</h4>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-md-3 col-xl-3 mb-4">
        <div class="cpa_city_card">
          <img src="./assets/image/city/chennai.jpg" alt="Chennai" class="img-fluid">
          <div class="cpa_city_overlay">
            <h4>Chennai</h4>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-md-3 col-xl-3 mb-4">
        <div class="cpa_city_card">
          <img src="./assets/image/city/mumbai-taj.jpg" alt="Mumbai" class="img-fluid">
          <div class="cpa_city_overlay">
            <h4>Mumbai</h4>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-md-3 col-xl-3 mb-4">
        <div class="cpa_city_card">
          <img src="./assets/image/city/kolkata.jpg" alt="Kolkata" class="img-fluid">

          <div class="cpa_city_overlay">
            <h4>Kolkata</h4>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-md-3 col-xl-3 mb-4">
        <div class="cpa_city_card">
          <img src="./assets/image/city/hyderabad.jpg" alt="Hyderabad" class="img-fluid">

          <div class="cpa_city_overlay">
            <h4>Hyderabad</h4>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-md-3 col-xl-3 mb-4">
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
<!-- testomonial start -->

<section class="testominal_ouralumini">
    <div class="container">
        <h2 class="testomonial_heading">
            Testimonials From Our Alumni
        </h2>
        <p class="text-center text-warning pb-5">See how our QuickBooks alumni are excelling in accounting, bookkeeping, and finance roles worldwide.</p>
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
<!-- finish learning today -->