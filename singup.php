<?php
session_start(); // Start the session

require('./connect.php');
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $FirstName = $_POST['fnm'];
    $LastName = $_POST['lnm'];
    $Email = $_POST['email'];
    $Contact = $_POST['contact'];
    $Password = $_POST['pwd'];
    $ConfirmPassword = $_POST['confirm_pwd'];

    // Check if email already exists
    $emailCheck = $conn->prepare("SELECT * FROM singup WHERE email = ?");
    $emailCheck->bind_param("s", $Email);
    $emailCheck->execute();
    $result = $emailCheck->get_result();

    if ($result->num_rows == 0) {
        if ($Password === $ConfirmPassword) {
            // Prepare an insert statement
            $stmt = $conn->prepare("INSERT INTO singup (first_name, last_name, email, contact, password) VALUES (?, ?, ?, ?, ?)");

            // Bind parameters
            $stmt->bind_param("sssss", $FirstName, $LastName, $Email, $Contact, $Password);

            // Execute the statement
            if ($stmt->execute()) {
                $_SESSION['register'] = true;
                header('Location: login.html'); // Redirect to login page
                exit(); // Ensure no further code is executed
            } else {
                echo "Error: " . $stmt->error; // Output error
                $_SESSION['register'] = false;
            }

            // Close statement
            $stmt->close();
        } else {
            echo "<script>alert('Passwords do not match!')</script>";
        }
    } else {
        echo "<script>alert('Email already exists!')</script>";
    }
}
?>

