<?php


include "config.php";

include "header.php";
	
// this code for file upload 
if(isset($_POST["submit_file"]))
{
	$filepath = time().$_FILES['imagepath']['name'];
	
	if($_FILES['imagepath']['type']=="image/png" || $_FILES['imagepath']['type']=="image/jpeg" || $_FILES['imagepath']['type']=="image/jpg")
	{
		move_uploaded_file($_FILES['imagepath']['tmp_name'],'upload/'.$filepath);
		
		$sql = "INSERT INTO logo(imagepath) VALUES ('$filepath')";

			if ($conn->query($sql) === TRUE) {
				echo "uploaded successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	
	}
	else{
		echo "This type of file is not allowed";
	}
}
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


</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


	<h2>For logo upload..</h2><br>
	<form method="post" action="mange_logo.php" enctype="multipart/form-data" style="    margin: 80px 630px;">	
		Select file:
		<br><br>
		<input type="file" name="imagepath"  style="padding:4px 29px; font-size:18px;">
		<br><br>
		<input type="submit" name="submit_file" value="Submit"  style="padding:6px 29px; font-size:18px; margin-top:12px; margin-right:448px !important;     background: black;"/>
	</form>
	


<table style="width:800px; text-align: center; margin-left: 350px;">
	<h3 style="margin-left: 350px;    color: black;">Add & Delete Logo</h3>
<thead>
	<tr>
			<th># NO</th>
		<th>Logo</th>
		<th>Action</th>
	</tr>
</thead>
					<?php
						$sql = "SELECT * FROM logo ";
						
						   $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
					        $id = $row["id"];
							
							$imagepath = $row["imagepath"];
							
					?>
					<tbody>
					<tr>						
						<td><?php echo $id; ?></td>						
						<td><img src="upload/<?php echo $imagepath; ?>" height="70px;" width="250px;" /></td>
						<td>
							<a href="del_logo.php?id=<?php echo $id; ?>" onClick="return do_confirm();"><i class="fa fa-trash" aria-hidden="true" style="margin-left:21px; font-size:28px;  color:red;"></i></a>							
						</td>
					</tr>
					<tbody>
					<?php }} ?>
					
</table>
	
	
	
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