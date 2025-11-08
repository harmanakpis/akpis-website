<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Settings</h2>
    </div>
    <div class="col-lg-2">
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Setting List</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                  <div class="table-responsive">                   
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Type</th>
                          <th width="40%">Detail</th>
                          <th>Status / ON-OFF</th>
                          <th>Last Updated On</th>
                          <th width="8%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; foreach ($settings as $setting) { ?>            
                        <tr id="ro<?=$setting->id?>">
                          <td><?=$i++?></td>
                          <td><?=$setting->type?></td>
                          <td>
                            <?php if($setting->type == 'slider'){ ?>
                              <?php if(is_array($images = json_decode($setting->description, true))){ ?>
                                <?php foreach ($images as $image) { ?>      
                                    <img src="<?=$image?>" style="max-height:40px !important;" class="img-fluid rounded img-thumbnail x-2">    
                                <?php } ?>
                              <?php } ?>
                            <?php } else { ?>
                              <textarea cols="70" readonly disabled><?=$setting->description?></textarea>
                            <?php } ?>
                          </td>
                          <td>
                            <a data-toggle="tooltip" title="Click to change status" onclick="change_status(<?=$setting->id?>)" class="btn">
                              <div id="<?=$setting->id?>">
                                <span class="badge badge-<?=$setting->status=='active'?'success':'warning'?>">
                                <?=ucwords($setting->status)?>
                                </span>
                              </div>
                            </a>
                          </td>
                          <td><?=date('d-m-Y', strtotime($setting->modified))?></td>
                          <td>
                            <a data-toggle="tooltip" title="Edit" onclick="edit(<?=$setting->id?>)"><i class="fa fa-edit text-secondary "></i></a>
                            <a data-toggle="tooltip" title="Show Basic Details" onclick="view(<?=$setting->id?>)"><i class="fa fa-eye text-dark p-2"></i> </a>             
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
  var active = '<span class="badge badge-success">Active</span>';
  var deactive = '<span class="badge badge-warning">Disabled</span>';
  function change_status(id) {
    $.ajax({
        url: 'admin/setting/status/' + id,
        type: 'POST',
        success: function (response) {
          if(response == 'active'){
            $("#"+id).html(active);
          }else{
            $("#"+id).html(deactive);            
          }
        }
    })
  }

  function view(id) {
    $.ajax({
        url: 'admin/setting/show/' + id +'/1',
        type: 'POST',
        success: function (response) {
            $("#myModalBody").html(response);
            $("#myModalSize").addClass('modal-lg');
            $('#myModal').modal('show');
        }
    })
  }

  function edit(id) {     
	  $.ajax({
	      url: 'admin/setting/edit/'+id,
	      type: 'POST',
	      success: function (response) {
	        $("#myModalBody").html(response);
          $("#myModalSize").addClass('modal-lg');
          $('#myModal').modal('show');
	      }
	  })             
  }

  function remove_img(obj){
    valu = $(obj).siblings('input').val();
    $.confirm({
      title: 'Confirm!',
      content: 'Sure you want to delete this?',
      buttons: {
        delete: {
          btnClass: 'btn-danger',
          action: function () {
            $.ajax({
                url: 'admin/setting/delete_image/',
                type: 'POST',
                data: ({'img':valu}),
                success: function (response) {
                  $(obj).parent().remove();
                }
            });
          }
        },
        cancel: function () {
        }
      }
    }); 
  }

</script>
