<?php  
include 'header.php';
include 'conn.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Slider</title>
</head>
<body>

<form  method="POST" enctype="multipart/form-data">
	<table border="1" width="1000px">
		<tr class="mt5"><th>Sider Title</th></tr>
			<tr>
				<td>
					<textarea rows="5" cols="25"  class="editor"  name="title"></textarea>
				<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script><script>
				tinymce.init({
				selector: 'textarea.editor',
				menubar: false
				});
				</script>
				</td>
			</tr>
			<tr><th>Slider Description</th></tr>
			<tr>
				<td><textarea rows="5" cols="25"  class="editor"  name="description"></textarea>
				</td>
				<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			    <script>
			  	tinymce.init({
			    selector: 'textarea.editor',
			    menubar: false
			 	});
				</script>
			</tr>
			<tr class="mt-5"><th>Choose Slider Image</th></tr>
			<tr>
				<td>
					<input type="file" name="image" id="">
				</td>
			</tr>
 			<tr>
 				<td class="text-right">
 					<input type="submit" value="Add Slider" class="btn btn-primary" name="submit">
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
        
       $title = $_POST['title'];
				$description = $_POST['description'];
       
        
        $insert = "INSERT INTO slider(title,description,img) VALUES ('$title','$description','$target_file')";
        $query = mysqli_query($conn,$insert);

        if ($query == true) {
          
          echo "<script>alert('Data Inserted');location.href='slider.php';</script>";

        }
          
      } 
      else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
}
?>
