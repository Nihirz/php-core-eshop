
<?php  
include 'header.php';
include 'conn.php';
?>
<?php

include 'conn.php';
extract($_GET);
$query = "DELETE FROM team WHERE id='$id'";
$result = mysqli_query($conn,$query);

if ($result) {
	echo "<script>alert('Deleted Successfully');location.href='our-team.php';</script>";
}
// header('location:select.php');
?>