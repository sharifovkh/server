<?php

require_once('db.php');
$login = $_POST['login'];
$pass = $_POSTI['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];

$sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login', '$pass', '$email')";

$conn -> query($sql); 