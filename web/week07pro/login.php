<?php
if(isset($_GET['answer']))
{
    $answer = $_GET['answer'];
    if($answer == -1)
    {
        echo '<script>alert("incorrect username/password");</script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="week02home.css" type="text/css">
  <meta name="description" content="3D note and database tracking">
</head>
<body>
<header>
    <div class="header-content">
      <div class="header-content-main">
        <h1>Login</h1>
      </div>
    </div>
  </header>
  
  <div class="row">
    
	<div class="main">
<form method="post" action="<?php echo htmlspecialchars('verifyuser.php'); ?>">
    User:<br>
    <input type="text" name="user"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <a href="singup.php">¿Don't have an account? <b>Sign up here!</b></a><br>
    <input type="submit" value="LOGIN">
	</form>
	</div>
  </div>
</body>
</html>