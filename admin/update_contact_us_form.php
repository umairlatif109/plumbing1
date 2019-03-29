   <?php 
include "config.php";

/* This query for update item from table */


$select_id = @$_GET['edit'];
			

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body style="width:1000px;  margin:95px 243px;  text-align:-webkit-center;">


					<?php

						$sql  = "SELECT * FROM contact_us_form WHERE customer_id='$select_id'";
						
							$result = $conn->query($sql);
							
						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
							$customer_id   = $row["customer_id"];
							$name 		   = $row["name"];							
							$email         = $row["email"];							
							$mobile_number = $row["mobile_number"];							
							$subject	   = $row["subject"];							
							$message 	   = $row["message"];
							
							
							}}
							
					?>		
					
<h2>Update Contect Us Form... </h2>
	<form method="get" action="update_contact_us_form.php" enctype="multipart/form-data">
		
		<input type="hidden" name="customer_id" value="<?=$customer_id; ?>">
		Customer Name:<br>
		<input type="text" name="name"	 value="<?php echo $name; ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>
		Email:<br> 
		<input type="text" name="email" value="<?php echo $email; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		Mobile Number:<br>
		<input type="text" name="mobile_number" value="<?php echo $mobile_number; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		Subject:<br>
		<input type="text" name="subject" value="<?php echo $subject; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		Message:<br>
		<input type="text" name="message" value="<?php echo $message; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		<input type="submit" name="submit" value="Submit" style="padding:6px 29px; font-size:18px;">
	</form>
<?php 
if (isset($_GET['submit'])){
 $update_id = @$_GET['customer_id'];
 
 $customer_id_u 	= $_GET['customer_id'];
 $name_b			= $_GET['name'];
 $email_c 		 	= $_GET['email'];
 $mobile_number_d 	= $_GET['mobile_number'];
 $subject_e 		= $_GET['subject'];
 $message_f 		= $_GET['message'];
 
 

 
 $sql = "UPDATE contact_us_form SET customer_id='$customer_id_u', name='$name_b', email='$email_c', mobile_number='$mobile_number_d', subject='$subject_e', 					message='$message_f' WHERE customer_id='$update_id'"; 
 
 

  if ($conn->query($sql) === TRUE) {
   echo "<script>window.open('mange_contact_us_form.php?updated=Post Updated', '_self')</script>";
  } else {
   echo "Error updating record: " . $conn->error;
  }
 
} 
?>	
</body>
</html>