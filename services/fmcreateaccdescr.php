<?php

include "connect.php";
session_start();


$code = trim(strip_tags($_POST['fullname']));
$accountname = trim(strip_tags($_POST['account']));

$createdby = $_SESSION["user"];
$organization = $_SESSION['organization'];
$ministry = $_SESSION['ministry'];
$sector = $_SESSION['sector'];
$states = $_SESSION['states'];



$mysql = "INSERT into fm_account_code_list (accountname, description,organization, sector, ministry, state, createdby, datecreated) VALUES 
                        ('$accountname', '$code','$organization', '$sector', '$ministry', '$states', '$createdby', now()) ";


//echo  $mysql;
//echo $accountname." ". $createdby . " ". $mysql;
$result = mysqli_query($conn, $mysql);

if(mysqli_affected_rows($conn) >0){
    echo "success";
    audit_trail("Account Description Created - ". $accountname . " - ". $code);
}
else {
    echo "fail";
}



?>

