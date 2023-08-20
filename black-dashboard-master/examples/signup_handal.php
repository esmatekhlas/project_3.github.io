<?php
$showDataNotInsertToDatabaseError=false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
    include "dbconnect.php";
    // داده ها را از فورم بگیرد 
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    // درینجا نام استفاده کننده را چک میکنیم اگر به این نام قبلا در دیتا بیس ما ثبت نام کده باشد پس یک ایرور نشان میدهیم و رهنمایی میکنیم
    // $ifnameexist = "SELECT * FROM `user` where user_name = `$username`";
    // $result = mysqli_query($conn,$ifnameexist);
    // $numRuws = mysqli_num_rows($result);
    // // echo var_dump($numRuws);
    // if($numRuws>0){
    //     $UserExistError = "user name alrady used";
    // }
    else{
        //رمز و رمز تاییدی اگر با هم یکسان باشد رمز را بصورت رمزنگاری شده ذخیره کن 
        if($pass == $cpass){
            $hash = password_hash($pass,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `signup_time`) VALUES (NULL, '$username', '$hash', current_timestamp()	)";
            $result = mysqli_query($conn,$sql);
            if($result){
                $ShowAlert = true;
                header("location:/telegram/index.php?signupsuccess=true");
            }
            else{
                $showDataNotInsertToDatabaseError = true;
            }
        }
    }
    // header("location:/telegram/index.php?signupsuccess=false&Error=$showDataNotInsertToDatabaseError");
// }
?>