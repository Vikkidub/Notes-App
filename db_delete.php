<?php 

// get user input from dashboard.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $note_id = $_POST["input_id"];
}

// establish connection with db
include_once "db_connect.php";

// query and sql injection prevention
$query = "DELETE FROM notes WHERE id = ?";
$prepared_query = mysqli_prepare($db_connect, $query);
mysqli_stmt_bind_param($prepared_query, "i", $note_id);

mysqli_stmt_execute($prepared_query);
mysqli_stmt_close($prepared_query);

// return to dashboard
header("location: view/dashboard.php");

// close connection
mysqli_close($db_connect);
