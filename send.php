<?php
session_start();
$con=mysqli_connect('localhost','root','','mydatabase');
if($con==false)
{
 echo 'connection is not done';
}
$msg=$_POST['msg'];
$name=$_SESSION['name'];


$sql="INSERT into posts(msg,name) VALUES ('$msg','$name')";
$result=$con->query($sql);
header("Location:home.php");
?>

