<?php
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");

	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
	$activeMissions = mysql_query("SELECT missions.id, missions.name FROM missions LEFT JOIN events ON missions.id=events.missions_id WHERE events.users_id=1 AND events.is_completed=0");
	$completedMissions = mysql_query("SELECT missions.id, missions.name FROM missions LEFT JOIN events ON missions.id=events.missions_id WHERE events.users_id=1 AND events.is_completed=1");
	$availableMissions = mysql_query("SELECT missions.id, missions.name FROM missions LEFT JOIN events ON events.missions_id=missions.id WHERE missions.id NOT IN (SELECT missions_ID FROM events WHERE users_id=1)");

	$returnable = array();
	$rowt = array();
	$activeM = array();
	$completedM = array();
	$availableM = array();
	while ($row = mysql_fetch_row($activeMissions)) {
		$rowt['id'] = $row[0];
		$rowt['name'] = $row[1];
		array_push($activeM, $rowt);
	}
	
	while ($row = mysql_fetch_row($completedMissions)) {
		$rowt['id'] = $row[0];
		$rowt['name'] = $row[1];
		array_push($completedM, $rowt);
	}
	
	while ($row = mysql_fetch_row($availableMissions)) {
		$rowt['id'] = $row[0];
		$rowt['name'] = $row[1];
		array_push($availableM, $rowt);
	}	
	
	$returnable = array(
		'active' => $activeM,
		'completed' => $completedM,
		'available' => $availableM
	);
	$output['data'] = $returnable;
	$output['err'] = FALSE;
	$output['msg'] = "Got data: $returnable";
	
	echo json_encode($output);
?>
