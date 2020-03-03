
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
  <script src="js/login.js"></script>
</head>
<body>

  <div class="header">
    <h2>Lecturer Login</h2>
  </div>


<form id="form_id" method="post" name="myform" class="form-horizontal">
  <div class="form-group">

<label class="control-label col-sm-2">ID:</label>


     <div class="col-sm-10">
<input type="text" class="form-control" name="username" id="username"/>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2">Password:</label>

<div class="col-sm-10">
<input type="password" class="form-control" name="password" id="password"/>
</div>
</div>

  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
<input type="button" class="btn btn-default"  value="Login" id="submit" onclick="validate()"/>
</div>
</div>
</div>

</form>
</body>
</html>