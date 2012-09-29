<?php
// Connection's Parameters
$db_host='108.167.179.192';
$db_name='timmch_recentivize';
$db_username='timmch_root';
$db_password="recentivize";
$link = new mysqli($db_host, $db_username, $db_password,$db_name,3306);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");

	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
?>
