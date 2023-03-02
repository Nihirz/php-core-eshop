<?php  
include 'header.php';
include 'conn.php';
?>
<?php

include 'conn.php';
extract($_GET);
$query = "DELETE FROM social WHERE id='$id'";
$result = mysqli_query($conn,$query);

if ($result) {
	echo "<script>alert('Social Media Deleted Successfully');location.href='social.php';</script>";
}
// header('location:select.php');
?>