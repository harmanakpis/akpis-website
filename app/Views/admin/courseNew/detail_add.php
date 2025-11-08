<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?=$course->title?> - Course Details</h2>
    </div>
    <div class="col-lg-2">
        <a href="admin/course/details/<?=$course->id?>" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-list"></i></a>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">

            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Add <?=$course->title?> Details</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="course_id" value="<?=$course->id?>">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Title :</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" placeholder="Enter Here" required value="<?=post_value('title')?>" onchange="replicate(this.value)">
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Order No :</label>
                            <div class="col-sm-10">
                                <input type="number" name="order_no" class="form-control" placeholder="Enter Here" required value="<?=$total?>">
                            </div>
                        </div>

                        
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Image :</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input id="image" type="file" class="custom-file-input" name="image">
                                    <label for="image" class="custom-file-label">Choose file...</label>
                                </div>
                            </div>

                        </div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Description :</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" class=" form-control" placeholder="Enter Here" ><?=post_value('description')?></textarea>
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