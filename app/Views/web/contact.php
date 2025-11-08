<section class="breadcrumb-sec">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <ul>

          <li><a href="/">Home</a></li>

          <li>|</li>

          <li><a href="contact">Contact Us</a></li>

        </ul>

      </div>

    </div>

  </div>

</section>



<section class="contact-page">

    <div class="container">

        <div class="row gutter-y-40">

            <div class="col-lg-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">

                <div class="contact-page__content">

                    <div class="contact-page__content__bg" style="background-image: url(assets/images/contact-form-bg-1-1.webp);"></div>

                    <div class="contact-page__content__image">

                        <img src="assets/images/contact-1-1.webp" alt="contact">

                    </div>

                    <div class="contact-page__content__inner">

                        <div class="sec-title">

                            <h6 class="sec-title__tagline">Get in Touch</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title">Just say <span>hello!</span></h3><!-- /.sec-title__title -->

                        </div>

                        <ul class="list-unstyled contact-page__info">

                            <li>

                                <div class="contact-page__info__icon">

                                    <span class="contact-page__info__icon__inner">

                                        <i class="fa fa-phone-alt"></i>

                                    </span>

                                </div>

                                <div class="contact-page__info__content">

                                    <h3 class="contact-page__info__title">call now</h3>

                                    <!-- <a href="tel:+919205207573" class="contact-page__info__text">+91 9205207573</a>

                                    <a href="tel:+918527524176" class="contact-page__info__text">+91 8527524176</a> -->
                                    <?php  $phones = explode(',', isSetting('phone')); if(is_array($phones)){ ?>
                                      <?php foreach ($phones as $p => $ph) { ?>
                                      <?=$p?', ':''?><a href="tel:<?=$ph?>" class="contact-page__info__text"><?=$ph?></a>
                                      <?php } ?>
                                    <?php }  ?>

                                </div>

                                

                            </li>

                            <li>

                                <div class="contact-page__info__icon">

                                    <span class="contact-page__info__icon__inner">

                                        <i class="fa fa-envelope"></i>

                                    </span>

                                </div>

                                <div class="contact-page__info__content">

                                    <h3 class="contact-page__info__title">Email</h3>

                                    <a href="mailto:<?=isSetting('email')?>" class="contact-page__info__text contact-page__info__text--email"><?=isSetting('email')?></a>

                                </div>

                            </li>

                            <li>

                                <div class="contact-page__info__icon">

                                    <span class="contact-page__info__icon__inner">

                                        <i class="fa fa-map-marker"></i>

                                    </span>

                                </div>

                                <div class="contact-page__info__content">

                                    <h3 class="contact-page__info__title">address</h3>

                                    <a href="https://maps.app.goo.gl/Uv2bhB7rdK4wNtjf6" class="contact-page__info__text"><?=isSetting('address')?></a>

                                </div>

                            </li>

                        </ul>
                        <div class="follow-us contact-followus">

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

                        <div class="contact-page__student">

                            <div class="contact-page__student__inner">

                                <div class="contact-page__student__image">

                                    <img src="assets/images/team1.jpg" alt="student">

                                    <img src="assets/images/team2.jpg" alt="student">

                                    <img src="assets/images/team3.jpg" alt="student">

                                    <img src="assets/images/team4.jpg" alt="student">

                                </div>

                                <p class="contact-page__student__text">1.1k Happy student’s</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <?= view('admin/inc/alert')?>

                <div class="contact-page__form">

                    <h2>Contact <strong>Us</strong></h2>

                    <p>Want to get in touch? We'd love to hear from you.</p>

                    <form id="needs-validation" class="needs-validation" novalidate method="post">

                        <input type="hidden" name="mailForm" value="mailForm" required>

                      <div class="row">

                        <div class="col-12">

                           <div class="form-group">

                            <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Name" required>

                          </div>

                        </div>

                        <div class="col-12">

                          <div class="form-group">

                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>

                            

                          </div>  

                        </div>

                        <div class="col-12">

                          <div class="form-group">

                            <input type="tel" name="phone" class="form-control" id="inputphone" placeholder="Phone" required>

                            

                          </div>  

                        </div>

                        

                        <div class="col-12">

                          <div class="form-group">

                            <textarea rows="5" name="message" class="form-control" id="validationCustom02" placeholder="Message" required></textarea>

                          </div>  

                        </div>

                        <div class="col-lg-12 col-sm-12 col-12 text-center">

                            <button class="btn-common" type="submit">Submit</button>

                        </div>

                    </div>          

                    </form>

                    

                </div>

            </div>

        </div>

    </div>

</section>



<section class="map-sec">

        <?=isSetting('address_map')?>

</section>



<script>

// Disable form submissions if there are invalid fields

(function() {

  'use strict';

  window.addEventListener('load', function() {

    // Get the forms we want to add validation styles to

    var forms = document.getElementsByClassName('needs-validation');

    // Loop over them and prevent submission

    var validation = Array.prototype.filter.call(forms, function(form) {

      form.addEventListener('submit', function(event) {

        if (form.checkValidity() === false) {

          event.preventDefault();

          event.stopPropagation();

        }

        form.classList.add('was-validated');

      }, false);

    });

  }, false);

})();

</script>