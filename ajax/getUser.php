<?php
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");

	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
	$data = mysql_query("SELECT * FROM users WHERE id = 1");

	$returnable = array();
	$rowt = array();
	while ($row = mysql_fetch_row($data)) {
		$rowt['id'] = $row[0];
		$rowt['first_name'] = $row[1];
		$rowt['last_name'] = $row[2];
		$rowt['email'] = $row[3];
		$rowt['city'] = $row[4];
		$rowt['state'] = $row[5];
		$rowt['points'] = $row[6];
		if($row[6] > 400)
		{
			$rowt['level'] = 5;
			$rowt['level_title'] = "World Changer";
		}
		else if($row[6] > 300)
		{
			$rowt['level'] = 4;
			$rowt['level_title'] = "Contributor";
		}
		else if($row[6] > 200)
		{
			$rowt['level'] = 3;
			$rowt['level_title'] = "Community Impacter";
		}				
		else if($row[6] > 100)
		{
			$rowt['level'] = 2;
			$rowt['level_title'] = "Contributor";
		}
		else
		{
			$rowt['level'] = 1;
			$rowt['level_title'] = 'Beginner';
		}
		$rowt['coins'] = $row[7];
	}
	
	$output['data'] = $rowt;
	$output['err'] = FALSE;
	$output['msg'] = "Got data: $rowt";
	
	echo json_encode($output);
?>
