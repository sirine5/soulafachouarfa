<?php

$host = "locahost";
$username = "root";
$password = "";
$dbname = "ecours";

$mysql = new $mysqli($host, $username, $password, $dbname );

if ($conn->connect_errno) {
    die("Connection error: " . $conn->connect_error);
}

return $conn;
