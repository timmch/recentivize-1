<?php
?>
<html>
<head>
	<title>Recentivize</title>
	<!-- <?php require_once('initialize.php'); ?> -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo WEB_URL; ?>css/login.css" />		
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo WEB_URL; ?>css/bootstrap.css" />	
	<!-- Include jQuery Style Sheets -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo WEB_URL; ?>css/smoothness/jquery-ui-1.8.19.custom.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo WEB_URL; ?>css/jquery.qtip.min.css" />
	
	<!-- Include Our Style Sheets -->

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo WEB_URL; ?>css/main.css" />
	<meta name="viewport" content="width=device-width; initial-scale=0.5; maximum-scale=0.5; user-scalable=0;" />
	
	<!-- Include jQuery Scripts -->
	<script type="text/javascript" charset="utf-8" src="<?php echo WEB_URL; ?>js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?php echo WEB_URL; ?>js/jquery-ui-1.8.19.custom.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?php echo WEB_URL; ?>js/jquery.qtip.min.js"></script>
	
	<!-- Include Our Scripts -->
	<script type="text/javascript" charset="utf-8" src="<?php echo WEB_URL; ?>scripts/index.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?php echo WEB_URL; ?>scripts/login.js"></script>
	
	<!-- Give .js files access to WEB URL variable -->
	<script type="text/javascript">var WEB_URL = '<?php echo WEB_URL; ?>';</script>
	<script type="text/javascript"> 
		// Login transitions
		$("#loginNav a").click(function() {
			$("#loginBox").slideToggle('fast');
			$("#loginNav a").toggleClass('loginBg');
		});
	</script>
</head>
<body>
<?php
?>
