<?php

include "connect.php";
session_start();

$account = mysqli_real_escape_string($conn, trim($_GET['acc']));
$mysql = "SELECT description from fm_account_code_list where accountname = '$account' ";

//echo $accountname." ". $createdby . " ". $mysql;
$result = mysqli_query($conn, $mysql);

while($row = mysqli_fetch_array($result))
{
echo "<option value='$row[0]'>$row[0]</option>";
}

mysqli_close($conn);

?>


