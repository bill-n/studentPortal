<!DOCTYPE html>
<html lang="en">
<head>
  <title>STUDENT PORTAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
          footer{
            background-color:black;



            
          }
          body{
            background-color:lavender;
          }
          li.hover{
            background-color:red;
          }
</style>
</head>
<body>

<nav class="navbar navbar-inverse" style="background-color: black">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">STUDENT PORTAL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="login.php">STUDENT</a></li>
      <li><a href="lecturer_login.php">LECTURER</a></li>
      
       
  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">


<link rel="stylesheet" href="grid/src/gridstack.scss" />
<script src="grid/src/gridstack.js"></script>
<script src="grid/src/gridstack.jQueryUI.js"></script>

<div class="grid-stack">
    <div class="grid-stack-item"
        data-gs-x="0" data-gs-y="0"
        data-gs-width="4" data-gs-height="4">
            <div class="grid-stack-item-content">hellogrid</div>
    </div>
    <div class="grid-stack-item"
        data-gs-x="4" data-gs-y="0"
        data-gs-width="4" data-gs-height="4">
            <div class="grid-stack-item-content">hello</div>
    </div>
</div>
 
<script type="text/javascript">
$(function () {
    var options = {
        cellHeight: 80,
        verticalMargin: 10
    };
    $('.grid-stack').gridstack(options);
});
</script>