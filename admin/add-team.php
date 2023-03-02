<?php  
include 'header.php';
include 'conn.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Team</title>
</head>
<body>

<form  method="POST" enctype="multipart/form-data">
	<table border="1" width="1000px">
		<tr class="mt5"><th>Name</th></tr>
			<tr>
				<td>
					<input type="text" name="name">
				</td>
			</tr>
			<tr><th>Position</th></tr>
			<tr>
				<td>
					<input type="text" name="position">
				</td>
			</tr>
			<tr><th>Mail</th></tr>
			<tr>
				<td>
					<input type="email" name="mail">
				</td>
			</tr>
			<tr class="mt-5"><th>Choose Team Member Image</th></tr>
			<tr>
				<td>
					<input type="file" name="image" id="">
				</td>
			</tr>
 			<tr>
 				<td class="text-right">
 					<input type="submit" value="Add Member" class="btn btn-primary" name="submit">
 				</td>
 			</tr>
	</table>
</form>
</body>
</html>

<?php

if (isset($_POST['submit'])) 
{
  $target_dir = "uploads/";
  $file_name = rand(10,99999). basename($_FILES["image"]["name"]);
  $target_file = $target_dir . $file_name;
  $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
      echo "Sorry, only image files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else 
  {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        
      $name = $_POST['name'];
			$position = $_POST['position'];
      $mail = $_POST['mail'];
        
        $insert = "INSERT INTO team(name,position,mail,img) VALUES ('$name','$position','$mail','$target_file')";
        $query = mysqli_query($conn,$insert);

        if ($query == true) {
          
          echo "<script>alert('Data Inserted');location.href='our-team.php';</script>";

        }
          
      } 
      else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
}
?>
