<?php
require('assets/includes/functions.php');

$listid = $_POST['listid'];
$name = $_POST['name'];
$description = $_POST['description'];
$status = $_POST['status'];
?>


<?php

 insertTask($listid, $name, $description, $status);

 header("Location: index.php"); 
?>