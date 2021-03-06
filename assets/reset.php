<?php

	include('../../../config/glancrConfig.php');

	$language = getConfigValue('language');

	putenv("LANG=$language");
	setlocale(LC_ALL, "$language.UTF-8");
	bindtextdomain('ipcam', GLANCR_ROOT ."/modules/ipcam/locale");
	textdomain('ipcam');
	bind_textdomain_codeset('ipcam', 'UTF-8');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title><?php echo _('module overview');?></title>
	<link rel="stylesheet" type="text/css" href="/config/css/main.css">
	<link rel="stylesheet" href="/config/bower_components/foundation-icon-fonts/foundation-icons.css" media="screen" title="no title" charset="utf-8">
</head>

<body>
	<header class="expanded row">
		<div class="small-12 columns site__title">
			<div class="row">
				<a href="/config">
					<i class="fi-home"></i>
				</a>
				<img src="/config/assets/glancr_logo.png" width="57" height="30" alt="GLANCR Logo" srcset="/config/assets/glancr_logo.png 57w, /config/assets/glancr_logo@2x.png 114w, /config/assets/glancr_logo@2x.png 171w">
				<a href="/wlanconfig/">
					<i class="fi-widget"></i>
				</a>
			</div>
		</div>
	</header>

	<main class="container">
		<section>
			<div class="row">
				<div class="small-12 columns">

					<h3><?php echo _("ipcam_title"); ?></h3>

					<p>
						<?php echo _("ipcam_reset_config_message"); ?>
					</p><br /><br />

					<a class="button expanded" href="/config/"><?php echo _("ipcam_reset_config_no"); ?></a>
					<a class="button expanded" href="resetConfig.php"><?php echo _("ipcam_reset_config_yes"); ?></a>

				</div>
			</div>
		</section>
	</main>
</body>
</html>
