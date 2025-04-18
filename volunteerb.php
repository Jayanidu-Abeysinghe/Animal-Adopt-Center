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
    // Gather form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $volunteeringArea = $_POST["volunteering-area"];
    $message = $_POST["message"];

    $sql = "INSERT INTO volunteering_application_data (name, email, phone, volunteering_area, message) VALUES ('$name', '$email', '$phone', '$volunteeringArea', '$message')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../application-success.php"); 
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
