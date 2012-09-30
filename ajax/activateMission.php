<?php
    session_start();
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$id = "'".$_SESSION['user_id']."'";  
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");
	$missionID = $_POST['id'];
	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
	$mission = mysql_query("INSERT INTO events ( users_id, groups_id, missions_id ) VALUES ( $id, NULL, $missionID )");
?>
