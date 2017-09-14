<?php

	include('../../../config/glancrConfig.php');

	setConfigValue("ipcam_url", "");
	setConfigValue("ipcam_name", "");
	setConfigValue("ipcam_overflow_x_hidden", "false");
	setConfigValue("ipcam_overflow_y_hidden", "false");
	setConfigValue("ipcam_max_width_100", "true");
	setConfigValue("ipcam_max_height_100", "true");
	setConfigValue("reload", "1");

	header("Location: /config/");

?>
