<?php
//connect to database
$conn = mysqli_connect("localhost","root","","fmdb") or die('error connecting to database');
// $conn = mysqli_connect("localhost","fm_app_user","fmPass","fmdb") or die("Cannot connect to server now, please try again. ");


function audit_trail($action)
{
    global $conn;
    date_default_timezone_set("Africa/Lagos");

    $myday=date("Y-m-d H:i:s");
    if (!isset($_SESSION))
    {
        session_start();
    }
    $username=$_SESSION['user'];
    $fname=$_SESSION['fullname'];

    $query1 = "insert into fm_trail(fullname, username, actions, performed_at) values('$fname', '$username','$action','$myday') ";
    mysqli_query($conn, $query1);

}

 ?>