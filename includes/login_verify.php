<?php

if(isset($_POST['login-btn'])){

    require('dbconnection.php');

    error_reporting(0);
    $userid = $_POST["userid"];
    $pwd = $_POST["pwd"];
        $query = "select * from login_info where usernameUsers = ? or emailUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query)){
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss",$userid,$userid);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);
            if( $row = mysqli_fetch_assoc($res)){
                $pwd_verify = password_verify($pwd,$row['pwdUsers']);    

                if($pwd_verify == true){
                    session_start();
                    $_SESSION['username'] = $userid;
                    $_SESSION['id'] = $row['idUsers'];
                    header("Location: ../student_home.php");
                    exit();
                }
                else if($pwd_verify == false) {
                    header("Location: ../index.php?error=invalidpwd&userid=".$userid);
                    exit();
                }

                
            }
            else{
                header("Location: ../index.php?error=invaliduid");
                exit();
                
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
    // }
 }
 else{
     header("Location: ../index.php");
     exit();
 }

