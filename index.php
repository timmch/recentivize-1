<?php
	session_start();
	require_once('initialize.php');		
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192";
	$id = "'".$_SESSION['user_id']."'";  
	$dbhandle = mysql_connect($hostname, $username, $password);
	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
		if(!isset($_SESSION['loggedin'])){
			header("Location: login.php");
        	exit;
		}
?>


<html>
<head>
	<title>Recentivize</title>
	
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
	
	<!-- Include API Scripts -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAlNv-7LCziTkwRczpj4wLO-e6OUDOMKUY&sensor=false"></script>
	
	<!-- Include Our Scripts -->
	<script type="text/javascript" charset="utf-8" src="<?php echo WEB_URL; ?>scripts/index.js"></script>
	
	<!-- Give .js files access to WEB_URL & userID variables -->
	<script type="text/javascript">var WEB_URL = '<?php echo WEB_URL; ?>';</script>
	<script type="text/javascript">var userID = '<?php echo $_SESSION['user_id']; ?>';</script>
</head>
<body>
<div id="mainWindow">
	<div id="mainContainer">
		<div id="navigationHeader">
			<div class="backButton"></div>
			<div class="logo"></div>
		</div>
		<div id="profilePage" class="mainPage">
			<div id="user">
				<div class="nameInfo">
					<div class="name"></div>
					<div class="logout">LOGOUT</div>
				</div>
				<div class="basicInfo">
					<div class="avatar"></div>
					<div class="city"></div>
				</div>
				<div class="levelInfo">
					<div class="heading">Level&nbsp;<span class="levelTitle">(Title)</span></div>
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
					<div class="gold"></div>
				</div>
				<div id="friends">
					<div class="heading">Your Group</div>
					<div class="groupBox">
						<div class="friend">John</div>
						<div class="friend">Nick</div>
						<div class="friend">Tim</div>
						<div class="friend">Diane</div>
						<div class="friend">Ken</div>
					</div>
				</div>
			</div>
			<div id="missions">
				<div class="active">
					<div class="heading">Active Missions</div>
					<div class="missionList"></div>
				</div>
				<div class="available">
					<div class="heading">Available Missions</div>
					<div class="missionList"></div>
				</div>
				<div class="completed">
					<div class="heading">Completed Missions</div>
					<div class="missionList"></div>
				</div>
			</div>
			<div id="trophies">
				<div class="heading">Your Badges</div>
				<div class="trophyList">
				</div>
			</div>
		</div>
		<div id="missionPage" class="mainPage">
			<div id="missionName"></div>
			<div id="descriptionInfo">
				<div class="description"></div>
			</div>
			<div id="missionInfo">
				<div class="timeLeftInfo">
					<div class="heading">Time Remaining</div>
					<div class="timeLeft"></div>
				</div>
				<div id="mapInfo">
					<div class="addressInfo">
						<div class="heading">Location</div>
						<div class="address"></div>
					</div>
					<div id="mapCanvas"></div>
				</div>
				<div class="rewardsInfo">
					<div class="heading">Earn this Badge</div>
					<div class="badgeTitle"></div>
					<div class="badge"></div>
					<div class="heading">Earn this Reward</div>
					<div class="reward"></div>
				</div>
				
			</div>
			<div id="missionButtons">
				<div class="accept button">Accept Mission</div>
				<div class="complete button">Complete Mission</div>
				<div class="message"></div>
			</div>
		</div>
	</div>
</div>
</body>
<?php
?>
