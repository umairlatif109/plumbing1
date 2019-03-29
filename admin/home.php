
<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	

	
	
	include "header.php";
?>


	

		<div class="container-fluid">
			<div class="row" style="margin-top: 85px;">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<img src="umair-front.jpg" style="width: 100%;">
				</div>
			</div>
		
		</div>
    
  
    
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>