<?php 

include 'session.php';

include '../Api_Folder/Data_Base_connection.php';
$masjid_id = $_POST["masjid_id"];
$query1 ="DELETE FROM `masjid_members` WHERE `masjid_id` = $masjid_id";
$query2 ="DELETE FROM `namaz_timings` WHERE `MASJID_id` = $masjid_id";
$query3 ="DELETE FROM `noticeboard` WHERE`masjid_ID`= $masjid_id";
mysqli_query($conn,$query1);
mysqli_query($conn,$query2);
mysqli_query($conn,$query3);
mysqli_close($conn);
echo $masjid_id;

?>