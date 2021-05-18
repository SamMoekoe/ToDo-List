<?php
require('assets/includes/functions.php');
$id = $_GET['id'];
deleteList($id);
header("Location: index.php");  
?> 