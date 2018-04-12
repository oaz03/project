<table class="table table-hover">
	<tr>
		<th>Title</th>
		<th>Category</th>
		<th>Action</th>
	</tr>
	<?php
		$qr="select * from post";
		$res=$conn->query($qr);
		while($row=$res->fetch_assoc()){
	?>
	<tr>
		<td><?php echo $row['title'] ?></td>
		<td><?php echo $row['category'] ?></td>
		<td><a href="Dashboard.php?menu=editor&update=<?=$row['id']?>">Update</a>|<a href="delete.php?delete=<?php echo $row['id']?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>