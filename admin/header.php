<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
<style>

*{padding:0px; margin:0px; color: #fff;}

table, th,td {
	border: 1px solid black;
	border-collapse: collapse;
		}
 th, td {
    padding: 8px;
 }
 .dropdown-menu>li>a:hover {
    
    background-color: #777;
}
 .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover{
    
    background-color: #777 !important;
}
.navbar-right .dropdown-menu {
    right: 0;
    left: 0;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:rgb(32, 80, 80);">

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid" style="    background: rebeccapurple;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php"><img src="1.png"     width="169px"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse dropdown" style="margin-top:14px;">
			<div id="navbar">
					  <nav class="navbar navbar-default navbar-static-top" role="navigation">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand"href="home.php"><img src="1.png" width="156px"></a>
						</div>
						<div class="collapse navbar-collapse" id="navbar-collapse-1" style="    background: white;">
						  <ul class="nav navbar-nav">
							<li><a href="mange_logo.php">LOGO</a></li>
							
							<li class="dropdown">
							  <a href="home.php" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a> 
							  <ul class="dropdown-menu">
								
								<li><a href="add_manu.php">Add New</a></li>
								<li ><a href="mange_manu.php">List</a></li>
								
							  </ul>
							</li>
							<li class="dropdown">
							  <a href="home.php" class="dropdown-toggle" data-toggle="dropdown">Sub Menu<b class="caret"></b></a> 
							  <ul class="dropdown-menu">
								
								<li><a href="add_sub_manu.php">Add New</a></li>
								<li ><a href="mange_sub_manu.php">List</a></li>
								
							  </ul>
							</li>
							<li><a href="mange_contact_us_form.php">Contect Us Form</a></li>
							<li class="dropdown">
							  <a href="home.php" class="dropdown-toggle" data-toggle="dropdown">Our Work<b class="caret"></b></a> 
							  <ul class="dropdown-menu">
								
								<li><a href="add_our_work.php">Add New</a></li>
								<li ><a href="mange_our_work.php">List</a></li>
								
							  </ul>
							</li>

							<li class="dropdown">
							  <a href="home.php" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
							  <ul class="dropdown-menu">								
								<li><a href="add_services.php">Add New</a></li>
								<li ><a href="mange_services.php">List</a></li>
								<li class="dropdown dropdown-submenu">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services Pages</a>
								  <ul class="dropdown-menu">
									<li><a href="add_service_pages.php">Add New</a></li>
									<li ><a href="mange_service_pages.php">List</a></li>
								  </ul>
								</li>
								<li class="dropdown dropdown-submenu">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service Form</a>
								  <ul class="dropdown-menu">
									<li ><a href="#">List</a></li>
									
								  </ul>
								</li>
							  </ul>
							</li>
							
						  </ul>
						</div>
						<!-- /.navbar-collapse -->
						 	<ul class="nav navbar-nav navbar-right">            
					            <li class="dropdown" style="margin-top:-50px;">
					              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
					              <ul class="dropdown-menu">
					                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
					              </ul>
					            </li>
					         </ul>
					  </nav>

				</div>

         
        </div><!--/.nav-collapse -->
      </div>
    </nav> 
