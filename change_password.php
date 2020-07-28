
<?php

$email =$_GET['email'];
?>
<!DOCTYPE html>
<html lang="en">
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
    <div class="signupdiv">
    <form class="signup_form" action="./includes/password_change.php" method="post">

    <?php
        if(isset($_GET['pwdchanged']))
              {
                if($_GET['pwdchanged'] == 'success') {
                  echo '<p class="label">Password Reset Successful. Click <a href="./index.php">Here </a>to login</p>';
                  exit();
                }
              }    
    ?>

        <div class="close">
        <a href="./index.php" ><input type="button" value="X" class="close-btn"></a>
        </div>
              <div class="signup_form-item">
                <label class="signup_label" for="pwd">Password</label>
                <input class="signup_inputbox" type="password" name="pwd" id="pwd" placeholder=" ***********" required/>
              </div>
              <div class="signup_form-item">
  <!--               <label class="signup_label" for="retype-pwd">Retype Password</label>
                <input class="signup_inputbox" type="password" name="retype-pwd" id="retype-pwd" placeholder=" ***********" required/> -->
                <input type="text" id="hideemail" id="email" name="email" value=<?php echo $email;?>>
              </div>
        <div class="forgotpwd-btn-div">
              <input class="forgot-button" type="submit" value="Reset Password" name="reset-btn" id="reset-btn"/>
            </div>              
         
    </form>
    
    </div>
    </main>
  </div>
</body>
</html>