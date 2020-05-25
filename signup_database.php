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

        $userid = $_POST['userid'];
        $pwd = $_POST['pwd'];

        $servername = 'localhost';
        $username = 'localhost';
        $password = 'root123';
        $database = 'attendance';

        $conn = mysqli_connect($servername,$username,$password,$database);

        if (!$conn){?>
        
            <p> Sign Up Failed. Please try again later</p>
        <?php
        }
        else{
            $query = "insert into login_info (userid,pwd) values('$userid','$pwd')";
            if(mysqli_query($conn,$query)){?>
                <p> Sign up successful!
                Click <a href="./index.php"> Here </a> to Login.
                </p>
        <?php
            }
            else{
                ?>
                <p> Sign Up Failed. Please try again later</p>
                <?php
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

