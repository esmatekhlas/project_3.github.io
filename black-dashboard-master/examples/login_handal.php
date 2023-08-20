<?php
$showDataNotInsertToDatabaseError=false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
    include "dbconnect.php";
    // داده ها را از فورم بگیرد 
    $username = $_POST["username"];
    $pass = $_POST["pass"];

    $sql ="SELECT * FROM `user` WHERE user_name = '$username'";
    $result = mysqli_query($conn,$sql);
    $umRows = mysqli_num_rows($result);
    if($numRows==1){
        // $row = mysqli_fetch_assoc($result){
            if(password_verify($pass,$row['user_pass'])){
            session_start();
            $_SESSION['loogedin']=true;
            $_SESSION['user_name']=$username;
            echo "logged in ".$username; 
        }
    }
             else{
                echo "unable to login";
        }
    
}

?>