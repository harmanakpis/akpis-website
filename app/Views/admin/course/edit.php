<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Course</h2>
    </div>
    <div class="col-lg-2">
        <a href="admin/course" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-list"></i></a>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">

            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Edit Course</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $course->id ?>" required>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Type :</label>
                            <div class="col-sm-10">
                                <select class="form-control" required name="type">
                                    <option value="all" <?=$course->type=='all'?'selected':''?>>All</option>
                                    <option value="domestic" <?=$course->type=='domestic'?'selected':''?>>Domestic</option>
                                    <option value="international" <?=$course->type=='international'?'selected':''?>>Internatioal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Title :</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" placeholder="Enter Here" required value="<?= $course->title ?>" onchange="replicate(this.value)">
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">URL Slug :</label>
                            <div class="col-sm-10">
                                <input type="text" name="slug" class="form-control" placeholder="Enter Here" required id="slug" value="<?= $course->slug ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Title :</label>
                            <div class="col-sm-10">
                                <input type="text" name="meta_title" class="form-control" placeholder="Enter Here" value="<?= $course->meta_title ?>" id="meta_title">
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Description :</label>
                            <div class="col-sm-10">
                                <textarea name="meta_description" class="form-control" placeholder="Enter Here"><?= $course->meta_description ?></textarea>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Keywords :</label>
                            <div class="col-sm-10">
                                <textarea name="meta_keywords" class="form-control" placeholder="Enter Here"><?= $course->meta_keywords ?></textarea>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Image :</label>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input id="logo" type="file" class="custom-file-input" name="image">
                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <input type="hidden" name="old_file" value="<?= COURSE_IMAGE.$course->image ?>">
                                <img src="<?= COURSE_IMAGE . $course->image ?>" height="50px">
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Banner Section :</label>
                            <div class="col-sm-6">
                                <textarea name="banner_title" id="banner_title" class="form-control" placeholder="Enter Here" ><?= $course->banner_title ?></textarea>
                            </div>
                            <div class="col-sm-4">
                                <textarea name="video_title" id="video_title" class="form-control" placeholder="Enter video title" ><?= $course->video_title ?></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Enquiry Section :</label>
                            <div class="col-sm-4">
                                <textarea name="enquiry_title" id="enquiry_title" class="form-control" placeholder="Enter Here"><?= $course->enquiry_title ?></textarea>
                            </div>
                            <div class="col-sm-6">
                                <textarea name="enquiry_description" id="enquiry_description" class="form-control" placeholder="Enter Here" ><?= $course->enquiry_description ?></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Page Title :</label>
                            <div class="col-sm-10">
                                <textarea name="page_title" id="page_title" class="form-control" placeholder="Enter Here" ><?= $course->page_title ?></textarea>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Short Description :</label>
                            <div class="col-sm-10">
                                <textarea name="short_description" class="form-control" placeholder="Enter Here" required rows="3"><?= $course->short_description ?></textarea>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Small Description :</label>
                            <div class="col-sm-10">
                                <textarea name="small_description" id="small_description" class="form-control" placeholder="Enter Here" rows="3"><?= $course->small_description ?></textarea>
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Long Description :</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" class="form-control" placeholder="Enter Here"><?= $course->description ?></textarea>
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
            load_small_editor('banner_title', 100);
            load_small_editor('video_title', 100);
            load_small_editor('enquiry_title', 100);
            load_small_editor('page_title', 100);
            load_small_editor('enquiry_description', 100);
            load_small_editor('small_description', 100);
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