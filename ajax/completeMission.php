<?php
    session_start();
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");
	$id = "'".$_SESSION['user_id']."'";  
	$missionID = $_POST['id'];
	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
	$mission = mysql_query("UPDATE events SET is_completed = 1 where events.users_id = $id AND events.missions_id = $missionID");
?>
