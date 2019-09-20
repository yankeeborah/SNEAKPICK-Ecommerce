<?php
$conn = mysqli_connect("localhost","root","","mini");
if(!$conn)
{
    echo "database connection failed";
}
$fname = $lname = $mobile = $email = $pwd = '';
$fname = $_POST['fname']; 
$lname = $_POST['lname']; 
$mobile = $_POST['mobile']; 
$email = $_POST['email']; 
$pwd = $_POST['pwd']; 

$hash = password_hash($pwd, PASSWORD_BCRYPT);

$sql = "INSERT INTO regis (f_name,l_name,mob,mail,pass) VALUES ('$fname','$lname','$mobile','$email','$hash') ";
$result = mysqli_query($conn,$sql);
if($result)
{
    header("Location: index.php");
}
else{
    echo "Error :".$sql;
}
?>