<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Video Testimonial</h2>
    </div>
    <div class="col-lg-2">
        <a href="admin/videotestimonial" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-list"></i></a>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">

            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Edit Video Testimonial</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $testimonial->id ?>" required>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">title :</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" placeholder="Enter Here" required value="<?=$testimonial->title?>">
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Video :</label>
                            <div class="col-sm-10">
                                <input type="text" name="video" class="form-control" placeholder="Enter Here" required value="<?=$testimonial->video?>">
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Thumb Image :</label>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input id="logo" type="file" class="custom-file-input" name="image">
                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <input type="hidden" name="old_file" value="<?= TESTIMONIAL_IMAGE.$testimonial->image ?>">
                                <img src="<?= TESTIMONIAL_IMAGE . $testimonial->image ?>" height="50px">
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <div class="col-sm-12 col-sm-offset-2">
                                <button class="btn btn-white btn-sm" type="reset">Clear</button>
                                <button class="btn btn-primary btn-sm float-right" name="addForm" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

<script type="text/javascript">

    window.onload = function() {
        $(document).ready(function() {
            load_editor('description', '300');
        });
    }

    function replicate(value) {
        if ($('#slug').val() === '') {
            var title = value.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-').replace(/ /g, "-").toLowerCase();
            $('#slug').val(title);
        }
        if ($('#meta_title').val() === '') {
            $('#meta_title').val(value);
        }
    }
</script>