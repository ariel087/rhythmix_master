<?php
include_once("./php/db_connection.php");
session_start();
$user = $_SESSION['user_lrn'];
$sql_user = "SELECT * FROM `users` WHERE `LRN` = '$user'";
 $query_user = mysqli_query($connection, $sql_user);

 $row_user = mysqli_fetch_array($query_user);
?>

<div class="profile_container">
    <div class="profile_avatar">
        <img src="./assets/images/avatar.png" alt="">
    </div>
    <div class="profile_name_section">
        <h2 class="name">Hi, <?php  echo explode(' ', $row_user['FULL_NAME'])[0]; ?>!</h2>
    </div>
</div>
<script>
function capitalizeLetterAtIndex(string, index) {
    if (index > string.length - 1 || index < 0) {
        return string; // Return the original string if the index is out of bounds
    }
    return string.slice(0, index) + string.charAt(index).toUpperCase() + string.slice(index + 1);
}

let nameElement = document.querySelector('.name'); // Select the .name element
let name = nameElement.innerHTML; // Get the name content
let capitalized = capitalizeLetterAtIndex(name, 4); // Capitalize letter at index 4

nameElement.innerHTML = capitalized;

// Select the .section element
function capitalizeLetterAtIndex1(string, index) {
    if (index > string.length - 1 || index < 0) {
        return string; // Return the original string if the index is out of bounds
    }
    return string.slice(0, index) + string.charAt(index).toUpperCase() + string.slice(index + 1);
}



let sectionElement = document.querySelector('.section');
let section = sectionElement.innerHTML; // Get the name content
let capitalized1 = capitalizeLetterAtIndex1(section, 11); // Capitalize letter at index 4

sectionElement.innerHTML = capitalized1;

</script>
