<?php  
 require('conn.php');
 $GetId = $_GET['id'];
   $select = "SELECT * FROM contact WHERE id = $GetId";
   $result = mysqli_query($conn,$select);
   $row1= mysqli_fetch_array($result);
?>
<?php
include('header.php');
?>

 <div class="col-md-12">
                       <div class="card">
                           <div class="card-header">
                               <strong class="card-title"><h2>contact</h2></strong>
                           </div>

                           <div class="card-body">
                              <form method="POST" enctype="multipart/form-data">
                               <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                   <thead>
                                       <tr>
                                           <th>contactno</th>
                                           <th>address</th>
                                           <th>email</th>
                                         
                                       </tr>
                                   </thead>
                                   <tbody>
                          <tr>
                           <td><input type="text" name="phone" value="<?php echo $row1['phone'];?>"></td>
                         <td><textarea name="address"><?php echo $row1['address'];?></textarea>s</td>
                       <td> <input type="text" value="<?php echo $row1['email'];?>" name="email"></td>
                                      </tr>    
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right">
                                            <button type="submit" class="btn btn-primary" name="submit">save</button>
                                        </td>
                                      </tr>
                                       
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
 

 </table>
  
</form>
<?php
if(isset($_POST['submit']))
{
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
 

  $update = "UPDATE contact SET address='$address',phone='$phone',email='$email' WHERE id = '$GetId' ";
  if (mysqli_query($conn,$update) == TRUE)
              {
                  echo "<script>alert('Record Update');location.href='contact.php';</script>";
              }
  else
  {
    echo "<script>alert('Record not update.');</script>";
  }
}
?>


