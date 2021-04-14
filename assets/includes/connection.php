<?php
// server information
$host = "localhost";
$username = "root";
$password = "mysql";
$database = "todo_list";

try {
    $conn = new PDO("mysql: host=$host;dbname=$database;", "$username", "$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected";
} catch (PDOException $e) {
    die("Something went wrong with the database.");
    $e->getMessage();
}