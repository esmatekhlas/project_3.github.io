<?php
include 'dbconnect.php';
    if(isset($_GET['mobile_delete'])){
      $id = $_GET['mobile_delete'];
      $delete = mysqli_query($conn,"DELETE FROM `pc` WHERE `pc_id` = $id");
    
      header('Location:mobile_delete.php ');
     
    }
    ?>