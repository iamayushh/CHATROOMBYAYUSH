<?php

session_start();
$con=mysqli_connect('localhost','root','','mydatabase');
if($con==false)
{
 echo 'connection is not done';
}
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$sql="SELECT * FROM signup WHERE username='$uname' AND password='$pass'";
$result=$con->query($sql);
if(!row==$result->fetch_assoc())
{
    header("Location:error.php");
}
else
{
    $_SESSION['name']=$_POST['uname'];
    header("Location:home.php");
    
}