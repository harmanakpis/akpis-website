<?php $uri = service('uri');?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <!-- <img alt="image" class="rounded-circle" src="assets/img/profile_small.jpg"/> -->
                    <img alt="image" class="" src="admin_assets/img/logo.png" height="40"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Admin <b class="caret"></b></span>
                        <!-- <span class="text-muted text-xs block">admin@gmail.com </span> -->
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="admin/admin/profile">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    <img alt="image" class="" src="admin_assets/img/logo.png" height="20"/>
                </div>
            </li>
            <li class="<?=$uri->getSegment(2)==''?'active':''?>">
                <a href="admin"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
                <li class="<?= $uri->getSegment(2)=='course' ? 'active' : '' ?>">
                    <a href="#"><i class="fa fa-sitemap"></i> 
                        <span class="nav-label">Akpis Courses</span> <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li class="<?=$uri->getSegment(2)=='newcourse'?'active':''?>"><a href="<?= base_url('admin/newcourse') ?>">All Courses</a></li>
                        <li><a href="<?= base_url('admin/placements') ?>">Alumni & Placements</a></li>
                        <li><a href="<?= base_url('admin/toppers') ?>">Course Toppers</a></li>
                        <li><a href="<?= base_url('admin/webinar') ?>">Webinars</a></li>
                        <li><a href="<?= base_url('admin/partners') ?>">Placement Partners</a></li>
                        <li><a href="<?= base_url('admin/department') ?>">Department</a></li>
                        <li><a href="<?= base_url('admin/enquiries') ?>">Enquiries</a></li>
                        <li><a href="<?= base_url('admin/akpis_aluminies') ?>">Alumnies</a></li>
                    </ul>
                </li>
            <li class="<?=$uri->getSegment(2)=='course'?'active':''?>">
                <a href="admin/course"><i class="fa fa-sitemap"></i> <span class="nav-label">Courses</span></a>
            </li>
            <li class="<?=$uri->getSegment(2)=='blog'?'active':''?>">
                <a href="admin/blog"><i class="fa fa-rss"></i> <span class="nav-label">Blogs</span></a>
            </li>
            <li class="<?=$uri->getSegment(2)=='page'?'active':''?>">
                <a href="admin/page"><i class="fa fa-file"></i> <span class="nav-label">Pages</span></a>
            </li>
            <li class="<?=$uri->getSegment(2)=='testimonial'?'active':''?>">
                <a href="admin/testimonial"><i class="fa fa-quote-left"></i> <span class="nav-label">Testimonials</span></a>
            </li>
            <li class="<?=$uri->getSegment(2)=='videotestimonial'?'active':''?>">
                <a href="admin/videotestimonial"><i class="fa fa-quote-left"></i> <span class="nav-label">Video Testimonials</span></a>
            </li>
            <li class="<?=$uri->getSegment(2)=='alumini'?'active':''?>">
                <a href="admin/alumini/for"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Alumini</span></a>
            </li>
            <li class="<?=$uri->getSegment(2)=='newsletter'?'active':''?>">
                <a href="admin/newsletter"><i class="fa fa-envelope"></i> <span class="nav-label">Newsletter</span></a>
            </li>            
            <li class="<?=$uri->getSegment(2)=='setting'?'active':''?>">
                <a href="admin/setting"><i class="fa fa-database"></i> <span class="nav-label">Setting</span></a>
            </li>
        </ul>

    </div>
</nav>