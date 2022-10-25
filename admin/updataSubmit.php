<?php 
include '../Api_Folder/Data_Base_connection.php';
$Masjid_id =$_POST["masjid_id"];
$Masjid_name =$_POST["Masjid_name"];
$Password =$_POST["Password"];
$Profile_image =$_POST["Profile_image"];
$Location =$_POST["Location"];
$Map =$_POST["Map"];

$query = "UPDATE `masjid_members` SET 
masjid_name='{$Masjid_name}',
masjid_password='{$Password}',
profileimg='{$Profile_image}',
`location`='{$Location}',
map='{$Map}'
 WHERE masjid_id =".$Masjid_id;
 
mysqli_query($conn,$query);
mysqli_close($conn);
 echo $Masjid_name;
?>