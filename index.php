<html>
<head>
	<title>Recentivize</title>
	
	<?php require_once('initialize.php'); ?>
	
	<!-- Include jQuery Style Sheets -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo WEB_URL; ?>css/smoothness/jquery-ui-1.8.19.custom.css" />
	
	<meta name="viewport" content="width=device-width; initial-scale=0.5; maximum-scale=0.5; user-scalable=0;" />
	
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
	<div id="mainContainer">
		<div id="navigationHeader">nav header</div>
		<div id="profilePage" class="mainPage">
			<div id="user">
				<div class="nameInfo">
					Welcome <span class="name"></span>
				</div>
				<div class="basicInfo">
					<div class="avatar">
						avatar
					</div>
					<div class="city">
					</div>
				</div>
				<div class="levelInfo">
					<div class="heading">Level</div>
					<div class="levelIndicator">
						<div class="level1 level"></div>
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
					<div class="heading">Active missions</div>
					<div class="missionList">
						<div class="mission odd">row 1</div>
						<div class="mission even">row 2</div>
						<div class="mission odd">row 3</div>
						<div class="mission even">row 4</div>
						<div class="mission odd">row 5</div>
						<div class="mission even">row 6</div>
						<div class="mission odd">row 7</div>
					</div>
				</div>
				<div class="available">
					<div class="heading">Available missions</div>
					<div class="missionList">list</div>
				</div>
				<div class="completed">
					<div class="heading">Completed missions</div>
					<div class="missionList">list</div>
				</div>
			</div>
			<div id="trophies">
				<div class="heading">Your trophies</div>
				<div class="trophyList">
					<div class="trophy">1</div>
					<div class="trophy">2</div>
					<div class="trophy">3</div>
				</div>
			</div>
		</div>
		<div id="missionPage" class="mainPage">
			the mission page!
		</div>
	</div>
</div>
</body>