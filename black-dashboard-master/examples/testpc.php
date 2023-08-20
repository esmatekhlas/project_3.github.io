<?php
$id = $_GET['pc_update_id'];
    $showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
if($method=='POST'){
  $id = $_GET['pc_update_id'];
  $pc_name = $_POST['pc_name'];
  $pc_type = $_POST['pc_type'];
  $pc_price = $_POST['pc_price'];
  $pc_ram = $_POST['pc_ram'];
  $pc_latitude = $_POST['pc_latitude'];
  $pc_genration = $_POST['pc_genration'];
  $pc_storeg_type = $_POST['pc_storeg_type'];
  $pc_info = $_POST['pc_info'];
 
    
    $sql = "INSERT INTO `pc` (`pc_id`, `pc_name`, `pc_type`, `pc_price`, `pc_ram`, `pc_latitude`, `pc_genration`, `pc_storeg_type`, `pc_img`, `pc_date`, `pc_info`) VALUES (NULL, '$pc_name', '$pc_type', '$pc_price','$pc_ram', '$pc_latitude', '$pc_genration', '$pc_storeg_type','', 'current_timestamp(6).000000', '$pc_info');";
    $result = mysqli_query($conn, $sql);
    $showAlert = true;
    if($showAlert){
    echo '
    <div class="alert alert-worning <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>'.$pc_name .'</strong> And this desc is added in to DB.
    </div>
    
    </div>
    ';
  }
}

?>