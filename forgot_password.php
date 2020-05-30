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
        <div class="frgtpwddiv">
            <form action="" class="frgtpwd_form">        
                <div class="frgtpwd-form-item">
                    <label class="label" for="email">Email</label>
                </div> 
                <div class="frgtpwd-form-item">
                    <input class="frgtpwd-inputbox" type="text" name="email" id="email" placeholder=" Email" />
                </div> 

                <div class="login_button_div">
                    <input type="button" class="frgtpwd-button" id ="reset-btn" value="RESET PASSWORD">
                </div>                
                
            </form>
        </div>
    </main>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div>
      <?php include 'footer.php' ?>
    </div>  
    <script src="signup.js"></script>
  </body>
</html>
