<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "student";

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else {
        echo "Connection Success!";
    }