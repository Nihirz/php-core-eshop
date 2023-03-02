<?php
    require_once('header.php');
    require_once('config.php'); 
    session_start();
    // print_r($_SESSION['cart']);
?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">        
                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                           <form action="add_cart.php" method="POST">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Image</th>
                                           <!--  <th class="product-name">Product</th> -->
                                            <th class="product-name">Product Name</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        
                                   <?php
                                   if (empty($_POST)) {                                                                 
                                             $total=0;
                                            foreach ($_SESSION['carts'] as $id => $val) 
                                            {
                                                   $rate = $val['qty'] * $val['price'];
                                                   $total =$total +$rate;
                                                $discountPrice = ($total - ($total * 10 / 100));
                                        echo '
                                         <tr class="cart_item">
                                            <td class="product-thumbnail">
                                              <a href="#"><img src="admin/'.$val['img'].'" alt="Product" style="height:200px; width:50%;"></a>
                                            </td>

                                            <td class="product-name">
                                               <a href="#">'.$val['product name'].'</a>
                                            </td>

                                            <td class="product-price">
                                               <p>'.$val['price'].'</p>
                                            </td>

                                          <td class="quantity-box">
                                            <input type="number" class="form-control"  name="'.$id.'" value="'.$val['qty'].'" min="0">
                                         </td>
                                            

                                            <td class="product-subtotalhh">
                                                <span class="amount"><p>'. $rate.'</p></span> 
                                            </td>
                                             <td class="product-remove">     
                                                <a href="add_cart.php?id='.$id.'" class="btn btn-primary">
                                                   <i class="fa fa-remove"></i>
                                                 </a>
                                            </td>
                                        </tr>
                                        ';    
                                }
                            }
                            else {
                                echo "cart is empty";
                            }
                                ?>
                                        </tr>
                                          <tr>
                                            <td class="actions" colspan="6">
                                             <input type="submit" value=Update Cart"" class="button">
                                          <!--   <input href="login.php" type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward"> -->
                                            
                                            </td>
                                            <tr>
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">


                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>
                                <table cellspacing="0">
                                    <tbody>

                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount"></span>
                                            <?php
                                        if ( empty($_POST)) {     
                                    ?>
                                 <span><?php echo $total?></span>
                                 <?php
                                    }
                                    else
                                    {
                                        echo "0";
                                    }
                                 ?>
                                </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount"><?php echo $discountPrice?></span></strong> </td>
                                        </tr>
                                        <?php
                                            if(!isset($_SESSION["email"]))
                                            {
                                        ?>
                            <a href="login.php" class="checkout-button button alt wc-forward">Proceed to checkout</a>
                                        <?php
                                            }
                                        else
                                        {
                                        ?>
                            <a href="checkout.php" class="checkout-button button alt wc-forward" style="width: 100%;height: 100px;text-align: center; background-color: blue;">Proceed to checkout</a>
                                         <?php
                                                }
                                                ?>
                                    </tbody>
                                </table>
                            </div>


                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>


<?php
    require_once('footer.php');
?>



