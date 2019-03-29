   <?php 
include "config.php";

/* This query for delete item from table */

$select_id = $_GET['id'];

			

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body style="width:1000px;  margin:95px 243px;  text-align:-webkit-center;">


					<?php

						$sql  = "SELECT * FROM sub_manu WHERE sub_manu_id='$select_id'";

							$result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
							$sub_manu_id	= $row['sub_manu_id'];		
							$manu_id		= $row['manu_id'];	
					        $sub_manu_name 	= $row["sub_manu_name"];						
							$sub_manu_link	= $row['sub_manu_link'];	
							
							}}
							
					?>		
					
	<h2>Update Sub manu name and Id... </h2>
	<form method="post" action="update_sub_manu.php?edit_form=<?php echo $sub_manu_id; ?>" enctype="multipart/form-data">
		Manu Id:<br>
		<input type="text" name="manu_id" value="<?php echo $manu_id; ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>
		Sub Manu Name:<br>
		<input type="text" name="sub_manu_name" value="<?php echo $sub_manu_name; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		Link:<br>
		<input type="text" name="sub_manu_link" value="<?php echo $sub_manu_link; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		<input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px;">
	</form>
	
<?php 
if (isset($_POST['submit'])){
 $update_id = @$_GET['edit_form'];
 
 $admin_name_u 	= $_POST['manu_id'];
 $admin_email_u = $_POST['sub_manu_name'];
 $admin_pwd_u 	= $_POST['sub_manu_link'];
 
 
 
 $sql = "UPDATE sub_manu SET manu_id='$admin_name_u', sub_manu_name='$admin_email_u', sub_manu_link='$admin_pwd_u'	 WHERE sub_manu_id='$update_id'"; 
 
 

  if ($conn->query($sql) === TRUE) {
   echo "<script>window.open('mange_sub_manu.php?updated=Post Updated', '_self')</script>";
  } else {
   echo "Error updating record: " . $conn->error;
  }
 
} 
?>	
	
</body>
</html>