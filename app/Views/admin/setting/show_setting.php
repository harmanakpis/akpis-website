<?php  if(is_array($images = json_decode($setting->description, true))){
  foreach ($images as $image) { ?>
    <li>       
      <img src="<?=$image?>" style="max-height:100px !important;" class="img-fluid rounded img-thumbnail x-2">       
    </li>
  <?php } ?>
<?php }else{ ?>
	<textarea cols="110" rows="15" readonly disabled><?=$setting->description?></textarea>
<?php } ?>