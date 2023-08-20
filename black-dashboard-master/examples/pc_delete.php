<?php
$delet_success = false;
include 'dbconnect.php';
if(isset($_GET['pc_id'])){
  $id = $_GET['pc_id'];
  $delete = mysqli_query($conn,"DELETE FROM `pc` WHERE `pc_id` = $id");
  $delet_success = true;
  header('Location:pc_edat.php?delet_success='.$delet_success.' ');
     
    }
    ?>