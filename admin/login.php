<?php
$userID = $_POST["check_ID"];
$userPassword = $_POST["check_password"];



if($userID =="9347222304" && $userPassword=="admin_shahid")
{
    session_start();
    #this sessions or used because for logout purpose by deleting the sessions in logout page
    $_SESSION["admin_ID"]= $userID;
    // print_r($row);
    echo "true";
}
else{
    echo "false";
}
?>