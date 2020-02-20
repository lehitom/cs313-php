<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 17/02/2020
 * Time: 09:42 PM
 */
$user = $_POST['user'];
$pass = $_POST['password'];
$verifypass = $_POST['verifypassword'];

if($user == "" or $pass == "")
{
    header("Location: singup.php?answer=-1");
}
else
if($pass != $verifypass)
{
    header("Location: singup.php?answer=-2");
}
else
{
    include('db.php');
    $conn = connection();

    $passHash = password_hash($pass, PASSWORD_DEFAULT);
    $result = pg_query($conn,"insert into public.userslogin(use_username,use_password) values('".$user."','".$passHash."')");
    if($result > 0)
    {
        session_start();
        $_SESSION['myusername'] = $user;
        header("Location: index.php");
    }
    else
    {
        header("Location: singup.php");
    }
}