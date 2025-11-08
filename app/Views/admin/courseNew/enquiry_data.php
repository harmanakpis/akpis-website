<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Enquiries</h2>
  </div>
  <div class="col-lg-2">
      <a href="admin/testimonial/add" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-plus"></i></a>
  </div>
</div>
<?php 
  // echo '<pre>';print_r($enquiries);exit;
?>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-title">
          <h5>Enquiries List</h5>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone No</th>
                  <th>Course</th>
                  <th>Date</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($enquiries as $k => $enquiry) {  //echo '<pre>';print_r($enquiry);
                      $created_at_raw = $enquiry['created_at']; 
                      if (!empty($created_at_raw)) {
                          $dt = new \DateTime($created_at_raw);
                          $newdate = $dt->format('l, d M Y, h:i A'); 
                      } else {
                          $newdate = 'Not specified';
                      }
                 ?>
                  <tr>
                    <td><?= $k + 1 ?></td>
                    <td><?= $enquiry['name']; ?></td>                   
                    <td><?= $enquiry['email']; ?></td>
                    <td><?= $enquiry['contact']; ?></td>
                    <td><?= $enquiry['course_name'];?></td>
                    <td><?= $newdate;?></td>
                    <td>
                        <a onclick="delete_enquiry(<?=$enquiry['id'];?>, this)" class="btn btn-outline btn-danger btn-sm dim"><i class="fa fa-trash"></i></a>
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

  function delete_enquiry(id, obj){
    alert(id);
    $.confirm({
      title: 'Confirm!',
      content: 'Sure you want to delete this?',
      buttons: {
        delete: {
          btnClass: 'btn-danger',
          action: function () {
            $.ajax({
              url: 'admin/enquiries/delete_for/'+id,
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