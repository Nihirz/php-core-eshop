<?php  
  require_once('header.php');
  require('conn.php');
  $GetId = $_GET['id']; 
    $select = "SELECT * FROM team WHERE id = $GetId";
    $result = mysqli_query($conn,$select);
    $row = mysqli_fetch_array($result);
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
                <strong class="card-title">Our Team</strong>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td>image</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="file" name="img_upload"><img src="<?php echo $row['img'];?>" height="100" width="100">
                                </td>
                            </tr>
                            <tr>
                                <th>Name</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="name" value="<?php echo $row['name'];?>">
                                </td>
                            </tr>
                            <tr>
                                <th>Position</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="position" value="<?php echo $row['position'];?>">
                                </td>
                            </tr>
                            <tr>
                                <th>Mail</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="mail" value="<?php echo $row['mail'];?>">
                                </td>
                            </tr>
                        </tbody>
                </div>
            </div>
        </div>
   
  </table>
   <button type="submit" name="submit">save</button>
 </form>
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
    $position = $_POST['position'];
    $mail=$_POST['mail'];
    
   
   

   // $InputArray = array('play','read');
   //     print_r(implode($InputArray));


      //'no'  
      if ($file == "")
  {
   $update = "UPDATE team SET name='$name',position='$position',mail = '$mail',img='$target_file' WHERE id = '$GetId' ";
     $conn->query($update);
      echo "<script>alert('Record update');location.href='our-team.php';</script>";
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
                 $update = "UPDATE team SET name='$name',position='$position',mail = '$mail',img='$target_file' WHERE id = '$GetId'  ";
                 // upadte tblename set fieldname=variABLE
                 // PLZ WRTITE coreect speeling

                if (mysqli_query($connection,$update) == TRUE)
                {
                    echo "<script>alert('Record Update');location.href='our-team.php';</script>";
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