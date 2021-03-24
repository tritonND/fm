<?php

include "connect.php";

    $oname = trim(strip_tags($_POST['oname']));
    $state = trim(strip_tags($_POST['state']));
    $sector = trim(strip_tags($_POST['sector']));
    $ministry = trim(strip_tags($_POST['ministry']));
    
    // $password = md5($_POST['password']);

    $mysql = "SELECT * FROM fm_organizations WHERE organization = '$oname' AND sector = '$sector' AND ministry='$ministry' AND fmstate = '$state' ";

$result = mysqli_query($conn, $mysql);

if(mysqli_num_rows($result) > 0)
{
    echo "exist";
}
else{
    $mysql = "INSERT into fm_organizations (organization, sector, ministry, fmstate) VALUES ( '$oname', '$sector', '$ministry', '$state') ";
    $result = mysqli_query($conn, $mysql);
   
    if(mysqli_affected_rows($conn) >0){
        echo "success"; 
    }
    else {
        echo "fail";
    }

}

 
?>
