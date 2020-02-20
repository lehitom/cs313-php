<?php
if(isset($_GET['answer']))
{
    $answer = $_GET['answer'];
    if($answer == -1)
    {
        echo '<script>alert("User or password is not correct");</script>';
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
<h1>Login page</h1>
<form method="post" action="<?php echo htmlspecialchars('verifyuser.php'); ?>">
    User:<br>
    <input type="text" name="user"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <a href="singup.php">¿you don't have an acount? Then sign up here!</a><br>
    <input type="submit" value="LOGIN">
</form>
</body>
</html>