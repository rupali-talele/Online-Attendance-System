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
            <!-- <form action="" class="signupas_form">
                <label for="signup_as" class="signup_label">Sign up as-</label>
                <input type="button" class="signup_button" id ="student-btn" value="STUDENT">
                <input type="button" class="signup_button" id = "teacher-btn" value="TEACHER">

            </form> -->

            <form class="signup_form" action="./includes/signup_verify.php" method="post">
                  <div class="close">
                  <a href="./index.php" ><input type="button" value="X" class="close-btn"></a>
                </div>
              <!-- <div class="signup_form-item">
                <label class="signup_label" for="fname">First Name</label>
                <input class="signup_inputbox" type="text" id="fname" name="fname" placeholder=" First Name" required/>
              </div>
              <div class="signup_form-item">
                <label class="signup_label" for="lname">Last Name</label>
                <input class="signup_inputbox" type="text" id="lname" name="lname" placeholder=" Last Name" required/>
              </div> -->

              <!-- check if signup is successful -->
              <?php
              if(isset($_GET['signupdone']))
              {
                if($_GET['signupdone'] == 'success') {
                  echo '<p class="label">Sign up successful. Click <a href="./index.php">Here </a>to login</p>';
                }
              }
              else{

            // <!-- check if errors are reported -->
            // <?php
              if(isset($_GET['error'])){
                if($_GET['error'] == 'sqlerror'){
                  echo '<div class="error"><p class="errormsg">Cannot Signup. Please try again later!</p></div>';
                }
                else if($_GET['error'] == 'invalidmailuseridid'){
                  echo '<div class="error"><p class="errormsg">Invalid Username, E-mail and Student/Employee Id</p></div>';
                }
                else if($_GET['error'] == 'invalidmail'){
                  echo '<div class="error"><p class="errormsg">Invalid E-mail</p></div>';
                }    
                else if($_GET['error'] == 'invaliduserid'){
                  echo '<div class="error"><p class="errormsg">Invalid Username</p></div>';
                }   
                else if($_GET['error'] == 'invalidpwd'){
                  echo '<div class="error"><p class="errormsg">Passwords do not match. Please enter again!</p></div>';
                }  
                else if($_GET['error'] == 'invalidid'){
                  echo '<div class="error"><p class="errormsg">Student / Employee ID cannot contain characters</p></div>';
                }   
                else if($_GET['error'] == 'useridtaken'){
                  echo '<div class="error"><p class="errormsg">Username already exists. Try using a different username</p></div>';
                }   
                else if($_GET['error'] == 'mailregistered'){
                  echo '<div class="error"><p class="errormsg">E-mail ID already registered</p></div>';
                }                                                                              
              }
            ?>    
            <!-- check if email value is available in url     -->
              <div class="signup_form-item">
                <label class="signup_label" for="email">Email</label>
                <?php
                
                if(isset($_GET['error']))
                {
                  //email
                  if($_GET['error'] != 'invalidmail' && $_GET['error'] != 'invalidmailuseridid' && $_GET['error'] != 'mailregistered')
                  {
                    // echo $_GET['mail'];
                    echo '<input class="signup_inputbox" type="text" name="email" id="email" placeholder=" Email" value='.$_GET['mail'].' required/>';
                  }
                else{
                    echo '<input class="signup_inputbox" type="text" name="email" id="email" placeholder=" Email" required/>';
                  }                  
                  
                }
                else{
                    echo '<input class="signup_inputbox" type="text" name="email" id="email" placeholder=" Email" required/>';
                  }
                
                ?>
              </div>
              
              <!-- check if username value is available in url  -->
              <div class="signup_form-item">
                <label class="signup_label" for="userid">Username</label>
                <?php
                  if(isset($_GET['error'])){
                      if($_GET['error']!='invalidmailuseridid' && $_GET['error']!='invaliduserid' && $_GET['error']!='useridtaken' ){
                        echo ' <input class="signup_inputbox" type="text" id="userid" name="userid" placeholder=" Username" value='.$_GET['userid'].' required/>';
                      }
                      else{
                        echo ' <input class="signup_inputbox" type="text" id="userid" name="userid" placeholder=" Username" required/>';
                      }
                  }
                  else{
                    echo ' <input class="signup_inputbox" type="text" id="userid" name="userid" placeholder=" Username" required/>';
                  }
                ?>
              </div>

              
              <div class="signup_form-item">
                <label class="signup_label" for="pwd">Password</label>
                <input class="signup_inputbox" type="password" name="pwd" id="pwd" placeholder=" ***********" required/>
              </div>
              <div class="signup_form-item">
                <label class="signup_label" for="retype-pwd">Retype Password</label>
                <input class="signup_inputbox" type="password" name="retype-pwd" id="retype-pwd" placeholder=" ***********" required/>
              </div>

              <!-- check if student/employee id value is available in url  -->
              <div class="signup_form-item">
                <label class="signup_label" for="id">Student/Employee ID</label>
                <?php
                  if(isset($_GET['error'])){
                      if($_GET['error']!='invalidmailuseridid' && $_GET['error']!='invalidid'){
                        echo '<input class="signup_inputbox" type="text" name="id" id="id" placeholder=" Student / Employee ID" value='.$_GET['id'].' required/>';
                      }
                      else{
                        echo ' <input class="signup_inputbox" type="text" name="id" id="id" placeholder=" Student / Employee ID" />';
                      }
                  }
                  else{
                    echo ' <input class="signup_inputbox" type="text" name="id" id="id" placeholder=" Student / Employee ID" />';
                  }
                ?>                
                
              </div> 
              <!-- <div class="signup_form-item">
                <label class="signup_label" for="uniqid">Unique Identification Number</label>
                <input class="signup_inputbox" type="text" name="uniqid" id="uniqid" placeholder=" Unique Identification Number" required/>
              </div> -->
              <div class="signup_button_div">
                <input class="signup_button" type="submit" value="SIGN UP"  name="signup-btn"/>
                <!-- <a href= "./index.php" ><input class="close_button" type="button" value="CLOSE"  name="close-btn"/></a> -->
              </div>
              <?php
              }
              ?>
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
