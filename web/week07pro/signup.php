<?php
$password_is_invalid = false;

if(isset($_GET['answer']))
{
    $answer = $_GET['answer'];
    if($answer == -1)
    {
        echo '<script>alert("Please fill in all fields");</script>';
    }
    else
    if($answer == -2)
    {
        echo '<script>alert("Passwords do not match");</script>';
    } elseif ($answer == -3) {
        $password_is_invalid = true;
    }

}

?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="week02home.css" type="text/css">
  <meta name="description" content="3D note and database tracking">
    <style>
        .error {
            color: red;
        }

        .required-field::after {
            content: "* Passwords do not match";
            color: red;
            display: none;
        }
    </style>
</head>
<body>
<h1>User Creation</h1>
<form method="post" action="<?php echo htmlspecialchars('newuser.php'); ?>">
    <h3>Please create a password with atleast one capital letter, lowercase letter, number, and special character.</h3>
    User:<br>
    <input type="text" name="user" id="user"><br><br>
    Password:<br>
    <div class="required-field">
    <input type="password" name="password" id="password" onkeypress="submitCheck(this.value)">
    </div>
    <?php if ($password_is_invalid) { 
        ?>
        <span class="error">* Invalid Password</span>
        <?php 
    }
    ?>
    <br>
    Verify password:<br>
    <div class="required-field">
    <input type="password" name="verifypassword" id="verifypassword" onkeypress='passwordsMatch(document.getElementById("password").value, this.value)'>
    </div>
    <?php if ($password_is_invalid) { 
        ?>
        <span class="error">* Invalid Password</span>
        <?php 
    }
    ?>
    <br>
    <input type="submit" value="SIGN UP"><br>
    <script src="app.js"></script>
</form>
</body>
</html>