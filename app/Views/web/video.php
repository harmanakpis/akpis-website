<section class="breadcrumb-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul>
          <li><a href="<?=base_url()?>">Home</a></li>
          <li>|</li>
          <li><a href="">Video Gallery</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="video-page">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="gallery-video">
                <div class="gallery-video-img">
                    <img src="assets/images/gal1.jpg"/>
                    <div class="gal-vid-over">
                        <h3>Discover your Potential. <span>Make a Global Impact.</span></h3>
                        <a onclick="show_video('https://www.youtube.com/embed/O46rxxNPuhY')"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="gallery-video">
                <div class="gallery-video-img">
                    <img src="assets/images/gal2.jpg"/>
                    <div class="gal-vid-over gal-vid-over-small">
                        <h3>Plan Your Course</h3>
                        <a onclick="show_video('https://www.youtube.com/embed/NWo584nR_I0')"><i class="fa fa-play"></i></a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="gallery-video">
                <div class="gallery-video-img">
                    <img src="assets/images/gal3.jpg"/>
                    <div class="gal-vid-over gal-vid-over-small">
                        <h3>Help Shape Future</h3>
                        <a href="javascript:void(0)"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>    
<section class="video-tab-bar">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="video-tab-in-sec">
              <!--- Main Tabs -->
              <div class="v-tab-lecture">
              <div class="heading-tab"><h2>Demo Lecture</h2></div>
              <div class="v-nav-tab">
              <ul class="nav nav-tabs">
                <?php foreach ($courses as $c => $cours) { ?>
                  <?php if($c < 3){ ?>
                  <li class="nav-item">
                    <a class="nav-link <?=!$c?'active':''?>" href="#course-tab<?=$cours->id?>"><?=$cours->title?></a>
                  </li>
                  <?php  } ?>
                <?php  } ?>
                <?php if(sizeof($courses) > 3){ ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Others</a>
                  <div class="dropdown-menu">
                    <?php foreach ($courses as $cc => $cours) { ?>
                      <?php if($cc > 2){ ?>
                        <a class="dropdown-item" href="#course-tab<?=$cours->id?>"><?=$cours->title?></a>
                      <?php  } ?>
                    <?php  } ?>
                  </div>
                </li>
                <?php  } ?>
              </ul>
              </div> 
              </div>
              <!-- Tab Content -->
              <div class="tab-content">


                <?php foreach ($courses as $ccc => $cours) { ?>
                <div class="tab-pane <?=!$ccc?'active in':'fade'?> " id="course-tab<?=$cours->id?>">
                  <!--gal-tab-start-->
                  <div class="course-tab-gallery">
                      <div class="row">
                        <?php $videoss = course_videos($cours->id); ?>
                        <?php foreach ($videoss as $v => $video) { ?>
                         <!--gal-tab-list-->
                          <div class="col-md-3">
                              <div class="course-tab-galery-box">
                                  <div class="course-tab-galery-img">
                                      <img src="<?= $image->rimg(COURSE_IMAGE . $video->image, ['height' => 170, 'width' => 260, 'alt' => 'Video - '.$v+1, 'return' => true, 'crop' => true]) ?>"/>
                                        <div class="course-play">
                                            <a onclick="show_video('<?=$video->video?>')"><i class="fa fa-play"></i></a>
                                        </div>
                                  </div>
                                  <div class="course-tab-galery-con">
                                      <h3><?=$video->title?> </h3>
                                  </div>
                              </div>
                          </div>
                          <!--gal-tab-list-end-->
                        <?php } ?>

                      </div>
                  </div>
                  <!--gal-tab-end-->
                </div>
                <?php  } ?>
                
            
              </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="feedback-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Student Success Stories & Feedback</h2>
            </div>
        </div>
        <div class="row">
            <!--gal-tab-list-->
                <div class="col-md-3">
                    <div class="course-tab-galery-box">
                        <div class="course-tab-galery-img">
                            <img src="assets/images/sucess-thumb1.jpg"/>
                            <div class="course-play">
                                <a onclick="show_video('https://www.youtube.com/embed/69M9rlkpDSA')"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="course-tab-galery-con">
                            <h3>US CPA Success Story</h3>
                        </div>
                    </div>
                </div>
            <!--gal-tab-list-end-->
            <!--gal-tab-list-->
                <div class="col-md-3">
                    <div class="course-tab-galery-box">
                        <div class="course-tab-galery-img">
                            <img src="assets/images/sucess-thumb2.jpg"/>
                            <div class="course-play">
                                <a onclick="show_video('https://www.youtube.com/embed/Wxx8uGXN2ac')"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="course-tab-galery-con">
                            <h3>US CPA Success Story</h3>
                        </div>
                    </div>
                </div>
            <!--gal-tab-list-end-->
            
        </div>
    </div>
</section>
<section class="our-alumni" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Alumini</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="aluslider-sec">
                    <div class="owl-carousel aluslider">
                        <!--alu-box-start-->
                        <div class="alu-box">
                            <div class="alu-box-in">
                                <div class="alu-box-img">
                                    <img src="assets/images/alm1.png"/>
                                </div>
                                <div class="alu-box-con">
                                    <h3>Jhon Deo</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                            </div>
                        </div>
                        <!--alu-box-end-->
                        <!--alu-box-start-->
                        <div class="alu-box">
                            <div class="alu-box-in">
                                <div class="alu-box-img">
                                    <img src="assets/images/alm2.png"/>
                                </div>
                                <div class="alu-box-con">
                                    <h3>Jhon Deo</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                            </div>
                        </div>
                        <!--alu-box-end-->
                        <!--alu-box-start-->
                        <div class="alu-box">
                            <div class="alu-box-in">
                                <div class="alu-box-img">
                                    <img src="assets/images/alm3.png"/>
                                </div>
                                <div class="alu-box-con">
                                    <h3>Jhon Deo</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                            </div>
                        </div>
                        <!--alu-box-end-->
                        
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feedback-sec recent-update">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Recent Updates</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="owl-carousel recent">    
            <?php foreach ($videos as $v => $vd) { ?>
            <!--gal-tab-list-->
                <div class="col-md-12">
                    <div class="course-tab-galery-box">
                        <div class="course-tab-galery-img">
                            <img src="<?= $image->rimg(COURSE_IMAGE . $vd->image, ['height' => 170, 'width' => 260, 'alt' => 'Video - '.$v+1, 'return' => true, 'crop' => true]) ?>"/>
                            <div class="course-play">
                                <a onclick="show_video('<?=$vd->video?>')"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="course-tab-galery-con">
                            <h3><?=$vd->title?></h3>
                        </div>
                    </div>
                </div>
            <!--gal-tab-list-end-->
            <?php } ?>
            </div>
            </div>
        </div>
    </div>
</section>

