
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
	  li a{
			text-decoration: none;
			display: inline;
			padding: 15px;
		}
		body{
			margin: 10px;
			background-color: #eee;
		}
		h1{color: green;}
	</style>

</head>
<body>
	<?php include 'dbconnect.php'; ?>
	<header>
		
	</header>
<nav>
	<li type="none">
		<a href="register.php">Register</a>
		<a href="login.php">Login</a>
	</li>
</nav>
<div>
	<?php 
	$post="select * from post";
	$resul=mysqli_query($conn,$post);
	$rows=mysqli_fetch_assoc($resul);
    //test
    echo  "<h3>".$rows['title']."</h3><br>";
    echo  $rows['fmage'];
    echo  $rows['content'];
    echo  "author::".$rows['author'];

	 ?>
</div>
</body>
</html>