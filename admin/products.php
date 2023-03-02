
<?php

  require_once('header.php');
?>
 <div id="right-panel" class="right-panel">

        <!-- Header-->
        
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
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Product Table</strong>
                                <p align="Right">
                                <button type="submit" name="submit" class="btn btn-primary"><a class="btn btn-primary" href="addproducts.php"> Add Product</a></button>
                                </p>
                            </div>

                            <div class="card-body">
                              <form>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                          
                                          <th>name</th>
                                          <th>description</th>  
                                          <th>image</th>
                                          <th>category</th>
                                          <th>edit</th>
                                          <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                     $select = "SELECT * FROM products";
                                      $result = mysqli_query($conn,$select);              
                                       while($row = mysqli_fetch_assoc($result)) 
                                       {
                                        ?> 
 <tr>
  <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['description'] ?></td>
    <td><img src="<?php echo $row['img'] ?>" style="width: 25%;"></td>

    <td><?php echo $row['category'] ?></td>
</td>
    <td><a href="edit_product.php?id=<?php echo $row['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a></td><td><a href="delete_product.php?id=<?php echo $row['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></td>
  </tr>
  <?php } ?>
                                    </tbody>
                                  </form>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
 <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
