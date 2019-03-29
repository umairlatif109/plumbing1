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
    margin-top: -34px;
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



<table style="width:1000px;  margin:135px 243px; text-align: center;">
<caption style="color: #fff;""><h2>Mange Our Work  </h2></caption>
<tr>
	<th>Image Id</th>
	<th>Image</th>
	<th>Action</th>
</tr>
					<?php
						$sql = "SELECT * FROM our_work ";
						
						   $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
					        $image_id = $row["image_id"];
							
							$image    = $row['image'];
					?>
					
					<tr>
						<td><?php echo $image_id; ?></td>
						<td><img src="our_work/<?php echo $image; ?>" height="70px;" width="70px;" /></td>
						<td>
							<a href="update_our_work.php?id=<?php echo $image_id; ?>"  style="font-size: 29px;"><i class="fa fa-pencil-square-o" aria-hidden="true"  style="color: #ff7600;"></i></a>
							<a href="del_our_work.php?id=<?php echo $image_id; ?>" onClick="return do_confirm();"  style="font-size: 29px; margin-left:12px;"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></a>
							
						</td>
					</tr>
					<?php }} ?>
					
</table>


					<?php
						$sql = "SELECT * FROM our_work ";
						
						   $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								
							$image_id= $row['image_id'];
							
					}} ?>

						<a href="all_del_our_work.php?id=<?php echo $image_id; ?>" onClick="return do_confirm();">
							<input type="submit" name="submit" value="Delete All" style="background-color: #000; color: #fff;" />
						</a>
					






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