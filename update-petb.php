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
    // Get the form data
    $id = isset($_POST['id']) ? $_POST['id'] : null; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pet_type = $_POST['pet-type'];
    $reason = $_POST['reason'];

    $sql = "UPDATE adoption_applications SET name=?, email=?, phone=?, address=?, pet_type=?, reason=? WHERE id=?";
    
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sssssii", $name, $email, $phone, $address, $pet_type, $reason, $id);

        // Execute the query
        if ($stmt->execute()) {
            header("Location: success.php?update=success"); // Redirect on success
            exit();
        } else {
            echo "Error updating record: " . $stmt->error; // Use stmt->error for specific error
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}
$conn->close();
?>
