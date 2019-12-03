<?php
/* Attempt to connect to database */
$link = pg_connect("host=localhost dbname=barangku user=postgres");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . "Error");
}

