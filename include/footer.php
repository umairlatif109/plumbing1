	  <div class="row">
			<div class="col-md-12 col-xs-12 col-sm-12">
				<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>		
			</div>
		</div>
			
		<div class="row footer-bg">
			<div class="col-md-1 col-xs-12 col-sm-12">
			</div>
			<div class="col-md-10 col-xs-12 col-sm-12">
				<div class="row">
					<div class="col-md-3 col-xs-12 col-sm-12 ">
						<h3>about us</h3>
						<img src="images/logowhite.png" style="width:280px;  margin-left:-16px;  margin-top:22px;   margin-bottom:26px;"/>
						<span style="font-size:17px;  color:#272626; font-family:inherit;">Company Name Hear,</span><br>
						<span style="font-size:17px;  color:#272626; font-family:inherit;">Address X,Y,Z</span><br>
						<span><a href="#" style="font-size:17px;  color:#272626; font-family:inherit;">(xyz) xyz-wxyz </a></span><br>
						<span><a href="#" style="font-size:17px;  color:#272626; font-family:inherit;">info@comapnylogo.com </a></span>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-12">
						<h3>services</h3>
						<ul>
							<?php
										$sql1 ="SELECT * FROM sub_manu WHERE manu_id='16'";
									  $result1 = $conn->query($sql1);
									  if ($result1->num_rows > 0) {
									  
									  // output data of each row
									  while($row1 = $result1->fetch_assoc()) {
									  
									  $sub_manu_name = $row1["sub_manu_name"];
									
									  
									  
									?>
							<li><a href="#"><?php echo $sub_manu_name; ?></a></li>
								   <?php }} ?>
						</ul>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-12">
						<h3>locations</h3>
						<ul>
							<?php
										$sql1 ="SELECT * FROM sub_manu WHERE manu_id='17'";
									  $result1 = $conn->query($sql1);
									  if ($result1->num_rows > 0) {
									  
									  // output data of each row
									  while($row1 = $result1->fetch_assoc()) {
									  
									  $sub_manu_name = $row1["sub_manu_name"];
									
									  
									  
									?>
							<li><a href="#"><?php echo $sub_manu_name; ?></a></li>
								   <?php }} ?>
						
						</ul>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-12">
						<h3>stay connected</h3>
						
						<ul class="social" style="display:block;    margin-top:30px;">
							<li class="social-li" > <a href="#" class="social-a"> <i class=" fa fa-facebook" style="margin-top:9px;  margin-left:10px;">   </i> </a> </li>
							<li class="social-li"> <a href="#" class="social-a"> <i class="fa fa-twitter" style="margin-top:9px;  margin-left:6px;">   </i> </a> </li>
							<li class="social-li"> <a href="#" class="social-a"> <i class="fa fa-google-plus" style="margin-top:9px;  margin-left:6px;">   </i> </a> </li>
							<li class="social-li"> <a href="#" class="social-a"> <i class="fa fa-pinterest" style="margin-top:9px;  margin-left:6px;">   </i> </a> </li>
							<li class="social-li"> <a href="#" class="social-a"> <i class="fa fa-youtube" style="margin-top:9px;  margin-left:6px;">   </i> </a> </li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-1 col-xs-12 col-sm-12">
			</div>
		</div>		
		

		<div class="row footer-bottom">
			<div class="col-md-12 col-xs-12 col-sm-12"> 
					<div  class="footer-p">
						© 2017 All Rights Reserved <a href="#">Page One</a>	
					</div>
			</div>
		</div>
				
	
		

	
	
	<script>
	
$(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});
	$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});

<!-- for top button -->

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
	</script>
</div>
</body>
</html>
	