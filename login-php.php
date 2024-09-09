<?php
require_once "config.php";
session_start();

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $_SESSION['username'] = $username;

    // Check if username and email are unique
    $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        header("Location: 1st-home.php");
        exit;
    }
    else {
        // Invalid credentials
        echo 'Invalid username or password.';}

}
?>