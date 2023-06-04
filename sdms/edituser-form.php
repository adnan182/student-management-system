<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['update']))
{
  $eid=$_SESSION['edid'];
  $permission=$_POST['permission'];
  $mobile=$_POST['mobile'];
  $username=$_POST['username'];
  $name=$_POST['name'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $sql="update tblusers set name=:name,username=:username,lastname=:lastname,email=:email,mobile=:mobile,permission=:permission where id=:eid";
  $query=$dbh->prepare($sql);
  $query->bindParam(':name',$name,PDO::PARAM_STR);
  $query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
  $query->bindParam(':username',$username,PDO::PARAM_STR);
  $query->bindParam(':email',$email,PDO::PARAM_STR);
  $query->bindParam(':permission',$permission,PDO::PARAM_STR);
  $query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
  $query->bindParam(':eid',$eid,PDO::PARAM_STR);
  $query->execute();
  echo '<script>alert("updated successfuly")</script>';
  echo "<script>window.location.href ='userregister.php'</script>";
}
?>
<div class="card-body">
  <form role="form" id=""  method="post" enctype="multipart/form-data" class="form-horizontal">
    
    <?php
    $eid=$_POST['edit_id'];
    $sql="SELECT * from tblusers   where id=:eid ";                                    
    $query = $dbh -> prepare($sql);
    $query-> bindParam(':eid', $eid, PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
      foreach($results as $row)
      {    
        $_SESSION['edid']=$row->id;
        ?>
        <div class="row">
          <div class="form-group col-md-6 ">
            <label for="name">First Name</label>
            <input type="text" name="name" class="form-control" id="name" value="<?php echo $row->name; ?>" required>
          </div>
          <div class="form-group col-md-6 ">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo $row->lastname; ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6 ">
            <label for="username">User Name</label>
            <input type="text" name="username" class="form-control" id="username" value="<?php echo $row->username; ?>" >
          </div>
          <div class="form-group col-md-6 ">
            <label for="email">email</label>
            <input type="text" name="email" class="form-control" id="email" value="<?php echo $row->email; ?>" >
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6 ">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="mobile" value="<?php echo $row->mobile; ?>" required>
          </div>
          <div class="form-group col-md-6 ">
            <label for="permission">Permission</label>
            <input type="text" name="permission" class="form-control" id="permission" value="<?php echo $row->permission; ?>" readonly=""   required>
          </div>
        </div>
        <?php 
      }
    } ?> 
    <div class="modal-footer " style="float: left;">
      <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
    </div>
  </form>       
</div>       
<!-- /.card-body -->

