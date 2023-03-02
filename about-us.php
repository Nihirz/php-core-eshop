<?php include 'header.php'; ?>
<!-- about wrapper start -->
            <div class="about-us-wrapper pt-60 pb-40">
                <div class="container">
                    <div class="row">
                        <!-- About Text Start -->
                        <div class="col-lg-6 order-last order-lg-first">
                             <?php
                                    $select = "SELECT * FROM aboutus";
                                     $result = mysqli_query($conn,$select);              
                                      while($row = mysqli_fetch_assoc($result))
                                      {
                                       ?>
                            <div class="about-text-wrap">
                                <h2><span><?php echo $row['sub_desc'] ?></span>Product For You</h2>
                                <p>We provide the best Beard oile all over the world. We are the worldd best store in indi for Beard Oil. You can buy our product without any hegitation because they truste us and buy our product without any hagitation because they belive and always happy buy our product.</p>
                                <p>Some of our customer say’s that they trust us and buy our product without any hagitation because they belive us and always happy to buy our product.</p>
                                <p>We provide the beshat they trusted us and buy our product without any hagitation because they belive us and always happy to buy.</p>
                            </div>
                        </div>
                        <!-- About Text End -->
                        <!-- About Image Start -->
                        <div class="col-lg-5 col-md-10">
                            <div class="about-image-wrap">
                                <img class="img-full" src="admin/<?php echo $row['img'] ?>" alt="About Us" />
                            </div>
                        </div>
                    <?php } ?>
                        <!-- About Image End -->
                    </div>
                </div>
            </div>
            <!-- about wrapper end -->
            <!-- Begin Counterup Area -->
            <div class="counterup-area">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-3 col-md-6">
                            <!-- Begin Limupa Counter Area -->
                            <div class="limupa-counter white-smoke-bg">
                                <div class="container">
                                    <div class="counter-img">
                                        <img src="images/about-us/icon/1.png" alt="">
                                    </div>
                                    <div class="counter-info">
                                        <div class="counter-number">
                                            <h3 class="counter">2169</h3>
                                        </div>
                                        <div class="counter-text">
                                            <span>HAPPY CUSTOMERS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- limupa Counter Area End Here -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Begin limupa Counter Area -->
                            <div class="limupa-counter gray-bg">
                                <div class="counter-img">
                                    <img src="images/about-us/icon/2.png" alt="">
                                </div>
                                <div class="counter-info">
                                    <div class="counter-number">
                                        <h3 class="counter">869</h3>
                                    </div>
                                    <div class="counter-text">
                                        <span>AWARDS WINNED</span>
                                    </div>
                                </div>
                            </div>
                            <!-- limupa Counter Area End Here -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Begin limupa Counter Area -->
                            <div class="limupa-counter white-smoke-bg">
                                <div class="counter-img">
                                    <img src="images/about-us/icon/3.png" alt="">
                                </div>
                                <div class="counter-info">
                                    <div class="counter-number">
                                        <h3 class="counter">689</h3>
                                    </div>
                                    <div class="counter-text">
                                        <span>HOURS WORKED</span>
                                    </div>
                                </div>
                            </div>
                            <!-- limupa Counter Area End Here -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Begin limupa Counter Area -->
                            <div class="limupa-counter gray-bg">
                                <div class="counter-img">
                                    <img src="images/about-us/icon/4.png" alt="">
                                </div>
                                <div class="counter-info">
                                    <div class="counter-number">
                                        <h3 class="counter">2169</h3>
                                    </div>
                                    <div class="counter-text">
                                        <span>COMPLETE PROJECTS</span>
                                    </div>
                                </div>
                            </div>
                            <!-- limupa Counter Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counterup Area End Here -->
            <!-- team area wrapper start -->
            <div class="team-area pt-60 pt-sm-44">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="li-section-title capitalize mb-25">
                                <h2><span>our team</span></h2>
                            </div>
                        </div>
                    </div> <!-- section title end -->
                    <div class="row">
                         <?php
                                    $select = "SELECT * FROM team";
                                    $result = mysqli_query($conn,$select);              
                                    while($row = mysqli_fetch_assoc($result))
                                      {
                                       ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="team-member mb-60 mb-sm-30 mb-xs-30">
                                <div class="team-thumb">
                                    <img src="admin/<?php echo $row['img']; ?>" alt="Our Team Member">
                                </div>
                                <div class="team-content text-center">
                                    <h3><?php echo $row['name'] ?></h3>
                                    <p><?php echo $row['position']; ?></p>
                                    <a href="#"><?php echo $row['mail']; ?></a>
                                    <div class="team-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end single team member -->
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- team area wrapper end -->

<?php  include 'footer.php';?>