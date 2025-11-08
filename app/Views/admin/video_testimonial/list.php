<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Video Testimonials</h2>
  </div>
  <div class="col-lg-2">
      <a href="admin/videotestimonial/add" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-plus"></i></a>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-title">
          <h5>Video Testimonials List</h5>
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
                  <th>No.</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>video</th>
                  <th>Status</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($testimonials as $k => $testimonial) { ?>
                  <tr>
                    <td><?= $k + 1 ?></td>
                    <td><?= $testimonial->title ?></td>
                    <td><a href="<?= TESTIMONIAL_IMAGE . $testimonial->image ?>" title="<?= $testimonial->title ?>" class="pop-up">
                            <img alt="<?= $testimonial->title ?>" src="<?= $image->rimg(TESTIMONIAL_IMAGE . $testimonial->image, ['height' => 50, 'width' => 50, 'alt' => get_initial($testimonial->title), 'return' => true, 'crop' => true]) ?>">
                        </a>
                    </td>
                    <td>
                      <a onclick="showVideo('<?=$testimonial->video?>')">
                        <i class="fa fa-eye"></i>
                      </a>                      
                    </td>
                    <td class="center">
                        <a onclick="status_change(<?= $testimonial->id ?>, this)" class="btn btn-sm" data-toggle="tooltip" title="Click to change Status!">
                          <span class="btn badge badge-<?= $testimonial->status == 'active' ? 'success' : 'warning' ?>"><?= ucwords($testimonial->status) ?></span>
                        </a>
                    </td>
                    <td>
                        <a href="admin/videotestimonial/edit/<?= $testimonial->id ?>" class="btn btn-outline btn-primary btn-sm dim"><i class="fa fa-edit"></i></a>
                        <a onclick="delete_testimonial(<?=$testimonial->id?>, this)" class="btn btn-outline btn-danger btn-sm dim"><i class="fa fa-trash"></i></a>
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
              url: 'admin/videotestimonial/status/' + id,
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

  function delete_testimonial(id, obj){
    $.confirm({
      title: 'Confirm!',
      content: 'Sure you want to delete this?',
      buttons: {
        delete: {
          btnClass: 'btn-danger',
          action: function () {
            $.ajax({
              url: 'admin/videotestimonial/delete/'+id,
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

  function showVideo(url){
    html = '<iframe width="700" height="400" src="'+url+'"> </iframe>';
    $("#myModalBody").html(html);
    $("#myModalSize").addClass('modal-lg');
    $('#myModal').modal('show');
  }
</script>