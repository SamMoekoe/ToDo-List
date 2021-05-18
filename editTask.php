<?php
require('assets/includes/functions.php');

$id = $_POST['id'];
$listid = $_POST['listid'];
$name = $_POST['name'];
$description = $_POST['description'];
$status = $_POST['status'];

editTask($id, $listid, $name, $description, $status);

header("location: index.php");