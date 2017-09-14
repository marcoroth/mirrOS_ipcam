<?php

  $ipcam_url = getConfigValue('ipcam_url');
  $ipcam_name = getConfigValue('ipcam_name');
  $ipcam_overflow_x_hidden = getConfigValue('ipcam_overflow_x_hidden');
  $ipcam_overflow_y_hidden = getConfigValue('ipcam_overflow_y_hidden');
  $ipcam_max_width_100 = getConfigValue('ipcam_max_width_100');
  $ipcam_max_height_100 = getConfigValue('ipcam_max_height_100');

  if($ipcam_url == 'GLANCR_DEFAULT') {$ipcam_url = ""; }
  if($ipcam_name == 'GLANCR_DEFAULT') {$ipcam_name = ""; }
  if($ipcam_max_width_100 == 'GLANCR_DEFAULT') {$ipcam_max_width_100 = "true"; }
  if($ipcam_max_height_100 == 'GLANCR_DEFAULT') {$ipcam_max_height_100 = "true"; }
  if($ipcam_overflow_x_hidden == 'GLANCR_DEFAULT') {$ipcam_overflow_x_hidden = "false"; }
  if($ipcam_overflow_y_hidden == 'GLANCR_DEFAULT') {$ipcam_overflow_y_hidden = "false"; }

?>

<h6><?php echo _('ipcam_url') ?></h6>
<input type="text" id="ipcam_url" value="<?php echo $ipcam_url; ?>" placeholder="<?php echo _('ipcam_url') ?>"><br>

<h6><?php echo _('ipcam_name') ?></h6>
<input type="text" id="ipcam_name" value="<?php echo $ipcam_name; ?>" placeholder="<?php echo _('ipcam_name') ?>"><br>

<h6><?php echo _('ipcam_options') ?></h6>
<input type="checkbox" id="ipcam_max_width_100" <?php echo ($ipcam_max_width_100 == "true" ? "checked" : ""); ?>> <label for="ipcam_max_width_100"><?php echo _("ipcam_max_width_100"); ?></label><br>
<input type="checkbox" id="ipcam_max_height_100" <?php echo ($ipcam_max_height_100 == "true" ? "checked" : ""); ?>> <label for="ipcam_max_height_100"><?php echo _("ipcam_max_height_100"); ?></label><br>
<input type="checkbox" id="ipcam_overflow_x_hidden" <?php echo ($ipcam_overflow_x_hidden == "true" ? "checked" : ""); ?>> <label for="ipcam_overflow_x_hidden"><?php echo _("ipcam_overflow_x_hidden"); ?></label><br>
<input type="checkbox" id="ipcam_overflow_y_hidden" <?php echo ($ipcam_overflow_y_hidden == "true" ? "checked" : ""); ?>> <label for="ipcam_overflow_y_hidden"><?php echo _("ipcam_overflow_y_hidden"); ?></label><br>

<br><br>

<a href="/modules/ipcam/assets/reset.php"><?php echo _("ipcam_reset_config"); ?></a><br /><br />

<div class="block__add" id="ipcam_save">
	<button class="ipcam_save--button" href="#">
		<span><?php echo _('save'); ?></span>
	</button>
</div>
