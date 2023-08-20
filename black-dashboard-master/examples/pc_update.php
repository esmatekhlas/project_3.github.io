<!-- Update ouer data in database -->

<!-- end of Upgradtion -->
<?php
$delet_success = false;
include 'dbconnect.php';
$id = $_GET['pc_update_id'];
if(isset($_GET['pc_update_id'])){
  $sql = "SELECT * FROM `pc`"; 
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)){
      $pc_name = $row['pc_name'];
      $pc_type = $row['pc_type'];
      $pc_price = $row['pc_price'];
      $pc_ram = $row['pc_ram'];
      $pc_latitude = $row['pc_latitude'];
      $pc_genration = $row['pc_genration'];
      $pc_storeg_type = $row['pc_storeg_type'];
      $pc_info = $row['pc_info'];
    }
echo '

<!DOCTYPE html>
    <html lang="en">
    <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Black Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="../assets/demo/bootstrap-grid.css" rel="stylesheet" />
  <link href="../assets/demo/bootstrap-grid.css.map" rel="stylesheet" />
  <link rel="alternate" href="dist/css" type="application/atom+xml" title="Atom">
  <style>
    .nav_margin{
      
    }
    
  </style>
  </head>
    <body>
    // include_once "navbar.php";
      
      <section class="intro">
  <div class="bg-image-vertical h-100" style="background-color: #EFD3E4;
          background-image: url(https://mdbootstrap.com/img/Photos/new-templates/search-box/img1.jpg);
        ">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="card-body p-5">

                <h1 class="mb-5 text-center"> PC  Rejester</h1>
              
                <form action="testpc.php?$pc_update_id='.$id.'" method="POST">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form6Example1" name="pc_name" class="form-control" value="'.$pc_name.'" />
                        <label class="form-label" for="form6Example1">PC name</label>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="pc_type" id="form6Example2" class="form-control" value="'.$pc_type.'" />
                        <label class="form-label" for="form6Example2">pc Type</label>
                      </div>
                    </div>
                  </div>

                  <!-- price input -->
                  <div class="form-outline mb-4">
                    <input type="text" name= "pc_price" value="'.$pc_price.'" id="form6Example3" class="form-control" />
                    <label class="form-label" for="form6Example3">price</label>
                  </div>

                  <!-- ram input -->
                  <div class="form-outline mb-4">
                    <input type="text" name="pc_ram" value="'.$pc_ram.'" id="form6Example4" class="form-control" />
                    <label class="form-label" for="form6Example4">RAM</label>
                  </div>

                  <!-- latitue input -->
                  <div class="form-outline mb-4">
                    <input type="text" name="pc_latitude" value="'.$pc_latitude.'" id="form6Example5" class="form-control" />
                    <label class="form-label" for="form6Example5">latitude</label>
                  </div>

                  <!-- Gentation input -->
                  <div class="form-outline mb-4">
                    <input type="number" name="pc_genration"  value="'.$pc_genration.'" id="form6Example6" class="form-control" />
                    <label class="form-label" for="form6Example6">Genration</label>
                  </div>
                  
                  <!-- Storg Type -->
                  <div class="form-outline mb-4">
                    <input type="text" name="pc_storeg_type"  value="'.$pc_storeg_type.'" id="form6Example6" class="form-control" />
                    <label class="form-label" for="form6Example6">Storg type</label>
                  </div>
                  <!-- img upload -->
                  <!-- this part is not use Backing coding -->
                  <div class="form-outline mb-4">
                    <input type="file" name="img_upload"  value="" id="form6Example6" class="form-control" />
                    <label class="form-label" for="form6Example6">chose img</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <textarea class="form-control" name="pc_info"  value="'.$pc_info.'" id="form6Example7" rows="4"></textarea>
                    <label class="form-label" for="form6Example7">Mor_info</label>
                  </div>
                  

                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-4">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form6Example8"
                      checked
                    />
                  </div>

                  <!-- Submit button -->
                  <!-- <input type="submit" name="img_upload" value="submit"> -->
                  <button type="submit" name = "img_upload" class="btn btn-secondary btn-rounded btn-block">submit Now</button>
                  
                </form>
                ';
  }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>