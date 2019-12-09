<?php

$con=mysqli_connect('localhost','root','','mydatabase');
if($con==false)
{
 echo 'connection is not done';
}
$uname=$_POST['uname'];
$email=$_POST['Email'];
$pass=$_POST['Passwoed'];
$sql="INSERT into signup(username,email,password) VALUES ('$uname','$email','$pass')";
$result=$con->query($sql);
header("Location:index.php");
?>
