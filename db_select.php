<?php

// establish connection with db
include_once "db_connect.php";

// query
$query = "SELECT * FROM notes;";
$result = mysqli_query($db_connect, $query);

// manage result
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . ", Title: " . $row['title'] . ", Author: " . $row['author'] . ", Text: " . $row['text'] . ", Date: " . $row['date'] . "<br>";
}

// close connection
mysqli_close($db_connect);