<?php 
include('./PHP/db_connection.php');
session_start();
if (isset($_SESSION['user_lrn'])) {
    $userLrn = $_SESSION['user_lrn'];

    // Check if the LRN exists in the database
    $sqlCheck = "SELECT COUNT(*) AS count FROM `stage1_level3` WHERE `LRN` = ?";
    $stmtCheck = $connection->prepare($sqlCheck);
    $stmtCheck->bind_param("s", $userLrn);
    $stmtCheck->execute();
    $resultCheck = $stmtCheck->get_result();
    $row = $resultCheck->fetch_assoc();

    if ($row['count'] == 0) {
        // If the LRN does not exist, insert a new record
        $sqlInsert = "INSERT INTO `stage1_level3` (`LRN`, `PART1`, `PART2`, `PART3`, `PART4`) VALUES (?, 0, 0, 0, 0)";
        $stmtInsert = $connection->prepare($sqlInsert);
        $stmtInsert->bind_param("s", $userLrn);

        if ($stmtInsert->execute()) {
        } else {
        }
        $stmtInsert->close();
    } else {
        // If the LRN exists, output a message
    }

    $stmtCheck->close();
} else {

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHYTHMIX MASTER</title>
    <link rel="stylesheet" href="./stages.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="hero">
        <div class="stage_title">
            <h2>STAGE 1 - LEVEL 3</h2>
        </div>
        <div class="stage_container">
        <?php
        include ("./stage3.php");
        ?>
        </div>
        </div>
        <?php
        include ("./assets/__settings.php");
        ?>
</body>


</html>