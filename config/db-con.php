<?php

ob_start(); // Turns on output buffering 

if (!isset($_SESSION)) {
    session_start();
}


$timezone = date_default_timezone_set("Indian/Mauritius"); // To set default timezone

$con = mysqli_connect("184.168.102.133", "anzar", "anzarwebworks", "rise-test"); // Connection variable for connecting to databse


if (mysqli_connect_errno()) {

    // Checking for any errors while establishing a connection

    echo "Failed to connect: " . mysqli_connect_errno();
}
