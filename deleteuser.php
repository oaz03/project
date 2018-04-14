<?php
include('dbconnect.php');
$id=@$_GET['delete'];
$qr="delete from user where id='$id'";
$qr1="select * from post where id='$id'";
$res=$conn->query($qr1);
$row=$res->fetch_assoc();
if($res=$conn->query($qr))
	header("Location: Dashboard.php?menu=manage_users");
?>