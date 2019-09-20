<?php
require_once('reg.php');
$fname = $lname = $mobile = $email = $pwd = '';
$fname = $_POST['fname']; 
$lname = $_POST['lname']; 
$mobile = $_POST['mobile']; 
$email = $_POST['email']; 
$pwd = $_POST['pwd']; 

$sql = "INSERT INTO regis (f_name,l_name,mob,mail,pass) VALUES ('$fname','$lname','$mobile','$email','$pwd') ";
$result = mysqli_query($conn,$sql);
if($result)
{
    header("Location: index.php");
}
else{
    echo "Error :".$sql;
}
?>