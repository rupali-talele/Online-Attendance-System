<?php
if(isset($_POST['forgotpwd-btn']))
{
    // error_reporting(0);
    $email = $_POST["email"];
    $answer = $_POST["secans"];

	require('./dbconnection.php');
	$query = 'select securityanswer from login_info where emailUsers ="'.$email.'";';
    echo $query;   
    
    if( $result = mysqli_query($conn,$query))
    {
	    $rows = mysqli_num_rows($result);
	    if($rows>0)
	    {                    
	    	$row = mysqli_fetch_row($result);
	    	if(strtolower($row[0])==strtolower($answer))
	    	{
	    		header("Location: ../change_password.php?email=".$email);
			    exit();	
	    	}
	    	else
	    	{
			    header("Location: ../security_question.php?error=incorrectans&email=".$email);
			    exit();	    		
	    	}
    	}
	    else
	    {
		    header("Location: ../securityquestion.php?error=unregisteredemail");
		    exit();
	    }
    }
    else
    {
    	echo "not successful";
    }
    // $pwd = $_POST["pwd"];	
}
 else{
     header("Location: ../index.php");
     exit();
 }