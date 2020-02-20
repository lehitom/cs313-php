<?php
if(isset($_GET['answer']))
{
    $answer = $_GET['answer'];
    if($answer == -1)
    {
        echo '<script>alert("Enter your information");</script>';
    }
    else
    if($answer == -2)
    {
        echo '<script>alert("Password as different");</script>';
    }

}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Signup page</h1>
<form method="post" action="<?php echo htmlspecialchars('newuser.php'); ?>">
    User:<br>
    <input type="text" name="user"><br>
    Password:<br>
    <input type="password" name="password"><br>
    Verify password:<br>
    <input type="password" name="verifypassword"><br>
    <input type="submit" value="SIGUP"><br>
    <a href="login.php">¿you have an acount? LOGIN HERE</a><br>
</form>
</body>
</html>