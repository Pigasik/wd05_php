<?php
session_start();
include_once 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$login = $_POST['login'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
$res = mysqli_query($connection, $sql);
$user = mysqli_fetch_assoc($res);
    if ($user){
    $_SESSION['is_admin'] = 1;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <button type="submit">login</button>
    </form>
</body>
</html>