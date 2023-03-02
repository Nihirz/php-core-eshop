<?php include 'header.php'; ?>

            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->     
            <!-- Begin Contact Main Page Area -->
            <div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
                <div class="container mb-60">
                	 <?php
                                    $select = "SELECT * FROM `map`";
                                    $result = mysqli_query($conn,$select);              
                                    while($row = mysqli_fetch_assoc($result))
                                      {
                                       ?>
                    <div id="google-map">
                    	<iframe src="<?php echo $row['map']; ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                <?php } ?>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                            <div class="contact-page-side-content">
                                <h3 class="contact-page-title">Contact Us</h3>
                              	 <?php
                                    $select = "SELECT * FROM contact";
                                    $result = mysqli_query($conn,$select);              
                                    while($row = mysqli_fetch_assoc($result))
                                      {
                                       ?>
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-fax"></i> Address</h4>
                                    <p><?php echo $row['address'] ?></p>
                                </div>
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-phone"></i> Phone</h4>
                                    <p><?php echo $row['phone'] ?></p>
                                    <p></p>
                                </div>
                                <div class="single-contact-block last-child">
                                    <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                    <p><?php echo $row['email'] ?></p>
                                    <!-- <p>support@hastech.company</p> -->
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                            <div class="contact-form-content pt-sm-55 pt-xs-55">
                                <h3 class="contact-page-title">Tell Us Your Message</h3>
                                <div class="contact-form">
                                    <form  method="POST">
                                        <div class="form-group">
                                            <label>Your Name <span class="required">*</span></label>
                                            <input type="text" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Your Email <span class="required">*</span></label>
                                            <input type="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject">
                                        </div>
                                        <div class="form-group mb-30">
                                            <label>Your Message</label>
                                            <textarea name="message" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit"  class="li-btn-3" name="submit">send</button>
                                        </div>
                                       
                                    </form>
 <?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $insert = "INSERT INTO clientquery(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
    $query = mysqli_query($conn,$insert);

        if ($query == true) {
          
          echo "<script>alert('Data Sent Successfully');location.href='contact.php';</script>";

        }
      
}

?>
                                </div>
                                
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include 'footer.php';  ?>