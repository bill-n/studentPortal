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
           /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">STUDENT PORTAL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        
        <li><a href="student_view.php">VIEW STUDENT PAGE</a></li>
        <li><a href="contact.php"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Lecturer_login.php?logout='1'" ><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <br />
      <br />
      <p><b>UPLOAD FILES HERE</b></p>
          <div>
      <br />

      <p>
        <!--<a href="slides/upload_index.php" class="btn btn-info btn-lg">LECTURE SLIDES</a>-->
         <a href="../csit120/csit120.php" class="btn btn-warning btn-lg">CSIT 120</a>
      </p>
    </div>
      <br />

      <div>
      <p>
         
         <a href="slides/upload_index.php" class="btn btn-success btn-lg">CSCD 418</a>
       </p>
     </div>
    <br />

     <div>
      <p>
        
        <a href="slides/upload_index.php" class="btn btn-danger btn-lg">CSIT 408</a>
       </p>/>

     </div>
     <br 
     <div>
      <p>
        <!-- <a href="#" class="btn btn-danger btn-lg" role="button">TIME TABLE</a>-->
       </p>
     </div>
    
      <p>
         <a href="course_outline/upload_coutline.php" class="btn btn-primary btn-lg" role="button">COURSE OUTLINE</a>
       </p>
     </div>


 

    <div class="col-sm-5 text-left"> 
      <h1>Welcome <b>Admin</b></h1>
      <p></p>
      <hr>
      
      <p>Navigate to the left panel to select which action to execute on this student portal</p>
    </div>


</div>
</div>


</body>
</html>