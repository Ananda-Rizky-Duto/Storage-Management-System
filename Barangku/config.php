<?php
	$host = "localhost";
	$port = "5432";
	$dbname = "barangku";
	$user = "postgres";
	$password = "user";
	$db = pg_connect( "host=$host port=$port dbname=$dbname user=$user password=$password" );
     
    if (!$db){
		echo "Database gagal dibuka";
	}
	else {
        session_start();
	}
	
?>
