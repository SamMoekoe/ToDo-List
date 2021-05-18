<?php
require('assets/includes/functions.php');

$id = $_GET['id'];

deleteTask($id);

 header("Location: index.php");  
?> 