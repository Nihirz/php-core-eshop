<?php  
include 'header.php';
include 'conn.php';
?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Slider</title>
</head>
<body>
<form class="form-group" method="POST">
<div class="container">
    <div class="row">
        <div class="col-md-12 bg-light text-right">
            <a href="addcategory.php"><button type="button" class="btn btn-primary" name="add_slider" >Add Category</button></a>
            
        </div>
    </div>
</div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                    $select = "SELECT * FROM category";
                                    $result = mysqli_query($conn,$select);              
                                    while($row = mysqli_fetch_assoc($result))
                                      {
                                       ?>
            
                                        <tr>
                                            <td>
                                               <lable><?php echo $row['category'] ?></lable>
                                            </td>   
                                            <td><a href="editcategory.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="deletecategory.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                                         </tr>
                                         <?php } ?>
                                 
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
</form>
</body>
</html>

