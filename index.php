<html>
<head>
	<title>Spestle</title>
	
	<?php require_once('initialize.php'); ?>
	
	<!-- Include jQuery Style Sheets -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo WEB_URL; ?>css/smoothness/jquery-ui-1.8.19.custom.css" />
	
	<!-- Include Our Style Sheets -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo WEB_URL; ?>css/main.css" />
	
	<!-- Include jQuery Scripts -->
	<script type="text/javascript" charset="utf-8" src="<?php echo WEB_URL; ?>js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?php echo WEB_URL; ?>js/jquery-ui-1.8.19.custom.min.js"></script>
	
	<!-- Include Our Scripts -->
	<script type="text/javascript" charset="utf-8" src="<?php echo WEB_URL; ?>scripts/index.js"></script>
	
	<!-- Give .js files access to WEB URL variable -->
	<script type="text/javascript">var WEB_URL = '<?php echo WEB_URL; ?>';</script>
</head>
<body>
<div id="mainWindow">
	<div id="testData">
		my data from php goes here
	</div>
</div>
</body>