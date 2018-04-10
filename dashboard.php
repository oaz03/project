<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="row">
	<div class="col-lg-8" id="dashMenu">
	<ul>
			<li style="<?php if($_GET['menu']=="editor") echo 'background-color: #ffcccc'?>"><a href="Dashboard.php?menu=editor"><i class="ion-edit" style="font-size: 20px;font-weight: bold;"></i>Editor</a></li>
			<li style="<?php if($_GET['menu']=="posts") echo 'background-color: #ffcccc'?>"><a href="Dashboard.php?menu=posts"><i class="ion-ios-paper" style="font-size: 20px;font-weight: bold;"></i>Posts</a></li>
			<li style="<?php if($_GET['menu']=="manage_users") echo 'background-color: #ffcccc'?>"><a href="Dashboard.php?menu=manage_users"><i class="ion-android-people" style="font-size: 20px;font-weight: bold;"></i> Manage Users</a></li>
		</ul></div>
		<div class="col-lg-4">helllo</div>
</div>

<style type="text/css">
	#dashMenu ul li{
		display: inline-block;
		padding: 10px;
	}
</style>