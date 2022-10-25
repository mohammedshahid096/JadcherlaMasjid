<?php
include '../../Api_Folder/Data_Base_connection.php'; 
$userID = $_POST["check_ID"];
$userPassword = $_POST["check_password"];

$query ="SELECT masjid_id,masjid_name FROM `masjid_members` 
WHERE masjid_id = $userID AND masjid_password= '{$userPassword}'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{
    $row = mysqli_fetch_assoc($result);
    session_start();
    #this sessions or used because for logout purpose by deleting the sessions in logout page
    $_SESSION["LoginID"]= $row["masjid_id"];
    $_SESSION["masjidName"]= $row["masjid_name"];
    mysqli_close($conn);
    // print_r($row);
    echo "true";
}
else{
    echo "false";
}
?>