<?php include'header.php'; ?>
<!-- INSERT INTO `team` (`id`, `name`, `position`, `mail`, `img`, `create_at`) VALUES ('1', 'Nihir Zala', 'System Architect', 'test@test.com', 'mail.jpg', current_timestamp()); -->
<div class="content mt-3">
<div class="container">
    <div class="row">
        <div class="col-md-12 bg-light text-right">
            <a href="add-team.php"><button type="button" class="btn btn-primary" name="add_team" >Add Member</button></a>
            
        </div>
    </div>
</div>

            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Our Team</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                    
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Mail</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    		<?php
                                    $select = "SELECT * FROM team";
                                    $result = mysqli_query($conn,$select);              
                                    while($row = mysqli_fetch_assoc($result))
                                      {
                                       ?>
                                        <tr>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['position']; ?></td>
                                            <td><?php echo $row['mail']; ?></td>
                                            <td><img src="<?php echo $row['img']; ?>" style="width: 150px;"></td>
                                            <td><a href="editteam.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                                            	<a href="deletteam.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                                                                       
                                    </tbody>
                                <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
