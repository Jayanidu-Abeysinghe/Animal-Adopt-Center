<?php
session_start();

$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "adopt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean_input($_POST['username']);
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);
    
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("ss", $email, $hashed_password);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['email'] = $email;
            header("Location: ../home.php");  // Redirect to dashboard
            exit();  // Exit to prevent further script execution
        } else {
            echo "Signup failed. Try again.";
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Failed to prepare the SQL statement.";
    }
}

// Close the connection
$conn->close();
?>
