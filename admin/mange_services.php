<?php
include "config.php";

include "header.php";

?>
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


<table style="width:1100px;  margin:135px 210px; ">
<caption style="color: #fff; font-size: 23px;">Main Page Of services </caption>
<tr>
	<th>User Id</th>
	<th>Hading</th>
	<th>Werbpage</th>
	<th>Image</th>
	<th>Action</th>
</tr>
					<?php
						$sql = "SELECT * FROM services ";
						
						   $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
					        $user_id = $row["user_id"];
							
							$hading = $row["hading"];
							
							$werbpage= $row['werbpage'];
							
							$image= $row['image'];
					?>
					
					<tr>
						<td><?php echo $user_id; ?></td>
						<td><?php echo $hading; ?> </td>
						<td><?php echo $werbpage; ?></td>
						<td><img src="services/<?php echo $image; ?>" height="70px;" width="70px;" /></td>
						<td>
							<a href="update_services.php?id=<?php echo $user_id; ?>" style="font-size: 29px;" ><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: #ff7600;"></i></a>
							<a href="del_services.php?id=<?php echo $user_id; ?>" onClick="return do_confirm();" style="margin-left:12px; font-size: 29px;"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></a>
							
						</td>
					</tr>
					<?php }} ?>
					
</table>


					<?php
						$sql = "SELECT * FROM services ";
						   $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							$user_id= $row['user_id'];
					?>
						<a href="all_del_services.php?id=<?php echo $user_id; ?>" onClick="return do_confirm();">
							<input type="submit" name="submit" value="Delete All" style="background-color: #000; color: #fff;">
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