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
             <div class="course-list">
                <div>
                <h6 class="courselist-item course">You have enrolled in following courses for this semester</h6>
                </div>
                <div>';
            // error_reporting(0);
            // session_start();
            require('./includes/dbconnection.php');
            $query = 'select coursenameEnrolled from enrolled where studentidEnrolled= '.$_SESSION['id'].';';
            // echo $query;
                if( $result = mysqli_query($conn,$query)){
                    //  echo 'execute successful';
                    $rows = mysqli_num_rows($result);
                    // echo $rows;
                    if($rows>0){
                    echo '<div class="courselist-item"><table class="courselist-table">
                    <tr>
                    <th>Courses</th>
                    </tr>';
                    while ($row = mysqli_fetch_row($result)) {
                        echo '<tr>
                        <td>'.$row[0].'</td>
                         </tr>';
                    }
                    echo '</table></div>';
                    
                        
                    }
                    else{
                        echo '<p class="empty_rows">No records to display</p>';
                    }

                }            

                echo '</div>
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


