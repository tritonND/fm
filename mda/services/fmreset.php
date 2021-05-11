<?php

include "connect.php";
session_start();

$password = md5($_POST['password']);
$user = $_SESSION["user"];
$myUser = trim(strip_tags($_POST['user']));


$mysql = "UPDATE fm_users set password = '$password', status = '0', reg_time = now() WHERE username = '$myUser' ";

if (mysqli_query($conn, $mysql)) {
    echo "success";
    audit_trail("Password Reset done");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

