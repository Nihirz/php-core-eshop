<?php  
include 'header.php';
include 'conn.php';
?>
<?php

include 'conn.php';
extract($_GET);
$query = "DELETE FROM category WHERE id='$id'";
$result = mysqli_query($conn,$query);

if ($result) {
	echo "<script>alert('Category Deleted Successfully');location.href='category.php';</script>";
}
// header('location:select.php');
?>