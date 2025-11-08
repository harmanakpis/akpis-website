<form action="admin/setting/update_setting/" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?=$setting->id?>" required>
  <div class="form-group row">
    <label class="control-label col-sm-3" for="name">Type:</label>
    <div class="col-sm-9">
      <?=$setting->type?>
    </div>
  </div>

  <div class="form-group row">
    <label class="control-label col-sm-3" for="ps">Select Images:</label>
    <div class="col-sm-9">
      <input type="file" name="images[]" class="form-control" multiple="true">
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-3" for="ps">Images:</label>
    <div class="col-sm-9">
      <ul>
      <?php  if(is_array($images = json_decode($setting->description, true))){
          foreach ($images as $image) { ?>
            <li>
              <input type="hidden" name="oldimages[]" value="<?=$image?>">
              <img src="<?=$image?>" style="max-height:70px !important;" class="img-fluid rounded img-thumbnail x-2">
              <span onclick="remove_img(this)" class="float-right btn btn-sm btn-danger"><i class="fa fa-trash"></i></span>
            </li>
          <?php } ?>
      <?php } ?>
      </ul>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-12">
      <button type="reset" class="btn btn-danger" >Clear</button>
      <button type="submit" class="btn btn-success float-right" name="updateSlider" value="updateSslider">Update</button>
    </div>
  </div>
</form>