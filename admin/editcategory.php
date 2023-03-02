<?php  
include 'header.php';
?>
<?php  
  // require('config.php');
  $GetId = $_GET['id']; 
    $select = "SELECT * FROM category WHERE id = $GetId";
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
        <tr>
            <td><input type="text" name="category" value="<?php echo $row['category']; ?>"></td>
            <td><button value="submit" name="update" class="btn btn-primary">Update</button></td>
        </tr>
 	
 	
 	   
    </table> 
</form>

<?php
if (isset($_POST['update'])){
    $category=$_POST['category'];

    $update = "UPDATE `category` SET `category`='$category' WHERE id = '$GetId' ";

    if (mysqli_query($conn,$update) == TRUE){
                    echo "<script>alert('Category Update');location.href='category.php';</script>";
            }
            else
            {
                echo "<script>alert('category Can Not Update');location.href='category.php';</script>";
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