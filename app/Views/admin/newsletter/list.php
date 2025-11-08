<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Newsletters</h2>
  </div>
  <div class="col-lg-2">
      
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-title">
          <h5>Newsletters List</h5>
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
                  <th>Email</th>
                  <th>Status</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($newsletters as $k => $newsletter) { ?>
                  <tr>
                    <td><?= $k + 1 ?></td>
                    <td><?= $newsletter->email ?></td>
                    <td class="center">
                        <a onclick="status_change(<?= $newsletter->id ?>, this)" class="btn btn-sm" data-toggle="tooltip" title="Click to change Status!">
                          <span class="btn badge badge-<?= $newsletter->status == 'active' ? 'success' : 'warning' ?>"><?= ucwords($newsletter->status) ?></span>
                        </a>
                    </td>
                    <td>
                        <a onclick="delete_newsletter(<?=$newsletter->id?>, this)" class="btn btn-outline btn-danger btn-sm dim"><i class="fa fa-trash"></i></a>
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
              url: 'admin/newsletter/status/' + id,
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

  function delete_newsletter(id, obj){
    $.confirm({
      title: 'Confirm!',
      content: 'Sure you want to delete this?',
      buttons: {
        delete: {
          btnClass: 'btn-danger',
          action: function () {
            $.ajax({
              url: 'admin/newsletter/delete/'+id,
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