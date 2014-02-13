<?php
	$mode = "kiosk";
	 
	if (isset($_GET["mode"]))
	{
		if ($_GET["mode"] == "instruction")
		{
			$mode = "instruction";
		}
		else
		{
			$mode = "kiosk";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thomas G. Carpenter Library</title>
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
  <link href="<?php echo base_url('assets/css/docs.css'); ?>" rel="stylesheet" media="all">
  <style>
  	body {
	  	background: url('/opac/assets/img/bg_opac.png');
  	}
  </style>
  <script src="<?php echo base_url('assets/js/jquery-2.0.3.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.backstretch.min.js'); ?>"></script>
</head>
<body>
  <?php echo $this->template->yield(); ?>

  <script type="text/javascript">
  	$(function() {
	  	$.backstretch("assets/img/bg_opac.png");
  	});
  </script>
</body>
</html>
