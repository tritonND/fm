<?php

include "connect.php";

    $username = trim(strip_tags($_POST['username']));
    $password = md5($_POST['password']);

    $mysql = "SELECT * FROM fm_mdausers WHERE username = '$username' AND password = '$password' AND status = 1 ";

$result = mysqli_query($conn, $mysql);

if(mysqli_num_rows($result) > 0)
{
    session_start();
    $row = mysqli_fetch_array($result);

//    $mysql2 = "SELECT * FROM fm_organizations WHERE username = '$username'";
//    $result2 = mysqli_query($conn, $mysql2);
//    if(mysqli_num_rows($result) > 0)
//       {
//           $row2 = mysqli_fetch_array($result2);
//           $_SESSION['organization'] = $row2[1];
//           $_SESSION['ministry'] = $row2[2];
//           $_SESSION['sector'] = $row2[3];
//           $_SESSION['states'] = $row2[4];
//           $_SESSION['status'] = $row2[5];
//       }


    $_SESSION['useremail'] = $row[4];
    $_SESSION['fullname'] = $row[3];
    $_SESSION['user'] = $row[1];
    $_SESSION['location'] = $row[5];
    $_SESSION['roles'] = $row[7];
    $_SESSION['status'] = $row[6];
    $_SESSION['permission'] = $row[8];
    $_SESSION['organization'] = $row[10];
    $_SESSION['ministry'] = $row[11];
    $_SESSION['sector'] = $row[12];
    $_SESSION['states'] = $row[13];


    echo "success";

    audit_trail("User Logged in");
}
else{
    echo "fail";
}

?>
