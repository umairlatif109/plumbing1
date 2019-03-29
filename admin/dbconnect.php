<?php


	error_reporting( ~E_DEPRECATED & ~E_NOTICE );

	
	$host = "localhost";
    $user = "root";
    $pass = "";
    $databaseName = "test";
    

    $conn = mysqli_connect($host, $user, $pass, $databaseName);

	if ( !$conn ) {
		die("Connection failed : " . mysqli_error());
	}