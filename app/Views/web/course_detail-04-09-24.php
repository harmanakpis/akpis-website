<section class="breadcrumb-sec section">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <ul>

          <li><a href="<?=base_url()?>">Home</a></li>

          <li>|</li>

          <li><a href="<?=base_url('course')?>">Our Courses</a></li>

          <li>|</li>

          <li><a href="javascript:void(0)"><?=$course->title?></a></li>

        </ul>

      </div>

    </div>

  </div>

</section>

<section class="course-1 section">

  <div class="container">

    <div class="row">

      <div class="col-md-7">

        <div class="course-1-in">

          <h2>Why Choose <span class="text-orange"><?=$course->banner_title?></h2>

        </div>

      </div>

      <div class="col-md-5">

        <div class="course-1-video">

          <img src="assets/images/course-video.jpg">

          <div class="overlay-icon">

            <i class="fa fa-play"></i>

          </div>

          <div class="c-text-over">

            <p><?=$course->video_title?></p>

          </div>

        </div>

      </div>

    </div>

    <div class="row">

      <div class="col-md-12">

        <div class="course-1-text">

        <p><?=$course->description?></p>

      </div>

      </div>

    </div>

  </div>

</section>

<section class="course-2">

  <div class="container">

    <div class="row">

      <div class="col-md-5">

        <div class="course-2-img">

          <img src="assets/images/course-chart.jpg">

          <img src="assets/images/course-chart1.jpg">

        </div>

      </div>

      <div class="col-md-7">

        <div class="course-2-in">

          <h2><?=$course->enquiry_title?></h2>

          <p><?=$course->enquiry_description?></p>

          <div class="d-flex">

            

          </div>

          <div class="h-sec-button">

            <a href="<?=base_url('contact')?>" class="btn-common">Enquiry Now</a>

            <a href="<?=base_url('contact')?>" class="btn-common">Contact Us</a>                            

          </div>





        </div>

      </div>

    </div>

  </div>

</section>

<section class="course-3">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <h2><?=$course->page_title?></h2>

        <p><?=$course->short_description?></p>

      </div>

    </div>

  </div>

</section>

<section class="course-4" id="main">



  <?php foreach ($lists as $ls => $list) { ?>

  <!--course-list-start-->

  <div class="course-list-box <?=($ls+1)%2!=0?'grey-bg-sec':''?>" id="a<?=$ls?>">

    <div class="container">

      <div class="row">

        <?php if(($ls+1)%2!=0){ ?>

        <div class="col-md-6">

          <div class="course-list-box-img">

            <img src="<?=COURSE_IMAGE.$list->image?>">   

          </div>

        </div>

        <div class="col-md-6">

            <div class="course-list-box-con">

              <h3><?=$ls+1?>. <?=$list->title?></h3>

              <?=$list->description?>

          </div>

        </div>

      <?php }else{ ?>

        <div class="col-md-6 or-2">

            <div class="course-list-box-con">

              <h3><?=$ls+1?>. <?=$list->title?></h3>

              <?=$list->description?>

          </div>

        </div>

        <div class="col-md-6">

          <div class="course-list-box-img">

            <img src="<?=COURSE_IMAGE.$list->image?>">   

          </div>

        </div>

      <?php } ?>

      </div>

    </div>

  </div>

  <!--course-list-end-->

  <?php } ?>

  

</section>

<section class="home-sec3 foot-bor">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="coures-slider-box">

          <div class="owl-carousel coures-slider">

              <div class="course-card">

                  <div class="course-card-img">

                      <img src="assets/images/course1.jpg"/>

                      <div class="tab-text">

                        <a href="javascript:void(0)" class="btn-common">Join Now</a>

                      </div>

                  </div>

                  <div class="course-card-text">

                      <h3>US CMA Certified Management Accountant</h3>

                      <p>The Certified Management Accountant (CMA) credential is a nationally recognized strategic management and financial accounting certification.</p>

                      <a href="javascript:void(0)">Join Now</a>

                  </div>

              </div>

              <div class="course-card">

                  <div class="course-card-img">

                      <img src="assets/images/course2.jpg"/>

                      <div class="tab-text">

                        <a href="javascript:void(0)" class="btn-common">Join Now</a>

                      </div>

                  </div>

                  <div class="course-card-text">

                      <h3>ACCA Association of Charted Certified Accountant</h3>

                      <p>The Association of Chartered Certified Accountants (ACCA) is a renowned professional accounting body that offers the “Chartered Certified Accountant”.</p>

                      <a href="javascript:void(0)">Join Now</a>

                  </div>

              </div>

              <div class="course-card">

                  <div class="course-card-img">

                      <img src="assets/images/course3.jpg"/>

                      <div class="tab-text">

                        <a href="javascript:void(0)" class="btn-common">Join Now</a>

                      </div>

                  </div>

                  <div class="course-card-text">

                      <h3>US CPA Certified Public Accountant</h3>

                      <p>US CPA is administered by the American Institute of Certified Public Accountants, which is the world’s largest accounting body.</p>

                      <a href="javascript:void(0)">Join Now</a>

                  </div>

              </div>

              <div class="course-card">

                  <div class="course-card-img">

                      <img src="assets/images/course3.jpg"/>

                      <div class="tab-text">

                        <a href="javascript:void(0)" class="btn-common">Join Now</a>

                      </div>

                  </div>

                  <div class="course-card-text">

                      <h3>US CPA Certified Public Accountant</h3>

                      <p>US CPA is administered by the American Institute of Certified Public Accountants, which is the world’s largest accounting body.</p>

                      <a href="javascript:void(0)">Join Now</a>

                  </div>

              </div>

          </div>

          <div class="all-courses">

              <a href="javascript:void(0)" class="btn-common">See All Courses</a>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>



<script>

  window.onload = function() {

    $(document).ready(function(){

      <?php foreach ($lists as $l => $lst) { ?>

      $("#a<?=$l?>").waypoint(function(direction) {

        $("#a<?=$l?>").toggleClass("active1");

        $("#a<?=$l+1?>").removeClass("active1");

        console.log("Reach location")

      });

      <?php } ?>



    });



  }     

    

</script>