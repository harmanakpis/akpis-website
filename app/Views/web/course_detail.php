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
          <h2><?=$course->banner_title?></h2>
        </div>
      </div>
      <div class="col-md-5">
        <div class="course-1-video">
          <img src="<?= $image->rimg(COURSE_IMAGE . $course->image, ['height' => 400, 'width' => 570, 'alt' => get_initial($course->title), 'return' => true, 'crop' => true]) ?>">
          <div class="overlay-icon">
            <?php if(!empty($videos)){ ?>
            <a onclick="show_video('<?=$videos[0]->video?>')"><i class="fa fa-play"></i></a>
            <?php }else{ ?>
            <i class="fa fa-play"></i>
            <?php } ?>
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
          <h2><?=$course->enquiry_title?></span></h2>
          <p><?=$course->enquiry_description?></p>
          <div class="d-flex">
            
          </div>
          <div class="h-sec-button">
            <a href="<?=base_url('contact')?>" class="btn-common">Enquiry Now</a>
                                        
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
<section class="timeline" id="#scroll-container">
  <span class="default-line"></span>
  <span class="draw-line"></span>

  <?php foreach ($lists as $ls => $list) { ?>
  <!--course-list-start-->
  <div class="course-list-box <?=($ls+1)%2==0?'grey-bg-sec':''?>">
    <div class="container <?=($ls+1)%2!=0?'timeline-container':''?>" >
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
<section class="course-3 course-dt-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?=$course->small_description?>
                
            </div>
        </div>
    </div>
</section>


<section class="home-sec3 foot-bor">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="coures-slider-box">
          <div class="owl-carousel coures-slider">

            <?php foreach ($related_courses as $c => $cou) { ?>
              <div class="course-card">
                  <div class="course-card-img">
                      <img src="<?=COURSE_IMAGE.$cou->image?>"/>
                      <div class="tab-text">
                        <a href="course/<?=$cou->slug?>" class="btn-common">Join Now</a>
                      </div>
                  </div>
                  <div class="course-card-text">
                      <h3><?=$cou->title?></h3>
                      <div class="course-box-text"><?=$cou->description?></div>
                      <a href="course/<?=$cou->slug?>">Join Now</a>
                  </div>
              </div>
            <?php } ?>

          </div>
          <div class="all-courses">
              <a href="course" class="btn-common">See All Courses</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  /*window.onload = function() {
    $(document).ready(function(){
      <?php foreach ($lists as $l => $lst) { ?>
      $("#a<?=$l?>").waypoint(function(direction) {
        $("#a<?=$l?>").toggleClass("active1");
        $("#a<?=$l+1?>").removeClass("active1");
        console.log("Reach location")
      });
      <?php } ?>

    });

  }    */     
</script>
<script type="text/javascript">
  // Timeline Scroll Section
  // --------------------------------------------------------------
  window.onload = function() {
  var items = $(".timeline .row"),
  timelineHeight = $(".timeline .timeline-container").height(),
  greyLine = $('.default-line'),
  lineToDraw = $('.draw-line');
  containerheight = $(".timeline").height();
  $(".default-line").css("height", containerheight+'px');
  // sets the height that the greyLine (.default-line) should be according to `.timeline ul` height
  // run this function only if draw line exists on the page
  if(lineToDraw.length) {
    $(window).on('scroll', function () {
      // Need to constantly get '.draw-line' height to compare against '.default-line'
      var redLineHeight = lineToDraw.height(),
      greyLineHeight = greyLine.height(),
      windowDistance = $(window).scrollTop(),
      windowHeight = $(window).height() / 2,
      timelineDistance = $(".timeline").offset().top;
      if(windowDistance >= timelineDistance - windowHeight) {
        line = windowDistance - timelineDistance + windowHeight;
        if(line <= greyLineHeight) {
          lineToDraw.css({
            'height' : line + 20 + 'px'
          });
        }
      }
      // This takes care of adding the class in-view to the li:before items
      var bottom = lineToDraw.offset().top + lineToDraw.outerHeight(true);
      items.each(function(index){
        var circlePosition = $(this).offset();
  
        if(bottom > circlePosition.top) {       
          $(this).addClass('in-view');
        } else {
          $(this).removeClass('in-view');
        }
      }); 
    });
  }
}
</script>