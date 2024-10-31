<?php
if(isset($_POST['name'])) {
    $name=$_POST['name'];
    if ($name=='') {
        unset($name);
    }
}
if(isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login=='') {
        unset($login);
    }
}
if (isset($_POST['pass'])) {
    $pass = $_POST['pass'];
    if ($pass == '') {
        unset($pass);
    }
}
if(empty($login) or empty($pass)) {
    exit ("Вы ввели не всю информацию, вернитесь и заполните все поля!");
}
include("dbconnection.php");
$result = $mysqli->query("select id from users where Login='$login' ");
$myrow = $result->fetch_assoc();
if (!empty($myrow['id'])) {
    exit("Такой логин уже существует придумайте новый");
}
else {
    $result2 = $mysqli->query("insert into users (Name, Login, Pass) values ('$name', '$login', '$pass')");
}
if ($result2=='TRUE') {
    header("Location:"."index.php");
}
else {
    echo "Ошибка";
}
?>