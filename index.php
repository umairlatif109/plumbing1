<?php

include "admin/config.php";

include "include/header.php";

?>

	
		 <div class="row" style="margin-top: 65px;     background: transparent;">
		  <div class="col-md-12 col-xs-12 col-sm-12">
			<div class="container-fluid" style="    margin-top: -20px;">	
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
					  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					  <li data-target="#myCarousel" data-slide-to="1"></li>
					  <li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					  <div class="item active">
						<img src="images/600d.png" alt="New York" width="1200" height="700">
						<div class="carousel-caption">
						  <h3>Slid 1</h3>
						  <p>Write the Heading1</p>
						</div>      
					  </div>

					  <div class="item">
						<img src="images/600b.jpg" alt="Chicago" width="1200" height="700">
						<div class="carousel-caption">
						  <h3>Slide2</h3>
						  <p>Write the Heading2</p>
						</div>      
					  </div>
					
					  <div class="item">
						<img src="images/600e.jpg" alt="Los Angeles" width="1200" height="700">
						<div class="carousel-caption">
						  <h3>Slide3</h3>
						  <p>Write  the Heading3</p>
						</div>      
					  </div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				</div>
			</div>	
		  </div>
		
	</div>	
	
	
	<div class="row">
		<div class="col-md-7 col-xs-12 col-sm-12">
		
		</div>
		<div class="col-md-3 col-xs-12 col-sm-12 form-responsive" >
			<div class="form-area" style="margin-top:90px; ">  
			<?php
			// this code for contect us form data insert

			if(isset($_POST["submit"])){
				
			
				$name			= $_POST['name'];
				$email			= $_POST['email'];
				$mobile_number	= $_POST['mobile_number'];
				$subject		= $_POST['subject'];
				$message		= $_POST['message'];
				
				$mysql ="INSERT INTO contact_us_form (name,email,mobile_number,subject,message) VALUES ('$name','$email','$mobile_number','$subject','$message') ";
				
				if($conn->query($mysql) === TRUE){
					echo ""	;
				}else{
					echo "Error". $mysql . "<br>" .$conn->error;
				}
			}

			?>
				<form  method="post"  action="index.php" style="height: 363px;">
					<br style="both:clear;">
							<h3 style="font-size:24px; margin-bottom: 18px; text-align:center; margin-top:-4px; color:#ffffff;  background-color:rgb(218, 35, 47); padding:7px 0px; font-weight:500;">Contact us</h3>
							<div class="form-group">
								<input type="text" class="form-control"  name="name"  placeholder="Name" required >
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  name="email"  placeholder="Email" required >
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  name="mobile_number"  placeholder="Mobile Number" required >
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  name="subject"  placeholder="Subject" >
							</div>
							<div class="form-group">
								<textarea class="form-control" type="textarea" name="message"  placeholder="Message" maxlength="140" rows="7" required ></textarea>				                
							</div>
					
							<input type="submit"  name="submit" value="submit" class="btn btn-primary pull-right" style="padding:1px 101px; font-size:24px; ">
				</form>
			</div>
		</div>
		<div class="col-md-2 col-xs-12 col-sm-12">
		
		</div>
	</div>
	
	
	<div class="row" >
		<div class="col-md-1 col-xs-12 col-sm-12">
		</div>
		<div class="col-md-10 col-xs-12 col-sm-12">
			   <div class="row">
					<div class="col-md-4 col-xs-12 col-sm-12 background-setting" style="background-image: url(images/plumbing-1.png);     text-align: -webkit-center;    height: 240px !important;">
						<div     style="margin-top: 98px;">
							   <h3  style="font-size:22px;font-weight: 500;letter-spacing: 0px;text-transform: none;  color: rgb(185, 186, 255);">
									Licensed, Bonded &amp; Insured 
							   </h3>
							   <span  style="font-size:15px;font-weight: 300;font-style: normal;    color: rgba(251, 251, 251, 0.94); line-height: 4;">
									15+ Years Industry Experience
							   </span>
						</div>
					</div>
					<div class="col-md-4 col-xs-12 col-sm-12 background-setting" style="background-image: url(images/plumbing-2.png);     text-align: -webkit-center;    height: 240px !important;">
						<div     style="margin-top: 98px;">
							   <h3  style="font-size:22px;font-weight: 500;letter-spacing: 0px;text-transform: none;  color: rgb(232, 232, 245);">
									Plumbing Solutions 
							   </h3>
							   <span  style="font-size:15px;font-weight: 300;font-style: normal;    color: rgba(251, 251, 251, 0.94); line-height: 4;">
									Based On Your Needs & Budget
							   </span>
						</div>
					</div>
					<div class="col-md-4 col-xs-12 col-sm-12 background-setting" style="background-image: url(images/plumbing-3.png);     text-align: -webkit-center;    height: 240px !important;	">
						<div     style="margin-top: 98px;">
							   <h3  style="font-size:22px;font-weight: 500;letter-spacing: 0px;text-transform: none;     color: rgb(255, 255, 255);">
									We’ll Get The Job Done Right
							   </h3>
							   <span  style="font-size:15px;font-weight: 300;font-style: normal;    color: rgba(251, 251, 251, 0.94); line-height: 4;">
									The First Time
							   </span>
						</div>
					</div>
			   </div>
		</div>  
		<div class="col-md-1 col-xs-12 col-sm-12">		
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<!-- our work -->
	
	
			
			  <div class='row' style="    margin-top: -45px;">
				<div class="col-md-4 col-xs-12 col-sm-12 work-bg">	
					<h1 class="work-h1">Our Work</h1>
					<div class="work-h1down">THAT WE PERFORM</div>
				</div>
				<div class="col-md-8 col-xs-12 col-sm-12 ">	
				
				
					
				<!-- Insert to your webpage where you want to display the carousel -->
				<div id="amazingcarousel-container-1">
					<div id="amazingcarousel-1" style="display:none;position:relative;width:100%;max-width:720px;margin:0px auto 0px;">
						<div class="amazingcarousel-list-container">
							<ul class="amazingcarousel-list">
								
										<?php
										
											$sql = "SELECT * FROM our_work ORDER BY image_id ASC LIMIT 9";
											
											   $result = $conn->query($sql);

											   if ($result->num_rows > 0) {
												   
												   // output data of each row
												while($row = $result->fetch_assoc()) {																
																	
												   $image 		= $row["image"];
																																
										?>	
									<li class="amazingcarousel-item">
										<div class="amazingcarousel-item-container" style="background-color:#bebebe; ">
											<div class="amazingcarousel-image">
											<a href="admin/our_work/<?php echo $image; ?>" title="3"  class="html5lightbox" data-group="amazingcarousel-1">
											
											<img src="admin/our_work/<?php echo $image; ?>" width="355px !important;" height="250px !important;"  alt="3" /></a>
											</div>               
										</div>
									</li>
									<?php }} ?>
									
									
									
								</ul>
								<div class="amazingcarousel-prev"></div>
								<div class="amazingcarousel-next"></div>
							</div>
							<div class="amazingcarousel-nav"></div>
							
						</div>
					</div>
					<!-- End of body section HTML codes -->

				         
			</div>
		 </div>
	<br>
	<br>
	<br>
	<br>
	<br>

		<!-- werbiage -->
		
		<div class="row">
			<div class="col-md-2 col-xs-12 col-sm-12"  >
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12"  >
				<h2 style="font-size:28px !important;"><img src="images/11111.png" style="height:55px;   width:328px;"/> Quick, Reliable, Expert Plumbing &amp; HVAC Services</h2>
				<br>
				<br>
				
				<p class="werbiage-p">Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea.

					Eu duo fastidii mandamus pertinacia, an nusquam expetenda incorrupte eum. Id quo dicant commodo, eum an odio luptatum. Modus quaeque inermis sed in, duo expetenda elaboraret sadipscing ei, est enim docendi te. Quo commodo integre placerat id, at pri mediocrem dissentiunt. Eam enim interesset at, volumus oporteat ex vim, liber tempor inermis vix eu. Dicta vidisse iracundia sea ei, vix ex numquam omittantur.

					Duo utinam convenire consetetur eu.<br>
					<span style="color:rgba(0, 0, 0, 0.94); font-size:27px; font-weight:500;  font-size:27px;">Lorem <strong>Your Company Name </strong>dolor sit amet?<span></p>
				<ul style="color: rgba(0, 0, 0, 0.61);    line-height: 1.26;">
					<li>Lorem ipsum dolor sit amet</li><br><br><br>
					<li> facer epicurei complectitur nam an</li><br><br><br>
					<li>Id quo dicant commodo, eum an odio luptatum.</li><br><br><br>
					<li>facer epicurei complectitur nam an</li><br><br><br>
					<li>Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. </li><br><br><br>
					<li>Modus quaeque inermis sed in, duo expetenda </li>
			    </ul><br><br><br>
				<p class="werbiage-p" style="padding-left:18px; color:rgba(0, 0, 0, 0.94); font-size:27px; font-weight:500;"><strong>Your Company Name</strong> Lorem ipsum dolor sit amet!<br>
				Lorem ipsum</p>
				
			</div>
			<div class="col-md-2 col-xs-12 col-sm-12"  >
			</div>
		</div>
	
	
		<div class="row">
			<div class="col-md-2 col-xs-12 col-sm-12"  >
			</div>
			<div class="col-md-6 col-xs-12 col-sm-12"  >
			<ul style="color: rgba(0, 0, 0, 0.61);    line-height: 1.26;">
					<li>Lorem ipsum dolor sit amet</li><br><br><br>
					<li>Id quo dicant commodo, eum an odio luptatum</li><br><br><br>
					<li>Modus quaeque inermis sed in, duo expetenda</li><br><br><br>
					<li>Id quo dicant commodo, eum an odio luptatum</li><br><br><br>
					<li>Modus quaeque inermis</li><br><br><br>
					<li>Modus quaeque inermis sed in, duo expetenda</li><br><br><br>
					<li>Modus quaeque </li>
				</ul>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12"  >
				<img src="images/1111.jpg" width="100%" height="100%"/>
			</div>
		</div>
			
			<br><br><br>
			
			
		<div class="row" style="background-color: rgba(210, 210, 210, 0.73);    text-align: -webkit-center;    padding-bottom: 10px;">
			<div class="col-md-12 col-xs-12 col-sm-12"  >
				<h2 style="    font-weight: 700;    font-size:45px;    padding-top: 30px;    padding-bottom: 17px;">Our services </h2>
				<div style="font-size: 27px; font-weight: 100;  color: rgba(0, 51, 160, 0.52);">What Can We Help You With Today?</div>
				<div class="row" style="margin-top: 80px;     height: 552px;    ">
					<div class="col-md-2 col-xs-12 col-sm-12"  >
					</div>
					
					<?php
							$sql = "SELECT * FROM services ORDER BY user_id ASC LIMIT 4";	
							
							$result = $conn->query($sql);
							
    						   if ($result->num_rows > 0) {
								   
								   // output data of each row
								   
							    while($row = $result->fetch_assoc()) {															
																	
										$image 		= $row["image"];
										$hading 	= $row["hading"];
										$werbpage 	= $row["werbpage"];
																	
																	
						?>	
						
					<div class="col-md-2 col-xs-12 col-sm-12"  >
						<a href="#">
							<div class="aaa" >
							  <img src="admin/services/<?php echo $image; ?>" alt="Avatar" class="image"/>
							  <div class="overlay">
								<div class="text"><?php echo $hading; ?></div>
								<div class="text-p"><?php echo $werbpage; ?></div>
							  </div>
							</div>
						</a>
					</div>
					
					 <?php }}?>
					   
					<div class="col-md-2 col-xs-12 col-sm-12"  >
					</div>
					
				</div>
				<div class="row ">
					<div class="col-md-12 col-xs-12 col-sm-12 bodyyy" style="margin-top:-104px; margin-bottom:83px;"  >
						<a href="#"class="services-button">Schedule Now</a>
					</div>
				</div>
				
			</div>
		</div>
		
		
		
		
		
		<?php
			include "include/footer.php";
		?>

		