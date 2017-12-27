<?php

	session_start();
	$hn="localhost";
    $un="root";
    $pass="";
    $db="db_ead";
    $conn = new mysqli($hn, $un, $pass, $db);
    //connect Database
    if ($conn->connect_error) die($conn->connect_error);
    error_reporting(0);
?>