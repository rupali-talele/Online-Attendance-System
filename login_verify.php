<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- header -->
      <div>   
     <?php include './header.php';  ?>
    </div>    
    <div class="content">
    <main class="main container">
    <div class="message">
<?php

error_reporting(0);
$userid = $_POST["userid"];
$pwd = $_POST["pwd"];

$servername = 'localhost';
$username = 'localhost';
$password = 'root123';
$database = 'attendance';

 $conn = mysqli_connect($servername,$username,$password,$database);

 if (!$conn){
?>
        
    <p> Cannot Login. Please try again later</p>
<?php
 }
 else{
    // echo $userid;
    // echo $pwd;
    $query = "select * from login_info where userid = '$userid' and pwd= '$pwd'";
    // echo $query;
    $res = mysqli_query($conn,$query);
    // echo $res;
    // echo mysqli_num_rows($res);
    if( mysqli_num_rows($res) > 0){
        echo "Login Successful";
    }
    else{
        echo "Invalid username or password";
    }
    mysqli_close($conn);
 }
?>

    </div>
    </main>
    </div>
    

    <div>
      <?php include 'footer.php' ?>
    </div>      
</body>
</html>
