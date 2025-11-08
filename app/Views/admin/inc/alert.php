<div class="text-center">
    <?php if (session()->getFlashdata('success')) { ?>
        <div class="mt-2 alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <strong>Success!</strong> <?= session()->getFlashdata('success') ?>.
        </div>
    <?php } ?>
    <?php if (session()->getFlashdata('info')) { ?>
        <div class="mt-2  alert alert-info alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <strong>Information!</strong> <?= session()->getFlashdata('info') ?>.
        </div>
    <?php } ?>
    <?php if (session()->getFlashdata('warning')) { ?>
        <div class="mt-2  alert alert-warning alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <strong>Warning!</strong> <?= session()->getFlashdata('warning') ?>.
        </div>
    <?php } ?>
    <?php if (session()->getFlashdata('error')) { ?>
        <div class="mt-2 alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <strong>Error!</strong> <?= session()->getFlashdata('error') ?>.
        </div>
    <?php } ?>
</div>