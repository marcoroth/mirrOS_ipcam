<?php
  $ipcam_exists = false;
  $ipcam_url = getConfigValue('ipcam_url');
  $ipcam_name = getConfigValue('ipcam_name');
  $ipcam_overflow_x_hidden = getConfigValue("ipcam_overflow_x_hidden");
  $ipcam_overflow_y_hidden = getConfigValue("ipcam_overflow_y_hidden");
  $ipcam_max_width_100 = getConfigValue("ipcam_max_width_100");
  $ipcam_max_height_100 = getConfigValue("ipcam_max_height_100");

  if(!empty($ipcam_url)) {
      $ipcam_exists = true;
  }
  $output = ($ipcam_exists ? "<img id=\"ipcam_image\" src=\"$ipcam_url\" alt=\"ipcam\">" : "<span>". _("ipcam_check_config") ."</span>");
?>

<div id="ipcam_wrapper">
  <?php echo $output; ?>
</div>

<?php
  if ($ipcam_exists && strlen($ipcam_name) > 0) { ?>
    <div id="ipcam_name"><?php echo $ipcam_name; ?></div>
<?php } ?>

<?php if ($ipcam_overflow_x_hidden == "true") { echo "<style> #ipcam_wrapper { overflow-x: hidden !important; overflow-y: visible } </style>"; } ?>
<?php if ($ipcam_overflow_y_hidden == "true") { echo "<style> #ipcam_wrapper { overflow-y: hidden !important; height: 100%; overflow-x: visible} </style>"; } ?>
<?php if ($ipcam_max_width_100 == "true") { echo "<style> #ipcam_image { max-width: 100% } </style>"; } ?>
<?php if ($ipcam_max_height_100 == "true") { echo "<style> #ipcam_image { max-height: 100% } </style>"; } ?>
