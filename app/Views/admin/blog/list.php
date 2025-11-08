<?php 
// use App\Libraries\Image;
// $this->image = new Image(); 
?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Blogs</h2>
    </div>
    <div class="col-lg-2">
        <a href="admin/blog/add" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-plus"></i></a>
    </div>
</div>



<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Blogs List</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" onclick="$('input[name*=\'b_select\']').attr('checked', this.checked);"></th>
                                    <th>Thumbnail</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($blogs as $k => $blog) { ?>
                                    <tr>
                                        <td><input type="checkbox" name="b_select[]" value="<?= $blog->id ?>">
                                        </td>
                                        <td>
                                            <a href="<?= BLOG_IMAGE . $blog->image ?>" title="<?= $blog->title ?> Image" class="pop-up">
                                                <img alt="<?= $blog->title ?>" src="<?= $image->rimg(BLOG_IMAGE . $blog->image, ['height' => 50, 'width' => 100, 'alt' => get_initial($blog->title), 'return' => true, 'crop' => true]) ?>">
                                            </a>
                                        </td>
                                        <td><?= $blog->title ?> <br>
                                            <?php if ($blog->title == 'yes') { ?>
                                              <span class="badge badge-xs badge-info">Featured</span>
                                            <?php } ?>
                                        </td>
                                        <td class="center">
                                            <a onclick="status_change(<?= $blog->id ?>, this)" class="btn btn-sm" data-toggle="tooltip" title="Click to change Status!">
                                                <span class="btn badge badge-<?= $blog->status == 'active' ? 'success' : 'warning' ?>"><?= ucwords($blog->status) ?></span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="admin/blog/edit/<?= $blog->id ?>" class="btn btn-outline btn-primary btn-sm dim"><i class="fa fa-edit"></i></a>
                                            <a onclick="delete_blog(<?= $blog->id ?>, this)" class="btn btn-outline btn-danger btn-sm dim"><i class="fa fa-trash"></i></a>

                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        <table>
                          <tr>
                            <td><a class="btn btn-xs btn-primary text-white" onclick="setBlog('set_featured')">Set Featured</a></td>
                            <td><a class="btn btn-xs btn-primary text-white" onclick="setBlog('unset_featured')">Unset Featured</a></td>
                          </tr>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

<script type="text/javascript">
    var active = '<span class="btn badge badge-success">Active</span>';
    var deactive = '<span class="btn badge badge-warning">Disabled</span>';

    function status_change(id, obj) {
        $.confirm({
            title: 'Confirm!',
            content: 'Change Status?',
            buttons: {
                change: {
                    btnClass: 'btn-warning',
                    action: function() {
                        $.ajax({
                            url: 'admin/blog/status/' + id,
                            type: 'POST',
                            success: function(response) {
                                if (response == 'active') {
                                    $(obj).html(active);
                                } else {
                                    $(obj).html(deactive);
                                }
                            }
                        })
                    }
                },
                cancel: function() {}
            }
        });
    }

    function delete_blog(id, obj){
        $.confirm({
            title: 'Confirm!',
            content: 'Sure, you want to delete?',
            buttons: {
                delete: {
                    btnClass: 'btn-danger',
                    action: function() {
                        $.ajax({
                            url: 'admin/blog/delete/' + id,
                            type: 'POST',
                            success: function(response) {
                                $(obj).parent().parent().remove();
                            }
                        })
                    }
                },
                cancel: function() {}
            }
        });
    }

    function setBlog(type) {
        var count_checked = $("[type='checkbox']:checked").length;
        if (count_checked) {
          var formData = $('input[type="checkbox"]:checked').serialize();
          formData += '&action=' + type;
          $.ajax({
            url: 'admin/blog/set_blog',
            type: 'POST',
            data: formData,
            success: function(response) {
              console.log(response);
              location.reload();
            }
          })
        } else {
          alert('Please select any blog !');
        }
    }
</script>