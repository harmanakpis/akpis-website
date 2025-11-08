<!DOCTYPE html>
<html>
    <head>
        <base href="<?=base_url()?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AKPIS | Admin Dashboard</title>
        <?=view('admin/inc/css')?>
    </head>

    <body class="md-skin">
        <div id="wrapper">
            <?=view('admin/layout/sidebar')?>

            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <?= view('admin/layout/header')?>                
                </div>
                    <?= view('admin/inc/alert')?>
                    <?php
                        if(!empty($view)){ 
                            echo view($view); 
                        }else{
                            echo '<h3>Please Define a view file !</h3>';
                        }
                    ?>

                <?=view('admin/layout/footer')?> 
            </div>

            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" id="myModalSize">
                    <div class="modal-content animated flipInY">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Details</h4>
                        </div>
                        <div class="modal-body" id="myModalBody">
                        
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?=view('admin/inc/js')?> 
    </body>
</html>
