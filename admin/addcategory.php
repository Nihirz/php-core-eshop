<?php  
include 'header.php';
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Category</title>
</head>
<body>
<form  method="POST" >
    <table border="1" width="1000px">
        <tr class="mt5"><th>Category Title</th></tr>
            <tr>
                <td>
                    <input type="text" name="category">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <input type="submit" value="Add Categroy" class="btn btn-primary" name="submit">
                </td>
            </tr>
    </table>
</form>
</body>
</html>

</body>
</html>
<?php 
if (isset($_POST['submit'])) {
    $category = $_POST['category'];

    $insert = "INSERT INTO category(category) VALUES ('$category')";
    $query = mysqli_query($conn,$insert);

        if ($query == true) {
          
          echo "<script>alert('Category Inserted');location.href='category.php';</script>";

        }
      
}

?>