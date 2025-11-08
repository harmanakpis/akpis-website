<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XL3RGEV5JH"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XL3RGEV5JH');
    </script>

    <?php if(service('uri')->getSegment(1)!='video') { ?>
      <base href="<?=base_url()?>">
    <?php } ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="assets/images/favicon.jpg">
    <meta name="google-site-verification" content="j8_gfHXZO6APtQu5ZdeQx0TK3H2Mn40ftikclQmXTwA" />
    <meta property="og:image" content="assets/images/logo.png"> 

    <?php if (!empty($is_index) && $is_index == "no") { ?>
      <meta name="robots" content="noindex">
    <?php } else { ?>
      <meta name="robots" content="index">
    <?php } ?>

    <?php if (!empty($is_follow) && $is_follow == "no") { ?>
      <meta name="robots" content="nofollow">
    <?php } else { ?>
      <meta name="robots" content="follow">
    <?php } ?>

    <?php if (!empty($meta_title)) { ?>
      <title><?=$meta_title?></title>
      <meta name="title" content="<?=$meta_title?>" />
      <meta property="og:title" content="<?=$meta_title?>"> 
    <?php }else{ ?>
      <title><?=isSetting('default_meta_title')?></title>
      <meta name="title" content="<?=isSetting('default_meta_title')?>" />
      <meta property="og:title" content="<?=isSetting('default_meta_title')?>"> 
    <?php } ?>

    <?php if (!empty($meta_description)) { ?>
      <meta name="description" content="<?=$meta_description?>" />
      <meta property="og:description" content="<?=$meta_description?>">
    <?php }else{ ?>
      <meta name="description" content="<?=isSetting('default_meta_description')?>" />
      <meta property="og:description" content="<?=isSetting('default_meta_description')?>">
    <?php } ?>

    <?php if (!empty($meta_keywords)) { ?>
      <meta name="keywords" content="<?=$meta_keywords?>" />
    <?php }else{ ?>
      <meta name="keywords" content="<?=isSetting('default_meta_keywords')?>" />
    <?php } ?>

    <?php if (!empty($meta_canonical)) { ?>
      <link rel="canonical"  href="<?=$meta_canonical?>"/>
    <?php }else{ ?>
      <link rel="canonical"  href="<?=current_url()?>"/>
    <?php } ?>    

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Default CSS -->
    <?php 
      if (!empty($custom_css)) {
          echo view($custom_css);
      } else {
          echo view('web/inc/css');
      }
    ?>

    <!-- Load extra CSS only when custom header is used -->
    <?php if (!empty($custom_header)) { ?>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <?php } ?>

    <?=isSetting('header_script')?>

    <?php if (base_url()==current_url()) { ?>
      <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "Organization",
        "url": "https://akpisprofessionals.com/",
        "logo": "https://akpisprofessionals.com/assets/images/logo.png",
        "name": "AKPIS Professionals",
        "image": "https://akpisprofessionals.com/assets/images/banner.jpg",
        "email": "support@akpisprofessionals.com",
        "description": "AKPIS Professionals offers assistance and the best coaching...",
        "address": "Cabin No. 1 , TDS Tower E-193, Industrial Area Phase – 8B (Sector 74 )Mohali , Punjab- 160055",
        "telephone": "9205207573",
        "sameAs": [
          "https://www.youtube.com/channel/UCdwJB4QXTHm6y1KuSb0WtmQ?view_as=subscriber",
          "https://www.instagram.com/akpis_edupvtltd/",
          "https://www.linkedin.com/company/akpis-ca-cpa-cma-courses/?viewAsMember=true",
          "https://www.facebook.com/akpisedupvtltd/"
        ]
      }
      </script>
    <?php } ?>
</head>
<body>

  <?php 
    if (!empty($custom_header)) {
        echo view($custom_header);
    } else {
        echo view('web/layout/header');
    }
  ?>

  <?php
    if(!empty($view)){ 
        echo view($view); 
    }else{
        echo '<h3>Please Define a view file !</h3>';
    }
  ?>

  <!-- Video Modal -->
  <div class="modal fade video-popup" id="myvideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
          
          <!-- <div class="embed-responsive embed-responsive-16by9" id="videoArea">
            <iframe class="embed-responsive-item" src="" id="galvideo"  allowscriptaccess="always" allow="autoplay"></iframe>
          </div> -->
          <div class="ratio ratio-16x9" id="videoArea">
            <iframe src="" id="galvideo" allow="autoplay" allowfullscreen></iframe>
          </div>

        </div>
      </div>
    </div>
  </div>

 <?php 
    if (!empty($custom_footer)) {
        echo view($custom_footer);
    } else {
        echo view('web/layout/footer');
        echo view('web/inc/js'); 
       echo isSetting('footer_script');
    }
  ?>

  <!--?=view('web/inc/js')?--> 
  <!--?=isSetting('footer_script')?-->

  <script type="text/javascript">
    // function show_video(url){
    //     let newurl = url + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0";
    //     let html = '<iframe class="embed-responsive-item" src="'+newurl+'" id="cVideo" allowscriptaccess="always" allow="autoplay"></iframe>';
    //     $('#videoArea').html(html);
    //     $('#myvideo').modal('show');
    // }

    function show_video(url){
      let newurl = url + "?autoplay=1&modestbranding=1&showinfo=0";
      let html = '<iframe src="'+newurl+'" id="cVideo" allow="autoplay" allowfullscreen></iframe>';
      $('#videoArea').html(html);
      $('#myvideo').modal('show');
    }


    // stop playing the youtube video when modal closes
    $('#myvideo').on('hide.bs.modal', function () {
      $("#cVideo").attr('src', ''); 
    });

    $("ul.nav-tabs a").click(function(e) {
      e.preventDefault();
      $(this).tab("show");
    });

    $('#subscribeForm').on('submit', function(e){
      e.preventDefault(); 
      $("#alertArea").addClass('alert-info').html('Please Wait ...');   
      var data = $('#subscribeForm').serialize();
      $.ajax({
          url: 'newsletter-subscribe',
          type: 'POST',
          dataType: 'json',
          data: data,
          success: function (response) {
              if(response.status == 'success'){
                $("#alertArea").removeClass('alert-info alert-danger').addClass('alert-success').html(response.message);  
              } else {
                $("#alertArea").removeClass('alert-info alert-success').addClass('alert-danger').html(response.message); 
              }           
          }
      });
    });
  </script>
</body>
</html>
