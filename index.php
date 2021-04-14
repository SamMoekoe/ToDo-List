<?php
require("assets/includes/connection.php");

$query = $conn->prepare('SELECT * FROM lists ORDER BY id');
$query->execute();
// Counts how many lists there are
$count = $query->rowCount();

// Close connection with database
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a3078cd2a7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <title>ToDo</title>
</head>
<body>

    <div id='center-page'>

        <!-- Displays how many characters there is. When more get added the number changes. -->
        <header>
        <h1>Alle <?php echo $count ?> lijsten uit de database</h1>
        </header>

        <div id='all-lists'>
            <?php
        // Display the characters data
            foreach ($query as $row) {
                echo "<div class='lists'>
                <div class='info'>
                <div class='title'>$row[1]</div>
                <div class='description'>
                <div class='smalldesc'>$row[2]</div>
                <div class='DurationStart'> $row[3] - $row[4]</div>
                </div>
                </div>
                <a href='characterinfo.php?id=$row[0]' class='look'><i class='fas fa-search'></i> bekijk</a>
                <hr>
                </div>";
            }
            ?>
        </div>

        <?php include('assets/includes/footer.php') ?>
    </div>
</body>
</html>