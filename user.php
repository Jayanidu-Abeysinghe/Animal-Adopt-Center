<?php

$server = 'localhost';
$username ='root';
$password ='';
$database = 'adopt';

$conn = new mysqli($server,$username,$password,$database);

if($conn->connect_error){
    echo "failed";
}
else{
    echo "connection success";
}

$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

$sql1 = "CREATE TABLE adoption_applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    pet_type ENUM('dog', 'cat') NOT NULL,
    reason TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

$sql2 = "CREATE TABLE vet_appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pet_name VARCHAR(255) NOT NULL,
    owner_name VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    location VARCHAR(255) NOT NULL,
    preferred_date DATE NOT NULL,
    preferred_time TIME NOT NULL,
    reason TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";


$sql3 = "CREATE TABLE volunteering_application_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    volunteering_area VARCHAR(100) NOT NULL,
    message TEXT,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";




if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


  
if ($conn->query($sql1) === TRUE) {
    echo "Table adoption_applications created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


  if ($conn->query($sql2) === TRUE) {
    echo "Table vet_appointments created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


  if ($conn->query($sql3) === TRUE) {
    echo "Table volunteering_application_data created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


  
  $conn->close();
  ?>

