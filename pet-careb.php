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

    $petName = $_POST["pet-name"];
    $ownerName = $_POST["owner-name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["loc"];
    $preferredDate = $_POST["appointment-date"];
    $preferredTime = $_POST["appointment-time"];
    $reason = $_POST["reason"];

    // Insert form data into the database
    $sql = "INSERT INTO vet_appointments (pet_name, owner_name, email, phone, location, preferred_date, preferred_time, reason) VALUES ('$petName', '$ownerName', '$email', '$phone', '$location', '$preferredDate', '$preferredTime', '$reason')";
    if ($conn->query($sql) === TRUE) {  
        header("Location: ../application-success.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
