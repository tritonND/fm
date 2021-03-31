<?php

include "connect.php";
session_start();

    $fname = trim(strip_tags($_POST['fname']));
    $phonenumber = trim(strip_tags($_POST['phonenumber']));
    $email = trim(strip_tags($_POST['email']));
    $password = md5($_POST['password']);

    $mysql = "SELECT * FROM fm_users WHERE username = '$email' ";

$result = mysqli_query($conn, $mysql);

if(mysqli_num_rows($result) > 0)
{
    echo "user exist";
}
else{
    $mysql = "INSERT into fm_users (fullname, username, password, phone) VALUES ( '$fname', '$email', '$password', '$phonenumber') ";
    $result = mysqli_query($conn, $mysql);
   
    if(mysqli_affected_rows($conn) >0){
        echo "success";
        $_SESSION["username"] = $email;
    }
    else {
        echo "fail";
    }

}




    // session_start(); 
    // $row = mysqli_fetch_array($result);
    // $_SESSION['user'] = $row[1];
    // $_SESSION['privilege'] = $row[3];
    // echo "success";
?>
