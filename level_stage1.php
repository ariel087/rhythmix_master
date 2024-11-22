<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHYTHMIX MASTER</title>
    <link rel="stylesheet" href="./levels_stage1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php

    // include_once ("./assets/profile.php");
    ?>
    <div class="hero">

        <div class="center_container">

            <img src="./assets/images/game_name.png" alt="">
            <p>Select the level you want to play.</p>
            <div class="levels_container">

                <a href="http://localhost/rhythmix_master/stages.php">
                    <div class="boxes box1">
                        <H2>LEVEL</H2>
                        <H1>1</H1>
                    </div>
                </a>
                <a href="#">

                    <div class="boxes box2">
                        <H2>LEVEL</H2>
                        <H1>2</H1>
                    </div>
                </a>
                <a href="#">

                    <div class="boxes box3">
                        <H2>LEVEL</H2>
                        <H1>3</H1>
                    </div>
                </a>
                <a href="#">

                    <div class="boxes box4">
                        <H2>LEVEL</H2>
                        <H1>4</H1>
                    </div>
                </a>
            </div>


        </div>
        <?php
        include ("./assets/__settings.php");
        ?>
</body>

</html>