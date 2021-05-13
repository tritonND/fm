<?php

include "connect.php";
session_start();
$username = $_GET['id'];

$mysql = "UPDATE fm_mdausers set status = 0 where username = '$username' ";

$result = mysqli_query($conn, $mysql);

if(mysqli_affected_rows($conn) >0){
    echo "success";
    audit_trail("MDA User deactivated ". $username);
}
else {
    echo "fail";
}

?>
