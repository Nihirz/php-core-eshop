<?php  
include 'header.php';
include 'conn.php';
?>
<?php

include 'conn.php';
extract($_GET);
$query = "DELETE FROM products WHERE ID='" . $_GET["id"] . "";
$result = mysqli_query($conn,$query);

if ($result) {
	echo "<script>alert('Product Deleted Successfully');location.href='products.php';</script>";
}
// header('location:select.php');
?>