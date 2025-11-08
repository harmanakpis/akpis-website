<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Dashboard</h2>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-3">
            <a href="admin/course">
            <div class="ibox text-dark">
                    <div class="ibox-title">
                        <!-- <div class="ibox-tools">
                            <span class="label label-success float-right">Active</span>
                        </div> -->
                        <h5>Courses</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?=sizeof($courses)?></h1>
                        <div class="stat-percent font-bold text-success"></div>
                        <small>Total Courses</small>
                    </div>
            </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="admin/blog">
            <div class="ibox text-dark">
                <div class="ibox-title">
                    <!-- <div class="ibox-tools">
                        <span class="label label-warning float-right">Pending</span>
                    </div> -->
                    <h5>Blogs</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?=sizeof($blogs)?></h1>
                    <div class="stat-percent font-bold text-info"></div>
                    <small>Total Blogs</small>
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="admin/testimonial">
            <div class="ibox text-dark">
                <div class="ibox-title">
                    <!-- <div class="ibox-tools">
                        <span class="label label-warning float-right">Pending</span>
                    </div> -->
                    <h5>Testimonials</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?=sizeof($testimonials)?></h1>
                    <div class="stat-percent font-bold text-navy"></div>
                    <small>Total Testimonial</small>
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="admin/alumini/for">
            <div class="ibox text-dark">
                <div class="ibox-title">
                    <!-- <div class="ibox-tools">
                        <span class="label label-success float-right">Active</span>
                    </div> -->
                    <h5>Alumini</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?=sizeof($aluminis)?></h1>
                    <div class="stat-percent font-bold text-danger"></div>
                    <small>Alumini work for</small>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>

                    