<?php
include "config.php";

include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
<style>

*{padding:0px; margin:0px;}

table, th,td {
	border: 1px solid black;
	border-collapse: collapse;
		}
 th, td {
    padding: 8px;
 }
 input {
	 float: right;
    margin-right: 295px;
    margin-top: -67px;
    padding: 7px 22px;
    font-weight: 700;	
    background-clip: padding-box;
	 }
	  th{
	 	color: #000;
	 }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>




<div style="margin-top: 140px;">

<table style="width:1000px;  margin:95px 243px; ">
<caption style="color: #fff; font-size: 23px;">Update & Delete Contect Us Form </caption>
	<tr>
		<th>Customer Id</th>
		<th> Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Action</th>
	</tr>

				<?php
					
						$sql = "SELECT * FROM contact_us_form ";
					
						$result= $conn->query($sql);
					
						if ($result->num_rows > 0){
						
						while($row = $result->fetch_assoc()){
							
							$customer_id	 = $row["customer_id"];							
							$name			 = $row["name"];							
							$email			 = $row["email"];							
							$mobile_number 	 = $row["mobile_number"];							
							$subject 		 = $row["subject"];							
							$message 		 = $row["message"];

					?>	
			<tr>
			
				<td><?php echo $customer_id; 	?></td>
				<td><?php echo $name; 		 	?></td>
				<td><?php echo $email;		 	?></td>
				<td><?php echo $mobile_number;  ?></td>
				<td><?php echo $subject; 		?></td>
				<td><?php echo $message; 		?></td>
				
				<td>

					<a href="update_contact_us_form.php?edit=<?php echo $customer_id; ?>"  style="font-size: 29px;"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: #ff7600;"></i></a>
					<a href="del_contact_us_form.php?id= <?php echo $customer_id; ?>" onClick="return do_confirm();"  style="font-size: 29px; margin-left:12px;"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></a>
					
				</td>
				
			
			</tr>

			<?php }}?>
</table>
					<?php
						$sql = "SELECT * FROM contact_us_form";
						   $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							$customer_id= $row['customer_id'];
					?>
						<a href="all_del_contact_us_form.php?id=<?php echo $customer_id; ?>" onClick="return do_confirm();">
							<input type="submit" name="submit" value="Delete All" style="background-color: #000; color: #fff;">
						</a>
					<?php }} ?>






</div>






<!-- for delete varification -->


<script language="javascript">
  function do_confirm()
  {
   var a = confirm("Are you sure, you want to delete the record?");
   return a;
  }
  </script>
</body>
</html>