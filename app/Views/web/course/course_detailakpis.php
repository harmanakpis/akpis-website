
    <!-- End Menu Bar -->

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
                        <h1><?= !empty($course->banner_title) ? htmlspecialchars($course->banner_title) : '' ?></h1>
                        <p class="cpt_title-heading">4 Exam | 12-15 Months,</p>
                        <p class="cpa_title_desc"><?= !empty($course->banner_subtitle) ? htmlspecialchars($course->banner_subtitle) : '' ?></p>
                        <button class="cpa_btn mb-2">Get started Now</button>
                    </div>
                    <div class="google_trading">
                        <div class="main_google_trading">
                            <div class="font_google">
                                <i class="fa-brands fa-google"></i>
                            </div>
                            <div class="para_google">
                                <h6>Student rating</h6>
                                <p>5<span>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </span></p>

                            </div>

                        </div>
                    </div>
                    <div class="home_main_component">
                        <div class="home_component">
                            <div class="firstComponent">
                                <img src="<?=base_url()?>/assets/image/desktop-image/HomeComponent1.png" alt="" class="img-fluid">
                                <div class="para_homecomponent">
                                    <h4>50k+</h4>
                                    <p>Globlas Students</p>

                                </div>
                            </div>
                        </div>
                        <div class="home_component">
                            <div class="firstComponent">
                                <img src="<?=base_url()?>/assets/image/desktop-image/HomeComponent1.png" alt="" class="img-fluid">
                                <div class="para_homecomponent">
                                    <h4>95%</h4>
                                    <p>Pass Rate</p>

                                </div>
                            </div>
                        </div>
                        <div class="home_component bg-dark">
                            <div class="firstComponent ">
                                <img src="<?=base_url()?>/assets/image/desktop-image/HomeComponent1.png" alt="" class="img-fluid">
                                <div class="para_homecomponent">
                                    <h4>10k+</h4>
                                    <p>Placement</p>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-7 mx-0">
                    <div class="cpa_img">
                        <img src="<?=base_url()?>/assets/image/logo/desktop_img.png" alt="img" class="img-fluid">
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
                            <div class="our_alumini">
                                <img src="<?=base_url()?>/assets/image//desktop-image/accenture.png" alt="img">
                            </div>
                            <div class="our_alumini">
                                <img src="<?=base_url()?>/assets/image//desktop-image/amazon.webp" alt="img">
                            </div>
                            <div class="our_alumini">
                                <img src="<?=base_url()?>/assets/image//desktop-image/bdo.webp" alt="img">
                            </div>

                            <div class="our_alumini">
                                <img src="<?=base_url()?>/assets/image//desktop-image/deloitte.webp" alt="img">
                            </div>
                            <div class="our_alumini">
                                <img src="<?=base_url()?>/assets/image//desktop-image/ey.webp" alt="img">
                            </div>
                            <div class="our_alumini">
                                <img src="<?=base_url()?>/assets/image//desktop-image/gt.png" alt="img">
                            </div>
                            <div class="our_alumini">
                                <img src="<?=base_url()?>/assets/image//desktop-image/kpmg.webp" alt="img">
                            </div>
                            <div class="our_alumini">
                                <img src="<?=base_url()?>/assets/image//desktop-image/pwc.webp" alt="img">
                            </div>
                            <div class="our_alumini">
                                <img src="<?=base_url()?>/assets/image//desktop-image/rsm.webp" alt="img">
                            </div>


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
                 <div class="col-md-3">
                  <div class="cpa-card">
                      <div class="cpa-left">
                          <i class="fa-solid fa-book-open"></i>
                      </div>
                      <div class="cpa-right">
                          <h5><?= !empty($steps->{1}->title) ? htmlspecialchars($steps->{1}->title) : '' ?></h5>
                          <p><?= !empty($steps->{1}->brief) ? htmlspecialchars($steps->{1}->brief) : '' ?></p>
                      </div>
                  </div>
              </div>

              <div class="col-md-3">
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

              <div class="col-md-3">
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
                          <div class="col-md-3">
                    <div class="cpa-card">
                        <div class="cpa-left">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="cpa-right">

                            <h5><?= !empty($steps->{4}->title) ? htmlspecialchars($steps->{4}->title) : '' ?></h5>
                          <p><?= !empty($steps->{4}->brief) ? htmlspecialchars($steps->{4}->brief) : '' ?></p>
                            <button class="btn btn-danger">Register Here</button>
                        </div>
                    </div> 
                </div>

            </div>
            <div class="cpa_use_btn text-center py-3">
                <button>Download Free US CPA Prospectus <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></button>
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
                        <p><?= !empty($course->choose_description) ? $course->choose_description : '' ?> </p></div>
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
                  <div class="col-md-4 col-sm-6 mb-4">
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
              <?php
                  }
              }

              
            ?>
                <!-- <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Becker’s Global Trust + Simandhar’s Expertise:</strong> Becker is trusted by 2 million+ CPA candidates globally, and Simandhar brings that legacy to Indian learners with personalized mentorship.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>95% Pass Rate:</strong> Simandhar students consistently achieve one of the highest pass rates in India, thanks to structured guidance and smart preparation strategies.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Official Becker Exclusive Partner:</strong> Get 100% verified content directly from Becker, along with Simandhar’s live classes, mentoring, and exam strategy.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Dual LMS Access:</strong> Study smarter with Becker LMS for global-standard content, MCQs, and mocks - and Simandhar LMS for class recordings, notes, doubt-solving sessions, and India-specific guidance.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Expert-Led Live Training:</strong> Learn from India’s most experienced CPA faculty with live classes, real-time doubt clearance, and 1:1 mentorship.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>24×7 AI-Powered Support with Digital Sripal:</strong> Get your queries resolved instantly, anytime - with Simandhar’s in-house AI tool, Digital Sripal.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Exam-Focused Tools:</strong> Adaptive learning technology, mock exams, and performance analytics to keep you focused and exam-ready.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Placement Assistance:</strong> Simandhar offers dedicated placement support through its corporate network, helping students land roles in Big 4, Top US MNCs, and top finance firms.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature_box">
                        <div class="circle_icon"></div>
                        <p><strong>Alumni at Top Companies (Student Connect):</strong> Join a successful alumni network working at Big 4, Fortune 500s, and top finance firms.</p>
                    </div>
                </div> -->
            </div>

            <p class="text-muted text-center">With Simandhar and Becker, you're not just preparing for CPA - you're preparing for a world-class career in finance and accounting.</p>
        </div>


    </section>

    <!-- Why Choose akpis finsih -->

    <!-- Certified Public Accountant (CPA) start -->
    <section class="certified_public">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 image-wrapper">
                    <div class="youtube-icon">
                      <a onclick="show_video('https://www.youtube.com/embed/vuIo_RMttr0')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                    </div>
                    <img class="course-image" src="<?=base_url()?>/assets/image/desktop-image/course-overview.jpg" alt="Course Overview">

                    
                      
                </div>
                <div class="col-md-7">
                    <div class="full_description_certified">
                        <h1><?= !empty($course->enrol_title) ? $course->enrol_title : '' ?></h1>
                        <p><?= !empty($course->enrol_description) ? $course->enrol_description : '' ?></p>
                        <button>Enroll Now</button>
                    </div>

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
                    <img src="<?=base_url()?>/assets/image/logo/Partnership-Banner_CPA-3.jpg" alt="img" class="img-fluid">

                </div>
            </div>
        </div>


    </section>
    <!-- Desktop_image finish -->

    <!-- Why Did Becker Choose only Simandhar for CPA in India?
 start -->

    <section class="backer_choose">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-5 image-wrapper">
                    <div class="youtube-icon">
                        <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid">
                    </div>
                    <img class="course-image" src="<?=base_url()?>/assets/image/logo//IFRS+best.jpg" alt="Course Overview">
                </div>
                <div class="col-md-7">
                    <div class="para_bakerchoose">
                        <h2>Becker President Announces Exclusive Partnership with Simandhar Education in India</h2>
                        <h4>Simandhar Education is now the official and exclusive partner of Becker in India for US CPA and US CMA courses.</h4>
                        <p>Trusted globally since 1957, Becker joins hands with Simandhar to empower Indian professionals with world-class accounting certifications.</p>
                    </div>
                </div>

            </div>
            <div class="row py-4 g-4">
                <div class="col-md-4">
                    <div class="cpa_evaluation">
                        <i class="fa-solid fa-award"></i>
                        <h2>The #1 Solution for CPA Evolution</h2>
                        <p>Since 1957, Becker has been the trusted choice of accounting professionals. With updated content aligned to the CPA Evolution, Becker ensures you're always Exam Day Ready.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="cpa_evaluation">
                        <i class="fa-solid fa-robot"></i>
                        <h2>AI-Powered Academic Assistant (Newt AI)</h2>
                        <p>Ask questions anytime and get instant, intelligent responses to improve understanding and boost momentum.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="cpa_evaluation">
                        <i class="fa-solid fa-video"></i>
                        <h2>900+ Concept Videos</h2>
                        <p>Step-by-step explanations of task-based simulations help you master every CPA topic with ease.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="cpa_evaluation">
                        <i class="fa-solid fa-hands-helping"></i>
                        <h2>Unmatched Academic Support</h2>
                        <p>Personalized practice tests and a flexible study planner let you learn at your own pace and on your terms.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="cpa_evaluation">
                        <i class="fa-solid fa-sliders"></i>
                        <h2>Customized Learning Experience</h2>
                        <p>Personalized practice tests and a flexible study planner let you learn at your own pace and on your terms.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="cpa_evaluation">
                        <i class="fa-solid fa-chart-line"></i>
                        <h2>Proven Success Record</h2>
                        <p>Nearly 2 million CPA candidates have cleared the exam using Becker. 90% of Watt Sells Award winners have chosen Becker.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="cpa_evaluation">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        <h2>Flexible Study Options</h2>
                        <p>Use Becker’s mobile app and self-paced learning tools to stay engaged and study from anywhere.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="cpa_evaluation">
                        <i class="fa-solid fa-clipboard-check"></i>
                        <h2>Simulated Practice Exams</h2>
                        <p>Experience real exam scenarios through mini-tests and mock exams to improve exam readiness.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="cpa_evaluation">
                        <i class="fa-solid fa-book-open"></i>
                        <h2>Massive Learning Library</h2>
                        <p>Access 1,700+ CPA-related and continuing education courses to support long-term career growth.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="cpa_evaluation">
                        <i class="fa-solid fa-chalkboard-teacher"></i>
                        <h2>Expert-Led Instruction</h2>
                        <p>Learn from professionals with real-world accounting expertise, bringing practical insights to every topic.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>





    <!-- Learn from the #1 Global Mentor start -->
   <section class="globalMentorCpa">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading_global mb-5">
                    <h2>Learn from the #1 Global Mentor – Physical & Digital <span>Your Pathway to Success</span></h2>
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
                            <h2>Shammi Saluja CA CPA <br>( License Awaited )</h2>
                            <p>With over a decade of leadership experience, my journey as Director at AKPIS EDU PVT LTD and Managing Director at Ruhil Group has honed my expertise in offer management and retail operations. My role encompasses strategic curriculum development, ensuring Instituteal offerings align with market needs. At AKPIS, our mission is to empower and innovate within the Institute sector, a challenge I embrace with a blend of financial acuity, as a Chartered Accountant, and a passion for transformative learning experiences. My commitment to excellence is complemented by a dedication to fostering an environment that values diverse perspectives and collective growth.</p>
                        </div>

                    </div>
                </div>



            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="global_youtube_imgmain">
                            <div class="global_youtubeimg">
                                <img src="./assets/image/desktop-image/course-overview.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                    <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid">
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="global_youtube_imgmain">
                            <div class="global_youtubeimg">
                                <img src="./assets/image/logo/IFRS+best.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                    <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid">
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="global_youtube_imgmain">
                            <div class="global_youtubeimg">
                                <img src="./assets/image/logo/IFRS+best.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                    <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid">
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="global_youtube_imgmain">
                            <div class="global_youtubeimg">
                                <img src="./assets/image/desktop-image/course-overview.jpg" alt="img" class="img-fluid">
                                <div class="youtube_icon">
                                    <img src="./assets/image/logo/youtube.png" alt="img" class="img-fluid">
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
        <h2 class="visionary_global"> <span>Shammi Saluja</span>-A Visionary in Global Finance & Institute</h2>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <div class="visionary_image">
                    <img src="./assets/image/logo/sha.jpg" alt="img" class="visionary_img">
                    <h4> <span>
                            <i class="fa-brands fa-linkedin"></i>
                        </span>Shammi Saluja, CA, CPA <br>
                        India’s top finance instructor</h4>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card visionary_card">
                    <div class="">
                        <h3>CPA Licensed & Renowned Faculty</h3>
                        <p>One of India’s most recognized US CPA faculty, mentoring thousands of finance professionals.</p>
                    </div>
                </div>
                <div class="card visionary_card">
                    <div class="">
                        <h3>Two-Time “40 Under 40” Awardee</h3>
                        <p>The only Indian to be featured twice among USA’s Top 40 Young Accounting Professionals by CPA Practice Advisor & AICPA.</p>
                    </div>
                </div>
                <div class="card visionary_card">
                    <div class="">
                        <h3>Co-Founder of Akpis Institute</h3>
                        <p>Leading India’s premium institute for US CPA, US CMA & EA courses, with collaborations across Big 4, corporates, and global universities.</p>
                    </div>
                </div>
                <div class="card visionary_card">
                    <div class="">
                        <h3>Influencer, Speaker & Author</h3>
                        <p>70K+ LinkedIn community | Guest speaker at AICPA Engage & IIMs | Advisory Board Member at top 4 CPA firms | Author of The Unique Classroom.</p>
                    </div>
                </div>
                <div class="card visionary_card">
                    <div class="">
                        <h3>Media and Press Release</h3>
                        <p>Featured in The Times of India, The Indian Express, The Financial Express, News18, and many more.</p>
                        <a href="#">click here</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

</section>


    <!-- The Pathway to the CPA world finish -->
    <!-- 100% toppers in cma batch start -->

    <?php //echo '<pre>';print_r($toppers);?>
    <section class="cma_batch">
        <div class="container">
            <h2 class="pathwayfind text-primary mb-2">100% CPA toppers in india are from Akpis Institute</h2>
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
    <section class="cpa_certifiction">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="cpa_cer_para">
                        <h2>Your CPA Certification Journey in Just 8-12 Months</h2>
                        <p>
                            Here’s how you can earn your US CPA and join the ranks of top accounting professionals
                        </p>
                        <button>
                            Get Started Now
                        </button>
                    </div>
                </div>

                <div class="col-md-6 scrollable-journey">

                    <!-- Step 1 -->
                    <div class="journey-step">
                        <h5>Step 1</h5>
                        <h3>Meet Eligibility</h3>
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
                                <div class="month">Month 3</div>
                                <div class="exam">FAR Exam</div>
                            </div>

                            <!-- Item 2 -->
                            <div class="timeline-item">
                                <div class="circle">2</div>
                                <div class="month">Month 6</div>
                                <div class="exam">AUD Exam</div>
                            </div>

                            <!-- Item 3 -->
                            <div class="timeline-item">
                                <div class="circle">3</div>
                                <div class="month">Month 9</div>
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
                                        The only institute in India offering both Indian & US lecture software. Access expert live training, Glimps CPA Review resources, all four modules, physical textbooks, pre-recorded lectures, and PassMaster Software with 7,000+ MCQs and simulations, plus progress tests and mock exams.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted">Package price</span>
                                        <span class="fw-bold text-success">₹1,10,000</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Stage II -->
                            <div class="card mb-3">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>Stage II <small class="text-muted">| Evaluation & State Board Application</small></div>
                                    <span class="badge bg-primary text-white">Mandatory</span>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex justify-content-between py-2 border-bottom">
                                            <div>
                                                <strong>NIES (NASBA International Evaluation Services)</strong>
                                                <div class="small text-muted">Evaluation fee payable to US agency</div>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold text-primary">$250</div>
                                                <div class="small text-success">₹21,930</div>
                                            </div>
                                        </li>
                                        <li class="d-flex justify-content-between py-2 border-bottom">
                                            <div>
                                                <strong>CPA Exam Fees (for first exam)</strong>
                                                <div class="small text-muted">Per initial exam registration</div>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold text-primary">$870</div>
                                                <div class="small text-success">₹76,690</div>
                                            </div>
                                        </li>
                                        <li class="d-flex justify-content-between py-2">
                                            <div>
                                                <strong>One Time State Board Application Fee</strong>
                                                <div class="small text-muted">Valid for lifetime</div>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold text-primary">$100</div>
                                                <div class="small text-success">₹8,770</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Stage III -->
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>Stage III <small class="text-muted">| Remaining Exams</small></div>
                                    <span class="badge bg-info text-white">Per-exam</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>CPA Exam Fees (for remaining 3 exams)</span>
                                        <div class="text-end">
                                            <div class="fw-bold text-primary">$2,610</div>
                                            <div class="small text-success">₹2,30,069</div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p class="small text-muted mb-0">
                                        <strong>Exchange rate used:</strong> US $1 = INR 90.00 (includes foreign currency markup fees).
                                        Expenses may vary slightly depending on the evaluation agency and state board selection.
                                    </p>
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
            <h2 class="down_Cma_course">
                Download free CPA Class Schedules
            </h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="btn_down_Cma">
                        <button>
                            FAR Schedule <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                        </button>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="btn_down_Cma">
                        <button>
                            AUD Schedule <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                        </button>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="btn_down_Cma">
                        <button>
                            TCP Schedule <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="btn_down_Cma">
                        <button>
                            REG Schedule <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                        </button>
                    </div>
                </div>

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
                                    <!-- Responsive video using Bootstrap ratio -->
                                    <div class="ratio ratio-16x9 mb-3 border border-3 border-primary rounded">
                                        <?php $url =  $place->videolink;?>
                                         <iframe
                                            src="<?php echo $url; ?>?autoplay=1&mute=1&loop=1>"
                                            title="YouTube video"
                                            allow="autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>


                                        <!-- <div class="course-overview-section ratio ratio-16x9 mb-3 border border-3 border-primary rounded position-relative overflow-hidden">
                                            <img class="course-image w-100 h-100 object-fit-cover" 
                                                src="<?=base_url()?>/assets/image/desktop-image/course-overview.jpg" 
                                                alt="Course Overview">
                                            <a onclick="show_video('https://www.youtube.com/embed/vuIo_RMttr0')" 
                                            class="video-btn position-absolute top-50 start-50 translate-middle">
                                                <img src="<?=base_url()?>/assets/image/logo/youtube.png" 
                                                    alt="Play" class="youtube-icon img-fluid" style="width:70px; height:auto;">
                                            </a>
                                        </div> -->
                                    </div>

                                    <h5 class="card-title mb-1"><?php echo $place->name;?></h5>
                                    <a href="<?php echo $place->linkedInLink;?>" target="_blank" class="text-decoration-none text-primary mb-2 d-block">
                                        <i class="fa-brands fa-linkedin" style="font-size: 1.5rem;"></i>
                                    </a>
                                    <p class="text-muted mb-1">Placed at</p>
                                    <i class="fa-brands fa-amazon"></i>
                                    <p class="fw-semibold"><?php echo $place->placed_at;?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>


                <div class="alumini_viewmore text-center py-4">
                    <button class="btn btn-outline-primary btn btn-lg">
                        View More <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                    </button>
                </div>

            </div>

            </div>
        </div>

    </section>
    <!-- Alumni Success & Placement Stories finish -->

    <!-- Download free CPA MCQ's start -->
    <section class="downloadCpaMcq">
        <div class="container">
            <h2 class="downloadmcq_heading">Download free CPA MCQ's</h2>
            <div class="row">
                <?php  
                    $pdfs = [];
                    if($course->class_Schedules_PDF){
                    $pdfs = json_decode($course->class_Schedules_PDF,true);
                    }
                    if (!empty($course->class_Schedules_PDF)) : ?>
                    <?php foreach ($pdfs as $pdf) : ?>
                    <div class="col-md-2">
                        <div class="download_mcqButton">
                            <a href="<?= COURSE_IMAGE . $pdf ?>" target="_blank">FAR MCQ's <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
                            <!-- <button>FAR MCQ's <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></button> -->
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                <!-- <div class="col-md-2">
                    <div class="download_mcqButton">
                        <button>ISC MCQ's <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></button>
                    </div>

                </div>

                <div class="col-md-2">
                    <div class="download_mcqButton">
                        <button>REG MCQ's <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></button>
                    </div>

                </div>
                <div class="col-md-2">
                    <div class="download_mcqButton">
                        <button>TCP MCQ's <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></button>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="download_mcqButton">
                        <button>AUD MCQ's <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></button>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="download_mcqButton">
                        <button>BAR MCQ's <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></button>
                    </div>
                </div> -->

            </div>
            <div class="row py-4">
                <div class="col-12">
                    <div class="impact_akspit">
                        <h2 class="akspit_imapct_heading">The Impact of Simandhar’s Training</h2>
                        <p class="akspit_impact_para fs-5">
                            See where our CPA graduates are making a difference.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="row g-4">

                        <div class="col-md-6">
                            <div class="mcq_couting_number">
                                <h2>50000+ <span>Students</span></h2>
                                <p>Helping professionals secure top roles in Big 4 firms, Fortune 500 companies, and global corporations.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mcq_couting_number">
                                <h2>700% <span>Average ROI</span></h2>
                                <p>Helping professionals secure top roles in Big 4 firms, Fortune 500 companies, and global corporations.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mcq_couting_number">
                                <h2>15+ <span>Countries with Global Placements</span></h2>
                                <p>Graduates work across India, the US, Canada, and the Middle East, expanding career opportunities.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mcq_couting_number">
                                <h2>250+ <span>Corporate Tie-ups</span></h2>
                                <p>Rated highly for mentorship, Becker-backed study materials, and AI-powered learning tools.</p>
                            </div>
                        </div>

                    </div>



                </div>
                <div class="col-md-4">
                    <div class="cpa_mcq_counting">
                        <img src="./assets/image/logo/sucess-thumb1.jpg" alt="img" class="img-fluid rounded-4">
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
            <p class="text-center text-warning pb-5">See how our CPA alumni are excelling in global finance and management roles.</p>
            <div class="row">
                <div class="col-12">
                    <div class="testomoinal_slider">
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
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nulla saepe repellat
                                        accusantium illo similique placeat fugiat aut. Laboriosam, itaque!
                                        <a href="#">Read More</a>
                                    </p>
                                </div>
                                <div class="testomonial_img">
                                    <img src="./assets/image/students/1.jpg" alt="John Doe" class="img-fluid rounded-circle" width="80">
                                    <h5 class="mt-3 mb-0">John Doe</h5>
                                    <p class="text-muted">Chartered Accountant</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
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
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nulla saepe repellat
                                        accusantium illo similique placeat fugiat aut. Laboriosam, itaque!
                                        <a href="#">Read More</a>
                                    </p>
                                </div>
                                <div class="testomonial_img">
                                    <img src="<?=base_url()?>/assets/image/students/4.jpg" alt="Jane Smith" class="img-fluid rounded-circle" width="80">
                                    <h5 class="mt-3 mb-0">Jane Smith</h5>
                                    <p class="text-muted">CPA, Big 4</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
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
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nulla saepe repellat
                                        accusantium illo similique placeat fugiat aut. Laboriosam, itaque!
                                        <a href="#">Read More</a>
                                    </p>
                                </div>
                                <div class="testomonial_img">
                                    <img src="<?=base_url()?>/assets/image/students/5.jpeg" alt="Amandeep Kaur" class="img-fluid rounded-circle" width="80">
                                    <h5 class="mt-3 mb-0">Amandeep Kaur</h5>
                                    <p class="text-muted">Finance Manager</p>
                                </div>
                            </div>
                        </div>

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
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nulla saepe repellat
                                        accusantium illo similique placeat fugiat aut. Laboriosam, itaque!
                                        <a href="#">Read More</a>
                                    </p>
                                </div>
                                <div class="testomonial_img">
                                    <img src="<?=base_url()?>/assets/image/students/4.jpg" alt="Jane Smith" class="img-fluid rounded-circle" width="80">
                                    <h5 class="mt-3 mb-0">Jane Smith</h5>
                                    <p class="text-muted">CPA, Big 4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- testomonial start -->

    <!-- explore Webinars start -->
    <section class="explore_webinars ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="explore_webinars_text">
                        <h2>Upcoming webinars</h2>
                        <p>Join our free webinar to explore global finance courses and explore study and career opportunities in the USA and beyond!</p>
                        <button>Explore Webinars</button>
                    </div>




                </div>
                <div class="col-md-6">
                    <div class="explore_webinars_banner">
                        <img src="./assets/image/students/learning.jpg" alt="img" class="img-fluid">
                        <h6>From B.com Graduate to Global Finance Leader</h6>
                        <p id="event"><span class="me-2"><i class="fa-solid fa-calendar-days"></i></span><strong>4:00 PM IST</strong><br>Sept 27, 2025</p>
                        <button>Register Now</button>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- explore Webinars finish -->
    <!-- Get Insights From Our US CPA Students and Faculty start -->
    <section class="insight_usStudnetFaculty py-5">
        <div class="container">
            <div class="row align-items-center insight_student_main">
                <div class="col-md-6">
                    <div class="insight_usstudent_heading">
                        <h2 class="fw-bold mb-3">
                            Get Insights From Our US CPA Students and Faculty
                        </h2>
                        <p class="text-underline text-white mb-4">
                            Akpis is here to make your US CPA journey smoother, easier, and stress-free, providing expert guidance every step of the way.
                        </p>
                        <button class="btn btn-primary px-4 py-2 rounded-pill shadow" data-bs-toggle="modal" data-bs-target="#eligibilityModal">
                            Check Your Eligibility
                        </button>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="<?=base_url()?>/assets/image/desktop-image/IFRS+best.jpg" alt="CPA Insights" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>
    <!-- Get Insights From Our US CPA Students and Faculty finish -->

    <!-- CPA Prometric Centers in India start -->
    <section class="prometric_city">
        <div class="container">
            <h2 class="prometriccity_heading">CPA Prometric Centers in India</h2>
            <p class="prometriccity_paragraph text-center fs-5">The international administration process for the India region is now permanently available.</p>
            <div class="row">
                <div class="cpa_prometric_img text-center">
                    <img src="<?=base_url()?>/assets/image/logo/allcity image.png" alt="img" class="img-fluid">
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
                <div class="col-md-4">
                    <div class="other_course_Cma">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?=base_url()?>/assets/image/courses/US-CMA.jpg" alt="img" class="w-100 m-auto">
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
                                <img src="<?=base_url()?>/assets/image/courses/US-CMA.jpg" alt="img" class="w-100 m-auto">
                                <h3>US STEM</h3>
                                <span class="badge py-2 badge-pill bg-success badge-success">#Popular</span>
                                <p>A STEM-powered accounting degree from the US that blends accounting with data analytics and information systems.</p>
                                <a href=""><button>Know More</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="other_course_Cma">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?=base_url()?>/assets/image/courses/US-CMA.jpg" alt="img" class="w-100 m-auto">
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

    <!-- start learning today -->
    <section class="learning_today_cma my-5">
        <div class="container">
            <div class="row start_cma_today text-center">
                <h2>Start learning today</h2>
                <p>The US CPA sets you apart in a competitive job market—and with Simandhar’s expert-led coaching and proven track record, you can fast-track your success!</p>
                <div class="cma_learning_btn my-4">
                    <a href="#" class="button">Enroll Now</a>
                </div>

            </div>
            <div class="row learning_info_form align-item-center py-5">
                <div class="col-md-6">
                    <div class="form_heading_learning p-4 shadow-lg rounded-3 bg-light">
                        <h2 class="mb-2 text-primary fw-bold">Don't miss any information from us!</h2>
                        <p class="text-muted">
                            Sign up to our regular newsletter for news, insights, new product releases & more.
                        </p>
                        <h4 class="mt-3 mb-3 text-dark"> Get Career Guidance</h4>

                        <form action="">
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control form-control-lg rounded-pill shadow-sm"
                                    placeholder="Enter Your Name" required>
                            </div>

                            <div class="mb-3">
                                <input type="email" name="email" class="form-control form-control-lg rounded-pill shadow-sm"
                                    placeholder="Enter Your Email Address" required>
                            </div>

                            <div class="mb-3">
                                <input type="tel" name="mobile_number" class="form-control form-control-lg rounded-pill shadow-sm"
                                    placeholder="Enter Your Mobile Number" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <select name="state" class="form-select form-select-lg rounded-pill shadow-sm" required>
                                            <option value="">Select State</option>
                                            <option value="gujarat">Gujarat</option>
                                            <option value="maharashtra">Maharashtra</option>
                                            <option value="delhi">Delhi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <select name="city" class="form-select form-select-lg rounded-pill shadow-sm" required>
                                            <option value="">Select City</option>
                                            <option value="ahmedabad">Ahmedabad</option>
                                            <option value="mumbai">Mumbai</option>
                                            <option value="delhi">Delhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-lg text-white rounded-pill shadow"
                                    style="background: linear-gradient(45deg, #f28f18, #ff6a00); border:none;">
                                    Get in Touch
                                </button>
                            </div>

                            <!-- Consent Note -->
                            <p class="small mt-3 text-muted">
                                By submitting, I authorize <strong>Simandhar Education</strong> & its representatives to contact me
                                with updates and notifications via Email/SMS/WhatsApp/Call.
                            </p>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="frquent_today_cma">
                        <h2 class="mb-4 frequent_today">Frequently Asked Questions(FAQ's)</h2>
                        <div class="faq-accordion" id="faqAccordion">

                            <div class="faq-item">
                                <h2 class="faq-header" id="headingOne">
                                    <button class="faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        What is CPA?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="collapse" data-bs-parent="#faqAccordion">
                                    <div class="faq-body">
                                        CPA (Certified Public Accountant) is a designation given by AICPA to the individuals who have passed the Uniform CPA exam, met the required and relevant experience.
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item">
                                <h2 class="faq-header" id="headingTwo">
                                    <button class="faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        Who are eligible for CPA exam?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#faqAccordion">
                                    <div class="faq-body">
                                        Candidates with 120 credits and required accounting and business subject credits are eligible for CPA exam.
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item">
                                <h2 class="faq-header" id="headingThree">
                                    <button class="faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        Can Bcom or Non commerce students eligible for CPA exam?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="collapse" data-bs-parent="#faqAccordion">
                                    <div class="faq-body">
                                        All Bachelor degree students including Non commerce students are eligible for CPA exam with our Bridge course.
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item">
                                <h2 class="faq-header" id="headingFour">
                                    <button class="faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        What is the 120 credit and 150 credit rule for CPA?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="collapse" data-bs-parent="#faqAccordion">
                                    <div class="faq-body">
                                        To be eligible for CPA exam 120 credits are required and for CPA license the candidate needs 150 credits.
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item">
                                <h2 class="faq-header" id="headingFive">
                                    <button class="faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        Timeline to complete CPA exam?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="collapse" data-bs-parent="#faqAccordion">
                                    <div class="faq-body">
                                        Generally the CPA exam can be completed within 12-16 months with proper coaching and study plan.
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item">
                                <h2 class="faq-header" id="headingSix">
                                    <button class="faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                        When is TCP batch starting?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="collapse" data-bs-parent="#faqAccordion">
                                    <div class="faq-body">
                                        TCP batch is starting from <strong>21st July 2025</strong>.
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- finish learning today -->








    <!-- Check Eligibility Modal start -->
    <div class="modal fade" id="eligibilityModal" tabindex="-1" aria-labelledby="eligibilityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="eligibilityModalLabel">Check Your Eligibility</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control rounded-pill" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control rounded-pill" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mobile Number</label>
                            <input type="tel" class="form-control rounded-pill" placeholder="Enter your mobile">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">State</label>
                            <input type="text" class="form-control rounded-pill" placeholder="Enter your state">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control rounded-pill" placeholder="Enter your city">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary rounded-pill py-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Check Eligibility Modal finish -->

    <!-- Footer Start -->
    <footer id="footer" class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer_left">
                        <div class="footer_logo">
                            <img src="./assets/image/logo/logo.png" alt="AKPIS Logo" class="footer_img">
                            <h2>AKPIS Institute is the one & only official Partner of Becker in India</h2>
                            <h4>AKPIS Institute offers professional courses like CPA, CMA, EA, and CIA.</h4>
                            <p>
                                With <strong>50,000+ students</strong>, <strong>6 CPA world toppers</strong>,
                                <strong>250+ corporate tie-ups</strong>, and <strong>10,000+ placements</strong>,
                                we are shaping global professionals.
                            </p>
                            <div class="footer_bottom">
                                <a href="#">Copyright © Simandhar 2025</a> |
                                <a href="#">Terms of Service</a> |
                                <a href="#">Privacy Policy</a> |
                                <a href="#">Cookie Policy</a>
                            </div>
                        </div>
                    </div>
                    

                </div>
                <div class="col-md-8">
                    <div class="footer_right">
                         <div class="row bg-white  rounded-4">

                            <!-- Our Courses -->
                            <div class="col-md-4 mb-4">
                                <h5 class="fw-bold">Our Courses</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-dark text-decoration-none">US CPA</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">US CMA</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">EA</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">ACCA</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Study in USA</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">CIA</a></li>
                                  
                                </ul>
                            </div>

                            <!-- Skillfluenz -->
                            <div class="col-md-4 mb-4">
                                <h5 class="fw-bold">Skillfluenz</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-dark text-decoration-none">Practical US Taxation</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Pathway to Big 4</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">AI for Finance</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">IFRS</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">ESG</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Stock Market</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Finance for Non-Finance</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Soft Skills</a></li>
                                </ul>
                            </div>

                            <!-- Company -->
                            <div class="col-md-4 mb-4">
                                <h5 class="fw-bold">Company</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-dark text-decoration-none">About Us</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Join Our Team</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Webinars</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Student Corner</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Alumni</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Contact Us</a></li>
                                </ul>
                            </div>

                            <!-- Locations -->
                            <div class="col-md-4 mb-4">
                                <h5 class="fw-bold">Locations</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-dark text-decoration-none">Hyderabad</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Bangalore</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Delhi</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Ahmedabad</a></li>
                                </ul>
                            </div>

                            <!-- Corporate -->
                            <div class="col-md-4 mb-4">
                                <h5 class="fw-bold">Corporate</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-dark text-decoration-none">Corporate Journey</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Corporate Events</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none">Corporate Tie Ups</a></li>
                                </ul>
                            </div>

                            <!-- Follow Us -->
                            <div class="col-md-4 mb-4">
                                <h5 class="fw-bold">Follow Us</h5>
                                <a href="#" class="me-2 text-dark"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="me-2 text-dark"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="me-2 text-dark"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="text-dark"><i class="fab fa-x-twitter"></i></a>
                            </div>

                        </div>
                    </div>
                       
                    </div>
            </div>

    </footer>
    <!-- Footer Finish -->

