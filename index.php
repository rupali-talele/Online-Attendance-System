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
      <div class="logindiv">
      <form class="login_form" action="./includes/login_verify.php" method="post">

      <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == 'sqlerror'){
            echo '<p class="errormsg">System is down. Please try again later!</p>';
          }
          else if($_GET['error'] == 'invalidpwd'){
            echo '<p class="errormsg">Incorrect Password</p>';
          }
          else if($_GET['error'] == 'invaliduid'){
            echo '<p class="errormsg">Incorrect Username / Email</p>';
          }          
        }
      ?>
          
        <!-- username -->
          <div class="form-item">
            <label class="label" for="userid">Username / Email</label>
          </div>
          
          <div class="form-item">
            <?php
            if(isset($_GET['error'])){
              if($_GET['error'] != 'invaliduid')
              {
                 echo '<input class="inputbox" type="text" id="userid" name="userid" placeholder=" Username / Email" value='.$_GET['userid'].' required/>';

              }
              else{
                 echo '<input class="inputbox" type="text" id="userid" name="userid" placeholder=" Username / Email" required/>';
              }
            }
            else{
              echo '<input class="inputbox" type="text" id="userid" name="userid" placeholder=" Username / Email" required/>';
            }
            ?>
             
          </div>

        <!-- password -->

        <div class="form-item">
            <label class="label" for="pwd">Password</label>
        </div>
          
        <div class="form-item">
          <input class="inputbox" type="password" name="pwd" id="pwd" placeholder=" ***********" required/>
        </div>


        <div class="form-item">
          <p class="label forgotpwd" ><a href="./forgot_password.php">Forgot Password? </a></p>
        </div>        

        <!-- submit button  -->
        <div class="login_button_div">
          <!-- <div class="form-item"> -->
            <input class="button" type="submit" value="LOGIN" name="login-btn"/>
          <!-- </div> -->
        </div>


        <!-- signup option  -->
        <div class="form-item">
          <p class="label signuppara" >Don't have an account? Click <a href="./signup.php">here</a> to register</p>
        </div>

      </form>
      </div>
      
     </main>
     <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
    </div>
    <div>
      <?php include 'footer.php' ?>
    </div>  

  </body>
</html>
