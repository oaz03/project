
<?php
include('_header.php');
session_start();
?>
<div class="row">
	<div class="col-lg-8" id="dashMenu">
	<ul>
			<li style="<?php if($_GET['menu']=="editor") echo 'background-color: #00e600'?>"><a href="Dashboard.php?menu=editor"><i class="ion-edit" style="font-size: 20px;font-weight: bold;"></i>Editor</a></li>
			<li style="<?php if($_GET['menu']=="posts") echo 'background-color: #00e600'?>"><a href="Dashboard.php?menu=posts"><i class="ion-ios-paper" style="font-size: 20px;font-weight: bold;"></i>Posts</a></li>
			<li style="<?php if($_GET['menu']=="manage_users") echo 'background-color: #00e600'?>"><a href="Dashboard.php?menu=manage_users"><i class="ion-android-people" style="font-size: 20px;font-weight: bold;"></i> Manage Users</a></li>
		</ul>
<?php
@$menu=$_GET['menu'];
@$id=$_GET['id'];
if($menu=="editor")
   include('Editor.php');
else if($menu=="posts")
	include('posts.php');
else if($menu=="manage_users")
    include('manage_users.php');
else if($id)
	include('Editor.php');

?>
	</div>
		<div><?php echo $_SESSION['username']; ?> </div>
</div>

<style type="text/css">
	#dashMenu ul li{
		display: inline-block;
		padding: 10px;
	}
</style>
