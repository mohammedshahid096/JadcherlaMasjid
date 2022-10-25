<?php

include 'session.php';

include '../Api_Folder/Data_Base_connection.php';
$Masjid_name =$_POST["Masjid_name"];
$Password =$_POST["Password"];
$Profile_image =$_POST["Profile_image"];
$Location =$_POST["Location"];
$Map =$_POST["Map"];
$Fajar = $_POST["Fajar"];
$Zohar =$_POST["Zohar"];
$Asar =$_POST["Asar"];
$Magrib =$_POST["Magrib"];
$Isha =$_POST["Isha"];
$Jumma =$_POST["Jumma"];

$query1 ="SELECT masjid_count FROM counttable WHERE id =1";
$result = mysqli_query($conn,$query1);
$masjid_id= mysqli_fetch_assoc($result);

//1st need to insert into the foreign key reference table
$query2 ="INSERT INTO `namaz_timings` (`MASJID_id`, `azan_fajar`, `azan_zohar`, `azan_asar`, `azan_magrib`, `azan_isha`, `azan_jumma`, `fajar`, `zohar`, `asar`, `magrib`, `isha`, `jumma`)
 VALUES ({$masjid_id["masjid_count"]}, '{$Fajar[0]}', '{$Zohar[0]}', '{$Asar[0]}', '{$Magrib[0]}', '{$Isha[0]}', '{$Jumma[0]}',
  '{$Fajar[1]}', '{$Zohar[1]}', '{$Asar[1]}', '{$Magrib[1]}', '{$Isha[1]}', '{$Jumma[1]}')";

 mysqli_query($conn,$query2);

 $query3 ="INSERT INTO `noticeboard`(`masjid_ID`, `day`, `time`, `notice`) 
 VALUES ({$masjid_id['masjid_count']},'','','')";
mysqli_query($conn,$query3);

$query4 = "INSERT INTO `masjid_members` (`masjid_id`, `masjid_name`, `masjid_password`, `profileimg`, `location`, `map`,`timings`, `noticeid`) 
VALUES 
({$masjid_id["masjid_count"]},'{$Masjid_name}','{$Password}','{$Profile_image   }','{$Location}','{$Map}',{$masjid_id["masjid_count"]},{$masjid_id["masjid_count"]})";
 mysqli_query($conn,$query4);

//to increment the count value of masjid id
$count = $masjid_id["masjid_count"]+1;
$query5 = "UPDATE `counttable` SET `masjid_count`=$count WHERE id=1";
mysqli_query($conn,$query5);

mysqli_close($conn);
echo $Masjid_name;
// echo $query2."<br>".$query3."<br>".$query4;
?>