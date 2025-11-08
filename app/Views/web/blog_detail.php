<section class="breadcrumb-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="blog-bread">
          <li><a href="<?=base_url()?>">Home</a></li>
          <li>|</li>
          <li><a href="<?=base_url('blog')?>">Blog</a></li>
          <li>|</li>
          <li><a href="javascript:void(0)"><?=$blog->title?></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="blog-page blog-page--sidebar">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-8">
                <div class="row gutter-y-30">
                    <!--blog-start-->
                    <div class="col-md-12">
                        <div class="blog-card blog-card--three">
                            <div class="blog-card__image">
                                <img src="<?=BLOG_IMAGE.$blog->image?>">
                                <div class="blog-card__date">
                                    <span class="blog-card__date__day"><?=date('d', strtotime($blog->created))?></span>
                                    <span class="blog-card__date__month"><?=date('F', strtotime($blog->created))?></span>
                                </div>
                            </div>
                            <div class="blog-card__content  blog-detail">
                                <ul class="list-unstyled blog-card__meta">
                                    <li>
                                        <a href="#">
                                            <span class="blog-card__meta__icon">
                                                <i class="far fa-user"></i>
                                            </span>
                                            by <?=$blog->author?>
                                        </a>
                                    </li>
                                    
                                </ul>
                                <h1><?=$blog->title?></h1>
                                <p><?=$blog->description?></p>

                            </div>
                        </div>
                    </div><!-- blog-end -->
                    

                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <aside class="widget-area">
                        <div class="sidebar__posts-wrapper sidebar__single">
                            <h4 class="sidebar__title sidebar__posts-title">Latest posts</h4>
                            <ul class="sidebar__posts list-unstyled">
                                <?php foreach ($related_blogs as $key => $blg) { ?>
                                <!-- start-sidebar__posts__content -->
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="<?=BLOG_IMAGE.$blg->image?>">
                                    </div>
                                    <div class="sidebar__posts__content">
                                        <h4 class="sidebar__posts__title"><a href="blog/<?=$blg->url?>"><?=$blg->title?></a></h4>
                                    </div>
                                </li>
                                <!-- end-sidebar__posts__content -->
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- post category -->
                        <!-- <div class="sidebar__categories-wrapper sidebar__single">
                            <h4 class="sidebar__title">Categories</h4>
                            <ul class="sidebar__categories list-unstyled">
                                <li><a href="#">CIA Course <span>(4)</span></a></li>
                                <li><a href="#">ACCA Course <span>(2)</span></a></li>
                                <li><a href="#">CMA Course <span>(6)</span></a></li>
                                <li><a href="#">CPA Course <span>(9)</span></a></li>
                                <li><a href="#">IRFS <span>(10)</span></a></li>
                            </ul>
                        </div> -->
                        <!-- end-post-category -->
                        <!-- post-tag -->
                       <!--  <div class="sidebar__tags-wrapper sidebar__single">
                            <h4 class="sidebar__title">Tags</h4>
                            <div class="sidebar__tags">
                                <a href="#">EA</a>
                                <a href="#">CPA</a>
                                <a href="#">CA</a>
                                <a href="#">CIA</a>
                                <a href="#">ACCA Course</a>
                            </div>
                        </div> -->
                        <!-- end-post-tag -->
                        
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>