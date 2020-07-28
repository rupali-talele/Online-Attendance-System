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
    <div class="attendancediv">
        <div class="attendancediv-item">
        <form action="./view_attendance.php" class="course_attendance" method="POST">
        <div class="course-item">
        <label for="coursesenrolled" class="label">Select Course</label>
        </div>
        <div class="course-item">
        <select name="coursesenrolled" id="coursesenrolled" class="select">
            <?php
            // echo 'dbconnection';
            $months = [
                '01' => 'January',
                '02' => 'February',
                '03' => 'March',
                '04' => 'April',
                '05' => 'May',
                '06' => 'June',
                '07' => 'July',
                '08' => 'August',
                '09' => 'September',
                '10' => 'October',
                '11' => 'November',
                '12' => 'December'                
            ];
            require('./includes/dbconnection.php');
            session_start();
            // echo $_SESSION['id'];
            // $query = "select coursename from courses where semesterCourse = (select semesterStudent from student where studentidStudent=".$_SESSION['id'].");";
            $query = "select distinct courseid,coursename from courses, student,enrolled where semesterCourse = (select semesterStudent from student where studentidStudent=".$_SESSION['id'].") and courseid=courseidEnrolled";
                // echo 'execute';
                // echo $query;
                if( $result = mysqli_query($conn,$query)){
                    //  echo 'execute successful';
                    while ($row = mysqli_fetch_row($result)) {
                        // echo $row[0];
                        echo '<option value='.$row[0].' class="course">'.$row[1].'</option>';
                    }
                }
            ?>
        </select>
        </div>
        <div class="course-item">
            <label for="course-month" class="label">Select Month</label>
        </div>
        <div class="course-item">
            <select name="course-month" id="course-month" class="select">
                <option value="01" selected>January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
        </div>
        <div class="course-item">
            <input type="submit" class="attendance-btn" name="attendance-btn" value="Show Attendance">
        </div>
        </form>
        </div>
        
        <?php
        if(isset($_POST['attendance-btn'])){
            error_reporting(0);
            session_start();
            $query = 'select dateAttendance,statusAttendance from attendance WHERE cidAttendance = '.$_POST['coursesenrolled'].' and sidAttendance = '.$_SESSION['id'].' and (SELECT EXTRACT(MONTH FROM dateAttendance)) = '.$_POST['course-month'].'';
            // echo $query;
                if( $result = mysqli_query($conn,$query)){
                    $rows = mysqli_num_rows($result);
                    if($rows>0){
                    $query1 = 'select coursename from courses where courseid ='.$_POST['coursesenrolled'].'';
                    if($result1 = mysqli_query($conn,$query1))
                    {
                        $row1 = mysqli_fetch_row($result1); 
                    }
                    echo '<div class="attendancediv-item">

                    <p class="empty_rows"> Course : '.$row1[0].' </p> 
                    <p class="empty_rows">Month : '.$months[$_POST['course-month']].'</p>
                    <p class="empty_rows">Total present days : '.$rows.'</p>
                    </div>
                    <div class="attendancediv-item">
                    <table class="attendance_table">
                    <tr>
                    <th>Date</th>
                    <th>Attendance Status</th>
                    </tr>';
                    while ($row = mysqli_fetch_row($result)) {
                        // echo $row[0];
                        echo '<tr>
                        <td>'.$row[0].'</td>
                        <td>'.$row[1].'</td>
                         </tr>';
                    }
                    echo '</table></div>';
                    
                        
                    }
                    else{
                        echo '<p class="empty_rows">No records to display</p>';
                    }

                }            


        }
        ?>         
    </div>
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

<?php
session_start();
?>