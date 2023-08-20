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
  <!-- CSS Just for demo purpose, don't include it in your project -->
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
    <?php
    include_once 'navbar.php';
    include 'dbconnect.php';
    ?>
    <?php
    $showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
if($method=='POST'){
  $mobile_name = $_POST['mobile_name'];
  $mobile_type = $_POST['mobile_type'];
  $mobile_price = $_POST['mobile_price'];
  $mobile_camra = $_POST['mobile_camra'];
  $mobile_battry = $_POST['mobile_battry'];
  $mobile_img = $_POST['mobile_img'];
  $mobile_info = $_POST['mobile_info'];
  $sql = "INSERT INTO `mobile` (`mobil_id`, `mobile_name`, `mobile_type`, `mobile_price`, `mobile_camra`, `mobile_battry`, `mobile_img`, `mobile_info`, `mobil_date`) VALUES (NULL, '$mobile_name', '$mobile_type', '$mobile_price', '$mobile_camra', '$mobile_battry', '', '$mobile_info', current_timestamp());";
  $result = mysqli_query($conn, $sql);
  $showAlert = true;
  if($showAlert){
    echo '
    <div class="alert alert-worning <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>'.$mobile_name .'</strong> And this desc is added in to DB.
    </div>

    </div>
    ';
  }
}
?>





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

                <h1 class="mb-5 text-center"> Mobile  Rejester</h1>

                <form action="<?php $_SERVER['REQUEST_URI']?>" method="POST">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form6Example1" name="mobile_name" class="form-control" />
                        <label class="form-label" for="form6Example1">mobile name</label>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="mobile_type" id="form6Example2" class="form-control" />
                        <label class="form-label" for="form6Example2">mobile Type</label>
                      </div>
                    </div>
                  </div>

                  <!-- price input -->
                  <div class="form-outline mb-4">
                    <input type="text" name= "mobile_price" id="form6Example3" class="form-control" />
                    <label class="form-label" for="form6Example3">price</label>
                  </div>

                  <!-- ram input -->
                  <div class="form-outline mb-4">
                    <input type="text" name="mobile_camra" id="form6Example4" class="form-control" />
                    <label class="form-label" for="form6Example4">Camra</label>
                  </div>

                  <!-- latitue input -->
                  <div class="form-outline mb-4">
                    <input type="text" name="mobile_battry" id="form6Example5" class="form-control" />
                    <label class="form-label" for="form6Example5">Battry</label>
                  </div>

                  <!-- Gentation input -->
                  <div class="form-outline mb-4">
                    <input type="number" name="mobile_img" id="form6Example6" class="form-control" />
                    <label class="form-label" for="form6Example6">Img</label>
                  </div>
                  
                  <!-- Storg Type -->
                  <div class="form-outline mb-4">
                    <input type="text" name="mobile_info" id="form6Example6" class="form-control" />
                    <label class="form-label" for="form6Example6">About mobile</label>
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
                  <button type="submit" class="btn btn-secondary btn-rounded btn-block">submit Now</button>
                </form>

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