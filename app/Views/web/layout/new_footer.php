 <!-- start learning today -->
<section class="learning_today_cma my-5">
   <div class="container">
      <div class="row start_cma_today text-center">
         <h2>Start learning today</h2>
         <p>Stand out in the competitive job market with the <?php echo ucwords($course->title);?>—AKPIS’s expert guidance and proven strategies make your success faster and smoother!</p>
         <div class="cma_learning_btn my-4">
            <button type="button" class="button mb-2" data-bs-toggle="modal" data-bs-target="#enquiryModal">
            Enroll Now
            </button>
            <!-- <a href="#" class="button">Enroll Now</a> -->
         </div>
      </div>
      <div class="row learning_info_form align-item-center py-5">
         <div class="col-md-6">
            <div class="form_heading_learning p-4 shadow-lg rounded-3 bg-light">
               <h2 class="mb-2 text-primary fw-bold">Don't miss any information from us!</h2>
               <p class="text-muted">
                  Need help choosing the right course? Let’s connect.
               </p>
               <h4 class="mt-3 mb-3 text-dark"> Get Career Guidance</h4>
               <form method="post" action="<?= base_url('akpiscourse/form_submit_data') ?>" id="submit_enquiryfooter<?= $course_id ?>">
                  <input type="hidden" value="<?= $course_id ?>" name="course_id" class="course_id">
                  <!-- Name & Email -->
                  <div class="row mt-2">
                     <div class="col-md-6">
                        <input type="text" name="name" class="form-control  shadow-sm" placeholder="Full Name" required>
                     </div>
                     <div class="col-md-6">
                        <input type="email" name="email" class="form-control  shadow-sm" placeholder="Email Address" required>
                     </div>
                  </div>
                  <!-- Contact & Qualification -->
                  <div class="row mt-2">
                     <div class="col-md-6">
                        <input id="phone" type="tel"  name="contact"   class="form-control shadow-sm"   placeholder="Mobile Number"     pattern="[6-9]{1}[0-9]{9}"   title="Enter a valid 10-digit mobile number starting with 6, 7, 8, or 9"  maxlength="10"  oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                     </div>
                     <div class="col-md-6">
                        <input type="text" name="qualification" class="form-control   shadow-sm" placeholder="Qualification" >
                     </div>
                  </div>
                  <!-- Experience & Current Course -->
                  <div class="row mt-2">
                     <div class="col-md-6">
                        <input type="text" name="work_experience" class="form-control  shadow-sm" placeholder="Work Experience (e.g. 2 Years)">
                     </div>
                     <div class="col-md-6">
                        <input type="text" name="pursuing_course" class="form-control  shadow-sm" placeholder="Pursuing Course (if any)">
                     </div>
                  </div>
                  <!-- Salary & Placement -->
                  <div class="row mt-2">
                     <div class="col-md-6">
                        <input type="text" name="salary" class="form-control  shadow-sm" placeholder="Current Salary">
                     </div>
                     <div class="col-md-6">
                        <select name="placement_assistance" class="form-select  shadow-sm">
                           <option value="">Placement Assistance?</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                     </div>
                  </div>
                  <!-- State & City -->
                  <div class="row mt-2" id="stateCityGroup">
                     <div class="col-md-6">
                        <select id="state" onchange="getCities_ea_footer(this.value)" name="state" class="form-select  shadow-sm" >
                           <option value="">Select State</option>
                           <?php foreach($states as $state): ?>
                           <option value="<?= $state->id ?>"><?= $state->name ?></option>
                           <?php endforeach; ?>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <select id="cityname_ea_footer" name="cityname" class="form-select  shadow-sm" >
                           <option value="">Select City</option>
                        </select>
                     </div>
                  </div>
                  <!-- Preferred Time -->
                  <div class="mt-3">
                     <input type="datetime-local" class="form-control h-50px"  id="preferred_time" name="preferred_time" >
                  </div>
                  <small class="text-muted">Select your convenient date and time to talk</small>
                  <!-- Comment -->
                  <div class="mt-2">
                     <textarea class="form-control form-control-lg rounded-3 shadow-sm" id="comment" rows="2" name="comment" placeholder="Your Message..." ></textarea>
                  </div>
                  <!-- Submit -->
                  <div class="d-grid mt-2">
                     <button type="submit" class="btn btn-lg text-white rounded-pill shadow get_in_touch"
                        style="background: linear-gradient(45deg, #f28f18, #ff6a00); border:none;">
                     Enquire Now
                     </button>
                  </div>
                  <!-- Consent -->
                  <p class="small mt-2 text-muted mb-0 text-center">
                     By submitting, I authorize <strong>AKPIS</strong> & its representatives to contact me
                     via Email/SMS/WhatsApp/Call.
                  </p>
                  <span class="loader" style="display:none;"></span>                
                  <div id="footerFormMessagemiddle<?= $course_id ?>" class="mt-2 text-center"></div>
               </form>
            </div>
         </div>
         <div class="col-md-6">
            <div class="frquent_today_cma">
                <h2 class="mb-4 frequent_today">Frequently Asked Questions(FAQ's)</h2>
                 <p><?= $course->faq?></p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- finish learning today -->
 
 
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
                                <a style="color:#fff!important">Copyright © Akpis 2025</a> |
                                <a href="terms-and-conditions">Terms & Conditions</a> |
                                <a href="privacy-policy">Privacy Policy</a> |
                                <a href="privacy-policy">Cookie Policy</a>
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
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">US CPA</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">US CMA</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">EA</a></li>
                                    <li><a href="javascript:void(0);" class="text-dark text-decoration-none">ACCA</a></li>
                                    <li><a href="javascript:void(0);" class="text-dark text-decoration-none">Study in USA</a></li>
                                    <li><a href="javascript:void(0);" class="text-dark text-decoration-none">CIA</a></li>

                                </ul>
                            </div>

                            <!-- Skillfluenz -->
                            <div class="col-md-4 mb-4">
                                <h5 class="fw-bold">Skillfluenz</h5>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">Practical US Taxation</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">Pathway to Big 4</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">AI for Finance</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">IFRS</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">ESG</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">Stock Market</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">Finance for Non-Finance</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">Soft Skills</a></li>
                                </ul>
                            </div>

                            <!-- Company -->
                            <div class="col-md-4 mb-4">
                                <h5 class="fw-bold">Company</h5>
                                <ul class="list-unstyled">
                                    <li><a href="<?=base_url()?>" class="text-dark text-decoration-none">Home</a></li>
                                    <li><a href="about-us" class="text-dark text-decoration-none">About Us</a></li>
                                    <li><a href="course" class="text-dark text-decoration-none">Courses</a></li>
                                    <li><a href="alumini" class="text-dark text-decoration-none">Alumini</a></li>
                                    <li><a href="video" class="text-dark text-decoration-none">Video Gallery</a></li>
                                    <li><a href="privacy-policy" class="text-dark text-decoration-none">Privacy Policy</a></li>
                                    <li><a href="contact" class="text-dark text-decoration-none">Contact Us</a></li>
                                </ul>
                            </div>

                            <!-- Locations -->
                            <div class="col-md-4 mb-4">
                                <h5 class="fw-bold">Locations</h5>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">Hyderabad</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">Bangalore</a></li>
                                    <li><a href="#javascript:void(0)" class="text-dark text-decoration-none">Delhi</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">Ahmedabad</a></li>
                                </ul>
                            </div>

                            <!-- Corporate -->
                            <div class="col-md-4 mb-4">
                                <h5 class="fw-bold">Corporate</h5>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">Corporate Journey</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">Corporate Events</a></li>
                                    <li><a href="javascript:void(0)" class="text-dark text-decoration-none">Corporate Tie Ups</a></li>
                                </ul>
                            </div>

                            <!-- Follow Us -->
                            <div class="col-md-4 mb-4">
                                <h5 class="fw-bold">Follow Us</h5>
                                <!-- <a href="#" class="me-2 text-dark"><i class="fab fa-facebook-f"></i></a> -->
                                <a href="<?=isSetting('facebook')?>" target="_blank" class="me-2 text-dark"><i class="fab fa-facebook"></i></a>
                                <!-- <a href="#" class="me-2 text-dark"><i class="fab fa-instagram"></i></a> -->
                                <a href="<?=isSetting('twitter')?>" target="_blank" class="me-2 text-dark"><i class="fab fa-instagram"></i></a>
                                <a href="<?=isSetting('linked_in')?>" target="_blank" class="me-2 text-dark"><i class="fab fa-linkedin"></i></a>
                                <a href="<?=isSetting('youtube')?>" target="_blank" class="me-2 text-dark"><i class="fab fa-youtube"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

    </footer>
<!-- Enquiry Modal -->
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
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" >
               </div>
               <!-- Contact -->
               <div class="mb-3">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input id="phonee" type="tel"  name="contact"   class="form-control shadow-sm"   placeholder="Mobile Number"     pattern="[6-9]{1}[0-9]{9}"   title="Enter a valid 10-digit mobile number starting with 6, 7, 8, or 9"  maxlength="10"  oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
               </div>
               <!-- Qualification -->
               <div class="mb-3">
                  <label for="qualification" class="form-label">Qualification</label>
                  <input type="text" class="form-control" id="qualification" name="qualification" placeholder="e.g., B.Com, CMA, CA" >
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
               <div class="row" id="stateCityGroup_modal">
                  <div class="col-md-6 mb-3">
                     <label for="state" class="form-label">State</label>
                     <select id="state_m" name="state" class="form-control" onchange="get_Cities(this.value)" >
                        <option value="">Select State</option>
                        <?php foreach ($states as $state): ?>
                        <option value="<?= $state->id ?>"><?= $state->name ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label for="cities" class="form-label">City</label>
                     <select id="cities" name="cityname" class="form-control" >
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
                  <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Enter your comment..." ></textarea>
               </div>
               <!-- Submit & Close -->
               <div class="modal-footer px-0">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary submit_btn">Enquire Now</button>
               </div>
               <span class="loader" style="display:none;"></span>             
               <div id="formMessage" class="mt-3"></div>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- Enquire Now Finish -->       


    <!-- Footer Finish -->
<a href="https://wa.me/918527524176" target="_blank" class="btn-whatsapp-pulse">
  <i class="fab fa-whatsapp"></i>
</a>
<a href="tel:+918527524176" class="btn-call-pulse">
  <i class="fa fa-phone-alt"></i>
</a>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="assets/newjs/main.js"></script>
  
    <script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) { 
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}



        $('.responsive').slick({
            dots: true,
            infinite: true,
            speed: 800,
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            cssEase: 'ease-in-out',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
        $('.responsive2').slick({
            dots: true,
            infinite: true,
            speed: 800, // transition speed (1 second)
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            cssEase: 'ease-in-out',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.alumni-slider').slick({
            dots: true,
            infinite: true,
            speed: 800, // transition speed (1 second)
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            cssEase: 'ease-in-out',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('.testomoinal_slider').slick({
            dots: true,
            infinite: true,
            speed: 800, // transition speed (1 second)
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            cssEase: 'ease-in-out',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $(document).ready(function() {
            function bindMobileMenu() {
                if ($(window).width() <= 768) {
                    // Mobile view ke liye
                    $("#toggle_mobile_program").off("click").on("click", function() {
                        $("#programMenu").fadeToggle(500);
                        $(this).find("i").toggleClass("rotate");
                    });

                    $("#cpa_mobile_program").off("click").on("click", function() {
                        $("#cpaprogramMenu").fadeToggle(500);
                        $(this).find("i").toggleClass("rotate");
                    });
                } else {
                    // Desktop view ke liye menus reset
                    $("#programMenu, #cpaprogramMenu").removeAttr("style"); // hide/remove inline styles
                    $("#toggle_mobile_program i, #cpa_mobile_program i").removeClass("rotate");
                    $("#toggle_mobile_program, #cpa_mobile_program").off("click"); // disable click
                }
            }

            // Run on load
            bindMobileMenu();

            // Run on window resize
            $(window).resize(function() {
                bindMobileMenu();
            });
        });

        $(document).ready(function() {

            // First Row: Left to Right
            $('.placement_carousel_1').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 800,
                smartSpeed: 800, 
                autoplayHoverPause: true,
                nav: false, 
                dots: false,
                responsive: {
                    0: {
                        items: 2.5
                    },
                    600: {
                        items: 6
                    },
                    1000: {
                        items: 8
                    }
                }
            });

            // Second Row: Right to Left
            $('.placement_carousel_2').owlCarousel({
                loop: true,
                margin: 10,
                rtl: true,
                autoplay: true,
                autoplayTimeout: 800,
                smartSpeed: 800, 
                autoplayHoverPause: true,
                 nav: false, 
                dots: false,
                responsive: {
                    0: {
                        items: 2.5
                    },
                    600: {
                        items: 6
                    },
                    1000: {
                        items: 8
                    }
                }
            });

            // Third Row: Left to Right
            $('.placement_carousel_3').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 800,
                smartSpeed: 800,
                autoplayHoverPause: true,
                 nav: false, 
                dots: false,
                responsive: {
                    0: {
                        items: 2.5
                    },
                    600: {
                        items: 6
                    },
                    1000: {
                        items: 8
                    }
                }
            });

        });
  

        /***Get cities by state ID MODAL */
        function get_Cities(stateId) { 
            const citySelect = document.getElementById('cities');
            citySelect.innerHTML = '<option>Loading...</option>';

            fetch('getcities/'+stateId)
                .then(response => response.json())
                .then(data => {
                    citySelect.innerHTML = '<option value="">Select City</option>';
                    data.forEach(city => {
                        citySelect.add(new Option(city.name, city.id));
                    });
                })
                .catch(err => console.error(err));
        }

     /***Get cities by state ID */
        function getCities(stateId) {  
            const citySelect = document.getElementById('cityname');
            citySelect.innerHTML = '<option>Loading...</option>';
            fetch('getcities/'+stateId)
                .then(response => response.json())
                .then(data => {
                    citySelect.innerHTML = '<option value="">Select City</option>';
                    data.forEach(city => {
                        citySelect.add(new Option(city.name, city.id));
                    });
                })
                .catch(err => console.error(err));
        }

             function getCities_ea(stateId) { 
            const citySelectea = document.getElementById('cityname_ea');
            citySelectea.innerHTML = '<option>Loading...</option>';
            fetch('getcities/'+stateId)
                .then(response => response.json())
                .then(data => {
                    citySelectea.innerHTML = '<option value="">Select City</option>';
                    data.forEach(city => {
                        citySelectea.add(new Option(city.name, city.id));
                    });
                })
                .catch(err => console.error(err));
        }

        function getCities_ea_footer(stateId) { 
            const citySelectea = document.getElementById('cityname_ea_footer');
            citySelectea.innerHTML = '<option>Loading...</option>';
            fetch('getcities/'+stateId)
                .then(response => response.json())
                .then(data => {
                    citySelectea.innerHTML = '<option value="">Select City</option>';
                    data.forEach(city => {
                        citySelectea.add(new Option(city.name, city.id));
                    });
                })
                .catch(err => console.error(err));
        }


        $('#submit_enquiry').on('submit',function(e){
            e.preventDefault();
           var formData = $(this).serialize();
           var url = $(this).attr('action');
        //    alert('okk');

             $('.loader').show(); // show loader
            $('.submit_btn').prop('disabled', true).text('Submitting...'); // disable button
            $.ajax({
                url: url,
                type: 'POST',
                data:formData,
                success: function (response) {
                    $('.loader').hide();
                    $('.submit_btn').prop('disabled', false).text('Enquire Now');
                     $('#formMessage').html(
                    '<div class="alert alert-success">Form submitted successfully!</div>'
                    );
                    $('#submit_enquiry')[0].reset();

                    // Auto close modal after 2 sec
                    setTimeout(function() {
                        $('#enquiryModal').modal('hide'); // replace with your modal's ID
                        $('#formMessage').html('');
                        }, 2000);
                    },
                    error: function(xhr, status, error) {
                        $('.loader').hide();
                        $('.submit_btn').prop('disabled', false).text('Enquire Now');
                        $('#formMessage').html(
                        '<div class="alert alert-danger">Something went wrong. Please try again.</div>'
                        );
                    }
            });
        });

        var courseId = $('.course_id').val();
        $('#submit_enquiryfooter'+courseId).on('submit',function(e){
            e.preventDefault();
           var formData = $(this).serialize();
           var url = $(this).attr('action');
            $('.loader').show(); // show loader
            $('.get_in_touch').prop('disabled', true).text('Submitting...'); // disable button
            // alert('okk');
            // alert('courseId'+courseId);
            // return false;
            $.ajax({
                url: url,
                type: 'POST',
                data:formData,
                success: function (response) {
                    console.log(response);
                    // return false;
                    if (response.status === 'success') {
                        $('.loader').hide();
                        $('.get_in_touch').prop('disabled', false).text('Enquire Now');
                        $('#footerFormMessagemiddle'+courseId).html(
                            '<div class="alert alert-success">✅ ' + response.message + '</div>'
                        );
                        $('#submit_enquiryfooter')[0].reset();
                        setTimeout(() => { $('#footerFormMessagemiddle'+courseId).fadeOut(); }, 3000);
                    } else if (response.status === 'error') {
                        let errorMsg = response.message;
                        if (response.errors) {
                            if (typeof response.errors === 'object') {
                                errorMsg += '<ul>';
                                $.each(response.errors, function(key, val) {
                                    errorMsg += '<li>' + val + '</li>';
                                });
                                errorMsg += '</ul>';
                            } else {
                                errorMsg += ' - ' + response.errors;
                            }
                        }
                        $('.loader').hide();
                        $('.get_in_touch').prop('disabled', false).text('Enquire Now');
                        $('#footerFormMessagemiddle'+courseId).html(
                            '<div class="alert alert-danger">❌ ' + errorMsg + '</div>'
                        );
                    }
                },
                    error: function(xhr, status, error) {
                        $('.loader').hide();
                        $('.get_in_touch').prop('disabled', false).text('Enquire Now');
                        $('#footerFormMessagemiddle'+courseId).html(
                            '<div class="alert alert-danger">❌ Something went wrong. Please try again.</div>'
                        );
                    }
            });
        });


           $('#submit_enquiryfooter1').on('submit',function(e){
            e.preventDefault();
            var formData = $(this).serialize();
            var url = $(this).attr('action');
            $('.loader').show(); // show loader
            $('.get_in_touch').prop('disabled', true).text('Submitting...'); // disable button
            $.ajax({
                url: url,
                type: 'POST',
                data:formData,
                success: function (response) {
                    if (response.status === 'success') {
                        $('.loader').hide();
                        $('.get_in_touch').prop('disabled', false).text('Enquire Now');
                        $('#footerFormMessage').html(
                            '<div class="alert alert-success">✅ ' + response.message + '</div>'
                        );
                        $('#submit_enquiryfooter1')[0].reset();
                        setTimeout(() => { $('#footerFormMessage').fadeOut(); }, 3000);
                    } else if (response.status === 'error') {
                        let errorMsg = response.message;
                        if (response.errors) {
                            if (typeof response.errors === 'object') {
                                errorMsg += '<ul>';
                                $.each(response.errors, function(key, val) {
                                    errorMsg += '<li>' + val + '</li>';
                                });
                                errorMsg += '</ul>';
                            } else {
                                errorMsg += ' - ' + response.errors;
                            }
                        }
                        $('.loader').hide();
                        $('.get_in_touch').prop('disabled', false).text('Enquire Now');
                        $('#footerFormMessage').html(
                            '<div class="alert alert-danger">❌ ' + errorMsg + '</div>'
                        );
                    }
                },
                    error: function(xhr, status, error) {
                        $('.loader').hide();
                        $('.get_in_touch').prop('disabled', false).text('Enquire Now');
                        $('#footerFormMessage').html(
                            '<div class="alert alert-danger">❌ Something went wrong. Please try again.</div>'
                        );
                    }
            });


        });


    /** Add Counterdown to Values  */    
    $(document).ready(function() {
    // Trigger animation when the section comes into view
    let started = false;
    $(window).scroll(function() {
        let oTop = $('.counter').first().offset().top - window.innerHeight;
        if (!started && $(window).scrollTop() > oTop) {
            $('.counter').each(function() {
                let $this = $(this),
                    target = +$this.data('target');
                $({ countNum: 0 }).animate(
                    { countNum: target },
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum) + '+');
                        },
                        complete: function() {
                            $this.text(this.countNum + '+');
                        }
                    }
                );
            });
            started = true;
        }
    });
});


const inputModalcenter = document.querySelector("#contact");
if (inputModalcenter) {
  const itiModalcenter = window.intlTelInput(inputModalcenter, {
    initialCountry: "in",
    separateDialCode: true,
    preferredCountries: ["in", "us", "gb", "ca", "au"],
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js"
  });

  inputModalcenter.addEventListener("countrychange", function() {
    const countryData = itiModalcenter.getSelectedCountryData();
    const stateCityGroup1 = document.getElementById("stateCityGroup_center");

    if (stateCityGroup1) {
      if (countryData.iso2 !== "in") {
        stateCityGroup1.style.display = "none";
        document.getElementById("state_c")?.removeAttribute("required");
        document.getElementById("cityname")?.removeAttribute("required");
      } else {
        stateCityGroup1.style.display = "flex";
        document.getElementById("state_c")?.setAttribute("required", true);
        document.getElementById("cityname")?.setAttribute("required", true);
      }
    }
  });
}


// Initialize intlTelInput for #phonee (modal or secondary form)
const inputModal = document.querySelector("#phonee");
const itiModal = window.intlTelInput(inputModal, {
  initialCountry: "in",       // Default to India
  separateDialCode: true,     // Show +91 separately
  preferredCountries: ["in", "us", "gb", "ca", "au"],
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js"
});

// Show/Hide State & City for #phonee
inputModal.addEventListener("countrychange", function() {
  const countryData = itiModal.getSelectedCountryData();
  const stateCityGroup1 = document.getElementById("stateCityGroup_modal");

  if (countryData.iso2 !== "in") {
    stateCityGroup1.style.display = "none"; // Hide
    document.getElementById("state_m").removeAttribute("required");
    document.getElementById("cities").removeAttribute("required");
  } else {
    stateCityGroup1.style.display = "flex"; // Show again
    document.getElementById("state_m").setAttribute("required", true);
    document.getElementById("cities").setAttribute("required", true);
  }
});

// Initialize intlTelInput for #phone (main form)
 const phoneInput = document.querySelector("#phone");
  const iti = window.intlTelInput(phoneInput, {
    initialCountry: "in",       // Default to India
    separateDialCode: true,     // Show +91 separately
    preferredCountries: ["in", "us", "gb", "ca", "au"],
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js"
  });

 // Show/Hide State & City based on country code
  phoneInput.addEventListener("countrychange", function() {
    const countryData = iti.getSelectedCountryData();
    const stateCityGroup = document.getElementById("stateCityGroup");
    if (countryData.iso2 !== "in") {
      stateCityGroup.style.display = "none"; // Hide
      document.getElementById("state").removeAttribute("required");
      document.getElementById("cityname_ea_footer").removeAttribute("required");
    } else {
      stateCityGroup.style.display = "flex"; // Show again
      document.getElementById("state").setAttribute("required", true);
      document.getElementById("cityname_ea_footer").setAttribute("required", true);
    }
  });
</script>
  