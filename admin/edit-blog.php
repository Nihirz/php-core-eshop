<?php  
  require('conn.php');
  $GetId = $_GET['id']; 
    $select = "SELECT * FROM blog WHERE id = $GetId";
    $result = mysqli_query($conn,$select);
    $row1= mysqli_fetch_array($result);
?>
<?php

  require_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  
</head>
<body>
  <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Blog Table</strong>
                            </div>

                            <div class="card-body">
                               <form method="POST" enctype="multipart/form-data">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                   
                                    <tbody>

                                    <tr><td>Title</td></tr>
                         <tr><td><input type="text" name="title" value="<?php echo $row1['title'];?>"></td></tr>

                                    <tr><th>Description</th></tr>
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

                                      <tr class="mt-5"><th>Image</th></tr>
                                        <tr>
                                          <td><input type="file" name="img_upload">
                                            <span><img src="<?php echo $row1['img'];?>" name="old_img" style="width: 150px;"></span>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" name="submit">save</button>
 </form>
                            </div>
                        </div>
                    </div>
   
  
   
 <?php
  if(isset($_POST['submit']))
      {
  $target_dir = "uploads/";
  $file_name = rand(10,99999). basename($_FILES["img_upload"]["name"]);
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
      if (move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file)) {
        
    $title=$_POST['title'];
    $description=$_POST['description'];
      //'no'  
      if ($file == "")
  {
   $update = "UPDATE blog SET title='$title', description='$description',img='$target_file' WHERE id = '$GetId' ";
     $conn->query($update);
      echo "<script>alert('Record update');location.href='blogs.php';</script>";
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
                 $update = "UPDATE blog SET title='$title', description='$description',img='$target_file' WHERE id = '$GetId' ";
                 // upadte tblename set fieldname=variABLE
                 // PLZ WRTITE coreect speeling

                if (mysqli_query($conn,$update) == TRUE)
                {
                    echo "<script>alert('Record Update');location.href='blogs.php';</script>";
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
}
      }
  ?>



    


</body>
</html>
