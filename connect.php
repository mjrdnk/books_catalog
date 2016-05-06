<?php
	// LOCAL SETTINGS
	// please put your data as a following variables
	$host = "localhost";

	// user ("root" by default)
	$db_user = "root";

	// pass (empty string "" by default)
	$db_password = "";

	// please use attached file: books_catalog.sql
	$db_name = "books_catalog";

	// connection is populated in all controllers as a parameter
	$connection = @new mysqli($host, $db_user, $db_password, $db_name);

	// Check connection
	if (!$connection) {
	    die("Connection failed: " . mysqli_connect_error());
	}

?>