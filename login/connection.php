<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_3";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

    die("failed to connect!");
}
