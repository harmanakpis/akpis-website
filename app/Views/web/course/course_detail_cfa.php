
<!-- Desktop hero page start -->
<section class="hero_desktop">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="cpa_topper">
                    <button class="cpa-btn">
                        <span class="big-text">Become a Certified Investment Expert:</span>
                        <span class="small-text">Crack the CFA Exams with India’s Top Coaching Institute!</span>
                    </button>
                </div>
                <div class="cpa_heading">
                    <h1> <?= !empty($course->banner_title) ? htmlspecialchars($course->banner_title) : '' ?></h1>
                    <p class="cpt_title-heading">3 Levels | 12–18 Months</p>
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
                            <h6 class="text-nowrap">Goggle rating<span>4.8+</span></h6>
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

<!-- Content Partner start -->

<!-- Content Partner start -->
<section class="achive-your-dreams-cma-usa">
    <div class="container">
        <div class="row  align-items-center">
            <!-- Left Content -->
            <div class="col-md-6">
                <div class="para_achieve_dreamUsa pb-2">
                    <h2>CFA Level I <span>Coaching by Akpis Institute</span></h2>
                    <p>
                        Join India’s most trusted CFA training program — build global financial expertise,
                        analytical skills, and ethical decision-making power with Akpis Institute.
                    </p>

                    <ul class="para_achieve_CFA list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-start">
                            <i class="fa-solid fa-check-double me-2 mt-1"></i>
                            <span>91% student success rate with personalized mentoring and one-on-one guidance.</span>
                        </li>

                        <li class="list-group-item d-flex align-items-start">
                            <i class="fa-solid fa-check-double me-2 mt-1"></i>
                            <span>Comprehensive CFA Level I coaching with 100% placement assistance through Akpis Career Cell.</span>
                        </li>

                        <li class="list-group-item d-flex align-items-start">
                            <i class="fa-solid fa-check-double me-2 mt-1"></i>
                            <span>200+ hours of expert-led HD video lectures with concise summary notes.</span>
                        </li>

                        <li class="list-group-item d-flex align-items-start">
                            <i class="fa-solid fa-check-double me-2 mt-1"></i>
                            <span>Question bank with 2,500+ practice problems, mock exams, and formula handbooks.</span>
                        </li>

                        <li class="list-group-item d-flex align-items-start">
                            <i class="fa-solid fa-check-double me-2 mt-1"></i>
                            <span>Smart study planner with adaptive progress tracking and live performance analytics.</span>
                        </li>

                        <li class="list-group-item d-flex align-items-start">
                            <i class="fa-solid fa-check-double me-2 mt-1"></i>
                            <span>24/7 doubt-solving via discussion forums and expert mentorship sessions.</span>
                        </li>
                    </ul>

                    <div class="para_CFA_achieve d-flex ">
                        <a href="https://wa.me/918527524176" class="btn btn-primary btn-md-lg border-0 " target="_blank">Enroll Now</a>
                        <!-- <a href="#" class="btn btn-primary btn-md-lg ms-4">Download Brochure​</a> -->

                    </div>

                </div>



            </div>

            <!-- Right Form -->
            <div class="col-md-6">
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
<!-- Ranked #1 International Training Institute start -->
<section class="international_trainig_institue_CFA">
    <div class="container">
        <div class="row">
            <div class="ranked_CFA_main">
                <?php  $features = [];
                    if(!empty($course->features)){
                    $features = json_decode($course->features);
                    }
                    if (!empty($features)) {
                    foreach ($features as $feature) {
                ?>            
                <div class="ranked_itemCFA">
                    <h2>  <?= !empty($feature->title) ? htmlspecialchars($feature->title) : '' ?></h2>
                    <p> <?= !empty($feature->description) ? htmlspecialchars($feature->description) : '' ?></p>
                </div>
                <?php  }  } ?>
            </div>
        </div>
    </div>
</section>
<!-- Ranked #1 International Training Institute finish -->
<!-- Pave Your Road to CFA Excellence, Lead in Finance. start -->
<section class="program_highlightCFA">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="program_hightlightCFA-heading">
                    <h2>CFA Course Highlights – Build Global Finance Expertise with Akpis Institute</h2>
                    <p>Master finance, investments, and portfolio management with our comprehensive CFA training program.</p>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <?php  $glimpe_features = [];
            if(!empty($course->glimpe_features)){
                $glimpe_features = json_decode($course->glimpe_features);
            }
            if (!empty($glimpe_features)) {
                foreach ($glimpe_features as $feature) {
            ?>
            <div class=" col-12 col-md-4 col-lg-4 col-xl-2">
                <div class="carrer_finance card-color">
                    <?php echo $feature->icon;?>
                    <h2><?php echo $feature->title;?></h2>
                    <p><?php echo $feature->description;?></p>
                </div>
            </div>
             <?php  } } ?>    
        </div>
    </div>
</section>
<!-- Pave Your Road to CFA Excellence, Lead in Finance. finish -->

<!-- About Instructor start -->
<section class="about_instructor">
    <div class="container">
        <div class="row">
            <div class="cma_heading">
                <h1 class="pt-4">About <span> Instructor</span></h1>
            </div>
            <div class="col-12">
                <div class="about_instructor_title text-center">
                    <h2>
                        Mr. Shammi Saluja is a distinguished instructor in Finance and Management Accounting with over 22 years of teaching experience.
                        Renowned for his expertise in CFA exam preparation, he has been honored with multiple awards, including the prestigious “Teaching Excellence Award”.
                        Students affectionately call him the “God of Costing” for his exceptional clarity and practical insights in finance education.
                    </h2>
                    <img src="./assets/image/courses/linkin.png" alt="Instructor Mr. Shammi Saluja" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Instructor finish -->

<!-- CFA Program Overview start -->
<section class="cfa_program_overview">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="heading_program">
                    <h2>CFA Program Overview</h2>
                    <p>Be the financial mastermind with edZeb and obtain one of the highest distinctions in the world of Finance</p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="global-account">
                    <div class="row">
                        <div class="col-md-6" id="acca-global" style="border-right: 1px solid #606060;">
                            <ul>
                                <li>
                                    <h3>01</h3>
                                </li>
                                <li class="overview-li" style="padding-left:7Px;">CFA = <br><span class="ga-count">Gold Standard for Finance <br>Professionals </span></li>
                            </ul>
                            <ul>
                                <li>
                                    <h3>02</h3>
                                </li>
                                <li class="overview-li">Jobs Available <br><span class="ga-count">63,000+</span></li>
                            </ul>
                            <ul>
                                <li>
                                    <h3>03</h3>
                                </li>
                                <li class="overview-li">CFA <br><span class="ga-count">Recognized by over 162 countries</span></li>
                            </ul>
                            <ul>
                                <li>
                                    <h3>04</h3>
                                </li>
                                <li class="overview-li">Popularity <br><span class="ga-count">#1 finance qualification</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6" id="acca-global">
                            <ul>
                                <li>
                                    <h3>05</h3>
                                </li>
                                <li class="overview-li">Eligibility <br><span class="ga-count">2nd Year UnderGraduate</span></li>
                            </ul>
                            <ul>
                                <li>
                                    <h3>06</h3>
                                </li>
                                <li class="overview-li">Salary Range <br><span class="ga-count">Upto ₹20 Lac</span></li>
                            </ul>
                            <ul>
                                <li>
                                    <h3>07</h3>
                                </li>
                                <li class="overview-li">Designation <br><span class="ga-count">World's Most Respected Investment Management Designation</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- CFA Program Overview finish -->

<!-- CFA Curriculum start -->
<section class="cfa_curriculumbg">
    <div class="container">
        <div class="cma_heading">
            <h1 class="pt-4">Explore the CFA <span>Study Plan</span></h1>
        </div>
        <div class="row">
            <!-- Curriculum Details -->
            <div class=" col-12 col-md-12 col-lg-7 col-xl-7">
                <div class="cfa_curriculam">
                    <div class="row">
                        <!-- Left Column (6 topics) -->
                        <div class="col-md-6">
                            <div class="accordion" id="cfaAccordionLeft">

                                <!-- Quantitative Methods -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#quantitativeMethods" aria-expanded="false" aria-controls="quantitativeMethods">
                                            Quantitative Techniques
                                        </button>
                                    </h2>
                                    <div id="quantitativeMethods" class="accordion-collapse collapse" data-bs-parent="#cfaAccordionLeft">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Fundamentals of time value of money calculations.</li>
                                                <li>Core probability principles and statistical analysis.</li>
                                                <li>Understanding averages, dispersion, and variability measures.</li>
                                                <li>Introduction to regression and trend analysis for finance.</li>
                                                <li>Basics of data analytics and applied machine learning concepts.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <!-- Economics -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#economics" aria-expanded="false" aria-controls="economics">
                                            Global Economics
                                        </button>
                                    </h2>
                                    <div id="economics" class="accordion-collapse collapse" data-bs-parent="#cfaAccordionLeft">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Fundamentals of market demand, supply, and equilibrium analysis.</li>
                                                <li>Key macroeconomic indicators including GDP trends, inflation, and growth patterns.</li>
                                                <li>Understanding credit cycles, business cycles, and their impact on investment decisions.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Financial Reporting & Analysis -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#financialReporting" aria-expanded="false" aria-controls="financialReporting">
                                            Financial Reporting & Analysis
                                        </button>
                                    </h2>
                                    <div id="financialReporting" class="accordion-collapse collapse" data-bs-parent="#cfaAccordionLeft">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Understanding income statements, balance sheets, and cash flow statements.</li>
                                                <li>GAAP vs IFRS standards and differences.</li>
                                                <li>Analysis of intercompany investments and multinational operations.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Corporate Finance -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#corporateFinance" aria-expanded="false" aria-controls="corporateFinance">
                                            Corporate Finance & Governance
                                        </button>
                                    </h2>
                                    <div id="corporateFinance" class="accordion-collapse collapse" data-bs-parent="#cfaAccordionLeft">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Key concepts in capital budgeting, cost of capital, and effective corporate governance.</li>
                                                <li>Valuation strategies for mergers & acquisitions and corporate restructuring.</li>
                                                <li>Incorporating ESG factors in financial and strategic decision-making.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <!-- Equity Investments -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#equity" aria-expanded="false" aria-controls="equity">
                                            Equity Investments
                                        </button>
                                    </h2>
                                    <div id="equity" class="accordion-collapse collapse" data-bs-parent="#cfaAccordionLeft">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Industry and company analysis techniques.</li>
                                                <li>Equity valuation: DCF, comparables, and residual income models.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <!-- Fixed Income -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#fixedIncome" aria-expanded="false" aria-controls="fixedIncome">
                                            Fixed Income Securities
                                        </button>
                                    </h2>
                                    <div id="fixedIncome" class="accordion-collapse collapse" data-bs-parent="#cfaAccordionLeft">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Comprehensive techniques for valuing bonds, debentures, and other fixed income instruments across different market conditions.</li>
                                                <li>Assessment of key risks including interest rate risk, credit/default risk, reinvestment risk, and liquidity risk for investment decisions.</li>
                                                <li>Understanding yield curve construction, term structure of interest rates, and their applications in portfolio management.</li>
                                                <li>Application of arbitrage-free pricing models for bonds and fixed income derivatives to optimize returns.</li>
                                                <li>Analyzing duration, convexity, and immunization strategies to manage risk and enhance portfolio performance.</li>
                                                <li>Integration of fixed income analysis in overall investment strategy and CFA exam preparation.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- Right Column (5 topics) -->
                        <div class="col-md-6">
                            <div class="accordion" id="cfaAccordionRight">

                                <!-- Derivatives -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#derivatives" aria-expanded="false" aria-controls="derivatives">
                                            Derivatives & Risk Management
                                        </button>
                                    </h2>
                                    <div id="derivatives" class="accordion-collapse collapse" data-bs-parent="#cfaAccordionRight">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Understanding derivative instruments including forwards, futures, options, and swaps, along with their market conventions.</li>
                                                <li>Pricing models for derivatives, including Black-Scholes, binomial, and Monte Carlo simulation methods.</li>
                                                <li>Option Greeks (Delta, Gamma, Theta, Vega, Rho) and their application in hedging strategies.</li>
                                                <li>Analyzing volatility, implied vs historical volatility, and its impact on derivative pricing.</li>
                                                <li>Managing financial risk using derivatives for hedging, speculation, and arbitrage opportunities.</li>
                                                <li>Integration of derivatives knowledge in portfolio management and investment strategies for CFA preparation.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <!-- Alternative Investments -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#alternativeInvestment" aria-expanded="false"
                                            aria-controls="alternativeInvestment">
                                            Alternative Investments & Portfolio Diversification
                                        </button>
                                    </h2>
                                    <div id="alternativeInvestment" class="accordion-collapse collapse" data-bs-parent="#cfaAccordionRight">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Overview of alternative asset classes including real estate, private equity, commodities, infrastructure, and hedge funds.</li>
                                                <li>Techniques for investment analysis, valuation, and due diligence of alternative assets.</li>
                                                <li>Understanding risk-return characteristics and correlations with traditional investments.</li>
                                                <li>Application of alternative investments in portfolio diversification and hedging strategies.</li>
                                                <li>Evaluating performance metrics, liquidity considerations, and fee structures.</li>
                                                <li>Integrating alternative investments knowledge into CFA exam preparation and real-world finance decisions.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <!-- Portfolio Management -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#portfolioManagement" aria-expanded="false"
                                            aria-controls="portfolioManagement">
                                            Portfolio Management & Investment Strategies
                                        </button>
                                    </h2>
                                    <div id="portfolioManagement" class="accordion-collapse collapse" data-bs-parent="#cfaAccordionRight">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Principles of portfolio construction including asset allocation, diversification, and optimization techniques.</li>
                                                <li>Analyzing portfolio risk and return using modern portfolio theory and performance metrics.</li>
                                                <li>Incorporating behavioral finance insights to understand investor biases and decision-making.</li>
                                                <li>Strategies for managing ETF, mutual fund, and fixed income portfolios.</li>
                                                <li>Techniques for active vs passive management and rebalancing portfolios effectively.</li>
                                                <li>Applying portfolio management concepts in CFA exam scenarios and real-world investment planning.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <!-- Ethics & Professional Standards -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#ethics" aria-expanded="false" aria-controls="ethics">
                                            Ethics & Professional Standards
                                        </button>
                                    </h2>
                                    <div id="ethics" class="accordion-collapse collapse" data-bs-parent="#cfaAccordionRight">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Comprehensive understanding of the CFA Institute Code of Ethics and Standards of Professional Conduct.</li>
                                                <li>Application of ethical principles in real-world investment decision-making.</li>
                                                <li>Introduction to Global Investment Performance Standards (GIPS) for transparent performance reporting.</li>
                                                <li>Ethical responsibilities towards clients, employers, and the investment profession.</li>
                                                <li>Integrating ethics into portfolio management, research analysis, and advisory roles.</li>
                                                <li>Preparing for CFA exam scenarios that emphasize professional conduct and ethical decision-making.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <!-- Practical Learning Module -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEleven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#practicalLearning" aria-expanded="false"
                                            aria-controls="practicalLearning">
                                            ⚡ Practical Learning & Hands-on Training
                                        </button>
                                    </h2>
                                    <div id="practicalLearning" class="accordion-collapse collapse" data-bs-parent="#cfaAccordionRight">
                                        <div class="accordion-body">
                                            <p>Comprehensive hands-on CFA training with practical applications and advanced Excel modeling for finance:</p>
                                            <ul>
                                                <li>Excel training from basics to advanced financial applications including formulas, pivot tables, and dashboards.</li>
                                                <li>Case studies, scenario-based learning, and real-world financial problem-solving exercises.</li>
                                                <li>Financial modeling techniques including valuation, forecasting, and risk analysis.</li>
                                                <li>Portfolio construction and scenario simulations using Excel and investment software tools.</li>
                                                <li>Application of CFA concepts in real-world investment decisions and career-focused projects.</li>
                                                <li>Integration of practical knowledge into CFA exam preparation and professional skill development.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-12 col-md-12 col-lg-5 col-xl-5">
                <div class="card_cfa_curriculam">
                    <div class="row g-4 justify-content-center">

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="highlight_card">
                                <i class="fas fa-clock"></i>
                                <h4>1000+ Learning Hours</h4>
                                <p>Comprehensive coverage of CFA Level 1, 2 & 3 concepts with practical applications.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="highlight_card">
                                <i class="fas fa-check-circle"></i>
                                <h4>Pass Assurance</h4>
                                <p>Structured curriculum and expert guidance to maximize your CFA success rate.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="highlight_card">
                                <i class="fas fa-user-tie"></i>
                                <h4>Personalized Mentorship</h4>
                                <p>1-on-1 mentoring sessions with CFA charterholders and industry experts.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="highlight_card">
                                <i class="fas fa-laptop-code"></i>
                                <h4>Interactive Online LMS</h4>
                                <p>Access to live classes, recorded sessions, quizzes, and study resources anytime.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="highlight_card">
                                <i class="fas fa-briefcase"></i>
                                <h4>100% Career Assistance</h4>
                                <p>Job support and career guidance for roles in finance, investment, and banking sectors.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="highlight_card">
                                <i class="fas fa-comments"></i>
                                <h4>Unlimited Doubt Sessions</h4>
                                <p>Clarify all concepts and questions through dedicated doubt-solving sessions.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CFA Curriculum finish -->

<!-- Student Reviews for CFA Course start -->

<!-- <section class="testominal_ouralumini">
    <div class="container">
        <h2 class="testomonial_heading">
            Testimonials From Our Alumni
        </h2>
        <p class="text-center text-warning pb-5">See how our CFA alumni are excelling in global finance and management roles.</p>
        <div class="row">
            <div class="col-12">
                <div class="testomoinal_slider">
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
                                <img src="./assets/image/students/4.jpg" alt="Jane Smith" class="img-fluid rounded-circle" width="80">
                                <h5 class="mt-3 mb-0">Jane Smith</h5>
                                <p class="text-muted">CPA, Big 4</p>
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
                                <img src="./assets/image/students/5.jpeg" alt="Amandeep Kaur" class="img-fluid rounded-circle" width="80">
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
                                <img src="./assets/image/students/4.jpg" alt="Jane Smith" class="img-fluid rounded-circle" width="80">
                                <h5 class="mt-3 mb-0">Jane Smith</h5>
                                <p class="text-muted">CPA, Big 4</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> -->
<!-- Student Reviews for CFA Course finish -->

<!-- Know More About CFA Certification Course start -->
<section class="certified_public py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="why_chooseakpis_heading">
                <h1 class="pb-4"> Know More About <span>CFA Certification</span> Course start</h1>
            </div>
            <div class="col-md-4 image-wrapper">
                <div class="youtube-icon">
                    <a onclick="show_video('https://www.youtube.com/embed/R_R8miTEAes')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                </div>
                <img class="course-image" src="./assets/image/desktop-image/R_R8miTEAes.jpg" alt="Course Overview">
            </div>
            <div class="col-md-4 image-wrapper">
                <div class="youtube-icon">
                    <a onclick="show_video('https://www.youtube.com/embed/NN-bCTON3Ro')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                </div>
                <img class="course-image" src="./assets/image/desktop-image/NN-bCTON3Ro.jpg" alt="Course Overview">
            </div>
            <div class="col-md-4 image-wrapper">
                <div class="youtube-icon">
                        <a onclick="show_video('https://www.youtube.com/embed/N7g1HijOwKE')" class="video-btn">  <img src="<?=base_url()?>/assets/image/logo/youtube.png" alt="img" class="img-fluid"> </a>
                </div>
                <img class="course-image" src="./assets/image/desktop-image/N7g1HijOwKE.jpg" alt="Course Overview">
            </div>



        </div>
    </div>

</section>
<!-- Know More About CFA Certification Course Finish -->

<!-- finish learning today -->
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

