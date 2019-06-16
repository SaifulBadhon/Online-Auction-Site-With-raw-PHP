<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION['name'];?></title>
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

<?php
$con=mysqli_connect('localhost','root','','bid');
$post=mysqli_query($con,"SELECT * FROM product order by pid desc");

     if(isset($_GET['res'])){
			if($_GET['res']=='done'){
				echo "<h4 style='margin:auto;color:green;background-color:white;padding:5px; width:455px;'> DONE!!!! YOU ARE IN</h4>";
			}
			
			else if($_GET['res']=='notdone'){
				echo "<h4 style='margin:auto;color:red;background-color:white;padding:5px; width:455px;'> YOU HAVE TO PAY MORE THAN PREVIOUSE BID </h4>";

			}
			
			}   

while($data=mysqli_fetch_array($post)){ ?>
	
	<div class="product">
<div class="mid1">
<div class="head"><h3 style='color:red'><span style='color:green'>Product ID : </span><?php echo $data['pid'];?></h3> <h3 class="x" style='color:red'><span style='color:green'>Product Name : </span><?php echo $data['pname'];?></h3></div>




<div class="desc">
<img src="productpic/<?php echo $data['pphoto'];?>" alt="" /> 

<p><?php echo $data['pdesc'];?></p>

</div>

<h2><?php echo $data['pprice'];?>/=</h2>
<form action="buypro.php" method="POST">
<input name="price" type="text" placeholder="Your price"/>
<input name="id" type="text" value="<?php echo $data['pid'];?>" readonly />
<input type="submit" />

</form>
<hr style='margin-top:50px;'>




</div>

</div>
		
<?php }
?>


<style type="text/css">


	body,p,ul,li,a{
		list-style: none;
		text-decoration: none;
		margin: 0px;
		padding: 0px;
		font-family: 'Lato', sans-serif;
	}


	.header{
		margin-bottom:20px;
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
.x{
	margin-left:10px;
}
.mid1{
	width:40%;
	margin:auto;
	margin-top:50px;
	margin-bottom:20px;
}
.head h3{
	display:inline-block;
	
}

.desc img{
	margin-top:10px;
	margin-bottom:10px;
	width:250px;
	height:300px;
	border-radius: 5px;
	

}
.mid1 input{
	text-align:center;
}


</style>
	
</body>
</html>