<?php  
  require('conn.php');
  $GetId = $_GET['id']; 
    $select = "SELECT * FROM products WHERE id = $GetId";
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
                                <strong class="card-title">product Table</strong>
                            </div>

                            <div class="card-body">
                               <form method="POST" enctype="multipart/form-data">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                   
                                    <tbody>

                                    <tr><td>name</td></tr>
                         <tr><td><input type="text" name="name" value="<?php echo $row1['name'];?>"></td></tr>

                                    <tr><td>description</td></tr>
                                 <tr>
                               <td><textarea  name="description" class="editor" ><?php echo $row1['description'];?></textarea></td></tr>
                              

                         <tr class="mt-5"><th>Image</th></tr>
      <tr>
        <td><input type="file" name="img_upload">
        <input type="text" value="<?php echo $row1['img'];?>" name="old_img"></td>
      </tr>
      <tr>
        <th>Choose Your Category</th>
      </tr>
      <tr>
        <td>
          <select name="category">
                                                   <?php
                                              $select = "SELECT * FROM category";
                                              $result = mysqli_query($conn,$select);              
                                              while($row = mysqli_fetch_assoc($result))
                                                {
                                                  ?>
                                                  <option value="<?php echo $row1['id']; ?>" >  
                                                  <?php echo $row['category'];?> 
                                        </option> 
                                                  <?php
                                                }
                                                 ?>

                                            </select>
        </td>
      </tr>
          
                          
                         <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                           <script>
                         tinymce.init({
                           selector: 'textarea.editor',
                           menubar: false
                         });
</script>
                        

                                           
                                        
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
        
    $name=$_POST['name'];
    $description=$_POST['description'];
    $category=$_POST['category'];

   
    
   
   

   // $InputArray = array('play','read');
   //     print_r(implode($InputArray));


      //'no'  
      if ($file == "")
  {
   $update = "UPDATE products SET name='$name', description='$description',img='$target_file', category='$category' WHERE id = '$GetId' ";
     $conn->query($update);
      echo "<script>alert('Record update');location.href='products.php';</script>";
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
                 $update = "UPDATE products SET name='$name', description='$description',img='$target_file', category='$category' WHERE id = '$GetId' ";
                 // upadte tblename set fieldname=variABLE
                 // PLZ WRTITE coreect speeling

                if (mysqli_query($conn,$update) == TRUE)
                {
                    echo "<script>alert('Record Update');location.href='products.php';</script>";
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
