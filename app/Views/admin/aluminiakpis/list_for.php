<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Alumini Work For</h2>
    </div>
    <div class="col-lg-2">
        <a href="admin/aluminiakpis/add_for" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-plus"></i></a>
    </div>
</div>



<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>List</h5>
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
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <!-- <th>Status</th> -->
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($aluminis as $k => $alumini) { ?>
                                    <tr>
                                        <td><?=$k+1?></td>
                                        <td><?= ucwords($alumini->name) ?></td>
                                        <td>
                                            <a href="<?= ALUMINI_IMAGE . $alumini->image ?>" title="<?= $alumini->name ?> Image" class="pop-up">
                                                <img alt="<?= $alumini->name ?>" src="<?= $image->rimg(ALUMINI_IMAGE . $alumini->image, ['height' => 50, 'width' => 100, 'alt' => get_initial($alumini->name), 'return' => true, 'crop' => true]) ?>">
                                            </a>
                                        </td>
                                        <!-- <td class="center">
                                            <a onclick="status_change(<?//= $alumini->id ?>, this)" class="btn btn-sm" data-toggle="tooltip" title="Click to change Status!">
                                                <span class="btn badge badge-<?//= $alumini->status == 'active' ? 'success' : 'warning' ?>"><?//= ucwords($alumini->status) ?></span>
                                            </a>
                                        </td> -->
                                        <td>
                                            <a href="admin/alumini/edit_for/<?= $alumini->id ?>" class="btn btn-outline btn-primary btn-sm dim"><i class="fa fa-edit"></i></a>
                                            <a onclick="delete_alumini(<?= $alumini->id ?>, this)" class="btn btn-outline btn-danger btn-sm dim"><i class="fa fa-trash"></i></a>

                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
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
                            url: 'admin/alumini/status_for/' + id,
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

    function delete_alumini(id, obj){
        $.confirm({
            title: 'Confirm!',
            content: 'Sure, you want to delete?',
            buttons: {
                delete: {
                    btnClass: 'btn-danger',
                    action: function() {
                        $.ajax({
                            url: 'admin/aluminiakpis/delete_for/' + id,
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
</script>