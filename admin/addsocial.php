<?php  
include 'header.php';
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Social Media</title>
</head>
<body>
<form  method="POST" >
    <table border="1" width="1000px">
        <tr class="mt5">
        	<th>Enter Social Media Name</th>
	        	<td>
	                <input type="text" name="name">
	            </td>
        	</tr>
            
            <tr class="mt5">
            	<th>Enter Social Media Link</th>
	            	<td>
	            		<input type="text" name="link">
	            	</td>
            </tr>
            <td>
            	
            </td>
        		<td class="text-right">
                    <input type="submit" value="Add Social Media" class="btn btn-primary" name="submit">
                </td>
    </table>
</form>
</body>
</html>

</body>
</html>
<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $link = $_POST['link'];

    $insert = "INSERT INTO social(name,link) VALUES ('$name','$link')";
    $query = mysqli_query($conn,$insert);

        if ($query == true) {
          
          echo "<script>alert('Social Media Inserted');location.href='social.php';</script>";

        }
      
}

?>