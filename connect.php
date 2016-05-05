<?php
	/*LOCAL SETTINGS*/
	/*// please put your data as a following variables
	$host = "localhost";

	// user ("root" by default)
	$db_user = "root";

	// pass (empty string "" by default)
	$db_password = "";

	// please use attached file: books_catalog.sql
	$db_name = "books_catalog";

	// connection is populated in all controllers as a parameter
	$connection = @new mysqli($host, $db_user, $db_password, $db_name);*/

	$url = getenv('mysql://uws6zai04xyiu8rt:jlzulz1fdxgjsz46@d5x4ae6ze2og6sjo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/i444kxibl2m1vpmo');
	$dbparts = parse_url($url);

	$hostname = $dbparts['d5x4ae6ze2og6sjo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
	$username = $dbparts['uws6zai04xyiu8rt'];
	$password = $dbparts['jlzulz1fdxgjsz46'];
	$database = ltrim($dbparts['./books_catalog.sql'],'/');

	// Create connection
	$connection = mysqli_connect($hostname, $username, $password, $database);

	// Check connection
	if (!$connection) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connection was successfully established!";

?>