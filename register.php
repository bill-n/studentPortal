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
      <li class="dropdown"><a class="dropdown-toggle"  href="#">About </a>
       
      <li><a href="login.php">STUDENT</a></li>
      <li><a href="lecturer_login.php">LECTURER</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register Here for Student</h2>
	</div>
	
	<form method="post"  class="form-horizontal" action="register.php">
       
  
   		<div class="form-group">	
		<?php include('errors.php'); ?>
	</div>

		  <div class="form-group">
		 <label class="control-label col-sm-2" for="username">student ID</label>

		  <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="<?php echo $username; ?>">
		</div>
      </div>
    </div>

			<div class="form-group">
		 <label class="control-label col-sm-2" for="email">Email</label>
		
			  <div class="col-sm-10">
        <input type="email" class="form-control" id="username" placeholder="Enter Email" name="email" value="<?php echo $email; ?>">
		</div>
      </div>
		
		</div>

         <div class="form-group">
		 <label class="control-label col-sm-2" for="password">Password</label>

		 		  <div class="col-sm-10">
        <input type="password" class="form-control" id="password_1" name="password_1">
		</div>
      </div>


		<div class="form-group">
		 <label class="control-label col-sm-2" for="password">Confirm Password</label>
		
		
		 		  <div class="col-sm-10">
        <input type="password" class="form-control" id="password_2" name="password_2">
		</div>
      </div>

      
			
      			 <div class="form-group"> 
      			 	 <div class="col-sm-offset-2 col-sm-10">
			 <button type="submit" class="btn btn-default" name="reg_user">Submit Registration</button>
		
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
		</div>
	</div>
	</form>
</body>
</html>