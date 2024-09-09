<?php
require_once "config.php";

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

      // Check if password and confirm password match
      if ($password !== $confirmPassword) {
        die("Password and confirm password do not match");
    }

    // Check if username and email are unique
    $query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        die("Username or email already exists");
    }

    // Insert user into the database
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        header("Location: login.html");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }


}
?>