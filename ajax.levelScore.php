<?php
include('./includes/auto-loader.include.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $STUDENT_ID = $_POST['STUDENT_ID'];
    $LEVEL_ONE_SCORE = $_POST['LEVEL_ONE_SCORE'];

    $studentScore = new StudentScore();
    echo $studentScore->setStudentScore($LEVEL_ONE_SCORE, $STUDENT_ID);
}
