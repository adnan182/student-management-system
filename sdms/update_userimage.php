<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) {
  header('location:logout.php');
} else{
  if(isset($_POST['submit']))
  {
    $eid=$_SESSION['sid'];
    $userimage=$_FILES["userimage"]["name"];
    move_uploaded_file($_FILES["userimage"]["tmp_name"],"staff_images/".$_FILES["userimage"]["name"]);
    $sql="update tblusers set userimage=:userimage where id=:eid";
    $query=$dbh->prepare($sql);
    $query->bindParam(':userimage',$userimage,PDO::PARAM_STR);
    $query->bindParam(':eid',$eid,PDO::PARAM_STR);
    $query->execute();
    if ($query->execute()) {
      echo '<script>alert("updated successfuly")</script>';
      echo "<script>window.location.href ='update_userimage.php'</script>";
    }else{
      echo '<script>alert("something went wrong, please try again later")</script>';
    }

  }
  ?>

  <?php @include("includes/head.php"); ?>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
     <!-- Navbar -->
     <?php @include("includes/header.php"); ?>
     <!-- /.navbar -->
     <!-- Side bar and Menu -->
     <?php @include("includes/sidebar.php"); ?>
     <!-- /.sidebar and menu -->

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
      <br>
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update User Image</h6>
          </div>
          <div class="card-body">
            <form method="post"enctype="multipart/form-data">
              <?php
              $eid=$_SESSION['sid'];
              $sql="SELECT * from tblusers   where id=:eid ";                                    
              $query = $dbh -> prepare($sql);
              $query-> bindParam(':eid', $eid, PDO::PARAM_STR);
              $query->execute();
              $results=$query->fetchAll(PDO::FETCH_OBJ);

              $cnt=1;
              if($query->rowCount() > 0)
              {
                foreach($results as $row)
                {    
                  ?>
                  <div class="control-group">
                    <label class="control-label" for="basicinput">Names</label>
                    <div  class="col-6">
                      <input type="text"   class="form-control" name="productName"  readonly value="<?php  echo $row->name;?>&nbsp;<?php  echo $row->lastname;?>" class="span6 tip" required>
                    </div>
                  </div>
                  <br>
                  <div class="control-group"> 
                    <label class="control-label" for="basicinput">Current Image</label>
                    <div class="controls">
                      <?php 
                      if($row->userimage=="avatar15.jpg")
                      { 
                        ?>
                        <img class="" src="staff_images/avatar15.jpg" alt="" width="100" height="100">
                        <?php 
                      } else
                      { 
                        ?>
                        <img src="staff_images/<?php  echo $row->userimage;?>" width="100" height="100"> 
                        <?php
                      } ?> 
                    </div>
                  </div>
                  <br>
                  <div class="form-group col-md-6">
                    <label>New Image</label>
                    <input type="file" name="userimage" id="userimage" class="file-upload-default">
                  </div>
                  <?php 
                }
              } ?>
              <div class="form-group row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary " name="submit">
                    <i class="fa fa-plus "></i> Update
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->
    <?php @include("includes/foot.php"); ?>
    <?php @include("includes/footer.php"); ?>
  </body>
  </html>
  <?php 
} ?>
