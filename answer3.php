<?php

/*
Developer Comment:
1: Prevent SQL injection
*/
$username = $_POST['username'];
$password = $_POST['password'];

/*
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
*/

$query = $mysqli->prepare("SELECT FROM users WHERE username=? AND password=?");    
$query->mysqli_bind_param("ss",$username,$password);
$query->execute();
$query->close();
$mysqli->close();


?>