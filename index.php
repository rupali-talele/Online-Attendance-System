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
      <div class="headeronpage">   
     <?php include './header.php';  ?>
    </div>
<!-- content -->
    <div class="content">
    <main class="main container">
      <div class="logindiv">
      <form class="login_form" action="login_verify.php" method="post">
          
        <!-- username -->
          <div class="form-item">
            <label class="label" for="userid">Username</label>
          </div>
          
          <div class="form-item">
             <input class="inputbox" type="text" id="userid" name="userid" placeholder=" Username" />
          </div>

        <!-- password -->

        <div class="form-item">
            <label class="label" for="pwd">Password</label>
        </div>
          
        <div class="form-item">
          <input class="inputbox" type="password" name="pwd" id="pwd" placeholder=" ***********" />
        </div>
        
        <!-- remember me  -->

        <div class="form-item">
          <input class="checkbox" type="checkbox" name="rememberme" id="rememberme" />
          <label class="label checkbox" for="rememberme">Remember me</label>        
        </div>  

        <!-- submit button  -->

        <div class="form-item">
          <input class="button" type="submit" value="LOGIN" />
        </div>

        <!-- signup option  -->
        <div class="form-item">
          <p class="label signuppara" >Don't have an account? Click <a href="#">here</a> to register</p>
        </div>

      </form>
      </div>
      
     </main>
     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div>
      <?php include 'footer.php' ?>
    </div>  

  </body>
</html>
