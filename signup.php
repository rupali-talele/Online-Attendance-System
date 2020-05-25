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
      <form class="signup_form" action="signup_database.php" method="post">
          
        <!-- Name -->
          <div class="signup_form-item">
            <label class="signup_label" for="fname">First Name</label>
          <!-- </div>
          
          <div class="form-item"> -->
             <input class="signup_inputbox" type="text" id="fname" name="fname" placeholder=" First Name" />
          </div>

          <div class="signup_form-item">
            <label class="signup_label" for="lname">Last Name</label>
          <!-- </div>
          
          <div class="form-item"> -->
             <input class="signup_inputbox" type="text" id="lname" name="lname" placeholder=" Last Name" />
          </div>     
          
        <!-- username -->
          <div class="signup_form-item">
            <label class="signup_label" for="userid">Username</label>
          <!-- </div>
          
          <div class="form-item"> -->
             <input class="signup_inputbox" type="text" id="userid" name="userid" placeholder=" Username" />
          </div>          
        <!-- password -->

        <div class="signup_form-item">
            <label class="signup_label" for="pwd">Password</label>
        <!-- </div>
          
        <div class="form-item"> -->
          <input class="signup_inputbox" type="password" name="pwd" id="pwd" placeholder=" ***********" />
        </div>

        <div class="signup_form-item">
            <label class="signup_label" for="pwd">Retype Password</label>
        <!-- </div>
          
        <div class="form-item"> -->
          <input class="signup_inputbox" type="password" name="pwd" id="pwd" placeholder=" ***********" />
        </div>        
 
        <!-- signup as  -->

        <!-- submit button  -->

        <div class="signup_button_div">
          <input class="signup_button" type="submit" value="SIGN UP" />
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
