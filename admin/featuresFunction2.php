<?php 

include 'session.php';

if(isset($_POST["_userCheckBox"]))
{
    include '../Api_Folder/Data_Base_connection.php';
    $query ="SELECT * FROM `counttable` WHERE id=3"; //id 2 is for the count check  value for check box of a
    // community members page
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    echo $row["masjid_count"];
     
}

if(isset($_POST["setCountValueUser"]))
{
    $temp = $_POST["setCountValueUser"];
    include '../Api_Folder/Data_Base_connection.php';
    if($temp ==1)
    {
        $query = "UPDATE `counttable` SET `masjid_count`=1 WHERE id=3";
        mysqli_query($conn,$query);
        mysqli_close($conn);
        // echo ;
    }
    else{
        $query = "UPDATE `counttable` SET `masjid_count`=0 WHERE id=3";
        mysqli_query($conn,$query);
        mysqli_close($conn);
        // echo 0;
    }
}

if(isset($_POST["_clearNotice"]))
{
    include '../Api_Folder/Data_Base_connection.php';
    $query ="UPDATE `noticeboard` SET `day`='',`time`='',`notice`=''";
    mysqli_query($conn,$query);
    mysqli_close($conn);
}
?>