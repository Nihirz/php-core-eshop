<?php  
include 'header.php';
include 'conn.php';
?>
<?php  
  // require('config.php');
  $GetId = $_GET['id']; 
    $select = "SELECT * FROM map WHERE id = $GetId";
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

      <tr class="mt-5"><th class="mt-3">Enter Your Map<div class="text-right"> <a href="map.php" class=" btn btn-dark">Back</a></div></th></tr>
      
      <tr>
        <td>
         <textarea rows="5" cols="140" name="map"><?php echo$row['map']; ?></textarea>
        </td>
      </tr>
   
  <tr><td class=" text-right"><button value="submit" name="update" class="btn btn-primary">Update</button></td></tr>
</form>

<?php
if (isset($_POST['update'])) {
$map=$_POST['map'];
                 $update = "UPDATE `map` SET `map`='$map' WHERE id = '$GetId' ";

                if (mysqli_query($conn,$update) == TRUE)
                {
                    echo "<script>alert('Record Update');location.href='map.php';</script>";
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