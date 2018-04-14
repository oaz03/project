 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<?php include '_header.php'; ?>
 </head>
 <body>
 	
 <center><h2><u>ADD NEW SUBADMIN</u></h2><br>
 <form action="addnewadmin.php" method="POST" class="form">
 <input type="text" name="fname" placeholder="First name"><br><br>
 <input type="text" name="lname" placeholder="Last name"><br><br>
 <input type="text" name="email" placeholder="email"><br><br>
 <input type="password" name="pass"><br><br>
 <input type="username" name="username" placeholder="username"><br><br>
  <select name="type">
 	<option>subadmin</option>
 	<option>user</option>
 </select><br><br>
 <button type="submit" class="btn btn-success" name="register" class="btn">Add</button> 

 </form></center>
 <center><h2><u>REMOVE SUBADMIN</u></h2><br>
 <table class="table table-hover">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Username</th>
		<th>Type</th>
		<th>Take Action</th>

	</tr>
	<?php
		$qr="select * from user";
		$res=$conn->query($qr);
		while($row=$res->fetch_assoc()){
	?>
	<tr>
		<td><?php echo $row['fname'] ?></td>
		<td><?php echo $row['lname'] ?></td>
		<td><?php echo $row['username'] ?></td>
		<td><?php echo $row['type'] ?></td>
		<td>
			<?php if ($row['username']=="david") 
			{ echo ' <img src="Images/glyphicons_206_ok_2.png">'; }  else {?>
			<a href="deleteuser.php?delete=<?php echo $row['id']?>">Delete</a></td>
			<?php } ?>
	</tr>
	<?php } ?>
</table>
  </body>
 </html>
 