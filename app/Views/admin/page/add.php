<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Pages</h2>
    </div>
    <div class="col-lg-2">
            <a href="admin/page" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-list"></i></a>
    </div>
</div>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Add Page</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <form method="post" action="" enctype="multipart/form-data">
                        <!-- <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Parent :</label>
                            <div class="col-sm-10">
                                <select name="parent_id" class="custom-select">
                                    <option value="0">None</option>
                                    <?php
                                    foreach ($pages as $page) { ?>
                                        <option value="<?= $page->id ?>"><?= $page->title ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div> -->

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Page Title :</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" value="<?=post_value('title')?>" class="form-control" placeholder="Enter Here" required onchange="replicate(this.value)">
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Slug :</label>
                            <div class="col-sm-10">
                                <input type="text" name="slug" value="<?=post_value('slug')?>" class="form-control" placeholder="Enter Here" required id="slug">
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Title :</label>
                            <div class="col-sm-10">
                                <input type="text" name="meta_title" value="<?=post_value('meta_title')?>"  class="form-control" placeholder="Enter Here" id="meta_title">
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Description :</label>
                            <div class="col-sm-10">
                                <textarea name="meta_description" class="form-control" placeholder="Enter Here"><?=post_value('meta_description')?></textarea>
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Keywords :</label>
                            <div class="col-sm-10">
                                <textarea name="meta_keywords" class="form-control" placeholder="Enter Here"><?=post_value('meta_keywords')?></textarea>
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Show in Menu :</label>
                            <div class="col-sm-2">
                                <select name="show_in_menu" class="custom-select">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">Show in Footer :</label>
                            <div class="col-sm-2">
                                <select name="show_in_footer" class="custom-select">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>

                            <label class="col-sm-2 col-form-label">Menu Display Order :</label>
                            <div class="col-sm-2">
                                <input type="number" name="menu_display_order" value="<?=post_value('menu_display_order')?>" class="form-control" placeholder="Enter Here" required min="0" value="<?= $total ?>">
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Banner :</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input id="banner" type="file" class="custom-file-input" name="banner">
                                    <label for="banner" class="custom-file-label">Choose file...</label>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="hr-line-dashed"></div> -->

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Page Content :</label>
                            <div class="col-sm-10">
                                <textarea name="page_content" id="page_content" class=" form-control" placeholder="Enter Here" ><?=post_value('page_content')?></textarea>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Status :</label>
                            <div class="col-sm-4">
                                <select name="status" class="custom-select">
                                    <option value="active">Active</option>
                                    <option value="disabled">Disabled</option>
                                </select>
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
            load_editor('page_content', '300');
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