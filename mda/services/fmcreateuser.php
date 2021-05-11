<?php

include "connect.php";
session_start();


$username = trim(strip_tags($_POST['username']));
$password = md5($_POST['password']);
$fullname = trim(strip_tags($_POST['fullname']));
$useremail = trim(strip_tags($_POST['email']));
$location = trim(strip_tags($_POST['location']));
$roles = trim(strip_tags($_POST['roles']));

if(isset($_POST['permissions'])){
   $permissions = trim(strip_tags($_POST['permissions']));
}
else{
    $permissions = "";
}


$createdby = $_SESSION["user"];
$organization = $_SESSION['organization'];
$ministry = $_SESSION['ministry'];
$sector = $_SESSION['sector'];
$states = $_SESSION['states'];


    $mysql = "INSERT into fm_mdausers (username, password, fullname, useremail, location, roles, permissions, 
                         organization, sector, ministry, states, createdby) VALUES 
                        ('$username', '$password', '$fullname', '$useremail', '$location', '$roles', '$permissions', '$organization', '$sector', '$ministry', '$states', '$createdby') ";
    $result = mysqli_query($conn, $mysql);

    if(mysqli_affected_rows($conn) >0){
        echo "success";
        audit_trail("MDA User Created ". $username . " with fullname ". $fullname);
    }
    else {
        echo "fail";
    }



?>
