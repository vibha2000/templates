<?php 
error_reporting(0);
$con=mysqli_connect('localhost','root');
if($con){
	echo "connection success.";
}
else
{
	echo "no connection";
}
mysqli_select_db($con,'technicalvibha');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="INSERT INTO userinfo (uname,email,mobile,comment) values ('$user','$email','$mobile','$comment')";
echo($query);
mysqli_query($con,$query);
header('location:index.php');
?>