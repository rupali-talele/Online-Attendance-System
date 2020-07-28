<!DOCTYPE html>
<html>
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
    	<div class="forgotpwddiv">
    		<form class="forgotpwd_form" action="./security_question.php" method="post">
                  <div class="close">
                  <a href="./index.php" ><input type="button" value="X" class="close-btn"></a>
                </div>    		
				<?php
				if(isset($_GET['error']))
				{
					if($_GET['error'] == 'unregisteredemail')
					{
						echo '<p class="label"> Email ID not registered. Click <a href="./signup.php">Here </a>to Sign Up</p>';
					}
				}
				else
				{
				?>

    			<div class="forgotpwd-item">
    			<label class="forgotpwd_label" for="email_forgotpwd">Enter your Email ID</label>
    			<input class="forgotpwd_inputbox" type="text" name="email_forgotpwd" id="email_forgotpwd" required/>
				</div>

				<div class="forgotpwd-btn-div">
            	<input class="forgot-button" type="submit" value="Next" name="next"/>
        		</div>
				<?php
				 }
				?>
    		</form>
    	</div>
    </main>
    </div>

	<!-- footer -->
    <div>
      <?php include 'footer.php' ?>
    </div> 

</body>
</html>