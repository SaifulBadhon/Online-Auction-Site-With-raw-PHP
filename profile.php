<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION['name'];?></title>
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

	<div class="header-cont">
		<div class="mid">
			<h1>WELLCOME <span><?php echo $_SESSION['name'];?></span></h1>

		    <p>We are happy to get you in our site. We are providing  some very new experiences which are first time in Bangladesh.</p>
			<div class="mid2"><a href="#">Terms and Conditions</a></div>
		</div>
		
	</div>

	<div class="icons">
		<div class="mid">
			<div class="icon">

				<i class="fa fa-shopping-cart"></i>
				<h4>BUY</h4>
				<p>Just goto menu and click on buy . Then get the best chance to buy your favourite products. </p>
			</div>

			<div class="icon">

				<i class="fa fa-shopping-cart"></i>
				<h4>SELL</h4>
				<p>Go to Sell and fill up the from . And get the best possible price of your product. </p>
			</div>

			<div class="icon">

				<i class="fa fa-rocket"></i>
				<h4>YOUR ACTIVITIES</h4>
				<p>You can see whats happening with your buyong or selling products.</p>
			</div>

			

		</div>

	</div>


<div class="foot">
	<div class="fmid">
		<h4>Get in Touch</h4>
	<h1>BIDIT DOT COM , A platform to get best and sell for best.</h1>
	<p><i class="fa fa-map-marker"></i>Dhanmodi Street No: 32 shukrabad. 
		<i class="fa fa-phone"></i>0123 6545 4241</p>
		

<ul>
	
	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	
	<li><a href="#"><i class="fa fa-google"></i></a></li>
</ul>


		

	</div>
	
</div>
<div class="footer">
	<div class="ftmid">
		<p>@ 2018 BIDIT. All Rights Reserved.</p>
		
	</div>
	
</div>	





	<style>

	body,p,ul,li,a{
		list-style: none;
		text-decoration: none;
		margin: 0px;
		padding: 0px;
		font-family: 'Lato', sans-serif;
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
	.header-cont{
		background-color:#2A2A2A;
		height: 350px;
		overflow: hidden;

	}

	.header-cont h1{
	    font-weight: 300;
        font-size: 50px;
        color: #BFBFBF;
        text-align: center;
	}

	.header-cont h1 span{
		 font-weight: bold;
		  text-transform: uppercase;
		  color: #EA6660;

	}

	.header-cont p{
		    font-size: 28px;
            
            color: #BFBFBF;
            letter-spacing: 1px;
            text-align: center;
	}
	.mid2{

		
		margin: auto;
		margin-top: 50px;
		width: 20%;
		
	}
	.mid2 a{
		
		
		
		background-color: #EA6660;
		padding: 12px;
		font-size: 11px;
		color: white;
		border-radius: 5px;
		text-transform:uppercase;
	}
	.mid2 a:hover{
		color: #BFBFBF;
	}

	.icon i{
		font-size: 65px;
		color: #616161;
		
	}

	.icon h4{
		color: #616161;
		text-align: center;

	}

	.icon p{
		color: #616161;
		text-align: center;

	}

	.icon{
		text-align: center;
		margin-top: 100px;
		width: 30%;
		float: left;
		padding: 10px;
	}
	.icons{
		    background: #F8F8F8;
            height: 395px;
            overflow: hidden;
	}



.foot{
	width: 100%;
	background: #313131;
	height: 260px;
	overflow: hidden;
	display: block;
}


.foot .fmid{
	width: 80%;
	margin: auto;
	text-align: center;
}

.foot h4{
	font-size: 30px;
	color:#BFBFBF;
	margin-bottom: 20px;
}

.foot h1{
	color: #BFBFBF ;
	font-size: 20px;
	font-weight: 300;
}
.foot p{
	font-size: 14px;
	color: #BFBFBF ;
}

.foot p i{
	margin-right: 5px ;
	color: #EA6660;
	font-size: 14px;
}
.foot p i:nth-child(2){
	margin-left: 20px;
}
.foot ul li a{
	display: block;
	margin-top: 5px;
	font-size: 14px;	
	color: #fff

}


.foot ul li{
	display: inline-block;
	height: 30px;
	width: 30px;
	border-radius: 50%;
	overflow: hidden;
	margin: 5px;
	
	
}



.foot ul li:nth-child(1){
	background: #3b5998;
}
.foot ul li:nth-child(2){
	background: #00aced;

}

.foot ul li:nth-child(3){
background: #cb2027;
}
.foot ul{
	margin-top: 20px;
}
.footer{
	background: #262626;
	padding:30px;

}

.ftmid p{
	font-size: 14px;
	width: 20%;
	margin: auto;
	font-weight: bold;
	color: #BFBFBF


}





	</style>






	
</body>
</html>