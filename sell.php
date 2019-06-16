<?php session_start(); ?>
<!DOCTYPE HTML>

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION['name'];?></title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>

	<div class="header">
		<div class="mid">
			<div class="header-left">
				<img src="images/logo.png" alt="">
				
			</div>

			<div class="header-right">

				<div class="menu">
					
					<ul>
					<li><a href="profile.php">HOME</a></li>
						<li><a href="buy.php">BUY</a></li>
						<li><a href="sell.php">SELL</a></li>
						<li><a href="activity.php">YOUR ACTIVITIES</a></li>
						<li><a href="logout.php">LOG OUT</a></li>
					</ul>
				</div>
				

			</div>


		</div>

		<div class="pro-pic">
			
			<img src="profilepic/<?php echo $_SESSION['image'];?>" alt="">
		</div>

	</div>
	
<div class="cont">
	<div class="left"> 
	
	
	</div>
	
	<div class="right"> 
	
	
	</div>
	
	<div class="sell"> 
	
	<div class="sell-mid">
	<form action="sellpro.php" method="POST" enctype="multipart/form-data">
	<?php 
	
	if(isset($_GET['res']))
	{
		if($_GET['res']=='problem'){
		
		echo "<h4 style='color:red;'>FILL the from properly</h4>";
	
		
	}
	else if($_GET['res']=='done'){
		echo "<h4 style='color:green;'>Successfully Done!!</h4>";
		
	}
	}
	
	
	
	?>
	
	<label for="">Product name</label>
	<input name = "pname" type="text" />
	
	<label for="">Product Condition (NEW/USED)</label>
	<input name = "pcondition" type="text" />
	
	<label for="">Description</label>
	<input name = "pdesc" type="text" class="a" />
	
	<label for="">Base Price</label>
	<input name = "baseprice" type="text" />
	
	<label for="">Product Picture</label>
	<input name = "pphoto" type="file" />
	
	<input type="submit" value="SELL"/>
	</form>
</div>
	
	</div>
	
</div>

<style> 
.a{height:100px;}

.body{
	background-color:#F8F8F8;
}

	.header{
		width: 100%;
		background-color: #262626;
		height: 80px;
		overflow: hidden;
		position: relative;

	}
	.mid{
		width: 80%;
		margin: auto;
		margin-top: 10px;

	}

	.header-left{
		width: 15%;
		float: left;
		margin-top: 10px;
	}
	.header-left img{
		width: 100%;
	}
	.header-right{
		width: 80%;
		float: right;
	}
	.header-right .menu{
		width: 60%;
		float: right;
		margin-top: 10px;
		margin-right: 100px;
	}

	.menu ul li{
		display: inline-block;
		padding: 10px;
		font-family: tahoma;
		
		
	}
	.menu ul li a{
		font-family: 'Lato', sans-serif;
		color: #BFBFBF;
		transition:.5s;
		font-weight: bold;
		font-size: 12px;
		

	}
	.menu ul li:hover a{
		color: #EA6660;

	}
	.menu ul li:hover{
		cursor: pointer;
	}
		.pro-pic{
		background-color: white;
		position: absolute;
		right: 50px;
		top: 20px;
		height: 40px;
		width: 40px;
		border-radius: 50%;
	}
	.pro-pic img{
		height: 40px;
		width: 40px;
		border-radius: 50%;

	}

	.menu ul li:nth-child(5){

		position: absolute;
		right: 200px;
		top: 20px;
		background-color: #EA6660;
		border-radius: 5px;
		font-size: 10px;
		transition:.5s;

	}
	.menu ul li:nth-child(5) a{
		font-size: 10px;
	}

	.menu ul li:nth-child(5):hover{
		background-color: #262626;
		font-size: 12px;

	}
	.cont{
		position:relative;
		width:100%;
	}
	
	.cont .left{
		width:10%;
		background-color:#888888;
		height:600px;
		position:absolute;
		top:0px;
		left:0px;
	}
	
	.cont .right{
		width:10%;
		background-color:#888888;	
		height:600px;
		position:absolute;
		top:0px;
		right:0px;
	}
	
	.sell{
		width:70%;
		margin:auto;
		overflow:hidden;
		
	}
	
	.sell label,input{
		display:block;
		font-size:15px;
		margin-top:10px;
		color:#262626;
	}
	.sell input[type="text"]{
		padding:8px;
		width:400px;
	}

	.sell input[type="submit"]{
		margin-top:20px;
		height:40px;
		width:100px;
		border-radius:5px;
		border:none;
		color:white;
		background-color: green;
		border-radius: 5px;
		font-size: 14px;
		font-weight:bold;
		transition:.5s;
	}
	
	.sell input[type="submit"]:hover{
		
	}
	
	.sell-mid{
		width:40%;
		margin:auto;
		margin-top:50px;
		
	}
	
	

</style>
</body>
</html>