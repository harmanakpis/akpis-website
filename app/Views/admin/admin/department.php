<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Department Information</h2>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Department Information</h5>
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
                            <label class="col-lg-2 col-form-label">Owner Information :</label>
                            <div class="col-lg-10">  <textarea name="owner_info" class="form-control" rows="4" placeholder="" required><?= $departmentinfo[0]->owner_info ?? '' ?></textarea></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Total Batches :</label>
                            <div class="col-lg-10"><input type="text" placeholder="" class="form-control" name="batches" value="<?= $departmentinfo[0]->batches ?? '' ?>" required></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Countries Covered :</label>
                            <div class="col-lg-10"><input type="text" placeholder="" class="form-control" name="countries" value="<?= $departmentinfo[0]->countries ?? '' ?>" required></div>
                        </div>
                         <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Hiring Partners :</label>
                            <div class="col-lg-10"><input type="text" placeholder="" class="form-control" name="partners" value="<?= $departmentinfo[0]->partners ?? '' ?>" required></div>
                        </div>
                         <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Pass Percentage :</label>
                            <div class="col-lg-10"><input type="text" placeholder="" class="form-control" name="percentage" value="<?= $departmentinfo[0]->percentage ?? '' ?>" required></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Total Students :</label>
                            <div class="col-lg-10"><input type="text" placeholder="" class="form-control" name="total_students" value="<?= $departmentinfo[0]->total_students ?? '' ?>" required></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Total Placements :</label>
                            <div class="col-lg-10"><input type="text" placeholder="" class="form-control" name="placements" value="<?= $departmentinfo[0]->placements ?? '' ?>" required></div>
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