<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="head.css">
</head>
<body>
<!-- content -->
    <main class="main container">
      <div class="logindiv">
      <form class="login_form" action="login_verify.php" method="post">
        <fieldset class="login">
          
          <label class="label" for="userid">Username</label>
          <br>
          <input class="inputbox" type="text" id="userid" name="userid" placeholder="Username" />
          <br />
          <br />

          <label class="label" for="pwd">Password</label>
          <br>
          <input class="inputbox" type="password" name="pwd" id="pwd" placeholder="*******" />
          <br />
          <br />

          <input id="checkbox" type="checkbox" name="rememberme" id="rememberme" />
          <label for="rememberme">Remember me</label>
          <br />
          <br />

          <input class="button" type="submit" value="LOGIN" />
          <p class="signuppara" >Don't have an account? Click <a href="#">here</a> to register</p>

        </fieldset>
      </form>
      </div>
    <!-- <br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>       -->
    </main>
</body>
</html>