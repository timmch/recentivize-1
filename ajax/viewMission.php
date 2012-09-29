<?php
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");
	$missionID = $_POST['id'];
	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
	$mission = mysql_query("SELECT missions.id, missions.name, missions.street, missions.city, missions.zipcode, missions.description, missions.start_date, missions.end_date, missions.badge_title, missions.reward FROM missions WHERE id = $missionID");

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
	//$output['data'] = $returnable;
	$output['err'] = FALSE;
	$output['msg'] = "Got data: $returnable";
	
	echo json_encode($output);
?>
