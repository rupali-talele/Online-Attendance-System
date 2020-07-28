<?php
if(!isset($_POST['frgtpwd-button'])){
    header("Location: ./index.php");
    exit();
}

$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);

$url = "https://localhost/Attendance_System/create_new_password.php?selector=".$selector."&validator=".bin2hex($token);