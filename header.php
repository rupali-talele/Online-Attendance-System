<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <div class="mainheading container">
      <?php
      session_start();
        if(isset($_SESSION['username'])){
          echo '<div class="navbar">
                  <div class="navlist">
                  <ul class="nav">
                      <li ><a href="myprofile.php" class="nav-list-items" >My Profile</a> </li>
                      <li ><a href="courses.php" class="nav-list-items" >Courses </a> </li>
                      <li ><a href="check_schedule.php" class="nav-list-items">Check Schedule</a> </li>
                      <li ><a href="view_attendance.php" class="nav-list-items">View Attendance</a> </li>
                      
                  </ul>
                  </div>
                  <div class="logout-btn-div">
                     <form action="./includes/logout.php" class="logout-btn-form">
                      <input type="submit" class="logout-btn" value="LOGOUT" name="logout-btn">
                       </form>
                  </div>
              </div>';
        
        }
        else{
        echo ' <div class="heading">
              <h1 class="header_heading">STUDENT ATTENDANCE SYSTEM</h1>
          </div>';
        }
      
      ?>


    </div>
  </header>
</body>
</html>