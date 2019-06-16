<?php

session_start();
$con=mysqli_connect('localhost','root','','bid');
$email=$_POST['email'];
$password=$_POST['password'];


$log=mysqli_query($con,"SELECT * FROM register where email='$email' and password='$password'");
$log_num=mysqli_num_rows($log);


if($log_num==0){
	header("location:index.php?res=wrongpassword");
	
}
else{
	$data=mysqli_fetch_array($log);

	 $_SESSION['id']=$data['sl'];
	 $_SESSION['image']=$data['photo'];
	 $_SESSION['name']=$data['username'];
	 





	header("location:profile.php");
	

	
}









?>