<form action="<?=base_url('admin/setting/update_setting')?>" method="post">
  <input type="hidden" name="id" value="<?=$setting->id?>" required>
  <div class="form-group row">
    <label class="control-label col-sm-3" for="name">Type:</label>
    <div class="col-sm-9">
      <?=$setting->type?>
    </div>
  </div>

  <div class="form-group row">
    <label class="control-label col-sm-3" for="ps">Descripton:</label>
    <div class="col-sm-9">
      <textarea name="description" id="description" class="form-control" rows="5"><?=$setting->description?></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-12">
      <button type="reset" class="btn btn-danger" >Clear</button>
      <button type="submit" class="btn btn-success float-right" name="updateSeting" value="updateSetting">Update</button>
    </div>
  </div>
</form>