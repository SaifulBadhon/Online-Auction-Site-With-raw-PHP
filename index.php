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
		<marquee behavior="" direction=""> The first  online auction platfrom in bangladesh</marquee>
	</div>


	<div class="login">
		<hr/>
		<br>

		<?php 
		if(isset($_GET['res'])){
			if($_GET['res']=='succesful'){
				echo "<h4 style='color:green;background-color:white;padding:5px; width:455px;margin-left:10px;'> Successful registration<br>LOG IN BELOW</h4>";
			}
			else if($_GET['res']=='wrongpassword'){
				echo "<h4 style='color:red;background-color:white;padding:5px; width:455px;margin-left:10px;'> Wrong password or email</h4>";
			}
		}
		?>
		<form action="login.php" method="POST">
		

		<label for="">Email</label>
		<input name="email" type="text">
		<label for="">password</label>
		<input name="password" type="password">

		<input type="submit" value="Login">
		<br>
		<hr/>

		<a href="account.php">Create an Account</a>

		</form>



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
	height: 100%;
	width: 100%;
	background-image: url(images/cover4.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	
	
}
.shadow{

	
	background-color:rgba(0,0,0,.4);
	overflow: hidden;
}

	
.login{
	    



	width: 500px;
	
	margin-left: 200px;
	margin-top: 100px;
	display: block;
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