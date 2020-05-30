<?php
error_reporting(0);
session_start();
if(isset($_SESSION['username']))
{

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Attendance Management System<</title>
    </head>
    <body>
    // <!-- header -->
      <div>';
 
      include './header.php';

    echo '</div>

    <div class="content">
    <main class="main container">
        <div class="courses_enrolled">
             <div class="course-item">
                
                <h6 class="course">You have enrolled in following courses</h6>
            </div>
        </div>
     </main>
    
    </div>
    <div>'; 

      include './footer.php';

 
    echo '</div> 
</body>
</html>';

}
else{
    header("Location: ./index.php");
    exit();
}


