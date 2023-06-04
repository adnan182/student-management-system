
<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_GET['blockid']))
{
  $blockedid=intval($_GET['blockid']);
  $sql="update tblusers set status='1' where id='$blockedid'";
  $query=$dbh->prepare($sql);
  $query->bindParam(':blockedid',$blockedid,PDO::PARAM_STR);
  $query->execute();
  echo "<script>alert('restored successfuly');</script>"; 
  echo "<script>window.location.href = 'userregister.php'</script>";
}
?>
<div class="card-body">
 <table  class="table table-bordered table-striped">
  <thead>
    <tr>
      <th class="text-center">Names</th>
      <th class="text-center">Mobile</th>
      <th class="text-center">Email</th>
      <th class="text-center">Permission</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
   
   $sql="SELECT * from tblusers where status='0'";
   $query = $dbh -> prepare($sql);
   $query->execute();
   $results=$query->fetchAll(PDO::FETCH_OBJ);
   $cnt=1;
   if($query->rowCount() > 0)
   {
    foreach($results as $row)
      {?>
       <tr>
         <td><a href="#"><?php  echo htmlentities($row->name);?> <?php  echo htmlentities($row->lastname);?></a></td>
         <td class="text-left"><?php  echo htmlentities($row->mobile);?></td>
         <td class="text-left" ><?php  echo htmlentities($row->email);?></td>
         <td class="text-left"><?php  echo htmlentities($row->permission);?></td>
         <td class="text-left">
           <a href="blockedusers.php?blockid=<?php echo ($row->id);?>" onclick="return confirm('Do you really want to unblock user ?');" title="Restore this User">unblock</i></a>
         </td>
       </tr>
       <?php 
     }
   } ?>
 </tbody>
</table>
</div>
<!-- /.card-body -->

