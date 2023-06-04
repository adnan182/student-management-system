
<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) {
header('location:logout.php');
} 

?>
<?php @include("includes/head.php"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <?php @include("includes/header.php"); ?>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <?php @include("includes/sidebar.php"); ?>
    <!-- /.sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <!-- <h1>DataTables</h1> -->
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Audit Logs</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section><!-- /.section -->
      <!-- /.content-wrapper -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="">
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">User Logs</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">User Name</th>
                        <th class="text-center">Full Name</th>
                        <th class="text-center">User Email</th>
                        <th class="text-center">User Ip Address</th>
                        <th class="text-center">Login Time</th>
                        <th class="text-center">Logout Time</th>
                        <th class="text-center">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql="SELECT * from userlog ORDER BY id DESC";
                      $query = $dbh -> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=1;
                      if($query->rowCount() > 0)
                      {
                        foreach($results as $row)
                          {               ?>
                           <tr>
                             <td><?php  echo htmlentities($row->username);?></td>
                             <td class="text-left"><?php  echo htmlentities($row->name);?> <?php  echo htmlentities($row->lastname);?></td>
                             <td class="text-left"><?php  echo htmlentities($row->userEmail);?></td>
                             <td class="text-left" ><?php  echo htmlentities($row->userip);?></td>
                             <td class="text-left"><?php  echo htmlentities($row->loginTime);?></td>
                             <td class="text-left" ><?php  echo htmlentities($row->logout);?></td>
                             <td class="text-left"><?php $st=($row->status);
                             if($st==1)
                             {
                              echo "Successfull";
                            }
                            else
                            {
                              echo "Failed";
                            }
                            ?></td>
                          </tr>

                        <?php
                         }
                       } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php @include("includes/footer.php"); ?>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php @include("includes/foot.php"); ?>
    <!-- page script -->
    
  </body>
  </html>

