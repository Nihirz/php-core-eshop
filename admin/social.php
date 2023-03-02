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
                                            <th><i class="fa fa-facebook-official" aria-hidden="true"
                                            	style="font-size:35px;color:blue;"></i><span style="font-size:25px;">Facebook</span></th>
                                            <th><i class="fa fa-instagram" aria-hidden="true" style="font-size:35px;color:#eb3d34;"></i><span style="font-size:25px;">Instagram</span></th>
                                             <th><i class="fa fa-twitter" aria-hidden="true" style="font-size:35px;color:#a3a6ff;"></i><span style="font-size:25px;">Twitter</span></th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                    $select = "SELECT * FROM Social";
                                    $result = mysqli_query($conn,$select);              
                                    while($row = mysqli_fetch_assoc($result))
                                      {
                                       ?>
            
                                        <tr>
                                            <td>
                                               <label> <?php echo $row['facebook'] ?></label>
                                            </td>
                                            <td>
                                            	<label><?php echo $row['instagram'] ?></label>
                                            </td> 
                                            <td>
                                            	<label><?php echo $row['twitter'] ?></label>
                                            </td>  
                                            <td><a href="editsocial.php?id=<?php echo $row['id'] ?>" class="btn btn-primary ml-3">Edit</a></td>
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