<!DOCTYPE html>
<html>
<head>
<title> Home Plumbing </title>
<link rel="shortcut icon" href="images/plumbing-icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/homeplm.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/homeplm_service.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/our_work_carousal.css">
		<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>		
<script src="jquery-3.2.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
			
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	
	
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  
<!-- this links for our_work curosol slider -->

   <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width">    <title></title>
    
    <!-- Insert to your webpage before the </head> -->
    <script src="carouselengine/jquery.js"></script>
    <script src="carouselengine/amazingcarousel.js"></script>
    <link rel="stylesheet" type="text/css" href="carouselengine/initcarousel-1.css">
    <script src="carouselengine/initcarousel-1.js"></script>
    <!-- End of head section HTML codes -->
    
</head>


<body style="font-family:'Roboto Condensed', sans-serif !important;">
<div class="container-fluid">

	<div class="row first-header">
		<div class="col-md-4 col-xs-12 col-sm-12" style="text-align: -webkit-center;     background-color:#080808 !important;">
			<p style="margin-top:10px;"><a href="#" class="header-col1" > Have A Plumbing Issue?</a> </p>
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12" style=" background-color:#080808 !important;     height: 40px;">
			<div  class="icon-responsive">
				<h3 class="header-connected">STAY CONNECTED</h3>
				<a href="#" class="fave-icon">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-google-plus"     style="border-right: 1px solid #a2b3c0;"></i>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12" style="text-align: -webkit-center;     background-color:#080808 !important;">
			<p style="margin-top:10px;"><a href="#" class="header-col1" >Need An Estimate?</a> </p>
		</div>
	</div>
	
		
		<nav class="navbar " data-spy="affix" data-offset-top="197" style="z-index: 1;  ">
			<div class="row second-row"  style="">
				<div class="col-md-3 col-xs-12 col-sm-12">
				
				<?php
				$sql= "SELECT * FROM logo";
				$result = $conn->query($sql);
				if($result->num_rows > 0){
					while($row=$result->fetch_assoc()){
						$imagepath = $row["imagepath"];
						
						  
				?>
						<img src="admin/upload/<?php echo $imagepath; ?>" class="logo-ctrl"/> 
						
				<?php }} ?>
				
					
				</div>
				<div class="col-md-6 col-xs-12 col-sm-12">
					<div class="navbar-header default">
					  <button type="button" class="navbar-toggle btn-responsive"      data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>  
						<span class="icon-bar"></span>  
					  </button>
					  <div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav topnav" style="margin-top:0px; margin-left:20px;">
						<?php
						$sql = "SELECT * FROM manu limit 5";
						
						   $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
					        $manu_name 		= $row["manu_name"];
							$manu_icon 		= $row["manu_icon"];
							$manu_icon_last	= $row['manu_icon_last'];
							$manu_id		= $row['manu_id'];
							$manu_link		= $row['manu_link'];
						?>
							
								<li class="dropdown">
									<a href="<?=$manu_link ?>" class="manu_familyfont">
										<i class=" <?php echo $manu_icon; ?>" style="margin-right:10px; " ></i>
										<?php echo $manu_name; ?> 
										<i  class="<?php echo $manu_icon_last; ?>"></i>
									</a>
									<div class="dropdown-content">
									
									
									<?php
										$sql1 ="SELECT * FROM sub_manu WHERE manu_id='$manu_id'";
									  $result1 = $conn->query($sql1);
									  if ($result1->num_rows > 0) {
									  
									  // output data of each row
									  while($row1 = $result1->fetch_assoc()) {
									  
									  $sub_manu_name = $row1["sub_manu_name"];
									  $sub_manu_link =$row1["sub_manu_link"];
									  $sub_manu_id =$row1["sub_manu_id"];
									  
					
									?>
									 
										<a href="pages.php?id=<?=$sub_manu_id?>"><?php echo $sub_manu_name; ?></a>
										 <?php }} ?>
									 </div>
								</li>
						   <?php }} ?>
								
						</ul>
					 </div>
				   </div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-12 nmb-btn">
					<button type="button" class="btn btn-success btn-lg search-btn active">
						<i class="fa fa-mobile btn-icon" ></i>				
						<span class="btn-text">Call Today</span><br>
						<a href="#" class="btn-nmb">(xyz) xyz-wxyz</a>
				    </button>
				</div>
			</div>
		
		</nav>