   <?php 
include "config.php";

/* This query for delete item from table */

$select_id =  (@$_GET['id']);

			

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body style="width:1000px;  margin:95px 243px;  text-align:-webkit-center;">


					<?php

						$sql  = "SELECT * FROM pages WHERE pages_id='$select_id'";

							$result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
										
							$pages_id   		 = $row["pages_id"];
							$pages_sub_manu_id   = $row["pages_sub_manu_id"];
							$pages_h1 		     = $row["pages_h1"];							
							$pages_h2            = $row["pages_h2"];							
							$pages_h3 			 = $row["pages_h3"];							
							$pages_h4	   		 = $row["pages_h4"];							
							$pages_content 	  	 = $row["pages_content"];							
							$pages_content2      = $row["pages_content2"];							
							$embed_maps 	   	 = $row["embed_maps"];							
							$image 	   			 = $row["image"];
							
							
							}}
							
					?>		
					
<h2>Update Pages... </h2>
	<form method="post" action="update_service_pages.php?edit_form=<?php echo $pages_id; ?>"  enctype="multipart/form-data">
	
		pages  h1:<br>
		<input type="text" name="pages_h1" value="<?php echo $pages_h1; ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>
		
		pages  h2:<br>
		<input type="text" name="pages_h2" value="<?php echo $pages_h2; ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>
		
		pages  h3:<br>
		<input type="text" name="pages_h3" value="<?php echo $pages_h3; ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>
		
		pages  h4:<br>
		<input type="text" name="pages_h4" value="<?php echo $pages_h4; ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>
		
		 pages content:<br> 
		<textarea type="textarea"  maxlength="250" rows="9" name="pages_content" style="padding:6px 29px; font-size:18px; ">  <?php echo $pages_content; ?> </textarea>
		<br><br>
		
		 pages content 2:<br> 
		<textarea type="textarea"  maxlength="250" rows="9" name="pages_content2" style="padding:6px 29px; font-size:18px; ">  <?php echo $pages_content2; ?> </textarea>
		<br><br>
		
		 embed maps:<br> 
		<textarea type="textarea"  maxlength="250" rows="9" name="embed_maps" style="padding:6px 29px; font-size:18px; "> <?php echo $embed_maps; ?> </textarea>
		<br><br>
		
		Image:<br>
		<img src="services/<?php echo $image; ?>" height="150px;" width="400px;">
		
		<input type="file" name="image" style="padding:6px 29px; font-size:18px;">
		<br><br>
		
		<input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px;">
		
	</form>
	
<?php 

if (isset($_POST['submit'])){
	
 $update_id = @$_GET['edit_form'];
 
 $pages_h1 = $_POST['pages_h1'];
 
 $pages_h2 = $_POST['pages_h2'];
 
 $pages_h3 = $_POST['pages_h3'];
 
 $pages_h4 = $_POST['pages_h4'];
 
 $pages_content = $_POST['pages_content'];
 
 $pages_content2 = $_POST['pages_content2'];
 
 $embed_maps = $_POST['embed_maps'];
 
$image = $_FILES['image']['name'];


 
		
 if(!empty($image)){
	 
	 
	 if($_FILES['image']['type']=="image/png" || $_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/jpg")
		 
	{
		move_uploaded_file($_FILES['image']['tmp_name'],'services/'.$image);
		
	}
 $sql = "UPDATE pages SET pages_h1='$pages_h1', pages_h2='$pages_h2',  pages_h3='$pages_h3', pages_h4='$pages_h4', pages_content='$pages_content',  pages_content2='$pages_content2',  embed_maps='$embed_maps', image='$image'	 WHERE pages_id='$update_id'";
 }
 
 
 else{
  $sql = "UPDATE pages SET pages_h1='$pages_h1', pages_h2='$pages_h2',  pages_h3='$pages_h3', pages_h4='$pages_h4', pages_content='$pages_content',  pages_content2='$pages_content2',  embed_maps='$embed_maps' WHERE pages_id='$update_id'";
 }
 

 

  if ($conn->query($sql) === TRUE) {
	  
   echo "<script>window.open('mange_service_pages.php?updated=Post Updated', '_self')</script>";
 
 } else {
 
 echo "Error updating record: " . $conn->error;
 
 }
 
} 
?>	
	
</body>
</html>