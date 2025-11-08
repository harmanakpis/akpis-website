<section class="breadcrumb-sec">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <ul>

          <li><a href="<?=base_url()?>">Home</a></li>
          <li>|</li>
          <li><a href="<?=base_url('blog')?>">Blog</a></li>
          <?php if(!empty($search)){ ?>
            <li>|</li>
            <li><a href="javascript:void(0)">Search : <?=$search?></a></li>
          <?php } ?>
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

                            <?php foreach ($blogs as $b => $blog) { ?>

                            <!--blog-start-->

                            <div class="col-md-12">

                                <div class="blog-card blog-card--three">

                                    <div class="blog-card__image">

                                        <img src="<?=BLOG_IMAGE.$blog->image?>">

                                        <a href="blog/<?=$blog->url?>" class="blog-card__image__link"><span class="sr-only"></span>

                                        </a>

                                        <div class="blog-card__date">

                                            <span class="blog-card__date__day"><?=date('d', strtotime($blog->created))?></span>

                                            <span class="blog-card__date__month"><?=date('F', strtotime($blog->created))?></span>

                                        </div>

                                    </div>

                                    <div class="blog-card__content">

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

                                        <h3 class="blog-card__title"><a href="blog/<?=$blog->url?>"><?=$blog->title?></a></h3>

                                        <p class="blog-card__text"><?=$blog->short_description?></p>

                                        <a href="blog/<?=$blog->url?>" class="btn-common">Read More</a>

                                    </div>

                                </div>

                            </div>

                            <!-- blog-end -->

                            <?php } ?>



                            <?php if($pages>1) { ?>

                            <!-- post-pagination -->

                            <div class="col-12">

                                <ul class="post-pagination">

                                    <?php if($page!=1){ ?>
                                    <li>
                                        <a href="blog?page=<?=$page-1?>"><span class="post-pagination__icon"><i class="fa fa-angle-left"></i></span></a>
                                    </li>
                                    <?php } ?>

                                    <?php for($i=1; $i<=$pages; $i++) { ?>
                                    <li class="<?=$page==$i?'active':''?>">
                                        <a href="blog?page=<?=$i?>"><?=$i?></a>
                                    </li>
                                    <?php } ?>

                                    <?php if($page!=$pages){ ?>
                                    <li>
                                        <a href="blog?page=<?=$page+1?>"><span class="post-pagination__icon"><i class="fa fa-angle-right"></i></span></a>
                                    </li>
                                    <?php } ?>

                                </ul>

                            </div>

                            <!-- end-post-pagination -->

                            <?php } ?>

                            

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <aside class="widget-area">

                                <!-- sidebar__form sidebar__single -->

                                <div class="sidebar__form sidebar__single">

                                    <h4 class="sidebar__title sidebar__form__title">search here</h4>

                                    <form action="" class="sidebar__search">

                                        <input type="text" name="s" value="<?=isset($_GET['s'])?$_GET['s']:''?>" placeholder="Search Here">

                                        <button type="submit" aria-label="search submit" class="sidebar__search__icon">

                                            <i class="fa fa-search"></i>

                                        </button>

                                    </form>

                                </div>

                                <!-- sidebar__form end -->

                                <div class="sidebar__posts-wrapper sidebar__single">

                                    <h4 class="sidebar__title sidebar__posts-title">Latest posts</h4>

                                    <ul class="sidebar__posts list-unstyled">

                                        <?php foreach ($related as $re) { ?>

                                        <!-- start-sidebar__posts__content -->

                                        <li class="sidebar__posts__item">

                                            <div class="sidebar__posts__image">

                                                <img src="<?=BLOG_IMAGE.$re->image?>">

                                            </div>

                                            <div class="sidebar__posts__content">

                                                <h4 class="sidebar__posts__title"><a href="blog/<?=$re->url?>"><?=$re->title?></a></h4>

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

                                <!-- <div class="sidebar__tags-wrapper sidebar__single">

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