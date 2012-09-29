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
	<div id="content">
		<div id="user">
			<div class="nameInfo">
				Welcome <span class="name">(name here)</span>
			</div>
			<div class="userInfo">
				<div class="avatar">
					avatar
				</div>
				<div class="city">
					city
				</div>
			</div>
			<div class="levelInfo">
				<div class="heading">Level</div>
				<div class="levelIndicator">
					<div class="level1 level highlight"></div>
					<div class="level2 level"></div>
					<div class="level3 level"></div>
					<div class="level4 level"></div>
					<div class="level5 level"></div>
				</div>
			</div>
			<div class="goldInfo">
				<div class="heading">Gold)</div>
				<div class="gold">5000</div>
			</div>
		</div>
		<div id="missions">
			<div class="active">
				Active missions
			</div>
			<div class="available">
				Available missions
			</div>
			<div class="completed">
				Completed missions
			</div>
		</div>
	</div>
</div>
</body>