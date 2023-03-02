<?php

	session_start();
// }
	//ADD to Cart
	if(isset($_GET['nm']))
	{
		$_SESSION['cart'][]=array("product name"=>$_GET['nm'], "price"=>$_GET['mrp'], "img"=>$_GET['img'], "qty"=>1);
	} 
	
	
	// Update Cart
	else if(! empty($_POST))
	{
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']= $val;
		}
	}
	//End Update cart


	//Delete cart
	else if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
	}

	//end delete cart
	
	header("location:view_cart.php");
?>