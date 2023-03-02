<?php  
include 'header.php';
include 'conn.php';
?>
<div class="mt-5" >
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Image table</strong>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <?php
                $select = "SELECT * FROM logo";
                $result = mysqli_query($conn,$select);              
                while($row = mysqli_fetch_assoc($result))
                    {
            ?>
			<tbody>
				<tr>
					<td><img src="<?php echo $row['img'] ?>" style="width: 50%;"></td>
					 <td><a href="editlogo.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a></td>
				</tr>
 			<?php } ?>
            </table>
        </div>
    </div>
</div>

