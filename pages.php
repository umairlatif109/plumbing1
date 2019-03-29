<?php
include "admin/config.php";
include "include/header.php";

?>
<?php 
$sub_manu_id= intval($_GET['id']);

$sql1="SELECT * FROM pages WHERE pages_sub_manu_id=$sub_manu_id";

									  $result1 = $conn->query($sql1);
									  
									  if ($result1->num_rows > 0) {
									  
									  // output data of each row
									  
									  while($row1 = $result1->fetch_assoc()) {
?>
		
		<div class="container" >
		
			<div class="row" style="margin-top:70px;">
				<div class="col-md-8 col-xs-12 col-sm-12">
					
					<h1 style="font-weight:600;  margin-bottom:26px; color:black;"><?=$row1["pages_h1"];?> </h1>
					
					<img src="admin/services/<?=$row1["image"];?>" alt="asdaffa" width="100%"/>
					
					<h2 style="font-weight:600; margin-bottom:26px; margin-top:40px;"><?=$row1["pages_h2"];?> </h2>
					
					<h4 style="font-weight:600;  color:rgba(0, 0, 0, 0.68);"><?=$row1["pages_h3"];?> </h4>
					
					<p style="line-height:1.9; word-spacing:2px; margin-top:15px;"><?=$row1["pages_content"];?> </p>
					
					<img src="Capture.PNG" width="100%" height="100%"/>
					
					<p style="line-height:1.9; word-spacing:2px; margin-top:18px;"><?=$row1["pages_content2"];?> </p>
					
					<ul style="display:inline-grid !important;  line-height:1; ">
						<li>Lorem ipsum dolor sit amet,</li>
						<li>Lorem ipsum dolor sit amet, recteque</li>
						<li>Lorem ipsum dolor sit amet,</li>
						<li>Lorem ipsum dolor sit amet,recteque</li>
						<li>Lorem ipsum dolor sit amet,</li>
						<li>Lorem ipsum dolor sit amet,recteque</li>
						<li>100% Lorem ipsum dolor sit amet,</li>
					</ul>
					
					<p style="line-height:1.9; word-spacing:2px;">Lorem ipsum dolor sit amet, facer epicurei complectitur nam anfacer epicurei complectitur nam.</p>
					
					<p width=" 100%" height="450" frameborder="0" style="border:0" allowfullscreen><?=$row1["embed_maps"];?></p>
					
				</div>
			
					<?php	
												 
					include "sidebar.php";

					?>	
				</div>
			</div>
		
			  <?php }}?>
<?php
									  
include "include/footer.php";

?>	
			
		