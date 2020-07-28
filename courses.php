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
                <h2 class="courselist-item course">You have enrolled in following courses for this semester</h2>
                </div>
                <div>';
            // error_reporting(0);
            // session_start();
            require('./includes/dbconnection.php');
            // $query = 'select coursenameEnrolled from enrolled where studentidEnrolled= '.$_SESSION['id'].';';
            $query ="select distinct courseid,coursename,coursetype from courses, student,enrolled where semesterCourse = (select semesterStudent from student where studentidStudent=".$_SESSION['id'].") and courseid=courseidEnrolled";
            // echo $query;
                if( $result = mysqli_query($conn,$query)){
                    //  echo 'execute successful';
                    $rows = mysqli_num_rows($result);
                    // echo $rows;
                    if($rows>0){
                    echo '<div class="courselist-item"><table class="courselist-table">
                    <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Course Type</th>
                    </tr>';
                    while ($row = mysqli_fetch_row($result)) {
                        echo '<tr> <td>'.$row[0].'</td> ';
                        echo ' <td>'.$row[1].'</td> ';
                        if($row[2] == 'TH')
                            echo ' <td> Theory </td> </tr>';
                        else
                            echo ' <td> Lab </td> </tr>';
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


