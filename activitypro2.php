<?php session_start();
 $xid=$_SESSION['id'];
 $con=mysqli_connect('localhost','root','','bid');
 
$price=$_POST['price'];
$pid=$_POST['pid'];

$alldata1=mysqli_query($con,"select * from product where pid='$pid'");
$data1=mysqli_fetch_array($alldata1);
echo $pprice=$data1['pprice'];





if($price>$pprice){
	
	mysqli_query($con,"update product set pprice=$price,buyerid=$xid where pid='$pid'");

	header("location:activity.php?res=done");
	
}
else{
	
		header("location:activity.php?res=notdone");

}







 ?>