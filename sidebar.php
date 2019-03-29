


	<div class="col-md-4 col-xs-12 col-sm-12" style="background-color:rgba(237, 237, 237, 0.24)">
					<h4 style="margin-top:30px; letter-spacing:1px; font-weight:600;">LOCATION</h4>
					<img src="11111.png"  height="100%" style="width:300px; margin:25px 0px;"/>
					
					<span class="address">Company Name Hear,</span><br>
					<span class="address">Address X,Y,Z</span><br>
					<span><a href="#" class="address">(xyz) xyz-wxyz </a></span><br>
					<span><a href="#" class="address">info@comapnylogo.com </a></span><br>
					
					<a href="#" style="color:rgb(79, 83, 93) !important; letter-spacing:1px; font-weight:600; font-size:17px; line-height:7;">Google Map</a>
					<h4 style="margin-top:30px; letter-spacing:1px; font-weight:600;">DIRECTIONS</h4>		
					<a href="#" style="line-height:6; color:rgba(56, 56, 55, 0.87) !important;">Click Here For Driving Directions</a>
					<h4 style="margin-top:30px; letter-spacing:1px; font-weight:600;">SEND US A MESSAGE</h4>	
					
					<?php
						if(isset($_POST["submit"])){
				
						
							$name			= $_POST['name'];
							$email			= $_POST['email'];
							$subject		= $_POST['subject'];
							$message		= $_POST['message'];
							
							$mysql ="INSERT INTO contact_us_form (name,email,subject,message) VALUES ('$name','$email','$subject','$message') ";
							
							if($conn->query($mysql) === TRUE){
								echo ""	;
							}else{
								echo "Error". $mysql . "<br>" .$conn->error;
							}
						}

					 ?>
					 
					<form method="post"  action="pages.php?id=<?=$sub_manu_id;?>">
					
						<label class="form-label" style="margin-top:26px;">Your Name (required)</label><br>
						<input type="text" class="form-control" name="name" placeholder="Name" required><br>
						
						<label class="form-label">Your Email (required)</label><br>
						<input type="text" class="form-control" name="email" placeholder="Email" required><br>
						
						<label class="form-label">Subject</label><br>
						<input type="text" class="form-control" name="subject" placeholder="Subject" required><br>
						
						<label class="form-label">Your Message</label><br>
						<textarea  type="textarea" name="message" id="message" class="form-control" placeholder="Message" maxlength="140" rows="7"></textarea><br>
						
						<input type="submit" name="submit" value="SEND" class="form-button" >
						
						
					</form>
					
					<h4 style="line-height:10; letter-spacing:1px; font-weight:600;">OUR REVIEWS</h4>
					<a href="#"><img src="images/facebook.png" width="300px" height="100%"/></a>	
					<a href="#"><img src="images/angie-list.png" width="300px" height="100%" style="margin-top:30px;" /></a>
					<a href="#"><img src="images/Yelp.png" width="300px" height="100%" style="margin-top:30px;" /></a>
					
					<h4 style="margin-top:85px;  margin-bottom:36px; letter-spacing:1px; font-weight:600;">NEARBY PLACES</h4>
					
					<h5 style="font-size:15px; letter-spacing:1px; font-weight:600;">Restaurants</h5>
					
					<i class="fa fa-map-marker location-icon" aria-hidden="true"></i>	<a href="#" class="location-mange"> THE KITCHEN</a><br>
					<i class="fa fa-map-marker location-icon" aria-hidden="true"></i>	<a href="#" class="location-mange"> CREATE BISTRO</a><br>
					<i class="fa fa-map-marker location-icon" aria-hidden="true"></i>	<a href="#" class="location-mange"> MUNCHERY</a><br>
					
					<h5 style="font-size:15px; letter-spacing:1px; font-weight:bolder;">Hotels</h5>
					
					<i class="fa fa-map-marker location-icon" aria-hidden="true"></i>	<a href="#" class="location-mange"> Shangri-La Hotel, Vancouver</a><br>
					<i class="fa fa-map-marker location-icon" aria-hidden="true"></i>	<a href="#" class="location-mange"> Ritz-Carlton, Montreal</a><br>
					<i class="fa fa-map-marker location-icon" aria-hidden="true"></i>	<a href="#" class="location-mange"> Four Seasons Hotel, Toronto</a>
		</div>
		