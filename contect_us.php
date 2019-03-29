<?php
include "admin/config.php";
include "include/header.php";
?>
<head>
<style>
.form-control {
    height: 45px !important;
}
</style>
</head>


		<div class="row" 	style="    margin-top: 110px;    margin-bottom: 40px;"	>
		<div class="col-md-1 col-xs-12 col-sm-12">
		
		</div>
		
		
		<div class="col-md-5 col-xs-12 col-sm-12 " >
			<div class="form-area" style=" height:100%; background-color:white;">  
			
			<?php
			
			if(isset($_POST["submit"])){
				
				$name			= $_POST['name'];
				$email			= $_POST['email'];
				$mobile_number	= $_POST['mobile_number'];
				$subject		= $_POST['subject'];
				$message		= $_POST['message'];
				
				$mysql ="INSERT INTO contact_us_form (name,email,mobile_number,subject,message) VALUES ('$name','$email','$mobile_number','$subject','$message') ";
				
				if($conn->query($mysql) === TRUE ){
					echo "";
				}else{
					echo "Error". $mysql . "<br>" .$conn->error;
				}
			}
			
			
			?>
			
			
				<form method="post" action="contect_us.php" role="form">
				<br style="clear:both">
							<h3 style="font-size:34px; margin-bottom: 18px; text-align:center; margin-top:-37px; color:black;  padding:7px 0px; font-weight:500;">Contact us</h3>
							<div class="form-group">
								<input type="text" class="form-control"  name="name" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  name="mobile_number" placeholder="Mobile Number" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  name="subject" placeholder="Subject" required>
							</div>
							<div class="form-group">
							<textarea class="form-control" type="textarea" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
								<span class="help-block"><p  class="help-block ">You have reached the limit</p></span>                    
							</div>
					
				<input type="submit"  name="submit" value="submit" class="btn btn-primary pull-right" style="padding:4px 41px; font-size:24px; ">
				
				</form>
			</div>
		</div>
		<div class="col-md-5 col-xs-12 col-sm-12">
			<h1>Company Logo & Name</h1>
			<p style="    font-size: 17px;  padding: 13px 1px;">	Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. 
			Ex unum natum consectetuer mel, eu luptatum mediocrem eos.
			An mel possit epicuri voluptaria, nusquam recusabo duo no. 
			Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii.
			Ad elaboraret adversarium quo, cum ut brute postea. </p>
        	<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1702.8117315469121!2d73.11102305812047!3d31.396944395352623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392267dde4b157a7%3A0x25496551062f3e4e!2sPakLogics!5e0!3m2!1sen!2s!4v1504885552614" width="600" height="450" frameborder="0" style="border:0" allowfullscreen"></iframe>
    	
		</div>
		<div class="col-md-1 col-xs-12 col-sm-12">
		
		</div>
	</div>	
		

	<div class="row" style="margin-bottom:30px;">
			<div class="col-md-2 col-xs-12 col-sm-12">
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12">
				<h4>Lorem ipsum dolor sit amet, <b style="color:black;"> luptatum mediocrem </b>facer epicurei complectitur nam an</h4>
				<p style="    font-size:15px; color:rgba(0, 0, 0, 0.58);  line-height:1.5;">
					Lorem ipsum dolor sit amet, <b style="color: black ;"> luptatum mediocrem </b>facer epicurei complectitur nam an. 
			Ex unum natum <b style="color: black ;"> luptatum mediocrem </b>consectetuer mel, eu luptatum mediocrem eos.
			An mel possit epicuri voluptaria, nusquam recusabo duo no. 
			Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii.
			Ad elaboraret adversarium quo, cum ut brute postea. 
				Lorem ipsum dolor sit amet, <b style="color: black ;"> luptatum mediocrem </b>facer epicurei complectitur nam an. 
			Ex unum natum consectetuer mel, eu luptatum mediocrem eos.
			An mel possit epicuri voluptaria, nusquam recusabo duo no. 
			Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii.
			Ad elaboraret adversarium quo, cum ut brute postea. 
				Lorem ipsum dolor sit amet, <b style="color: black ;"> luptatum mediocrem </b>facer epicurei complectitur nam an. 
			Ex unum natum consectetuer mel, eu luptatum mediocrem eos.
			An mel possit epicuri voluptaria, <b style="color: black ;"> luptatum mediocrem </b>nusquam recusabo duo no. 
			Dico pericula scriptorem cum ei. <b style="color: black ;"> luptatum mediocrem </b>Meis recteque ut duo, vis no vivendo fastidii.
			Ad elaboraret adversarium quo, cum ut brute postea. 
			Lorem ipsum dolor sit amet, facer <b style="color: black ;"> luptatum mediocrem </b>epicurei complectitur nam an. 
			Ex unum natum consectetuer mel, eu luptatum mediocrem eos.
			An mel possit epicuri voluptaria, nusquam recusabo duo no. 
			Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii.
			Ad elaboraret adversarium quo,<b style="color: black ;"> luptatum mediocrem </b> cum ut brute postea. 
				Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. 
			Ex unum natum consectetuer mel, eu luptatum mediocrem eos.
				</p>
				<ul style="float:left;  display:inline-grid;  line-height:1.8;  color:rgba(0, 0, 0, 0.77);">
					<li>Ad elaboraret adversarium quo, cum ut brute postea.</li>
					<li>Ad elaboraret adversarium quo, cum ut brute postea.</li>
					<li>Ad elaboraret adversarium quo, cum ut brute postea.</li>
					<li>Ad elaboraret adversarium quo, cum ut brute postea.</li>
					<li>Ad elaboraret adversarium quo, cum ut brute postea.</li>
					<li>Ad elaboraret adversarium quo, cum ut brute postea.</li>
					<li>Ad elaboraret adversarium quo, cum ut brute postea.</li>
				</ul>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br><br>
				<br><br><br><br>
				<br><br><br><br>
				<br><br><br>
			<p style="    font-size:17px; color:rgba(0, 0, 0, 0.58);  line-height:1.5;">
					Lorem ipsum dolor sit amet, <b style="color: black ;"> luptatum mediocrem </b>facer epicurei  
			Ex unum natum consectetuer  eu<b style="color: black ;"> luptatum mediocrem </b>eos.
			</p>
			</div>
			<div class="col-md-2 col-xs-12 col-sm-12">
			</div>
	</div>	
	
	

		
	<?php
			include "include/footer.php";
		?>
