<?php
session_start();

include 'reg.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM regis WHERE mail = '$email' AND pass = '$pwd'";

$result = $conn -> query($sql);
if(!$row = $result -> fetch_assoc())
{
    echo "your username or password is incorrect";

}
else{
    $_SESSION['user'] = $email;
    header('location:home.php');

}


?>