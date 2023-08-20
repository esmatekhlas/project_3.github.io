<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <style>
      .pc {
         border: 1px solid rgb(235, 231, 231);
         background-color: rgba(250, 235, 215, 0.295);
         display: flex;
         justify-content: center;
         align-items: center;
         flex-wrap: wrap;
         margin-top:37rem;
         /* margin-bottom:7rem;  */
      }
      .header{
         text-size-adjust: large;
         text-align: center;
         
      }
      .btns{
         display: flex;
         justify-content: space-between;
         align-items: center;
         flex-wrap: wrap;
         

      }
   </style>
   <title>AFshop pc Catagory</title>
</head>

<body>
   <div class="container pc">
   <?php
      include 'dbconnect.php';
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
<div class="row mx-3 my-3 ">
            <div class="cal-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/lp'.$id.'.jpg " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="black-dashboard-master/examples/info.php?pcid=' . $id . '">'.$pc_name.'</a></h5>
                        <p class="card-text"> '.substr($pc_info,0,90).'... </p>
                        <div class="btns">
                           <a href="black-dashboard-master\examples/info.php?pcid='.$id.'" class="btn btn-success">  Mor..</a>
                           <a href="black-dashboard-master\examples/info.php?pcid='.$id.'" class="btn btn-success"> Add cad</a>
                        </div>
                        </div>
                </div>
            </div>
</div>

';
}
?>
</div>
</body>   
</html>