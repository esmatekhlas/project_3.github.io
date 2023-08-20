<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <?php include_once "head.php";?>
   <style>
       .mobile {
         border: 1px solid rgb(235, 231, 231);
         background-color: rgba(250, 235, 215, 0.295);
         display: flex;
         justify-content: center;
         align-items: center;
         flex-wrap: wrap;
         /* margin-top:37rem; */
         margin-bottom:1rem; 
      }
      .header{
         text-size-adjust: large;/
         text-align: center;

      }
      .container{
          background-image: url("images/bg.png");
        }
      .btns{
         /* display: flex;
         justify-content: space-between;
         align-items: center;
         flex-wrap: wrap; */
         display: flex;
          flex-direction: column-reverse;
          /* justify-content: space-between; */
          align-items: flex-end;
          flex-wrap: wrap;
      }
      .edat_cards{
        display:block;
        border: 2px solid rgb(244, 244, 244);
      }

      </style>
   <title>AFshop mobile Catagory</title>
</head>
<?php include_once "navbar.php";?>
<?php include_once "edat_navbar.php";?>

<body>
    <!-- <h1 class="header">mobile Catagory</h1> -->
    <div class="container mobile edat_cards">
        <?php
        include 'dbconnect.php';
          $sql = "SELECT * FROM `mobile`"; 
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_no'];
          // echo $row['category_name'];
          $mobile_name =$row['mobile_name'];
          $mobile_type =$row['mobile_type'];
          $mobile_info =$row['mobile_info'];
          $mobile_price =$row['mobile_price'];
          $id = $row['mobile_id'];

echo ' 

    <div class="  card mb-3" style="max-width: 1080px;">
        <div class="row g-0">
        <div class="col-md-4">
        <img src="../../images/bg'.$id.'.jpg " class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
          <h5 class="card-title"> <a href="threadlist.php?mobile_delete=' . $id . '">'.$mobile_name.'</a></h5>
        <p class="card-text">'.$mobile_info.'</p>
        <div class="btns">
           
            <a href="mobile_delete.php?mobile_delete=' . $id . '" class="btn btn-success"> Delet</a>
            <a href="mobile_delete.php?mobile_delete=' . $id . '" class="btn btn-success"> Edit</a>
        </div>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>
</div>

';

}
?>
</div>
<?php include_once "footer.php";?>
</body>   
</html>