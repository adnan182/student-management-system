<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) 
{
  header('location:logout.php');
} else
{
  if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['cpmsaid'];
    $cpassword=md5($_POST['password']);
    $newpassword=md5($_POST['password1']);
    $sql ="SELECT id FROM tblusers WHERE id=:adminid and Password=:cpassword";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':adminid', $adminid, PDO::PARAM_STR);
    $query-> bindParam(':cpassword', $cpassword, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);

    if($query -> rowCount() > 0)
    {
      $con="update tblusers set Password=:newpassword where id=:adminid";
      $chngpwd1 = $dbh->prepare($con);
      $chngpwd1-> bindParam(':adminid', $adminid, PDO::PARAM_STR);
      $chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
      $chngpwd1->execute();

      echo '<script>alert("Your password successully changed")</script>';
    } else {
      echo '<script>alert("Your current password is wrong")</script>';

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
        <div class="card">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              <div class="card-body">
                <!-- Date -->

                <form role="form" id=""  method="post" enctype="multipart/form-data" class="form-horizontal">

                  <div class="card-body">
                    <div class="form-group  ">
                      <label for="exampleInputPassword1">Old Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1"  required>
                    </div>
                    <div class="form-group  ">
                      <label for="exampleInputPassword1">New Password</label>
                      <input type="password" name="password1"  class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputPassword1">Confirm password</label>
                      <input type="password" name="password2" class="form-control" id="exampleInputPassword1"  >
                    </div>
                  </div>
                </div>
                <div class="modal-footer text-right">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>

              </form> 

            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->
    <?php @include("includes/footer.php"); ?>
    <?php @include("includes/foot.php"); ?>
  </body>
  </html>
  <?php
} ?>
