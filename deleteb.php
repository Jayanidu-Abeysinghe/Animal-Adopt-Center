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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $adoption_id = $_POST['adoption-id'];

    $sql = "DELETE FROM adoption_applications WHERE id=?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $adoption_id);

    // Execute the query
    if ($stmt->execute()) {
        header("Location: success.php?delete=success"); 
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
}
$conn->close();
?>
