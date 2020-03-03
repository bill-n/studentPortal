<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
          footer{
            background-color:black;
            
          }
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">STUDENT PORTAL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <li class="dropdown"><a href="#">About </a>
       
      <li><a href="login.php">STUDENT</a></li>
      <li><a href="Lecturer_login.php">LECTURER</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Student Login</h2>
	</div>
	
	<form method="post" class="form-horizontal"  action="login.php">
		
		 <div class="form-group">
		<?php include('errors.php'); ?>
	</div>
         <div class="form-group">
		 <label class="control-label col-sm-2" for="username">student ID</label>



		 <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
      </div>
    </div>
    


			<div class="form-group">
	
		 <label class="control-label col-sm-2" for="password">Password</label>
		
		 <div class="col-sm-10">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" >
      </div>
    </div>
			
			
		

    		 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" name="login_user" >
  



	
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
		    </div>
		</div>
	</form>


</body>
</html>