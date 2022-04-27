<?php
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "peablcyy_1207", "concept3", "peablcyy_1207");

if ($mysqli == false) {
  // print("error " . mysqli_connect_error());
  print("error");
} else {

$email = $_POST['email'];
$pass = $_POST['pass'];

$result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

if ($result->num_rows !== 0) {
  print("exist");
} else {
  $mysqli->query("INSERT INTO `user`(`email`, `pass`) VALUES ('$email', '$pass')");
  print("ok");
}
}


// echo "Email: $email<br>Пароль: $pass<br>";
