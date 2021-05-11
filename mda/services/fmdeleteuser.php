<?php

include "connect.php";
session_start();
$username = $_GET['id'];

$mysql = "DELETE from fm_mdausers where username = '$username' ";

$result = mysqli_query($conn, $mysql);

if(mysqli_affected_rows($conn) >0){
    echo "success";
    audit_trail("MDA User deleted ". $username);
}
else {
    echo "fail";
}

?>
