<?php

$con=mysqli_connect('localhost','root','','bid');
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$photo=$_FILES['photo']['name'];

$photo_tem=$_FILES['photo']['tmp_name'];


move_uploaded_file($photo_tem, 'profilepic/'.$photo);


$email_data=mysqli_query($con , "SELECT * FROM register where email='$email'");
$email_num=mysqli_num_rows($email_data);

if($email_num==1){
	header("location:account.php?res=sameemail");


}

else{

	if($username && $password && $email)
{
	mysqli_query($con , "INSERT INTO register (username,password,email,phone,photo) VALUES ('$username','$password','$email','$phone','$photo') " );
	
	header("location:index.php?res=succesful");
	

}
else{
	header("location:account.php?res=unsuccesful");


}

}


?>