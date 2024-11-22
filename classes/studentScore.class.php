<?php

class StudentScore extends Db_connection {
    public function setStudentScore($LEVEL_ONE_SCORE, $STUDENT_ID) {
        $sql = "UPDATE `stage_one` SET `LEVEL_ONE_SCORE` = ? WHERE `STUDENT_ID` = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$LEVEL_ONE_SCORE,$STUDENT_ID]);
        return $stmt->rowCount() > 0 ? "Score updated successfully." : "Failed to update score.";
   
    }
    public function setStudentScore2($LEVEL_TWO_SCORE, $STUDENT_ID) {
        $sql = "UPDATE `stage_one` SET `LEVEL_TWO_SCORE` = ? WHERE `STUDENT_ID` = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$LEVEL_TWO_SCORE,$STUDENT_ID]);
        return $stmt->rowCount() > 0 ? "Score updated successfully." : "Failed to update score.";
   
    }
    public function setStudentScore3($LEVEL_THREE_SCORE, $STUDENT_ID) {
        $sql = "UPDATE `stage_one` SET `LEVEL_THREE_SCORE` = ? WHERE `STUDENT_ID` = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$LEVEL_THREE_SCORE,$STUDENT_ID]);
        return $stmt->rowCount() > 0 ? "Score updated successfully." : "Failed to update score.";
   

    }

}


?>
