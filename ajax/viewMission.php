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
		$rowt['id'] = $row[0];
		$rowt['name'] = $row[1];
		$rowt['street'] = $row[2];
		$rowt['city'] = $row[3];
		$rowt['zipcode'] = $row[4];
		$rowt['description'] = $row[5];
		$rowt['start_date'] = $row[6];
		$rowt['end_date'] = $row[7];
		$rowt['badge_title'] = $row[8];
		$rowt['reward'] = $row[9];
	}
	$returnable = $rowt;
	$output['data'] = $returnable;
	$output['err'] = FALSE;
	$output['msg'] = "Got data: $returnable";
	
	echo json_encode($output);
?>
