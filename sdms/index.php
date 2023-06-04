<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
{
  $username=$_POST['username'];
  $password=md5($_POST['password']);
  $sql ="SELECT * FROM tblusers WHERE username=:username and Password=:password ";
  $query=$dbh->prepare($sql);
  $query-> bindParam(':username', $username, PDO::PARAM_STR);
  $query-> bindParam(':password', $password, PDO::PARAM_STR);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount() > 0)
  {
    foreach ($results as $result) {
      $_SESSION['sid']=$result->id;
      $_SESSION['name']=$result->name;
      $_SESSION['lastname']=$result->lastname;
      $_SESSION['permission']=$result->permission;
      $_SESSION['email']=$result->email;

    }

    if(!empty($_POST["remember"])) {
      //COOKIES for username
      setcookie ("user_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
      //COOKIES for password
      setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
    } else {
      if(isset($_COOKIE["user_login"])) {
        setcookie ("user_login","");
        if(isset($_COOKIE["userpassword"])) {
          setcookie ("userpassword","");
        }
      }
    }
    $aa= $_SESSION['sid'];
    $sql="SELECT * from tblusers  where id=:aa";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':aa',$aa,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);

    $cnt=1;
    if($query->rowCount() > 0)
    {
      foreach($results as $row)
      {               

        if($row->status=="1"){ 
          $extra="dashboard.php";
          $username=$_POST['username'];
          $email=$_SESSION['email'];
          $name=$_SESSION['name'];
          $lastname=$_SESSION['lastname'];
          $_SESSION['login']=$_POST['username'];
          $_SESSION['id']=$num['id'];
          $_SESSION['username']=$num['name'];
          $uip=$_SERVER['REMOTE_ADDR'];
          $status=1;
          $sql="insert into userlog(userEmail,userip,status,username,name,lastname)values(:email,:uip,:status,:username,:name,:lastname)";
          $query=$dbh->prepare($sql);
          $query->bindParam(':username',$username,PDO::PARAM_STR);
          $query->bindParam(':name',$name,PDO::PARAM_STR);
          $query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
          $query->bindParam(':email',$email,PDO::PARAM_STR);
          $query->bindParam(':uip',$uip,PDO::PARAM_STR);
          $query->bindParam(':status',$status,PDO::PARAM_STR);
          $query->execute();
          $host=$_SERVER['HTTP_HOST'];
          $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
          header("location:http://$host$uri/$extra");
          exit();                 
        } else { 
          echo "<script>alert('Your account was blocked please approach Admin');document.location ='index.php';</script>";                                        
        }  

      } } 
    } else{ 
      $extra="index.php";
      $username=$_POST['username'];
      $uip=$_SERVER['REMOTE_ADDR'];
      $status=0;
      $email='Not registered in system';
      $name='Potential Hacker';
      $sql="insert into userlog(userEmail,userip,status,username,name)values(:email,:uip,:status,:username,:name)";
      $query=$dbh->prepare($sql);
      $query->bindParam(':username',$username,PDO::PARAM_STR);
      $query->bindParam(':name',$name,PDO::PARAM_STR);
      $query->bindParam(':email',$email,PDO::PARAM_STR);
      $query->bindParam(':uip',$uip,PDO::PARAM_STR);
      $query->bindParam(':status',$status,PDO::PARAM_STR);
      $query->execute();
      $host  = $_SERVER['HTTP_HOST'];
      $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
      echo "<script>alert('Username or Password is incorrect');document.location ='http://$host$uri/$extra';</script>";
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
            <p><b>
            </b></p>
            <center><img src="company/pstu.png" width="150" height="130" class="user-image" alt="User Image"/></center>
          </div>
          <p class="login-box-msg"><b> <h4> <center> Welcome To PSTU(CSE) </center></h4> </b></p>

          <form action="" method="post">
            <div class="input-group mb-3">
              <input type="text" name="username" class="form-control" placeholder="Username" required value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password" required value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember"  <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?>>
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" name="login" class="btn btn-primary btn-block" data-toggle="modal" data-taget="#modal-default">Login</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <p class="mb-1">
            <a href="forgotpassword.php">I forgot my password</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <?php @include("includes/foot.php"); ?>
    <script src="assets/js/core/js.cookie.min.js"></script>
  </body>
  </html>