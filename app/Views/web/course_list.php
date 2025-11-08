<section class="breadcrumb-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul>
          <li><a href="<?=base_url()?>">Home</a></li>
          <li>|</li>
          <li><a href="">Our Courses</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="home-sec3 foot-bor course-list-p">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="coures-slider-box">
          <div class="row">
            <?php foreach ($courses as $co => $course) { ?>
              <div class="col-md-4">
                <div class="course-card">
                    <div class="course-card-img">
                        <img src="<?=COURSE_IMAGE.$course->image?>"/>
                        <div class="tab-text">
                          <a href="course/<?=$course->slug?>" class="btn-common">Join Now</a>
                        </div>
                    </div>
                    <div class="course-card-text">
                        <h3><?=$course->title?></h3>
                        <div class="course-box-text"><?=$course->description?></div>
                        <a href="course/<?=$course->slug?>">Join Now</a>
                    </div>
                </div>
              </div>
            <?php } ?>
            
            <?php if($pages>1) { ?>
              <!--pagination-->
              <div class="col-12">
                  <ul class="post-pagination">
                      <li>
                          <a href="#"><span class="post-pagination__icon"><i class="fa fa-angle-left"></i></span></a>
                      </li>
                      <?php for($i=1; $i<=$pages; $i++) { ?>
                      <li class="<?=$page==$i?'active':''?>">
                          <a href="course?page=<?=$i?>"><?=$i?></a>
                      </li>
                      <?php } ?>
                      <li>
                          <a href="#"><span class="post-pagination__icon"><i class="fa fa-angle-right"></i></span></a>
                      </li>
                  </ul><!-- end-post-pagination -->
              </div>
              <!--end-pagination-->
            <?php } ?>
          
          </div><!--end course-row-->
          
        </div>
      </div>
    </div>
  </div>
</section>