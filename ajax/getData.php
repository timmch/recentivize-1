<?php
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");

	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
	$data = mysql_query("SELECT * FROM users");

	$returnable;
	while ($row = mysql_fetch_row($data)) {
		$rowt['id'] = $row[0];
		$rowt['first_name'] = $row[1];
		$rowt['last_name'] = $row[2];
		array_push($returnable, $rowt);
	}
	echo($returnable[0]['first_name']);
	echo("//");

	//echo($users_name);
	$output['data'] = $user;
	$output['err'] = FALSE;
	$output['msg'] = "Got data: $user";
	
	echo json_encode($output);
?>
