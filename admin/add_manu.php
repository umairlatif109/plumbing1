<?php
include "config.php";
	
include "header.php";

// this code for navebar manu 
	if(isset($_POST['submit'])){
	
	$manu_name		= $_POST['manu_name'];
	$manu_icon		= $_POST['manu_icon'];
	$manu_icon_last = $_POST['manu_icon_last'];
	$manu_link 		= $_POST['manu_link'];
	
	$sql = "INSERT INTO manu( manu_name, manu_icon, manu_icon_last, manu_link ) VALUES ( '$manu_name', '$manu_icon', '$manu_icon_last', '$manu_link')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
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
	</style>
</head>
<body>


<div style="margin-top: 140px;     margin-left: 575px;">
	<h2>Input manu name and icons... </h2>
	<form method="post" action="add_manu.php" enctype="multipart/form-data">
		Manu Name:<br>
		<input type="text" name="manu_name"  style="padding:4px 29px; font-size:18px;">
		<br><br>
		 First Icon:<br>
		<input type="text" name="manu_icon"  style="padding:4px 29px; font-size:18px;">
		<br><br>
		Last Icon:<br>
		<input type="text" name="manu_icon_last"  style="padding:4px 29px; font-size:18px;">
		<br><br>
		Manu Link:<br>
		<input type="text" name="manu_link"  style="padding:4px 29px; font-size:18px;">
		<br><br>
		<input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px; background: black; color: #fff;">
	</form>
	<br>
</div>	
			
	
</body>
</html>