<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Profile</h2>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Profile</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" action="">
                        <p></p>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Name :</label>
                            <div class="col-lg-10"><input type="text" placeholder="Name" class="form-control" name="name" value="<?= $user->name ?>" required readonly></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Email :</label>
                            <div class="col-lg-10"><input type="email" placeholder="Email" class="form-control" name="email" value="<?= $user->email ?>" required readonly></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Old Password :</label>
                            <div class="col-lg-10"><input type="password" placeholder="Password" class="form-control" name="password"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">New Password :</label>
                            <div class="col-lg-10"><input type="password" placeholder="New Password" class="form-control" name="new_password"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Confirm New Password :</label>
                            <div class="col-lg-10"><input type="password" placeholder="Confirm New Password" class="form-control" name="c_new_password"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit" name="addForm" value="addForm"><strong>Update</strong></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>