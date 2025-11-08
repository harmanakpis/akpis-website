<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Courses</h2>
  </div>
  <div class="col-lg-2">
      <a href="admin/course/add" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-plus"></i></a>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-title">
          <h5>Course List</h5>
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
                  <th><input type="checkbox" onclick="$('input[name*=\'c_select\']').attr('checked', this.checked);"></th>
                  <th>No.</th>
                  <th>Title</th>
                  <th>Slug</th>
                  <th>Type</th>
                  <th>Image</th>
                  <th>Featured</th>
                  <th>Status</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($courses as $k => $record) { ?>
                  <tr>
                    <td><input type="checkbox" name="c_select[]" value="<?= $record->id ?>"></td>
                    <td><?= $k + 1 ?></td>
                    <td><?= $record->title ?><br>
                        <?php if ($record->is_menu == 'yes') { ?>
                          <span class="badge badge-xs badge-info">Menu</span>
                        <?php } ?>
                    </td>
                    <td><?= $record->slug ?></td>
                    <td><?= ucwords($record->type) ?></td>
                    <td>
                      <img alt="<?= $record->title ?>" src="<?= $image->rimg(COURSE_IMAGE . $record->image, ['height' => 50, 'width' => 100, 'alt' => get_initial($record->title), 'return' => true, 'crop' => true]) ?>">
                    </td>
                    <td class="center">
                        <a onclick="featured_change(<?= $record->id ?>, this)" class="btn btn-sm" data-toggle="tooltip" title="Click to change featured Status!">
                          <span class="btn badge badge-<?= $record->featured == 'yes' ? 'success' : 'warning' ?>"><?= ucwords($record->featured) ?></span>
                        </a>
                    </td>
                    <td class="center">
                        <a onclick="status_change(<?= $record->id ?>, this)" class="btn btn-sm" data-toggle="tooltip" title="Click to change Status!">
                          <span class="btn badge badge-<?= $record->status == 'active' ? 'success' : 'warning' ?>"><?= ucwords($record->status) ?></span>
                        </a>
                    </td>
                    <td>
                        <a href="admin/course/videos/<?= $record->id ?>" title="Course Video" class="btn btn-outline btn-info btn-sm dim"><i class="fa fa-play-circle-o"></i></a>
                        <a href="admin/course/details/<?= $record->id ?>" title="Course Info" class="btn btn-outline btn-info btn-sm dim"><i class="fa fa-list"></i></a>
                        <a href="admin/course/edit/<?= $record->id ?>" class="btn btn-outline btn-primary btn-sm dim"><i class="fa fa-edit"></i></a>
                        <a onclick="delete_course(<?=$record->id?>, this)" class="btn btn-outline btn-danger btn-sm dim"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <table>
              <tr>
                <td><a class="btn btn-xs btn-primary text-white" onclick="setCourse('set_menu')">Set Menu</a></td>
                <td><a class="btn btn-xs btn-primary text-white" onclick="setCourse('unset_menu')">Unset Menu</a></td>
                
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
              url: 'admin/course/status/' + id,
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

  var yes = '<span class="btn badge badge-success">Yes</span>';
  var no = '<span class="btn badge badge-warning">No</span>';

  function featured_change(id, obj) {
    $.confirm({
      title: 'Confirm!',
      content: 'Change Status?',
      buttons: {
        change: {
          btnClass: 'btn-warning',
          action: function() {
            $.ajax({
              url: 'admin/course/featured/' + id,
              type: 'POST',
              success: function(response) {
                if (response == 'yes') {
                  $(obj).html(yes);
                } else {
                  $(obj).html(no);
                }
              }
            })
          }
        },
        cancel: function() {}
      }
    });
  }

  function delete_course(id, obj){
    $.confirm({
      title: 'Confirm!',
      content: 'Sure you want to delete this?',
      buttons: {
        delete: {
          btnClass: 'btn-danger',
          action: function () {
            $.ajax({
              url: 'admin/course/delete/'+id,
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

  function setCourse(type) {
    var count_checked = $("[type='checkbox']:checked").length;
    if (count_checked) {
      var formData = $('input[type="checkbox"]:checked').serialize();
      formData += '&action=' + type;
      $.ajax({
        url: 'admin/course/set_course',
        type: 'POST',
        data: formData,
        success: function(response) {
          console.log(response);
          location.reload();
        }
      })
    } else {
      alert('Please select any course !');
    }
  }
</script>