<?php  
include 'header.php';
include 'conn.php';
?>
<?php

include 'conn.php';
extract($_GET);
$query = "DELETE FROM slider WHERE id='$id'";
$result = mysqli_query($conn,$query);

if ($result) {
	echo "<script>alert('Record Deleted Successfully');location.href='slider.php';</script>";
}
// header('location:select.php');
?>