<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');

?>
<div class=" row card-body">
  <?php
  $eid2=$_POST['edit_id2'];
  $ret2=mysqli_query($con,"select * from  students where id='$eid2'");
  while ($row=mysqli_fetch_array($ret2))
  {
    ?> 
    <div class="col-md-4">
      <img src="studentimages/<?php echo htmlentities($row['studentImage']);?>" width="100" height="100">
    </div>
    <div class="col-md-8">
      <table>
         <tr>
          <th>Student Number</th>
          <td>&nbsp;<?php  echo $row['studentno'];?></td>
        </tr>
        <tr>
          <th>Names</th>
          <td><?php  echo $row['studentName'];?></td>
        </tr>
        <tr>
          <th>Class</th>
          <td><?php  echo $row['class'];?></td>
        </tr>
        <tr>
          <th>Contact No.</th>
          <td>0<?php  echo $row['contactno'];?></td>
        </tr>
      </table>
    </div>
    <?php 
  } ?>
</div>