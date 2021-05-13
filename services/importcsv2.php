<?php

include "connect.php";
session_start();

if(!empty($_FILES["employee_file"]["name"]))
{

    $output = '';
//    $allowed_ext = array("csv");
//    $extension = end(explode(".", $_FILES["employee_file"]["name"]));
//    if(in_array($extension, $allowed_ext))

    if(true)
    {
        $file_data = fopen($_FILES["employee_file"]["tmp_name"], 'r');
        fgetcsv($file_data);
        while($row = fgetcsv($file_data))
        {

            $createdby = $_SESSION["user"];
            $organization = $_SESSION['organization'];
            $ministry = $_SESSION['ministry'];
            $sector = $_SESSION['sector'];
            $states = $_SESSION['states'];


            $username = mysqli_real_escape_string($conn, $row[0]);
            $password = md5(mysqli_real_escape_string($conn, $row[1]));
            $fullname = mysqli_real_escape_string($conn, $row[2]);
            $useremail = mysqli_real_escape_string($conn, $row[3]);
            $location = mysqli_real_escape_string($conn, $row[4]);
            $status = 1;
            $roles = mysqli_real_escape_string($conn, $row[5]);

            echo $username;

            if(isset($_POST['permissions'])){
                $permissions = mysqli_real_escape_string($conn, $row[6]);
            }
            else{
                $permissions = "";
            }

            $mysql = "INSERT into fm_mdausers (username, password, fullname, useremail, location, status, roles, permissions, organization, sector, ministry, states, createdby) 
                        VALUES 
                        ('$username', '$password', '$fullname', '$useremail', '$location', '$status', '$roles', '$permissions', '$organization', '$sector', '$ministry', '$states', '$createdby') ";

            mysqli_query($conn, $mysql);

            if(mysqli_affected_rows($conn) >0){
                echo "success 1";
                audit_trail("MDA User Created ". $username . " with fullname ". $fullname);
            }
            else {
                echo "fail";
            }



        }

        echo "success";
    }
    else
    {
        echo 'Error1';
    }
}
else
{
    echo "Error2";
}
?>
