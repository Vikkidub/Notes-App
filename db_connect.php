<?php

// credentials
$db_host = "localhost";
$db_user = "user";
$db_pass = "";
$db_name = "note";

// establish connection with db
$db_connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// test connection
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}