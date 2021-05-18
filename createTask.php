<?php
require('assets/includes/functions.php');
$conn =  openDatabaseConnection();
$listid = $_GET['listid'];
$time = date("Y-m-d h:i:sa");
?>


<form action="insertTask.php" method="POST" onSubmit= "window.close();">
  <input name="listid" type="hidden" Value="<?php echo $listid; ?>">
  <label for="name">Name</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="description">Description</label>
  <input type="text" id="description" name="description"><br><br>
  <input type="hidden" id="status" name="status" Value="onvoltooid"><br><br>
  <input type="submit">
</form>