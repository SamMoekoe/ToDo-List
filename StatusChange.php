<?php
require('assets/includes/functions.php');
$conn =  openDatabaseConnection();
$id = $_GET['id'];
$listid = $_GET['listid'];
$name = $_GET['name'];
$description = $_GET['description'];
$status = $_GET['status'];

if($status == "voltooid"){
   $status = "onvoltooid";
}else{
   $status = "voltooid";
}

echo $status;

editTask($id, $listid, $name, $description, $status);

header("location: index.php")
?>