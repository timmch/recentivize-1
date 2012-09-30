<?php
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");
	$missionID = $_POST['id'];
	$id = "'".$_SESSION['user_id']."'";
	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
	$mission = mysql_query("SELECT missions.id, missions.name, missions.street, missions.city, missions.zipcode, missions.description, missions.start_date, missions.end_date, missions.badge_title, missions.reward FROM missions WHERE id = $missionID");

	$activeMissions = mysql_query("SELECT missions.id FROM missions LEFT JOIN events ON missions.id=events.missions_id WHERE events.users_id=$id AND events.is_completed=0 AND missions.id = $missionID");
	$completedMissions = mysql_query("SELECT missions.id, missions.name FROM missions LEFT JOIN events ON missions.id=events.missions_id WHERE events.users_id=$id AND events.is_completed=1 AND missions.id = $missionID");
	$availableMissions = mysql_query("SELECT missions.id, missions.name FROM missions LEFT JOIN events ON events.missions_id=missions.id WHERE missions.id NOT IN (SELECT missions_ID FROM events WHERE users_id=$id) AND missions.id = $missionID");
	$activeMissions = mysql_fetch_row($activeMissions);
	$availableMissions = mysql_fetch_row($availableMissions);
	$completedMissions = mysql_fetch_row($completedMissions);
	$completedMissions = $completedMissions[0];
	$availableMissions = $availableMissions[0];
	$activeMissions = $activeMissions[0];
	$compare = array();
	if($activeMissions!= NULL)
	{
		$output['status'] = 'active';
	}
	elseif($completedMissions != NULL)
	{
		$output['status'] = 'complete';
	}
	else
	{
		$output['status'] = 'available';
	}
	$rowt = array();
	$returnable = array();
	while ($row = mysql_fetch_row($mission)) {
		$output['id'] = $row[0];
		$output['name'] = $row[1];
		$output['street'] = $row[2];
		$output['city'] = $row[3];
		$output['zipcode'] = $row[4];
		$output['description'] = $row[5];
		$output['start_date'] = $row[6];
		$output['end_date'] = $row[7];
		$output['badge_title'] = $row[8];
		$output['reward'] = $row[9];
	}
	$output['err'] = FALSE;
	
	echo json_encode($output);
?>
