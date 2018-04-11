<script type="text/javascript" src="ckeditor/ckeditor.js"></script><?php
$username=@$_SESSION['username'];
if(!@$_GET['update']){
?>

<form method="POST" class="form" enctype="multipart/form-data">
	<input type="text" name="title" placeholder="Title" class="form-control"><br>
	Featured Image:<br>
	<input type="file" name="fimage" id="f_image" class="form-control"><br>
	<select name="category" class="form-control">
		<option disabled selected>Select category</option>
		<option>Ubuhinzi</option>
		<option>Ubucuruzi</option>
		<option>Ikoranabunga</option>
		<option>Ubworozi</option>
	</select><br>
	<textarea class="ckeditor" name="ckeditor" class="form-control"></textarea><br>
	<center><button type="submit" class="btn btn-success" name="publish">Publish</button></center>
</form>
<?php
}
else if(@$_GET['update']){
	$_id=@$_GET['update'];
	$qr="select * from post where id='$_id'";
	$res=$conn->query($qr);
	$row=$res->fetch_assoc();
	?>
<form method="POST" class="form" enctype="multipart/form-data">
	<input type="text" name="title" placeholder="Title" class="form-control" value="<?php echo $row['title'] ?>"><br>
	Featured Image:<br>
	<input type="file" name="fimage" id="f_image" class="form-control"  value="<?php echo $row['fmage'] ?>"><br>
	<select name="category" class="form-control"  value="">
		<option><?php echo $row['category'] ?></option>
		<option>Ubuhinzi</option>
		<option>Ubucuruzi</option>
		<option>Ikoranabunga</option>
		<option>Ubworozi</option>
	</select><br>
	<textarea class="ckeditor" name="ckeditor" class="form-control"> <?php echo $row['content'] ?></textarea><br>
	<center><button type="submit" class="btn btn-success" name="update">Update</button></center>
</form>


	<?php
}
if(isset($_POST['publish'])){
	$title=mysqli_real_escape_string($conn,$_POST['title']);
	$category=mysqli_real_escape_string($conn,$_POST['category']);
	$content=mysqli_real_escape_string($conn,$_POST['ckeditor']);
	$destination="Images/Featured_Images/";
	//-------------------------------------rename image
	list($fisrtPart,$secondPart)=explode(".", basename($_FILES["fimage"]["name"]));
	$fisrtPart.=time();
	$fe_image=urlencode($fisrtPart.".".$secondPart);
	//-------------------------------------
	$author=$username;
	if(move_uploaded_file($_FILES["fimage"]["tmp_name"], $destination.$fe_image))
		echo "ok, ";
	$query="insert into post (title,content,fmage,category,author) values ('$title','$content','$fe_image','$category','$author')";
	if($conn->query($query))
		echo "Publish successfully";
    
}


if(isset($_POST['update'])){
	$title=mysqli_real_escape_string($conn,$_POST['title']);
	$category=mysqli_real_escape_string($conn,$_POST['category']);
	$content=mysqli_real_escape_string($conn,$_POST['ckeditor']);
	$destination="Images/Featured_Images/";
	//-------------------------------------rename image
	list($fisrtPart,$secondPart)=explode(".", basename($_FILES["fimage"]["name"]));
	$fisrtPart.=time();
	$fe_image=urlencode($fisrtPart.".".$secondPart);
	//-------------------------------------
	$author=$username;
	if(move_uploaded_file($_FILES["fimage"]["tmp_name"], $destination.$fe_image))
		echo "ok, ";
	$query="update post set title='$title',content='$content',fmage='$fe_image',category='$category',author='$author'";
	if($conn->query($query))
		echo "Update successfully";
}
?>
