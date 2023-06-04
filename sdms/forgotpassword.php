<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['login']))
{
  $password1=($_POST['password']); 
  $password2=($_POST['password1']); 

  if($password1 != $password2) {
    echo "<script>alert('Password and Confirm Password Field do not match  !!');</script>";
  }else
  {
    $email=$_POST['email'];
    $mobile=$_POST['phone'];
    $newpassword=md5($_POST['password']);
    $sql ="SELECT email FROM tblusers WHERE email=:email and mobile=:mobile";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
    if($query -> rowCount() > 0)
    {
      $con="update tblusers set password=:newpassword where email=:email and mobile=:mobile";
      $chngpwd1 = $dbh->prepare($con);
      $chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
      $chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
      $chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
      $chngpwd1->execute();
      echo "<script>alert('Your Password succesfully changed');</script>";
      echo "<script>window.location.href = 'index.php'</script>";
    }
    else {
      echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
    }
  }
}

?>

<?php @include("includes/head.php"); ?>
<body class="hold-transition login-page">
  <!-- Logo box -->
  <div class="login-box">  
    <!-- /.login-logo -->
    <div class="card">

      <div class="card-body login-card-body">
       
        <div class="login-logo">
          <center>
            <img src="company/logo.png" width="150" height="130" class="user-image" alt="User Image"/>
          </center>
        </div>
        <p class="login-box-msg"><strong style="color: blue">Don't worry, we'have got you back</strong></p>
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" name="email" class="form-control" placeholder="Email" required >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" name="phone" class="form-control" placeholder="Mobile" required >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-locks"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control"  placeholder=" New Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password1" class="form-control"placeholder=" confirm Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <button type="submit" name="login" class="btn btn-primary btn-block" data-toggle="modal" data-taget="#modal-default">Reset</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <br>
        <p class="mb-1">
          <a href="index.php">login</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <?php @include("includes/foot.php"); ?>
</body>
</html>