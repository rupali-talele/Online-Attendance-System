<?php

$servername = 'localhost';
$username = 'localhost';
$password = 'root123';
$database = 'attendance';

 $conn = mysqli_connect($servername,$username,$password,$database);

 
    if (!$conn){
        header("Location: ../index.php?error=sqlerror");
        exit();
    }