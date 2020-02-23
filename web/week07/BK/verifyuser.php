<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 17/02/2020
 * Time: 09:24 PM
 */
include('db.php');
$user = $_POST['user'];
$pass = $_POST['password'];

$conn = connection();

$result = pg_query($conn,"select use_username,use_password from public.userslogin where UPPER(use_username) = UPPER('".$user."')");
$data = pg_fetch_array($result);
$username = $data['use_username'];
$passwordHash = $data['use_password'];

if(password_verify($pass, $passwordHash))
{
    session_start();
    $_SESSION['myusername'] = $username;
    header("Location: index.php");
}
else
{
    header("Location: login.php?answer=-1");
}