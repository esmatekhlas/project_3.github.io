<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
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
         display: flex;
         justify-content: space-between;
         align-items: center;
         flex-wrap: wrap;


      }

   </style>
   <title>AFshop mobile Catagory</title>
</head>

<body>
   <h1 class="header">Mobile Catagory</h1>
   <div class="container mobile">
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
<div class="row mx-3 my-3 ">
            <div class="cal-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/p'.$id.'.jpg " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="threadlist.php?catid=' . $id . '">'.$mobile_name.'</a></h5>
                        <p class="card-text"> '.substr($mobile_info,0,90).'... </p>
                        <div class="btns">
                           <a href="threadlist.php?catid='.$id.'" class="btn btn-success">  Mor..</a>
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