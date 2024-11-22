<?php
include('./includes/auto-loader.include.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $STUDENT_ID = $_POST['STUDENT_ID'];
    $LEVEL_THREE_SCORE = $_POST['LEVEL_THREE_SCORE'];

    $studentScore = new StudentScore();
    echo $studentScore->setStudentScore3($LEVEL_THREE_SCORE, $STUDENT_ID);
}
