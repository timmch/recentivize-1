<?php
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");

	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
	$trophies = mysql_query("SELECT missions.id, missions.badge_title FROM missions LEFT JOIN events ON missions.id=events.missions_id WHERE events.users_id=1 AND events.is_completed=1");

	$rowt = array();
	$returnable = array();
	while ($row = mysql_fetch_row($trophies)) {
		$rowt['id'] = $row[0];
		$rowt['title'] = $row[1];
		array_push($returnable, $rowt);
	}
	
	$output['data'] = $returnable;
	$output['err'] = FALSE;
	$output['msg'] = "Got data: $returnable";
	
	echo json_encode($output);
?>
