<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHYTHMIX MASTER</title>
    <link rel="stylesheet" href="./levels_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
<?php
        
        include_once("./assets/profile.php");
        ?>
    <div class="hero">
        
        <div class="center_container">
            <img src="./assets/images/game_name.png" alt="">

            <div class="levels_container">
                <div class="boxes box1">
                    <div class="left">
                        <img src="./assets/images/Man playing Classic music 2.gif" alt="">
                    </div>
                    <div class="right">
                        <h2>STAGE 1</h2>
                        <p>Simple Time Signiture</p>
                        <a href="./level_stage1.php">

                            <button>LET'S GO</button>
                            </a>
                    </div>
                </div>
                <div class="boxes box2">
                <div class="left">
                        <img src="./assets/images/Man playing Classic music.gif" alt="">
                    </div>
                    <div class="right">
                        <h2>STAGE 2</h2>
                        <p>Simple Time Signiture</p>
                        <button>LET'S GO</button>
                    </div>
                </div>
            </div>


        </div>
        <?php
        include ("./assets/__settings.php");
        ?>
</body>

</html>