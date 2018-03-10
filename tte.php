<!DOCTYPE html> 
<html >
 <head> 
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Bootstrap Template</title>
 <!-- Bootstrap -->
 <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
 <style>
 .customdiv
 {
    text-align: center;
    height: 100px;
    background-color: silver;
 }
 </style>
</head>
 <body> 
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Application Name</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="sa.php" target="_parent">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Courses</a></li> 
      <li><a href="#">Contact Us</a></li> 
      <li><a href="#">FAQ</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>    
</nav>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar">
        <span class="icon-bar"></span>        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button> </div>
<div class="collapse navbar-collapse" id="Navbar">

 
<h1 class="text-primary">Hello, world using Bootstrap !</h1>
<h1 class="text-danger">Hello, world using Bootstrap !</h1>

<div class="container bg-primary">Content Goes Here</div>

<script src="./js/jquery-3.1.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script> 
</body> 
</html>
<div class="row">
	<div class="col-md-4">
             <div class="customdiv">Left Header</div>
    
      </div>

	<div class="col-md-4 col-md-offset-4">
             <div class="customdiv">Right Header</div>
    
      </div>
</div>
<div class="container">
<div class="row">
	<div class="col-md-2">
             <div class="customdiv">Left Side Bar</div>
      </div>
	<div class="col-md-8">
             <div class="customdiv">Main Content Area</div>
      </div>
	<div class="col-md-2">
           <div class="customdiv">Right Side Bar</div>
      </div>
</div>
</div>
<div class="container">
<div class="row">
	<div class="col-md-2">
             <div class="customdiv">Left Side Bar</div>
      </div>
	<div class="col-md-8">
             <div class="customdiv">Main Content Area</div>
      </div>
	<div class="col-md-2">
           <div class="customdiv">Right Side Bar</div>
      </div>
</div>
</div>
<div class="container">
<div class="row">
	<div class="col-md-2">
             <div class="customdiv">Left Side Bar</div>
      </div>
	<div class="col-md-8">
             <div class="customdiv">Main Content Area</div>
      </div>
	<div class="col-md-2">
           <div class="customdiv">Right Side Bar</div>
      </div>
</div>
</div>

<div class="row">
	
    <div class="jumbotron by-warning">
    <div class="custodiv">
    <input type="button" value="default button" class="btn btn-default"/>
    <input type="button" value="Dannger button" class="btn btn-danger"/>
    <input type="button" value="Warning button" class="btn btn-warning"/>
    <input type="button" value="Info button" class="btn btn-info btn-block disabled"/>
    <input type="button" value="Primary button" class="btn btn-primary"/>
    <input type="button" value="Success button" class="btn btn-successs"/>
    <input type="button" value="Link button" class="btn btn-link"/>

    </div>
    </div>
      </div>
</div>
</div>

<p>Briefcase icon: <span class="glyphicon glyphicon-briefcase"></span></p> 
<p>Envelope icon as a link:
  <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
</p>
<p>Search icon: <span class="glyphicon glyphicon-search"></span></p>
<p>Search icon on a button:
  <button type="button" class="btn btn-default">
    <span class="glyphicon glyphicon-search"></span> Search
  </button>
</p>