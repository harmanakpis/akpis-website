<?php $uri = service('uri');?>

      <!-- Header start -->

      <header class="<?=$uri->getSegment(1)==''?'':'blue-header'?>">

        <div class="desk-menu">

          <div class="container">

            <div class="row">

              <div class="col-md-2">

                <div class="h-logo">

                  <a href="<?=base_url()?>"><img src="assets/images/logo.png" alt="akpis"></a>

                </div>

              </div>

              <div class="col-md-10">

                <div class="top-menu-list">

                  <ul>

                    <li class="<?=$uri->getSegment(1)==''?'active':''?>"><a href="<?=base_url()?>">Home</a></li>

                    <li class="<?=$uri->getSegment(1)=='about-us'?'active':''?>"><a href="about-us">About Us</a></li>

                    <!--li class="<?=$uri->getSegment(1)=='course'?'active':''?>"><a href="course">Our Courses</a></li-->

                    <!--li class="<?=$uri->getSegment(1)=='alumini'?'active':''?>"><a href="alumini">Alumini</a></li-->

                    <li class="<?=$uri->getSegment(1)=='blog'?'active':''?>"><a href="blog">Blog & Webinars</a></li>

                    <!--li class="<?=$uri->getSegment(1)=='video'?'active':''?>"><a href="video">Video Gallery</a></li-->

                    <li class="<?=$uri->getSegment(1)=='contact'?'active':''?>"><a href="contact">Contact Us</a></li>

                  </ul>

                </div>

                <div class="bottom-menu">

                  <ul>

                    <?php $courses = menu_courses(); ?>
                    <?php foreach ($courses as $c => $curs) { ?>
                      <?php if ($curs->slug === 'us-cpa') { ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/us-cpa1"><?=$curs->title?></a></li>
                    <?php } 
                     elseif($curs->slug === 'us-cma'){ ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/us-cma1"><?=$curs->title?></a></li>
                    <?php  }
                      elseif($curs->slug === 'ea'){ ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/ea1"><?=$curs->title?></a></li>
                    <?php  }
                    elseif($curs->slug === 'cia'){ ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/cia1"><?=$curs->title?></a></li>
                    <?php  }
                     elseif($curs->slug === 'ifrs'){ ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/diploma-in-ifrs"><?=$curs->title?></a></li>
                    <?php  }
                     elseif($curs->slug === 'acca'){ ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/acca1"><?=$curs->title?></a></li>
                    <?php  }
                    else { ?>
                        <li><a href="course/<?=$curs->slug?>"><?=$curs->title?></a></li>
                    <?php } ?>



                    <!-- <li><a href="course/<?//=$curs->slug?>"><?//=$curs->title?></a></li> -->
                    <?php } ?>

                  </ul>

                </div>

                <div class="bottom-menu bottom-yellow ">

                 <!-- <ul class="dropdown">
                                <button onclick="myFunction()" class="dropbtn">SOFTWARE TRAINING <span class="me-2 dropbtn"><i class="fa-solid fa-caret-down dropbtn"></i></span></button>
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="akpiscourse/zoho">ZOHO</a>
                                    <a href="akpiscourse/xero">XERO</a>
                                    <a href="akpiscourse/cch">CCH</a>
                                    <a href="akpiscourse/turbotax">TURBOTAX</a>
                                </div>
                            </ul> -->

                  <ul class="align-items-center">

                    <!--li><a href="javascript:void(0)">Immigration</a></li-->

                    <li><a href="https://skewezeducation.com/placements/">Placements</a></li>

                    <li><a href="javascript:void(0)"  onclick="myFunction()" class="dropbtn">Software Training<span class="ms-2 dropbtn "><i class="fa-solid fa-caret-down dropbtn"></i></span></a></li>

                         <div id="myDropdown" class="dropdown-content">
                                    <a href="akpiscourse/zoho">ZOHO</a>
                                    <a href="akpiscourse/xero">XERO</a>
                                    <a href="akpiscourse/cch">CCH</a>
                                    <a href="akpiscourse/turbotax">TURBOTAX</a>
                                </div>
                    

                    <li><a href="https://studentsupport.live/" target="_blank">LMS</a></li>

                    

                  </ul>

                    

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="mobile-menu-sec"> 

          <div class="container">

            <div class="row">

              <div class="col-6">

                <div class="mobile-logo">

                  <a href="<?=base_url()?>"><img src="assets/images/logo.png"></a>

                </div>

              </div>

              <div class="col-6">

                <div class="hamburger-menu">

                  <div class="bar"></div> 

                </div>

              </div>

            </div>

          </div>  

          <nav class="mobile-menu">

            <ul>

              <li><a href="<?=base_url()?>">Home</a></li>

              <li><a href="about-us">About Us</a></li>

              <li class="has-children">Our Courses <span class="icon-arrow"></span>

                <ul class="children">

                    <?php foreach ($courses as $c => $curs) { ?>
                      <?php if ($curs->slug === 'us-cpa') { ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/us-cpa1"><?=$curs->title?></a></li>
                    <?php }
                      elseif($curs->slug === 'us-cma'){ ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/us-cma1"><?=$curs->title?></a></li>
                    <?php  }
                    elseif($curs->slug === 'ea'){ ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/ea1"><?=$curs->title?></a></li>
                    <?php  }
                     elseif($curs->slug === 'cia'){ ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/cia1"><?=$curs->title?></a></li>
                    <?php  }
                     elseif($curs->slug === 'ifrs'){ ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/diploma-in-ifrs"><?=$curs->title?></a></li>
                    <?php  }
                     elseif($curs->slug === 'acca'){ ?>
                        <li><a href="https://akpisprofessionals.com/akpiscourse/acca1"><?=$curs->title?></a></li>
                    <?php  }
                    else { ?>
                        <li><a href="course/<?=$curs->slug?>"><?=$curs->title?></a></li>
                    <?php } ?>


                    <!-- <li><a href="course/<?//=$curs->slug?>"><?//=$curs->title?></a></li> -->
                    <?php } ?>

                </ul>

              </li>

              <li><a href="alumini">Alumini</a></li>

              <li><a href="blog">Blog & Webinars</a></li>

              <li><a href="video">Video Gallery</a></li>

              <li><a href="contact">Contact Us</a></li>

              <li><a href="javascript:void(0)">Immigration</a></li>

              <li><a href="https://skewezeducation.com/placements/">Placements</a></li>

              <li class="has-children"><a href="javascript:void(0)">Software Training <span class="icon-arrow"></span></a>
            
             <ul class="children" id="myDropdown" >
                                <li>  <a href="akpiscourse/zoho">ZOHO</a></li>  
                                <li>  <a href="akpiscourse/xero">XERO</a></li>  
                                <li>   <a href="akpiscourse/cch">CCH</a></li>  
                                <li>   <a href="akpiscourse/turbotax">TURBOTAX</a></li>
                                  
                    </ul>
            
            
            </li>

              
                    

              <li><a href="https://studentsupport.live/" target="_blank">LMS</a></li>

            </ul>    

          </nav>

        </div>    

      </header>

      <!-- Header end --> 