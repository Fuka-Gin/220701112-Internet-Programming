<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzaweb";

// Creating a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failure: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNo = $_POST['mobile_number'];
    $timestamp = date('Y-m-d H:i:s');

    // Check if user already has a login record
    $checkUser = "SELECT * FROM userdetails WHERE mobile_number = '$phoneNo'";
    $result = $conn->query($checkUser);

    if ($result->num_rows > 0) {
        // If user exists, update the logged_in timestamp
        $updateQuery = "UPDATE userdetails SET logged_In = '$timestamp', status = 'logged_in' WHERE mobile_number = '$phoneNo'";
        if ($conn->query($updateQuery) === TRUE) {
            echo "Login timestamp updated successfully!";
            header("Location: /components/menu_page/menu.php");
            // exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        // If no record exists for the user, insert a new record
        $insertQuery = "INSERT INTO userdetails (mobile_number, logged_In, logged_Out, status) VALUES ('$phoneNo','$timestamp', NULL, 'logged_in')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "Login record created successfully!";
            header("Location: IP%20Project/components/menu_page/menu.php");
            // exit();
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    }
}
// Closing connection
$conn->close();
?>