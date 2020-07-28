            <?php
            if(isset($_POST['next'])){ 
                require('./includes/dbconnection.php');
                $query = 'select securityquestion from login_info where emailUsers ="'.$_POST["email_forgotpwd"].'";';
                
                if( $result = mysqli_query($conn,$query))
                {
                    $rows = mysqli_num_rows($result);
                    if($rows>0)
                    {                    
                        $row = mysqli_fetch_row($result);
                        $email = $_POST['email_forgotpwd'];
                    }
                    else
                    {
                        header("Location: forgot_password.php?error=unregisteredemail");
                        exit();
                    }
                }
            }
            ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Attendance Management System</title>
    <link rel="stylesheet" href="style.css" />
    
  </head>
  <body>
    <!-- header -->
    <div>   
     <?php include './header.php';  ?>
    </div>
	<!-- content -->
    <div class="content">
    <main class="main container">

    	<div class="forgotpwddiv">

    		<form class="forgotpwd_form" action="./includes/password_verify.php" method="post">
                <div class="close">
                  <a href="./index.php" ><input type="button" value="X" class="close-btn"></a>
                </div>  
            <?php
                if(isset($_GET['error'])){
                  if($_GET['error'] == 'incorrectans'){
                    echo '<p class="errormsg">Incorrect Answer to the Security Question. Please Try Again!</p>';
                    $email = $_GET['email'];
                    require('./includes/dbconnection.php');
                    $query = 'select securityquestion from login_info where emailUsers ="'.$email.'";';
                    
                    if( $result = mysqli_query($conn,$query))
                    {
                        $row = mysqli_fetch_row($result);
                    }                   
                  }
              }
            ?> 

                <div class="forgotpwd-item forgotpwd-btn-div">
                    <p class="forgotpwd_label">Answer your security question</p>
                </div>
    			<div class="forgotpwd-item">

    			
                    
    			

    			<label class="forgotpwd_label"><?php echo $row[0]; ?></label>
    			<input class="forgotpwd_inputbox" type="text" name="secans" required/>
                <input type="text" id="hideemail" id="email" name="email" value=<?php echo $email;?>>
				</div>		

				<div class="forgotpwd-btn-div">
            	<input class="forgot-button" type="submit" value="Reset Password" name="forgotpwd-btn"/>
        		</div>
    		</form>
            <?php
             
            ?>
    	</div>
    </main>
    </div>

	<!-- footer -->
    <div>
      <?php include 'footer.php' ?>
    </div> 

</body>
</html>