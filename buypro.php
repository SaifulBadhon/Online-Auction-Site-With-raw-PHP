<?php
session_start();
$buyerid=$_SESSION['id'];

$con=mysqli_connect('localhost','root','','bid');

$price=$_POST['price'];
$id=$_POST['id'];


mysqli_query($con,"insert into buyerproduct (buyerid,productid) values ('$buyerid','$id')");


$alldata=mysqli_query($con,"select * from product where pid='$id'");
$data=mysqli_fetch_array($alldata);
$pprice=$data['pprice'];





if($price>$pprice){
	mysqli_query($con,"update product set pprice=$price,buyerid=$buyerid where pid='$id'");

	header("location:buy.php?res=done");header("location:buy.php?res=done");
	
}
else{
		header("location:buy.php?res=notdone");

}


?>


