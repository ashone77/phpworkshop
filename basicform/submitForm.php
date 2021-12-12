<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "student";

$studentName = $_POST['studentName'];
$rollNo = $_POST['rollNo'];

// created a mysql object named 'conn'
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else {
        echo "Connection Success!";
        echo "Sudent Name :".$studentName;

    }