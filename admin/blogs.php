<?php  
include 'header.php';
include 'conn.php';
?>
       <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
<div class="container">
    <div class="row">
        <div class="col-md-12 bg-light text-right">
            <a href="add-blog.php"><button type="button" class="btn btn-primary" name="add_slider" >Add Blog</button></a>
            
        </div>
    </div>
</div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $select = "SELECT * FROM blog";
                                    $result = mysqli_query($conn,$select);              
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                        <tr>
                                 
                                            <td><?php echo $row['title'] ?></td>
                                            <td><?php echo $row['description'] ?></td>
                                            <td><img src="<?php echo $row['img'] ?>"  style="width: 150px;"></td>
                                            <td><?php echo $row['created_at'] ?></td>
                                            <td>
                                            	<a href="edit-blog.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                            	<a href="delete-blog.php?id=<?php echo $row['id']; ?>"class="btn btn-danger">Delete</a>
                                            </td>
                                    
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