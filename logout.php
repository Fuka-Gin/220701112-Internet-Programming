<?php
session_start(); // Start the session

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; // Assume user_id is stored in the session

    // Database connection
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "pizzaweb"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failure: " . $conn->connect_error);
    }

    // Update the user's status and logged_out timestamp
    $timestamp = date("Y-m-d H:i:s");
    $sql = "UPDATE userdetails SET logged_out = '$timestamp', status = 'logged out' WHERE user_id = '$user_id'";

    if ($conn->query($sql) === TRUE) {
        // Destroy the session to log the user out
        session_destroy();
        echo "Logged out successfully.";
    } else {
        echo "Error: " . $conn->error;
    }

    // Closing connection
    $conn->close();
} else {
    echo "No user is logged in.";
}
?>
