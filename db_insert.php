<?php

// get user input values from note.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $text = $_POST["text"];
}

// establish connection with db
include_once "db_connect.php";

// query and sql injection prevention
$query = "INSERT INTO notes (title, author, text) VALUES (?, ?, ?)";
$prepared_query = mysqli_prepare($db_connect, $query);
mysqli_stmt_bind_param($prepared_query, "sss", $title, $author, $text);

$result = mysqli_stmt_execute($prepared_query);

// Redirect user depending on result
if ($result) {
    header("Location: view/dashboard.php");
} else {
    echo "Error: " . mysqli_error($db_connect);
}

// close statement
mysqli_stmt_close($prepared_query);

// close connection
mysqli_close($db_connect);
