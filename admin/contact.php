<?php  
include 'header.php';
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Social Media</title>
</head>
<body>

	<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-address-book" aria-hidden="true"
                                            	style="font-size:30px;"></i><span style="font-size:25px;">Address</span></th>
                                            <th><i class="fa fa-phone" aria-hidden="true" style="font-size:30px;"></i><span style="font-size:25px;">Phone</span></th>
                                             <th><i class="fa fa-envelope" aria-hidden="true" style="font-size:30px;"></i><span style="font-size:25px;">Email</span></th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                    $select = "SELECT * FROM contact";
                                    $result = mysqli_query($conn,$select);              
                                    while($row = mysqli_fetch_assoc($result))
                                      {
                                       ?>
            
                                        <tr>
                                            <td>
                                               <label> <?php echo $row['address'] ?></label>
                                            </td>
                                            <td>
                                            	<label><?php echo $row['phone'] ?></label>
                                            </td> 
                                            <td>
                                            	<label><?php echo $row['email'] ?></label>
                                            </td>  
                                            <td><a href="editcontact.php?id=<?php echo $row['id'] ?>" class="btn btn-primary ml-3">Edit</a></td>
                                         </tr>
                                         <?php } ?>                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div><!-- .animated -->
        </div>



</body>
</html>