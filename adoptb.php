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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $petType = $_POST["pet-type"];
    $reason = $_POST["reason"];

    $sql = "INSERT INTO adoption_applications (name, email, phone, address, pet_type, reason) VALUES ('$name', '$email', '$phone', '$address', '$petType', '$reason')";
    if ($conn->query($sql) === TRUE) {  
        header("Location: ../application-success.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
