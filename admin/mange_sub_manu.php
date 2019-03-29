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
 th, td { padding: 8px;}
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
						
				
							
							
<table style="width:1000px;  margin:125px 243px; ">
<caption style="color: #fff; font-size: 23px;">Delete & Update Sub Menu </caption>
<tr>
	<th>Sub Menu Id</th>
	<th>Menu Id</th>
	<th>Sub Menu Name</th>
	<th>Link</th>
	<th>Action</th>
</tr>
								<?php
									  $sql ="SELECT a.*, b.* FROM sub_manu a, manu b WHERE a.manu_id=b.manu_id";
									  
									  //$sql ="SELECT * FROM sub_manu ";//
									  
									  $result = $conn->query($sql);
									  
									  if ($result->num_rows > 0) {
									  
									  // output data of each row
									  while($row = $result->fetch_assoc()) {
										  
									  $sub_manu_id 		= $row["sub_manu_id"];							  
									  $sub_manu_name 	= $row["sub_manu_name"];									 
									  $sub_manu_link	= $row['sub_manu_link'];
									  $manu_name		= $row['manu_name'];
								?>				
					<tr>
						<td><?php echo $sub_manu_id; ?></td>
						<td><?php echo $manu_name; ?></td>
						<td><?php echo $sub_manu_name; ?> </td>
						<td><?php echo $sub_manu_link ?></td>
						<td>
							<a href="update_sub_manu.php?id=<?php echo $sub_manu_id; ?>"  style=" font-size: 29px;"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: #ff7600;"></i></a>
							<a href="del_sub_manu.php?id=<?php echo $sub_manu_id; ?>" onClick="return do_confirm();" style="margin-left:12px; font-size: 29px;"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></a>
							
							
							
						</td>
					</tr>
					<?php }} ?>
					
</table>

					<?php
						$sql ="SELECT * FROM sub_manu ";

					
					    $result = $conn->query($sql);
						
						if ($result->num_rows > 0) {
									  
						// output data of each row
						  while($row = $result->fetch_assoc()) {
							  
						  $sub_manu_id = $row["sub_manu_id"];	
									  
									  
				  ?>	
						<a href="all_del_sub_manu.php?id=<?php echo $sub_manu_id; ?>" onClick="return do_confirm();">
							<input type="submit" name="submit" value="Delete All"  style="background-color: #000; color: #fff;">
						</a>	
								
					<?php }} ?>
								
								
								
								
								
								
								
								
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





