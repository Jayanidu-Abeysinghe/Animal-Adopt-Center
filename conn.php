<?php

$server = 'localhost';
$username ='root';
$password ='';

$conn = new mysqli($server,$username,$password);

if($conn->connect_error){
    echo "failed";
}
else{
    echo "connection success";
}
?>