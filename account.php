<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bid</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="shadow">
	<div class="scrl">
		<marquee behavior="" direction=""> The first online auction platfrom in bangladesh</marquee>
	</div>
	<div class="login">
		<form action="register.php" method="POST" enctype="multipart/form-data">
		<hr/>
		<br>
		<?php 
		if(isset($_GET['res'])){
			if($_GET['res']=='succesful'){
				echo "<h4 style='margin-left:10px;color:green;background-color:white;padding:5px; width:455px;'> Successfully registered</h4>";
			}
			
			else if($_GET['res']=='unsuccesful'){
				echo "<h4 style='margin-left:10px;margin-left:10px;color:red;background-color:white;padding:5px; width:455px;'> Unsuccessful registeration <br> Fillup the form carefully</h4>";

			}
			else if($_GET['res']=='sameemail'){
				echo "<h4 style='margin-left:10px;color:red;background-color:white;padding:5px; width:455px;'> The email already used <br>Try with different email</h4>";

			}
			
		
		}
		?>
		<label for="">User Name</label>
		<input name="username" type="text">
		<label for="">password</label>
		<input name= "password" type="password">

		<label for="">Email</label>
		<input name= "email" type="text">

		<label for="">Phone</label>
		<input name= "phone" type="text">

		<label for="">Photo</label>
		<input name= "photo" type="file">
		

		<input type="submit" value="Register">
		<br>
		<hr/>
		</form>



		<a href="index.php">Already have an account</a>



	</div>
	</div>


	<style>
	body,p,ul,li,a{
		text-decoration: none;
		margin: 0px;
		padding: 0px;

	}
	.scrl{

		margin-top: 10px;
		color: white;
		height: 40px;
		width: 60%;
	}

body{
	overflow-y:scroll;
	background-image: url(images/cover4.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	display: block;
	margin: 0px;
	padding:0px;
	
}
.shadow{
	
	background-color:rgba(0,0,0,.4);
	overflow: hidden;
}

	
.login{
	    


	width: 500px;
	height: 600px;
	
	margin-left: 200px;
	margin-top: 80px;
 }

.login input,label{
	color: white;

	display: block;
	margin: 10px;
 }
 .login input[type="text"] ,input[type="password"]{
 	border: 2px solid #88B4E3;
 	background-color: transparent;
 	width: 450px;
 	padding: 10px;
 }
 .login input[type="submit"]{
 	
 	background-color: transparent;
 	color: black;
 	padding: 10px;
 	transition: .5s;
 	font-weight: bold;
 	border-radius: 4px;


 }
 .login a{
 	color: red;
 	font-weight: bold;
 }
 .login input[type="submit"]:hover{
 	cursor: pointer;
 	background-color: #88B4E3;
 	color: white;
 	font-weight: bold;

 }
 hr{
 	color: #88B4E3;

 }



	</style>
</body>
</html>