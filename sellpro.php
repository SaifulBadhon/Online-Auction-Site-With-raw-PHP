<?php
session_start();
 $sellerid=$_SESSION['id'];


$con=mysqli_connect('localhost','root','','bid');




$pname=$_POST['pname'];
$pcondition=$_POST['pcondition'];
$pdesc=$_POST['pdesc'];
$baseprice=$_POST['baseprice'];


$photo=$_FILES['pphoto']['name'];
$photo_tem=$_FILES['pphoto']['tmp_name'];


move_uploaded_file($photo_tem,'productpic/'.$photo);

if($pname && $pcondition && $pdesc && $baseprice && $photo && $sellerid)
{
	mysqli_query($con,"INSERT INTO product(pname,pcondition,pdesc,pprice,pphoto,cid) VALUES ('$pname','$pcondition','$pdesc','$baseprice','$photo','$sellerid')");
	header("location:sell.php?res=done");
}
else{
	header("location:sell.php?res=problem");
}







?>