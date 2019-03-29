<?php
include "config.php";

include "header.php";


// this code for add sub manu
	if(isset($_POST["submit"])){
		
	$manu_id		= $_POST['manu_id'];
	$sub_manu_name	= $_POST['sub_manu_name'];
	$sub_manu_link	= $_POST['sub_manu_link'];
	
	$sql="INSERT INTO sub_manu( manu_id, sub_manu_name, sub_manu_link ) VALUES ( '$manu_id', '$sub_manu_name', '$sub_manu_link' )";
	
	if ($conn->query($sql) === TRUE){
		echo "New sub_manu are Add successfully";
		
	}else{
		echo "Error:" . $sql . "<br>" .$conn->error;
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<style>
	 input{
	 	color: #000;
	 }
	 option{
	 	color: #000;
	 }
	</style>
</head>
<body>




<div style="margin:131px 547px">
	
	
	<h2>Input sub manu name and Id...</h2>
	
	<form method="post" action="add_sub_manu.php" enctype="multipart/form-data">
		Manu Name:<br>
		<select name="manu_id" style="padding:4px 82px; font-size:18px; color: black;">
								<?php
										$sql ="SELECT * FROM manu ";
									  $result = $conn->query($sql);
									  
									  if ($result->num_rows > 0) {
									  
									  // output data of each row
									  while($row = $result->fetch_assoc()) {
										  
									  
									  $manu_id			= $row['manu_id'];									  
									  $manu_name	= $row['manu_name'];
								?>
		
		
			<option  value="<?=$manu_id; ?>" ><?=$manu_name; ?></option>
		
			<?php }} ?>
		</select>
		
		
		<br><br>
		Sub Manu Name:<br>
		<input type="text" name="sub_manu_name"  style="padding:4px 29px; font-size:18px;">
		<br><br>
		Link for landing page:<br>
		<input type="text" name="sub_manu_link"  style="padding:4px 29px; font-size:18px;">
		<br><br>
		<input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px; background-color: #000; color: #fff;">
	</form>
	<br>
	
	</div>
				
	
</body>
</html>