<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ./index.php");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance Management System</title>
</head>
<body>
    <!-- header -->
      <div>
    <?php
      include './header.php';
    ?>
    </div>    
    <div class="content">
    <main class="main container">    
    <div class="schedulediv">   
        <!-- <table class="scheduletable">
            <tr>
                <th>Course</th>
                <th>Day</th>
                <th>Time</th>
            </tr> -->
                <div class="schedule-item">
                <h6 class="courselist-item course">Your schedule for this semester</h6>
                </div>  
            <div class="schedule-item">          
            <?php
                require('./includes/dbconnection.php');
                $query = "select coursenameSchedule,daySchedule,starttimeSchedule,endtimeSchedule from schedule where semesterSchedule =".$_SESSION['id'].";";
                // echo $query;
                if( $result = mysqli_query($conn,$query)){
                    $rows = mysqli_num_rows($result);
                    if($rows>0){
                    echo '<table class="schedule_table">
                    <tr>
                    <th>Course</th>
                    <th>Day</th>
                    <th>Time</th>
                    </tr>';
                    while ($row = mysqli_fetch_row($result)) {
                        // echo $row[0];
                        echo '<tr>
                        <td>'.$row[0].'</td>
                        <td>'.$row[1].'</td>
                        <td>'.$row[2].'-'.$row[3].'</td>
                         </tr>';
                    }
                    echo '</table>';
                    }  
                    else{
                        echo '<p class="empty_rows">No classes</p>';
                    }                  
                }

            ?>
            </div>
        <!-- </table> -->
        
    </>
    </main>
    </div>    
    <!-- footer -->
      <div>
    <?php
      include './footer.php';
    ?>
    </div>    
</body>
</html>