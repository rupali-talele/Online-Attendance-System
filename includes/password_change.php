<?php
if(isset($_POST['reset-btn']))
{
		require('dbconnection.php');
  		$hashedpwd = password_hash($_POST['pwd'],PASSWORD_DEFAULT);
		
	    $query = "update login_info set pwdUsers = '".$hashedpwd."' where emailUsers='".$_POST['email']."';";
	    echo $query;
	    $stmt = mysqli_stmt_init($conn);
	   if(!mysqli_stmt_prepare($stmt,$query)){
	        header("Location: ../change_password.php?error=sqlerror");
	        exit();                      
	    }    
		else{
	        mysqli_stmt_execute($stmt);   
	        header("Location: ../change_password.php?pwdchanged=success");
	        exit();                                                               
	    }

}
else
{
	echo 'Not set';
}
?>