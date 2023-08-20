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
         padding: 1rem;
        }
        .header{
         text-size-adjust: large;/
         text-align: center;

        }
        .container{
          background-image: url("images/bg.png");
        }
        .btns{
          display: flex;
          flex-direction: column-reverse;
          /* justify-content: space-between; */
          align-items: flex-end;
          flex-wrap: wrap;
        }
      .edat_cards{
        /* display:block; */
        /* border: 2px solid rgb(244, 244, 244); */
      }
      
      </style>
   <title>AFshop mobile Catagory</title>
  </head>
  <?php include_once "navbar.php";?>
  <?php include_once "edat_navbar.php";?>
  <?php include_once "dbconnect.php";?>


  <body>
    <!-- اگر عملیه دلیت کدن به صورت مکمل صورت گرفت ده آن صورت این پیام را به استفاده کننده نمایش دهد که از طریق گیت فنشتن داده را میگیرد  -->
    <?php
    // if(isset($_GET['delet_success'])){
    //   $ali = $_GET['delet_success'];
    //   if($ali==1){

    //     echo '
    //     <div class="alert alert-primary d-flex align-items-center" role="alert">
    //     <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
    //     <div>
    //     Deleted
    //     </div>
    //     </div>';
    //   }
    // }
    ?>
    
  
    <!-- <h1 class="header">mobile Catagory</h1> -->
    <div class="container mobile edat_cards">
      <?php
       $sql = "SELECT * FROM `pc`"; 
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_assoc($result)){
       // echo $row['category_no'];
       // echo $row['category_name'];
       $pc_name =$row['pc_name'];
       $pc_info =$row['pc_info'];
       $pc_type =$row['pc_type'];
       $pc_price =$row['pc_price'];
       $id = $row['pc_id'];

echo ' 

    <div class="  card mb-3" style="max-width: 1080px;">
        <div class="row g-0">
        <div class="col-md-4">
        <img src="../../images/pc'.$id.'.jpg " class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
          <h5 class="card-title"> <a href="threadlist.php?catid=' . $id . '">'.$pc_name.'</a></h5>
        <p class="card-text">'.$pc_info.'</p>
        <div class="btns">
            <!-- <a href="../../info.php" class="btn btn-success"> Mor..</a> -->
            <a href="pc_delete.php?pc_id='.$id.'" class="btn btn-success"> Delet</a>
            <a href="pc_update.php?pc_update_id='.$id.'" class="btn btn-success"> Edit</a>
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