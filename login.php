
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <?php
     include "_header.php";
    ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
    	
    	.Loginpage{
    		margin-top: 100px;
    	
    	}

     .Loginpage .input-group{margin-top: 10px;}
    </style>
    </head>
<body>

<div class="Loginpage" >
   <div class="container">
      <div class="row">
      <div class="col-lg-3 col-md-3"></div>
      <div class="col-lg-6 col-md-6">
      <form method="POST" action="userLogin.php">
        <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-user"></i></span>
        <input type="text" class="form-control" aria-describedby="sizing-addon1"  name="username" placeholder="username">
      </div>
	   
	   <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-key"></i></span>
        <input type="password" class="form-control" aria-describedby="sizing-addon1"  name="pass" placeholder="Password">
      </div>
      
      <br>
      	<center><button type="submit" class="btn btn-primary">Login</button></center>
      
		</form>
		</div>
      <div class="col-lg-3 col-md-3"></div>
	</div>
    
      </div>
   </div>
</div>














       <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>
