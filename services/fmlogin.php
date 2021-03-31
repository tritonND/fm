<?php

include "connect.php";

    $username = trim(strip_tags($_POST['username']));
    $password = md5($_POST['password']);

    $mysql = "SELECT * FROM fm_users WHERE username = '$username' AND password = '$password' ";

$result = mysqli_query($conn, $mysql);

if(mysqli_num_rows($result) > 0)
{
    session_start();
    $row = mysqli_fetch_array($result);
    $_SESSION['fullname'] = $row[1];
    $_SESSION['user'] = $row[2];
    $_SESSION['privilege'] = $row[4];
    echo "success";
}
else{
    echo "fail";
}

?>
