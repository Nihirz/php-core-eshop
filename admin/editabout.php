<?php  
include 'header.php';
?>
<?php  
  // require('config.php');
  $GetId = $_GET['id']; 
    $select = "SELECT * FROM aboutus WHERE id = $GetId";
    $result = mysqli_query($conn,$select);
    $row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<form  method="POST" enctype="multipart/form-data">
<table border="1" width="1000px" >
<tr class="mt5"><th>description</th></tr>
<tr><td><textarea rows="5" cols="25"  class="editor"  name="description" value="<?php echo $row['description'];?>"></textarea></td></tr>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script><script>
  tinymce.init({
    selector: 'textarea.editor',
    menubar: false
  });
</script>
<tr><th>Sub Desc</th></tr>
<tr><td><textarea rows="5" cols="25"  class="editor"  name="sub_desc" value="<?php echo $row['sub_desc'];?>"></textarea></td></tr>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
  tinymce.init({
    selector: 'textarea.editor',
    menubar: false
  });
</script>
</tr>
<tr class="mt-5"><th>Image</th></tr>
<tr><td> <input type="file" name="img_upload">
<input type="text" value="<?php echo $row['img'];?>" name="old_img"></td>
</tr>
 <tr>
 	
 	
 	
 	<tr><td><button value="submit" name="update">Update</button></td></tr>
 </tr>  
 <tr>
    
 	
 </tr>
</form>

<?php
if (isset($_POST['update'])) {

  $file = $_FILES['img_upload']['name'];
  $target_dir = "uploads/";
  $file_name = rand(10,99999). basename($_FILES["img_upload"]["name"]);
  $target_file = $target_dir . $file_name;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // $old_file = $_POST['old_img'];
 $description=$_POST['description'];
 $sub_desc=$_POST['sub_desc'];

  if ($file == "")
  {
   $update = "UPDATE `aboutus` SET `description`='$description',`sub_desc`='$sub_desc',`img`='$target_file' WHERE id = '$GetId' ";
     $conn->query($update);
      echo "<script>alert('Record update');location.href='aboutus.php';</script>";
  }
  else
    {
        $check = getimagesize($_FILES["img_upload"]["tmp_name"]);
        if($check !== false) {

        $uploadOk = 1;
        } else {
        echo "File is not an image.";
        $uploadOk = 0;
        }
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
        {
            echo "Sorry, only jpg png,jpeg,gif files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) 
        {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } 
		else
        {
            if (move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file))
            {
                 $update = "UPDATE `aboutus` SET `description`='$description',`sub_desc`='$sub_desc',`img`='$target_file' WHERE id = '$GetId' ";

                if (mysqli_query($conn,$update) == TRUE)
                {
                    echo "<script>alert('Record Update');location.href='aboutus.php';</script>";
                }
                // unlink($old_file);
            }
            else
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
?>

</body>
</html>
   
                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                    crossorigin="anonymous"></script>

                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->