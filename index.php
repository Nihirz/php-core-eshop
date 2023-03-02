<?php 
include 'header.php';
?>
            <!-- Begin Slider With Banner Area -->
            <!-- <div class="slider-with-banner"> -->
                <div class="container">
                    <div class="row">
                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                        <style>
                            .mySlides {display:none;}
                        </style>
                        <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <!-- Begin Slider Area -->
                        <?php
                        $select = "SELECT * FROM slider";
                        $result = mysqli_query($conn,$select);              
                        while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                            <img class="mySlides img-fluid" src="admin/<?php echo $row['img'] ?>" style="width:100%; height: 300px;">
                        <?php } ?>

                        <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
                        <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
                        <!-- Slider Area End Here -->
                    </div>
                </div>
            <!-- </div> -->
            <!-- Slider With Banner Area End Here -->
            <!-- Begin Product Area -->
            <div class="product-area pt-60 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#smart-phones"><span>Smart Phone</span></a></li>
                                   <li><a data-toggle="tab" href="#li-bestseller-product"><span>Headphone </span></a></li>
                                   <li><a data-toggle="tab" href="#li-featured-product"><span>Camera</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <!-- Smart Phone -->
                        <div id="smart-phones" class="tab-pane active show" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                <?php 

                                        $sql = "SELECT * FROM `products` WHERE category= 13 ";
                                        $result = mysqli_query($conn,$sql);
                                        while($row3 = mysqli_fetch_assoc($result)) {
                                        ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="shop.php">
                                                    <img src="admin/<?= $row3["img"]?>" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop.php"><?php echo $row3['name']; ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="shop.php"><?php echo $row['name'] ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="shop.php"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="shop.php" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php } ?>                                  
                                </div>
                            </div>
                        </div>
                        <!-- Best seller -->
                        <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                        <?php 

                                        $sql = "SELECT * FROM `products` WHERE category= 14 ";
                                        $result = mysqli_query($conn,$sql);
                                        while($row4 = mysqli_fetch_assoc($result)) {
                                        ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="shop.php">
                                                    <img src="admin/<?php echo $row4['img']; ?>" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop.php"><?php echo $row4['name']; ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="shop.php"><?php echo $row4['name']; ?></a></h4>
                                                    
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="shop.php"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="shop.php" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- Camera -->
                        <div id="li-featured-product" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                     <?php 

                                        $sql = "SELECT * FROM `products` WHERE category= 15 ";
                                        $result = mysqli_query($conn,$sql);
                                        while($row5 = mysqli_fetch_assoc($result)) {
                                        ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="shop.php">
                                                    <img src="admin/<?php echo $row5['img']; ?>" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop.php"><?php echo $row5['name']; ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="shop.php"><?php echo $row5['name']; ?></a></h4>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="shop.php"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="shop.php" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                  <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->

            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Laptop</span>
                                </h2>
                               
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php 

                                        $sql = "SELECT * FROM `products` WHERE category= 10 ";
                                        $result = mysqli_query($conn,$sql);
                                        while($row1 = mysqli_fetch_assoc($result)) {
                                        ?>
                                    <div class="col-lg-12">

                                        
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="shop.php">
                                                    <img src="admin/<?php echo $row1['img']; ?>" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop.php"><?php echo $row1['category']; ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="shop.php"><?php echo $row1['name']; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="shop.php">Add to cart</a></li>
                                                        <li><a class="links-details" href="shop.php"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="shop.php" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php } ?>
                                 
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's Static Home Area -->
            <div class="li-static-home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Static Home Image Area -->
                            <!-- <div class="li-static-home-image"></div> -->
                            <!-- Li's Static Home Image Area End Here -->
                            <!-- Begin Li's Static Home Content Area -->
                           <!--  <div class="li-static-home-content">
                                <p>Sale Offer<span>-20% Off</span>This Week</p>
                                <h2>Featured Product</h2>
                                <h2>Meito Accessories 2018</h2>
                                <p class="schedule">
                                    Starting at
                                    <span> $1209.00</span>
                                </p>
                                <div class="default-btn">
                                    <a href="shop-left-sidebar.html" class="links">Shopping Now</a>
                                </div>
                            </div> -->
                            <!-- Li's Static Home Content Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Li's Trending Product Area -->
                       <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Tranding Products</span>
                                </h2>
                               
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php 

                                        $sql = "SELECT * FROM `products` WHERE category= 16 ";
                                        $result = mysqli_query($conn,$sql);
                                        while($row1 = mysqli_fetch_assoc($result)) {
                                        ?>
                                    <div class="col-lg-12">

                                        
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="shop.php">
                                                    <img src="admin/<?php echo $row1['img']; ?>" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop.php"><?php echo $row1['category']; ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="shop.php"><?php echo $row1['name']; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php } ?>
                                 
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Trending Product Area End Here -->
            <!-- Begin Li's Trendding Products Area -->
            <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Best Sellers</span>
                                </h2>
                                
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php 

                                        $sql = "SELECT * FROM `products` WHERE category= 17";
                                        $result = mysqli_query($conn,$sql);
                                        while($row1 = mysqli_fetch_assoc($result)) {
                                        ?>
                                    <div class="col-lg-12">

                                        
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="products.php?id=<?php echo $row1['id']; ?>">
                                                    <img src="admin/<?php echo $row1['img']; ?>" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop.php"><?php echo $row1['category']; ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="products.php?id=<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></a></h4>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php } ?>
                                 
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Trendding Products Area End Here -->
            <?php 
            include 'footer.php';
        ?>