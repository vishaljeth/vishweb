<?php
session_start(); // Start the session
require('./connect.php');
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $Email = $_POST['email'];
    $Password = $_POST['pwd'];

    // Check if email already exists
    $emailCheck = $conn->prepare("SELECT * FROM singup WHERE `email` = ? AND `password` = ?");
    $emailCheck->bind_param("ss", $Email, $Password);
    $emailCheck->execute();
    $result = $emailCheck->get_result();

    if ($result->num_rows == 1) {
        header('Location: courses.php');
        $_SESSION['login'] = true;
        } 
         else {
            $_SESSION['login'] = false;
            echo "<script>alert('Something went wrong')</script>";  
            header('Location: login.html');
    }
}
?>

