   <?php 
include "config.php";

	$select_id = @$_GET['edit'];
			

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body style="width:1000px;  margin:95px 243px;  text-align:-webkit-center;">


					<?php
						
							
						$sql  = "SELECT * FROM manu WHERE manu_id='$select_id'";

							$result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
							 $manu_id		= $row['manu_id'];
					        $manu_name 		= $row["manu_name"];
							$manu_icon 		= $row["manu_icon"];
							$manu_icon_last	= $row['manu_icon_last'];
							$manu_link		= $row['manu_link'];
							
							}}
							
					?>		
					
<h2>Update manu name and icons... </h2>
	<form method="get" action="update_manu.php" enctype="multipart/form-data">
		<input type="hidden" name= "manu_id" value="<?php echo $manu_id ?>"/>
		Manu Name:<br>
		<input type="text" name="manu_name" value="<?php echo $manu_name; ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>
		 First Icon:<br> 
		<input type="text" name="manu_icon" value="<?php echo $manu_icon; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		Last Icon:<br>
		<input type="text" name="manu_icon_last"value="<?php echo $manu_icon_last; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		Menu Link:<br>
		<input type="text" name="manu_link"value="<?php echo $manu_link; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		<input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px;">
	</form>
<?php 
if (isset($_GET['submit'])){
 $update_id = $_GET['manu_id'];
 
 $admin_name_u 	= $_GET['manu_name'];
 $admin_email_u = $_GET['manu_icon'];
 $admin_pwd_u 	= $_GET['manu_icon_last'];
 $manu_link_u 	= $_GET['manu_link'];
 
 
 
 $upsql = "UPDATE manu SET manu_name='$admin_name_u', manu_icon='$admin_email_u', manu_icon_last='$admin_pwd_u', manu_link='$manu_link_u' WHERE manu_id='$update_id'"; 
 
 

  if ($conn->query($upsql) === TRUE) {
	  
    echo "<script>window.open('mange_manu.php?updated=Post Updated', '_self')</script>";
  } else {
   echo "Error updating record: " . $conn->error;
  }
 
 echo $admin_name_u.$admin_email_u.$admin_pwd_u.$manu_link_u;
} 
?>	
	
</body>
</html>