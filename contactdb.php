<?php
session_start(); // Start the session

require('./connect.php');
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $Name = $_POST['name'];
    $Email = $_POST['gmail'];
    $Contact = $_POST['contact'];
    $Query = $_POST['qry'];
    $test="hello";
    if (empty($Name) || empty($Email) || empty($Contact) || empty($Query)) {
        echo "please fill the data";
        
    } elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "Email format galat hai.";
        
    } else {
        // Prepare statement
        $stmt = $conn->prepare("INSERT INTO contact (name, email, contact, query) VALUES (?, ?, ?, ?)");
        
        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("ssss", $Name, $Email, $Contact, $Query);
            // Execute the statement
            if ($stmt->execute()) {
                $_SESSION['contactus'] = true;
                header('Location: login.html'); // Redirect to login page
                exit(); // Ensure no further code is executed
        
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Statement prepare karne mein error: " . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>


