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
    <div>';
 
    include './header.php';

    echo '
    </div>    
    <div class="content">
    <main class="main container">  
    <div class="myprofile">
    <div class="profile_info"><h2> Your Profile</h2></div>';
    require('./includes/dbconnection.php');
    $query="select studentidStudent,fnameStudent,lnameStudent,genderStudent,yearStudent,divisionStudent,semesterStudent,batchStudent from student where studentidStudent=".$_SESSION['id']."";

    if( $result = mysqli_query($conn,$query)){
        $rows = mysqli_num_rows($result);
        if($rows>0)
        {
            $row = mysqli_fetch_row($result);
            echo '<div class="profile_info">
                    <table class="profile-table">
                    <tr>
                    <td> Student ID: </td>
                    <td> '.$row[0].'
                    </tr>
                    <tr>
                    <td> Name: </td>
                    <td> '.$row[1].' '.$row[2].'
                    </tr>
                    <tr>
                    <td> Gender: </td>';
                    if($row[3] =='F')
                        $gender = 'Female';
                    else
                        $gender = 'Male';
                    echo'
                    <td> '.$gender.'
                    </tr>
                    <tr>
                    <td> Year: </td>
                    <td> '.$row[4].'
                    </tr>
                    <tr>
                    <td> Division: </td>
                    <td> '.$row[5].'
                    </tr>
                    <tr>
                    <td> Batch: </td>
                    <td> '.$row[7].'
                    </tr>  
                    <tr>
                    <td> Semester: </td>
                    <td> '.$row[6].'
                    </tr>
                    </table>';

            echo '</div>';            
        }
    }

    echo '</div></main>
    </div>  

    </body>
    </html>';

}
else{
    header("Location: ./index.php");
    exit();
}


