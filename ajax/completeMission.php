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
	$result = mysql_query("SELECT points FROM users where id = $id");
	$result2 = mysql_query("SELECT points FROM missions where id = $missionID");
	$row = mysql_fetch_row($result);
	$row2 = mysql_fetch_row($result2);
	echo($row[0]);
	echo($row2[0]);
	$points = $row[0] + $row2[0];
	$mission = mysql_query("UPDATE events SET is_completed = 1 where events.users_id = $id AND events.missions_id = $missionID");
	$mission = mysql_query("UPDATE users SET is_completed = 1 where events.users_id = $id AND events.missions_id = $missionID");
	$mission = mysql_query("UPDATE users SET points = $points where users.id = $id");
?>
