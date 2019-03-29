<?php
include "config.php";

include "header.php";

if(isset($_POST['submit'])){
	
$embed_maps 	= $_POST['embed_maps'];		
$pages_content 	= $_POST['pages_content'];	
$pages_content2 = $_POST['pages_content2'];
$pages_h1 		= $_POST['pages_h1'];
$pages_h2 		= $_POST['pages_h2'];
$pages_h3 		= $_POST['pages_h3'];
$pages_h4 		= $_POST['pages_h4'];
$sub_manu_id 	= $_POST['sub_manu_id'];
$image = time().$_FILES['image']['name'];

	if($_FILES['image']['type']=="image/png" || $_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/jpg")
	{
		move_uploaded_file($_FILES['image']['tmp_name'],'services/'.$image);
		
		$sql = "INSERT INTO pages(pages_sub_manu_id, pages_h1, pages_h2, pages_h3, pages_h4, pages_content,  pages_content2, embed_maps, image) VALUES ('$sub_manu_id', '$pages_h1', '$pages_h2', '$pages_h3', '$pages_h4', '$pages_content', '$pages_content2', '$embed_maps', '$image')";

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
		 input{
	 	color: #000;
	 }
	</style>
</head>
<body>



<div style="margin-top:80px; background-color:lightslategray; padding: 50px;">

<form method="post" action="add_service_pages.php"enctype="multipart/form-data" style="text-align:-webkit-center;  background-color:#3d7e7e; padding:21px;">

<div style="font-size: xx-large;">
Service page No:
</div>
<select name="sub_manu_id" style="padding:4px 82px; font-size:18px; color: #000;">
								<?php
										$sql ="SELECT * FROM sub_manu ";
									  $result = $conn->query($sql);
									  
									  if ($result->num_rows > 0) {
									  
									  // output data of each row
									  while($row = $result->fetch_assoc()) {
										  
									  
									  $sub_manu_id		= $row['sub_manu_id'];									  
									  $sub_manu_name	= $row['sub_manu_name'];
								?>
		
		
			<option style="color: #000;" value="<?=$sub_manu_id; ?>"><?=$sub_manu_name; ?></option>
		
			<?php }} ?>
</select>
		

<div style="font-size: xx-large;">
Insert h1:
</div>
<input type="text" name="pages_h1"  style="padding:8px 31px; font-size:17px;"><br><br>


<div style="font-size: xx-large;">
Insert Image:
</div>
<input type="file" name="image"  style="padding:8px 31px; font-size:17px;"><br><br>


<div style="font-size: xx-large;">
Insert h2:
</div>
<input type="text" name="pages_h2"  style="padding:8px 31px; font-size:17px;"><br><br>

<div style="font-size: xx-large;">
Insert h3:
</div>
<input type="text" name="pages_h3"  style="padding:8px 31px; font-size:17px;"><br><br>


<div style="font-size: xx-large;">
Insert page content:
</div>
<input type="text" name="pages_content"  style="padding:8px 31px; font-size:17px;"><br><br>

<div style="font-size: xx-large;">
Insert page content2:
</div>
<input type="text" name="pages_content2"  style="padding:8px 31px; font-size:17px;"><br><br>


<div style="font-size: xx-large;">
Insert h4:
</div>
<input type="text" name="pages_h4"  style="padding:8px 31px; font-size:17px;"><br><br>

<div style="font-size: xx-large;">
Insert emed maps:
</div>
<input type="text" name="embed_maps"  style="padding:8px 31px; font-size:17px;"><br><br>

<input type="submit" name="submit" value="submit"  style="padding:8px 31px; background-color: #000; color: #fff; font-size:17px;">
</form>



	<?php
						$sql = "SELECT * FROM pages";
						
						   $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
					        $pages_h1 	= $row["pages_h1"];
							$pages_h2 	= $row["pages_h2"];
							$pages_h3 	= $row["pages_h3"];
							$pages_h4 	= $row["pages_h4"];
							$pages_content 	= $row["pages_content"];
							$pages_content2 	= $row["pages_content2"];
							$embed_maps 	= $row["embed_maps"];
							
	?>
					<h1><?php echo $pages_h1 ?></h1>
					<h2><?php echo $pages_h2 ?></h2>
					<h3><?php echo $pages_h3 ?></h3>
					<h4><?php echo $pages_h4 ?></h4>
					<p><?php echo $pages_content ?></p>
					<p><?php echo $pages_content2 ?></p>
					<p><?php echo $embed_maps ?></p>
	   <?php }} ?>
						   
						   
						   
						   
						   
<?php
				$sql= "SELECT * FROM pages ";
				
				$result = $conn->query($sql);
				
				if($result->num_rows > 0){
				
					while($row=$result->fetch_assoc()){
						$image = $row["image"];
						
						  
				?>
						<img src="services/<?php echo $image; ?>" height="200px;" width="500px;" /> 
						
				<?php }} ?>


</div>
</body>
</html>