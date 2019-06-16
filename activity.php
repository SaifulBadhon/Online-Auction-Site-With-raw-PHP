<?php
session_start();
 $id=$_SESSION['id'];
?>

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
						<li><a href="#">YOUR ACTIVITIES</a></li>
						<li><a href="logout.php">LOG OUT</a></li>
					</ul>
				</div>
				

			</div>


		</div>

		<div class="pro-pic">
			
			<img src="profilepic/<?php echo $_SESSION['image'];?>" alt="">
		</div>

	</div>
	
	
	
	
	<div class="mid1">
	
	<?php
	
	 if(isset($_GET['res'])){
			if($_GET['res']=='done'){
			 echo "<h4 style='color:green;background-color:white;padding:5px; width:455px;'>DONE!!!! YOU ARE IN</h4>";
			}
			
			else if($_GET['res']=='notdone'){
			 echo "<h4 style='color:red;background-color:white;padding:5px; width:455px;'>YOU HAVE TO PAY MORE THAN PREVIOUSE BID </h4>";

			}
			
			} 
	
	
	?>
	
	
	
	
	<a name="left" href="#right" style='padding:10px; background-color:#EA6660;color:white; border-radius:6px;margin-bottom:20px;'>Go to Buying product</a>
	
	
	
	
	
	
	
	
	<div class="left">
	<h2 style='margin-bottom:50px;margin-left:100px;'>YOUR SELLING PRODUCTS</h2>
	
	<?php 
	
	$con=mysqli_connect('localhost','root','','bid');
$alldata= mysqli_query($con,"select * from product where cid='$id' ");

	
	while($data=mysqli_fetch_array($alldata)){ ?>
	
	
	<div class="mid2">
	
	
	<label for="">Product ID: </label> <p><?php echo $data['pid'] ?></p> <br />
	<label for="">Product Name: </label> <p><?php echo $data['pname'] ?></p> <br />
	<label for="">Best Price: </label> <p><?php echo $data['pprice'] ?></p> <br />
	<label for="">Best Bider ID: </label> <p><?php echo $data['buyerid'] ?></p> <br />
	
	<form action="activitypro.php" method="POST">
	<input name="id124" type="text" value="<?php echo $data['pid'] ?> " readonly style='text-align:center;'/>
	<input name="id123" type="text" value="<?php echo $data['buyerid'] ?> " readonly style='text-align:center'/>
	<input type="submit" value="SELL" />
	
	
	</form>
	
	
	</div>
	<br />
	<hr />
	<hr />
	<br />
	<?php } 
		
	?>
	</div>
	
	
	
	
	
	
	
	
	
	
	<div class="right" >
	<a name="right" href="#left" style='padding:10px; background-color:#EA6660;color:white; border-radius:6px;margin-bottom:20px;'>Go To Selling product</a>
	
	<h2 style='margin-bottom:50px;margin-left:100px;'>YOUR BUYING PRODUCTS</h2>
	
	
	
	
	
	
	<div class="mid3">
	
	<?php 
	
	
	
	  
	
	
	
	
	
	$con=mysqli_connect('localhost','root','','bid');
    $alldata1= mysqli_query($con,"select distinct productid from buyerproduct where buyerid='$id' ");
	
	while($data1=mysqli_fetch_array($alldata1)){ 
	
	$proid=$data1['productid'];
	
	$alldata2=mysqli_query($con,"select * from product where pid='$proid' ");
	
	while($data2=mysqli_fetch_array($alldata2)){
	?>
	
	
	<label for="">Product ID: </label> <p><?php echo $data2['pid'] ?></p> <br />
	<label for="">Product Name: </label> <p><?php echo $data2['pname'] ?></p> <br />
	<label for="">Best Price: </label> <p><?php echo $data2['pprice'] ?></p> <br />

	<label for="">Best Bider ID: </label> <p><?php echo $data2['buyerid'] ?></p> <br />
	 <?php
	
	if($data2['buyerid']==$id){
		echo "<h3 style='color:green;'>You are the highest bider . Keep your eye on this product.</h3>" ;
	}
	
	else{
		
		echo "<h3 style='color:red;'>You are not the highest bider . Keep biding on this product.</h3>" ;
	}
	
	?>
	
	
	
	<form action="activitypro2.php" method="POST">
	
	<input name="price" type="text" placeholder="Your Price"/>
	<input name="pid" type="text" value="<?php echo $data2['pid'] ?>" readonly style='text-align:center' />
	<input type="submit" value="bid" />
	
	
	</form>
	
	
	</div>
	<br />
	<hr />
	<hr />
	<br />
	<?php } 
	}
		
	?>
	
	
	
	
	
	</div>
	
	
	
	
	
	
	
	</div>

	
	
	
	<style type="text/css">
	
	
	
	
	
	body,p,ul,li,a{
		list-style: none;
		text-decoration: none;
		margin: 0px;
		padding: 0px;
		
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
	
	.left label {
		float:left;
	}
	.right label {
		float:left;
	}
	
	.mid1{
		width:40%;
		margin:auto;
		margin-top:50px;
		
		
		
		
	}
	.left{
		width:100%;
		
		
		
	}
	.right{
		margin-top:50px important;
		width:100% important;
		
		
		
	}
	.mid2 .mid3{
		width:60% important;
		margin:auto important;
		
		
	}
	
	.left hr{
		width:100%;
		
	}
	
	
	.left input{
		margin-top:5px;
		
		
	}
	
	
	
	
	
	</style>
	
</body>
</html>