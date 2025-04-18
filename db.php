<?php

include 'conn.php';

$sql = "create database adopt";

if($conn->query($sql)===true){
    echo "database created success";
}
else{
    echo "created failed";
}

?>