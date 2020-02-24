<?php
include "db.php";
$salc = "145541evsikov145541";
$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password).$salc;
$sql = "SELECT * FROM users WHERE login = '$login' and password ='$password' ";

$res = mysqli_query($connect, $sql);

if($res){
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    header("Location: ../index.php?success=true");
} else {
   header("Location: ../views/auth.php?success-false=true");
}
