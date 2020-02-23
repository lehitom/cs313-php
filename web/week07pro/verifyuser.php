<?php

include('connectDB.php');
$user = $_POST['user'];
$pass = $_POST['password'];

$conn = get_db();

$result = $conn->prepare("SELECT USE_USERNAME, USE_PASSWORD from USERSLOGIN where UPPER(USE_USERNAME) = UPPER(:user)");
$result->bindValue(':user', $user, PDO::PARAM_STR);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);
$username = $row['use_username'];
$passwordHash = $row['use_password'];
echo password_verify($pass, $passwordHash);
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