<?php
include_once("./db_connection.php");
session_start();
// Set the content type to application/json
header('Content-Type: application/json');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the POST data
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Hash the password using MD5 (note: consider using a more secure hashing algorithm like bcrypt or Argon2)
    $hashed_password = md5($password);
    
    // Escape the username to prevent SQL injection
    $escaped_username = mysqli_real_escape_string($connection, $username);
    
    // Prepare the SQL query
    $sql_user = "SELECT * FROM `users` WHERE `LRN` = '$escaped_username' AND `PASSWORD` = '$hashed_password'";
    $query_user = mysqli_query($connection, $sql_user);
    
    // Check for database errors
    if (!$query_user) {
        $response = [
            'status' => 'error',
            'message' => 'Database query failed: ' . mysqli_error($connection)
        ];
    } else {
        // Check if user exists
        if (mysqli_num_rows($query_user) > 0) {

            $row = mysqli_fetch_array($query_user);

            $user_lrn = $row['LRN'];
            $_SESSION['user_lrn'] = $user_lrn;
            $response = [
                'status' => 'success',
                'message' => 'Data received successfully',
                'username' => $username
            ];
        } else {
            $response = [
                'status' => 'failed',
                'message' => 'Invalid username or password'
            ];
        }
    }
    
    // Send the JSON response
    echo json_encode($response);
} else {
    // Handle non-POST requests
    $response = [
        'status' => 'error',
        'message' => 'Invalid request method'
    ];

    // Send the JSON response
    echo json_encode($response);
}
?>
