<?php session_start();
 $xid=$_SESSION['id'];


$con=mysqli_connect('localhost','root','','bid');
$id123=$_POST['id123'];
$soldid=$_POST['id124'];

$alldata= mysqli_query($con,"select * from register where sl='$id123' ");
$data=mysqli_fetch_array($alldata);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION['name'];?></title>
</head>
<body>
	<div class="mid">
	<h2 style='text-align:center; padding-bottom:50px; margin-topright:30px; color:#3B5998'>Contact The Buyer</h2>
	
	<img src="profilepic/<?php echo $data['photo'];?>" alt="">
	<h3>Name</h3>
	<p><?php echo $data['username'];?></p>
	<h3>E-mail</h3 >
	<p><?php echo $data['email'];?></p>
	<h3>Phone Number</h3 >
	<p><?php echo $data['phone'];?></p>
	
	<form action="sold.php" method="POST"> 
	<input type="submit" value="Confirm Your Selling" style='background-color:#3B5998;padding:10px; border-radius:6px;cursor:pointer;border:none;color:white;' />
	
	<input name="sold" type="text" value="<?php echo $soldid ?> " readonly style='text-align:center;display:none;'/>

	
	
	</form>
	
	
	</div>
	
	
	
	
	<style type="text/css">
	
	.mid{
		width:15%;
		margin:auto;
		margin-top:50px;
		line-height:10px;
	}
	.mid img{
		height:175px;
		width:200px;
		border-radius:10px;
	}
	.mid p{
		color:#88B4E3;
		border: .5px solid #88B4E3;
		padding:10px;
		broder-radius:5px;
		
	}
	.mid h3{
		color:#3B5998;
	}
	
	</style>
</body>
</html>





