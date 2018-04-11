<?php
include('dbconnect.php');
$id=@$_GET['delete'];
$qr="delete from post where id='$id'";
$qr1="select * from post where id='$id'";
$res=$conn->query($qr1);
$row=$res->fetch_assoc();
$status=unlink("Images/Featured_Images/".$row['fmage']);    
if($status){  
	echo "File deleted successfully";
	 }
if($res=$conn->query($qr))
	header("Location: Dashboard.php?menu=posts");
?>