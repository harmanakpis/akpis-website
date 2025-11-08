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

        <div class="ibox">
            <div class="ibox-title">
                <h5>Add Placement Partner</h5>
                <div class="ibox-tools">
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </div>
            </div>
            <div class="ibox-content">
                <form method="post" action="<?= base_url('admin/addpartner') ?>" enctype="multipart/form-data">
                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Partner Image :</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" accept="image/*" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button class="btn btn-white btn-sm" type="reset">Clear</button>
                            <button class="btn btn-primary btn-sm float-right" type="submit" name="save">Save</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- Listing Area -->
        <div class="ibox">
            <div class="ibox-title">
                <h5>Placement Partners</h5>
                <div class="ibox-tools">
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($partners)) { 
                            foreach ($partners as $k => $partner) { ?>
                                <tr>
                                    <td><?= $k+1 ?></td>
                                    <td>
                                        <img src="<?= ALUMINI_IMAGE . $partner->partner_image ?>" height="100"   width="100">
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/deletepartner/'.$partner->id) ?>" 
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Are you sure you want to delete this image?')">
                                           Delete
                                        </a>
                                    </td>
                                </tr>
                        <?php } } else { ?>
                                <tr><td colspan="3" class="text-center">No Records Found</td></tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

</div>