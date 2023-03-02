<?php  
include 'header.php';
include 'conn.php';
?>




                    <div class="mt-5" >
                        <div class="card" style="margin-left: ">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Sub Desc</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                 <?php
                                    $select = "SELECT * FROM aboutus";
                                     $result = mysqli_query($conn,$select);              
                                      while($row = mysqli_fetch_assoc($result))
                                      {
                                       ?>
<tbody>
<tr>
<td><label name="description"><?php echo $row['description'] ?></label></td>   
   <td><?php echo $row['sub_desc'] ?></td>
   <td><img src="<?php echo $row['img'] ?>" style="width: 300px;"></td>
           
   <td><a href="editabout.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a></td>
 </tr>
 <?php } ?>
                                 
                                 </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

