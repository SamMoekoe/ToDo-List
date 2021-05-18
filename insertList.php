<?php
require('assets/includes/functions.php');

$name = $_POST['name'];
$description = $_POST['description'];

?>

<?php
 insertList($name, $description);

 header("Location: index.php"); 
?>