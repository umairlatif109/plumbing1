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
	 textarea{
	 	color: #000;
	 }
	 td{
	 	   width: 15em; 
    word-wrap: break-word;
	 }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<table style="width:1500px;  margin:130px 5px; ">
<caption  style="color: #fff; font-size: 23px;">Main Page Of services </caption>
<tr>
	<th>Pages Id</th>
	<th>Pages Sub Menu Id</th>
	<th>Page h1</th>
	<th>Page h2</th>
	<th>Page h3</th>
	<th>Page h4</th>
	<th>page_content</th>
	<th>page_content 2</th>
	<th>Embed Maps</th>
	<th>Image</th>
	<th>Action</th>
</tr>
					<?php
						$sql = "SELECT * FROM pages ";
						
						   $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
					       
					?>
					
					<tr> 
						<td><?=$row["pages_id"];?></td>
						<td><?=$row["pages_sub_manu_id"];?></td>
						<td><?=$row["pages_h1"];?> </td>
						<td><?=$row["pages_h2"];?></td>
						<td><?=$row["pages_h3"];?></td>
						<td><?=$row["pages_h4"];?> </td>
						<td><textarea><?=$row["pages_content"];?></textarea></td>
						<td><textarea><?=$row["pages_content2"];?></textarea></td>
						<td><textarea><?=$row["embed_maps"];?></textarea></td>
						<td><img src="services/<?=$row["image"];?>" height="90px;" width="120px;" /></td>						
						<td>

							<a href="update_service_pages.php?id=<?=$row["pages_id"];?>"  style="font-size: 29px;"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: #ff7600;"></i></a>
							<a href="del_service_pages.php?id=<?=$row["pages_id"];?>" onClick="return do_confirm();"  style="font-size: 29px; margin-left:12px;"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></a>
						
						</td>
					</tr>
					<?php }} ?>
					
</table>


					<?php
						$sql = "SELECT * FROM pages ";
						   $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
						
					?>
						<a href="all_del_service_pages.php?id=<?=$row["pages_id"];?>" onClick="return do_confirm();">
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