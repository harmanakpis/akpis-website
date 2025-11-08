<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2><?=$course->title?> - Course Details</h2>
  </div>
  <div class="col-lg-2">
      <a href="admin/course" title="Course list" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-list"></i></a>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-title">
          <h5>Details List</h5>
          <div class="ibox-tools">
            <a href="admin/course/details_add/<?=$course->id?>" title="Course details add" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-plus"></i></a>
          </div>
        </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables">
              <thead>
                <tr>
                  <th>Order No</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($lists as $k => $record) { ?>
                  <tr>
                    <td><?= $record->order_no ?></td>
                    <td><?= $record->title ?></td>
                    <td>
                      <img alt="<?= $record->title ?>" src="<?= $image->rimg(COURSE_IMAGE . $record->image, ['height' => 50, 'width' => 100, 'alt' => get_initial($record->title), 'return' => true, 'crop' => true]) ?>">
                    </td>
                    <td class="center">
                        <a onclick="status_change(<?= $record->id ?>, this)" class="btn btn-sm" data-toggle="tooltip" title="Click to change Status!">
                          <span class="btn badge badge-<?= $record->status == 'active' ? 'success' : 'warning' ?>"><?= ucwords($record->status) ?></span>
                        </a>
                    </td>
                    <td>
                        <a href="admin/course/details_edit/<?= $record->course_id ?>/<?= $record->id ?>" class="btn btn-outline btn-primary btn-sm dim"><i class="fa fa-edit"></i></a>
                        <a onclick="delete_course_details(<?=$record->id?>, this)" class="btn btn-outline btn-danger btn-sm dim"><i class="fa fa-trash"></i></a>
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
              url: 'admin/course/details_status/' + id,
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

  function delete_course_details(id, obj){
    $.confirm({
      title: 'Confirm!',
      content: 'Sure you want to delete this?',
      buttons: {
        delete: {
          btnClass: 'btn-danger',
          action: function () {
            $.ajax({
              url: 'admin/course/details_delete/'+id,
              type: 'POST',
              success: function (response) {
                $(obj).parent().parent().remove();
              }
            })
          }
        },
        cancel: function () {
        }
      }
    });
  }
</script>