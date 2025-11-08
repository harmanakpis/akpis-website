<footer>

  <div class="container">

    <div class="row">

      <div class="col-md-5">

        <div class="footer-logo"><a href="<?=base_url()?>"><img src="assets/images/footer-logo.png"/></a></div>

        <div class="footer-con"><p><?=isSetting('footer_text')?></p></div>

        <div class="follow-us">

          <h5>Follow us on</h5>

          <ul>

            <?php if(isSetting('twitter')){ ?>

            <li><a href="<?=isSetting('twitter')?>" target="_blank"><i class="fab fa-instagram"></i></a></li>

            <?php } ?>

            <?php if(isSetting('facebook')){ ?>

            <li><a href="<?=isSetting('facebook')?>" target="_blank"><i class="fab fa-facebook"></i></a></li>

            <?php } ?>

            <?php if(isSetting('youtube')){ ?>

            <li><a href="<?=isSetting('youtube')?>" target="_blank"><i class="fab fa-youtube"></i></a></li>

            <?php } ?>

            <?php if(isSetting('linked_in')){ ?>

            <li><a href="<?=isSetting('linked_in')?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>  

            <?php } ?>

          </ul>

        </div>

      </div>

      <div class="col-md-3">

        <div class="useful-link">

        <h3>USEFUL LINKS</h3>

        <ul>

          <li><a href="<?=base_url()?>">Home</a></li>

          <li><a href="about-us">About Us</a></li>

          <li><a href="course">Courses</a></li>

          <li><a href="alumini">Alumini</a></li>

          <li><a href="video">Video Gallery</a></li>

          <li><a href="contact">Contact Us</a></li>

          <li><a href="privacy-policy">Privacy Policy</a></li>

          <li><a href="terms-and-conditions">Terms & Conditions</a></li>

        </ul>

      </div>

      </div>

      <div class="col-md-4">

        <div class="address">

        <h3>OUR ADDRESS</h3>

        <ul>

          <li><i class="fa fa-map-marker"></i> <span><a href="https://maps.app.goo.gl/Uv2bhB7rdK4wNtjf6" target="_blank"><?=isSetting('address')?></a></span></li>

          <li><i class="fa fa-phone-alt"></i> <span>
            <?php  $phones = explode(',', isSetting('phone')); if(is_array($phones)){ ?>
              <?php foreach ($phones as $p => $ph) { ?>
              <?=$p?', ':''?><a href="tel:<?=$ph?>"><?=$ph?></a>
              <?php } ?>
            <?php }  ?>
            </span></li>
          <li><i class="fa fa-envelope"></i> <span><a href="mailto:<?=isSetting('email')?>"><?=isSetting('email')?></a></span></li>

        </ul>

      </div>

    </div>

    </div>

  </div>

  <div class="footer-bottom">

      <div class="copyright">© (From 2018) AKPIS All Right Reserved | AKPIS EDU PVT LTD</div>

  </div>    

</footer>

<a href="https://wa.me/918527524176" target="_blank" class="btn-whatsapp-pulse">

  <i class="fab fa-whatsapp"></i>

</a>
<a href="+918527524176" class="btn-call-pulse">

  <i class="fa fa-phone-alt"></i>

</a>







<!--Footer Start-->



<!--Footer end--> 

<!--page scroll start-->

<div class="page-scroll scrollToTop"><a href="javascript:void(0)"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>