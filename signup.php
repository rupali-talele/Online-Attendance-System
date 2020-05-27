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
            <form action="" class="signupas_form">
                <label for="signup_as" class="signup_label">Sign up as-</label>
                <input type="button" class="signup_button" id ="student-btn" value="STUDENT">
                <input type="button" class="signup_button" id = "teacher-btn" value="TEACHER">

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
