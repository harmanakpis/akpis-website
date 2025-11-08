<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Webinars</h2>
  </div>
  <div class="col-lg-2">
      <a href="admin/webinar/add" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-plus"></i></a>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-title">
          <h5>Webinars List</h5>
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
                  <th>Webinar Name</th>
                  <th>Webinar Date</th>
                  <th>Webinar Time</th>
                  <th>Image</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($webinars as $k => $webinar) { ?>
                  <tr>
                      <td><?= $k + 1 ?></td>
                      <td><?php echo $webinar->name;?></td>
                      <td><?php echo $webinar->webinar_date;?></td>
                      <td><?php echo $webinar->webinar_time;?></td>
                      <td>
                        <img src="<?= ALUMINI_IMAGE . $webinar->image ?>" 
                            alt="<?= $webinar->name ?>" 
                            height="50" 
                            width="50">
                     </td>
                      <td>
                        <a href="admin/webinar/edit/<?= $webinar->id ?>" class="btn btn-outline btn-primary btn-sm dim"><i class="fa fa-edit"></i></a>
                        <a onclick="delete_webinar(<?=$webinar->id?>, this)" class="btn btn-outline btn-danger btn-sm dim"><i class="fa fa-trash"></i></a>
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

 
  function delete_webinar(id, obj){
    $.confirm({
      title: 'Confirm!',
      content: 'Sure you want to delete this?',
      buttons: {
        delete: {
          btnClass: 'btn-danger',
          action: function () {
            $.ajax({
              url: 'admin/webinar/delete/'+id,
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