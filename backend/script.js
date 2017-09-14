var ipcam_url;
var ipcam_name;
var ipcam_overflow_y_hidden;
var ipcam_overflow_x_hidden;
var ipcam_max_width_100;
var ipcam_max_height_100;
var ipcam_success = true;

$(document).ready(function() {

	$("#ipcam_save").click(function() {

    ipcam_success = true;

		ipcam_url = $("#ipcam_url").val();
		ipcam_name = $("#ipcam_name").val();
		ipcam_overflow_y_hidden = $("#ipcam_overflow_y_hidden").is(':checked');
		ipcam_overflow_x_hidden = $("#ipcam_overflow_x_hidden").is(':checked');
		ipcam_max_width_100 = $("#ipcam_max_width_100").is(':checked');
		ipcam_max_height_100 = $("#ipcam_max_height_100").is(':checked');

		$.post('setConfigValueAjax.php', {'key': 'ipcam_url', 'value': ipcam_url}).fail(function(){ ipcam_success = false });
		$.post('setConfigValueAjax.php', {'key': 'ipcam_name', 'value': ipcam_name}).fail(function(){ ipcam_success = false });
		$.post('setConfigValueAjax.php', {'key': 'ipcam_overflow_y_hidden', 'value': ipcam_overflow_y_hidden}).fail(function(){ ipcam_success = false });
		$.post('setConfigValueAjax.php', {'key': 'ipcam_overflow_x_hidden', 'value': ipcam_overflow_x_hidden}).fail(function(){ ipcam_success = false });
		$.post('setConfigValueAjax.php', {'key': 'ipcam_max_width_100', 'value': ipcam_max_width_100}).fail(function(){ ipcam_success = false });
		$.post('setConfigValueAjax.php', {'key': 'ipcam_max_height_100', 'value': ipcam_max_height_100}).fail(function(){ ipcam_success = false });
		$.post('setConfigValueAjax.php', {'key': 'reload', 'value': 1}).fail(function(){ ipcam_success = false });

		if (success) {
			$('#ok').show(30, function() {
				$(this).hide('slow');
			});
		} else {
      $('#error').show(30, function() {
				$(this).hide('slow');
			});
    }
	});
});
