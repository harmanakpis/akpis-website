
<?php 
//echo '<pre>';print_r($placements);  exit;
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Placements</h2>
  </div>
  <div class="col-lg-2">
      <a href="admin/placements/add" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-plus"></i></a>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-title">
          <h5>Placements List</h5>
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
                  <!-- <th>Video Link</th> -->
                  <th>Placed At</th>
                  <th>Course Name</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($placements as $k => $placement) { ?>
                    <tr>
                    <td><?= $k + 1 ?></td>
                    <td><?= $placement->name ?></td>
                    <?php /* <td><?= $placement->videolink ?></td> */?>
                   <?php /* <td>
                     <a href="<?= ALUMINI_IMAGE . $placement->image ?>" title="<?= $placement->name ?>" class="pop-up">
                       <img alt="<?= $placement->name ?>" src="<?= $image->rimg(ALUMINI_IMAGE . $placement->image, ['height' => 50, 'width' => 100, 'alt' => get_initial($placement->name), 'return' => true, 'crop' => true]) ?>">
                      
                    </a>
                    </td> */?>
                    <td><?= $placement->placed_at ?></td>
                    <td><?= $placement->course_name ?></td>
                    <td>
                        <a href="admin/placement/edit/<?= $placement->id ?>" class="btn btn-outline btn-primary btn-sm dim"><i class="fa fa-edit"></i></a>
                        <a onclick="delete_placement(<?=$placement->id?>, this)" class="btn btn-outline btn-danger btn-sm dim"><i class="fa fa-trash"></i></a>
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

 
  function delete_placement(id, obj){
    $.confirm({
      title: 'Confirm!',
      content: 'Sure you want to delete this?',
      buttons: {
        delete: {
          btnClass: 'btn-danger',
          action: function () {
            $.ajax({
              url: 'admin/placements/delete/'+id,
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
