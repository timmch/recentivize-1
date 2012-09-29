<?php


// Require your php that connects to the database, etc

//
	$data = "some cool data like this";

		
	$output['data'] = $data;
	$output['err'] = FALSE;
	$output['msg'] = "Got data: $data";
	echo json_encode($output);
?>