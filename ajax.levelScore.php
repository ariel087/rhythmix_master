<?php
include('./PHP/db_connection.php');

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if data is received via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the student ID and scores
    $studentId = $_POST['STUDENT_ID'];
    $scores = $_POST['scores'];

    // Ensure the scores array is properly formatted
    if (is_array($scores)) {
        // Extract scores from the first object in the scores array
        $part1 = $scores[0]['score1'] ?? null;
        $part2 = $scores[0]['score2'] ?? null;
        $part3 = $scores[0]['score3'] ?? null;
        $part4 = $scores[0]['score4'] ?? null;

        // Validate inputs (optional)
        if ($studentId && isset($part1, $part2, $part3, $part4)) {
            // Prepare the SQL query
            $sql = "UPDATE `stage1_level1` 
                    SET 
                        `PART1` = ?, 
                        `PART2` = ?, 
                        `PART3` = ?, 
                        `PART4` = ? 
                    WHERE `LRN` = ?";

            // Prepare the statement
            $stmt = $connection->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("dddds", $part1, $part2, $part3, $part4, $studentId);

                // Execute the query
                if ($stmt->execute()) {
                    echo json_encode(['status' => 'success', 'message' => 'Scores updated successfully.']);
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Failed to update scores.']);
                }
                $stmt->close();
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to prepare the statement.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid input data.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Scores data is not properly formatted.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}

// Close connection
$connection->close();
