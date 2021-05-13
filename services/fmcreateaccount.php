<?php

include "connect.php";
session_start();


$accountname = trim(strip_tags($_POST['fullname']));

$createdby = $_SESSION["user"];
$organization = $_SESSION['organization'];
$ministry = $_SESSION['ministry'];
$sector = $_SESSION['sector'];
$states = $_SESSION['states'];



$mysql = "INSERT into fm_account_list (accountname, organization, sector, ministry, state, createdby, datecreated) VALUES 
                        ('$accountname', '$organization', '$sector', '$ministry', '$states', '$createdby', now()) ";


//echo $accountname." ". $createdby . " ". $mysql;
$result = mysqli_query($conn, $mysql);

if(mysqli_affected_rows($conn) >0){
    echo "success";
    audit_trail("Account Created - ". $accountname);
}
else {
    echo "fail";
}



?>

