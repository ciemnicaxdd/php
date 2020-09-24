<?php

$conn = mysqli_connect('localhost','root','','pracownicy');
$conn -> set_charset("UTF8");

if ($conn->connect_error) {
    die("Failed " . $conn->connect_error);
  }
  echo "Successful";
?>