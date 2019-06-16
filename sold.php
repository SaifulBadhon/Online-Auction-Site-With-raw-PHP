<?php session_start();
$xid=$_SESSION['id'];
$con=mysqli_connect('localhost','root','','bid');



$soldid=$_POST['sold'];
$alldata= mysqli_query($con,"select * from product where pid='$soldid' ");
$data=mysqli_fetch_array($alldata);
 $pid=$data['pid'];
 $pname=$data['pname'];
 $pcondition=$data['pcondition'];
$pdesc=$data['pdesc'];
$pprice=$data['pprice'];
$pphoto=$data['pphoto'];
$cid=$data['cid'];
$buyerid=$data['buyerid'];

mysqli_query($con,"insert into sold (pid,pname,pcondition,pdesc,pprice,pphoto,cid,buyerid) values ('$pid','$pname','$pcondition','$pdesc','$pprice','$pphoto','$cid','$buyerid')");
mysqli_query($con,"delete from product where pid='$pid'");
mysqli_query($con,"delete from buyerproduct where productid='$pid'");


$alldata1= mysqli_query($con,"select * from register where sl='$buyerid' ");
$data1=mysqli_fetch_array($alldata1);


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="mid">
	<h2 style='text-align:center; padding-bottom:50px; margin-topright:30px; color:#3B5998'>Contact The Buyer</h2>
	
	<img src="profilepic/<?php echo $data1['photo'];?>" alt="">
	<h3>Name</h3>
	<p><?php echo $data1['username'];?></p>
	<h3>E-mail</h3 >
	<p><?php echo $data1['email'];?></p>
	<h3>Phone Number</h3 >
	<p><?php echo $data1['phone'];?></p>
	
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

