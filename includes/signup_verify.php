        <?php

        if(isset($_POST['signup-btn'])){
            error_reporting(0);

            require('dbconnection.php');

            $userid = $_POST['userid'];
            $pwd = $_POST['pwd'];
            $email = $_POST['email'];
            $id = $_POST['id'];
            $retypepwd = $_POST['retype-pwd'];
            $secquest = $_POST['secquest'];
            $secans = $_POST['secans'];

            // check if mail and userid valid
            if (!preg_match("/^[a-zA-z0-9]*$/",$userid) && !filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[0-9]*$/",$id)){
                header("Location: ../signup.php?error=invalidmailuseridid");
                exit();                
            }
            // check if mail valid
            else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?error=invalidmail&userid=".$userid."&id=".$id);
                exit();                
            }
            // check if userid valid
            else if(!preg_match("/^[a-zA-z0-9]*$/",$userid)){
                header("Location: ../signup.php?error=invaliduserid&mail=".$email."&id=".$id);
                exit();                   
            }
            // check if pwd and retype-pwd match 
            else if($pwd !== $retypepwd){
                header("Location: ../signup.php?error=invalidpwd&mail=".$email."&userid=".$userid."&id=".$id);
                exit();                   
            }
            // check if id is numeric 
            else if(!preg_match("/^[0-9]*$/",$id)){
                header("Location: ../signup.php?error=invalidid&mail=".$email."&userid=".$userid);
                exit();   

            }            
            else{
                // check if username is taken
                $query = "select * from login_info where usernameUsers=?";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$query)){
                    header("Location: ../signup.php?error=sqlerror");
                    exit();                      
                }
                else{

                    mysqli_stmt_bind_param($stmt,"s",$userid);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $row = mysqli_stmt_num_rows($stmt);
                    if ($row > 0 )
                    {
                            header("Location: ../signup.php?error=useridtaken&mail=".$email."&id=".$id);
                            exit();                        
                    }
                    else{

                        //check if mail id registered
                        $query = "select * from login_info where emailUsers=?";
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$query)){
                            header("Location: ../signup.php?error=sqlerror");
                            exit();                      
                        }     
                        else{
                            mysqli_stmt_bind_param($stmt,"s",$email);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);
                            $row = mysqli_stmt_num_rows($stmt);  
                            if ($row > 0 )
                                {
                                    header("Location: ../signup.php?error=mailregistered&userid=".$userid."&id=".$id);
                                    exit();                        
                                } 
                            else{
                                //insert into database
                                $query = "insert into login_info (idUsers,usernameUsers,pwdUsers,emailUsers,securityquestion,securityanswer) values (?,?,?,?,?,?)";
                                $stmt = mysqli_stmt_init($conn);
                                if(!mysqli_stmt_prepare($stmt,$query)){
                                    header("Location: ../signup.php?error=sqlerror");
                                        exit();                      
                                }    
                                else{
                                    $hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
                                    mysqli_stmt_bind_param($stmt,"dsssss",$id,$userid,$hashedpwd,$email,$secquest,$secans);
                                    mysqli_stmt_execute($stmt);   
                                    header("Location: ../signup.php?signupdone=success");
                                    exit();                                                               
                                }                                
                            }                                                     
                        }                   


                    }

                 }

            }
        }
        else{
            header("Location: ../index.php");
            exit();            
        }
        


