<?php
include 'dbconnect.php';
if (isset($_POST['login'])) {
	session_start();
	$username=mysqli_real_escape_string($conn, $_POST['username']);
	$password=mysqli_real_escape_string($conn, $_POST['pass']);
         if(empty($username)||empty($password)){
         header("Location: ../project/login.php?login=empty");
 	           exit();
            }
        else{

       $sql="select * from user where username='$username'and password='$password'";
       $result=mysqli_query($conn,$sql);
       $resultchek=mysqli_num_rows($result);
       if ($resultchek<1) {
       header("Location: ../project/login.php?login=invalid");
 	           exit();
       }
       else{
        $row=mysqli_fetch_assoc($result);
       $_SESSION['username']=$row['username'];
        $_SESSION['fname']=$row['fname'];
        $_SESSION['lname']=$row['lname'];
       if ($_SESSION['username']=="david") {
         header("Location: ../project/dashboard.php?login=admin");
         exit();
       }
       else{header("Location: ../project/dashboard.php?login=subadmin");
       exit();
       }
       	
         }
       }
      }
else
{
	header("Location: ../project/login.php?login=invalid");
 	           exit();
}

?>