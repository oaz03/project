
<?php
include 'dbconnect.php';
if (isset($_POST['register'])) {
	session_start();
	$_SESSION['username']=$username;
     $fname=mysqli_real_escape_string($conn,$_POST['fname']);
	
	$lname=mysqli_real_escape_string($conn,$_POST['lname']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$password=mysqli_real_escape_string($conn,$_POST['pass']);
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$type=mysqli_real_escape_string($conn,$_POST['type']);

	if (empty($fname)||empty($lname)||empty($email)||empty($password)||empty($username))
	{

              header("Location:dashboard.php?menu=manage_users");
 	           exit();
 	 }
	 else
	   { 
		$sql="insert into user (fname,lname,email,password,username,type) values ('$fname','$lname','$email','$password','$username','$type')";
              mysqli_query($conn,$sql);
              header("Location:dashboard.php?menu=manage_users&add=success");
 	           exit();
	     }
   }
  ?>