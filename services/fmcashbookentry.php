<?php

include "connect.php";
session_start();


//$accountname = trim(strip_tags($_POST['fullname']));
$amount = trim(strip_tags($_POST['amount']));
$account = trim(strip_tags($_POST['account']));
$accountdescr = trim(strip_tags($_POST['accountdescr']));
$location = trim(strip_tags($_POST['location']));
$entrytype = trim(strip_tags($_POST['entrytype']));
$description = trim(strip_tags($_POST['description']));
$cbdate = trim(strip_tags($_POST['cbdate']));
$voucherno = trim(strip_tags($_POST['voucherno']));

$createdby = $_SESSION["user"];
$organization = $_SESSION['organization'];
$ministry = $_SESSION['ministry'];
$sector = $_SESSION['sector'];
$states = $_SESSION['states'];



$mysql = "INSERT into fm_cashbook (segment, segmentcode, amount, entrytype, description, location, VoucherNo, ddate,
          organization, sector, ministry, state, createdby, datecreated) VALUES 
                        ('$account', '$accountdescr', '$amount', '$entrytype', '$description', '$location', '$voucherno', '$cbdate',
                         '$organization', '$sector', '$ministry', '$states', '$createdby', now()) ";


//echo $accountname." ". $createdby . " ". $mysql;
$result = mysqli_query($conn, $mysql);

if(mysqli_affected_rows($conn) >0){
    echo "success";
    audit_trail("Cashbook entry Created - ". $account. " - " . $amount . " - " . $voucherno . " - " .$description);
}
else {
    echo "fail";
}



?>


