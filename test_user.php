<?php 
session_start();
if(isset($_POST['login'])) {
    $login = $_POST['login'];
    if($login=='') {
        unset($login);
    }
}
if(isset($_POST['pass'])) {
    $pass = $_POST['pass'];
    if($pass=='') {
        unset($pass);
    }
}
if (empty($login) or empty($pass)) {
    exit ("Вы ввели не всю информацию!");
}
include("dbconnection.php");
$result = $mysqli->query("select * from users where login = '$login'");
$my_row = $result->fetch_assoc();

if(empty($my_row['Login'])) {
    exit ("Введенный login или пароль неверный");
}
else {
    if($my_row['Pass']==$pass) {
        $_SESSION['login'] = $my_row['Login'];
        $_SESSION['id'] = $my_row['id'];
        header("Location:"."glav.php");
    }
    else {
        exit("Введенный login или пароль неверный");
    }
}
?>