<?php
include('./includes/auto-loader.include.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $STUDENT_ID = $_POST['STUDENT_ID'];
    $LEVEL_TWO_SCORE = $_POST['LEVEL_TWO_SCORE'];

    $studentScore = new StudentScore();
    echo $studentScore->setStudentScore2($LEVEL_TWO_SCORE, $STUDENT_ID);
}
