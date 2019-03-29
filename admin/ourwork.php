<?php
include "config.php";

if(isset($_POST['submit'])){
	
	$work_image=time().$_FILES['work_image']['name'];
	

	if($_FILES['work_image']['type'] == "image/png" || $_FILES['work_image']['type']=="image/jpeg" || $_FILES['work_image']['type']=="image/jpg" ){
		
		
		move_uploaded_file($_FILES['work_image']['tmp_name'],'work/'.$work_image);
		
		$sql = "Insert INTO our_work(work_image)VALUES ('$work_image')";
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



if(isset($_POST['submit2'])){
	
	$work_image2=time().$_FILES['work_image2']['name'];
	

	if($_FILES['work_image2']['type'] == "image/png" || $_FILES['work_image2']['type']=="image/jpeg" || $_FILES['work_image2']['type']=="image/jpg" ){
		
		
		move_uploaded_file($_FILES['work_image2']['tmp_name'],'work/'.$work_image2);
		
		$mysql = "Insert INTO our_work2(work_image2)VALUES ('$work_image2')";
			if ($conn->query($mysql) === TRUE) {
				echo "uploaded successfully";
			} else {
				echo "Error: " . $mysql . "<br>" . $conn->error;
			}
	
	}
	else{
		echo "This type of file is not allowed";
	}

}


?>
<!DOCTYPE html>
<html>
<body>
	<form method="post" action="ourwork.php" enctype="multipart/form-data"  style="text-align:-webkit-center;  background-color:aqua; padding:21px;">
		<div style="font-size: xx-large;">
			Insert Images:
		</div>
		<input type="file" name="work_image" style="padding:8px 31px; font-size:17px;"> <br><br>
		<input type="submit" name="submit" value="submit" style="padding:8px 31px; background-color:#4f82dd; font-size:17px;">
		

	</form>
						   
	<form method="post" action="ourwork.php" enctype="multipart/form-data"  style="text-align:-webkit-center;  background-color:aqua; padding:21px;">
		<div style="font-size: xx-large;">
			Insert Images Part 2:
		</div>
		<input type="file" name="work_image2" style="padding:8px 31px; font-size:17px;"> <br><br>
		<input type="submit" name="submit2" value="submit" style="padding:8px 31px; background-color:#4f82dd; font-size:17px;">
		

	</form>					   
	
									   
<?php
				$sql= "SELECT * FROM our_work" ;
				$result = $conn->query($sql);
				if($result->num_rows > 0){
					while($row=$result->fetch_assoc()){
						$work_image= $row["work_image"];
						
						  
				?>
						<img src="work/<?php echo $work_image; ?>" /> 
						
				<?php }} ?>
				
										   
<?php
				$mysql= "SELECT * FROM our_work2" ;
				$result = $conn->query($mysql);
				if($result->num_rows > 0){
					while($row=$result->fetch_assoc()){
						$work_image2 = $row["work_image2"];
						
						  
				?>
						<img src="work/<?php echo $work_image2; ?>" /> 
						
				<?php }} ?>
</body>
</html>