<?php 
session_start();
$FIO = $_POST['name'];
$kross = $_POST['kross'];
$email = $_POST['email'];
$adres = $_POST['adres'];
$phone = $_POST['tele'];
$comm = $_POST['comment'];
include("dbconnection.php");
$result = $mysqli -> query("INSERT INTO zakazi (FIO, Name_kross, ADRESS, Email, Phone, Comment) 
values ('$FIO', '$kross', '$adres', '$email', '$phone', '$comm')");
header("Location:"."cotalog.php")
?>