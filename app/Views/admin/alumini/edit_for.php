<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Alumini Work For</h2>
    </div>
    <div class="col-lg-2">
        <a href="admin/alumini/for" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-list"></i></a>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Edit</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="id" class="form-control" placeholder="Enter Here" required value="<?= $alumini->id ?>">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Name :</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" placeholder="Enter Here" required value="<?= $alumini->name ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Banner :</label>
                            <div class="col-sm-7">
                                <div class="custom-file">
                                    <input type="hidden" name="old_file" value="<?=ALUMINI_IMAGE.$alumini->image?>">
                                    <input id="image" type="file" class="custom-file-input" name="image">
                                    <label for="image" class="custom-file-label">Choose file...</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <img src="<?=ALUMINI_IMAGE.$alumini->image?>" height="70px">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-sm-offset-2">
                                <button class="btn btn-white btn-sm" type="reset">Clear</button>
                                <button class="btn btn-primary btn-sm float-right" name="addForm" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
</script>