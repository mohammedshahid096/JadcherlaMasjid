<?php 

include '../../Api_Folder/Data_Base_connection.php';

session_start();
if(!isset($_SESSION["LoginID"]))
{
    header('location: ../');
}
$id = $_SESSION["LoginID"];
$azanTime = $_POST["azan_time"];
$jamatTime = $_POST["jamat_time"];
$namaz =$_POST["namaz"];
$namaz2 = number_format($namaz)+6;
$table = array(
    1 =>"azan_fajar",
    2 =>"azan_zohar",
    3 =>"azan_asar",
    4 =>"azan_magrib",
    5 =>"azan_isha",
    6 =>"azan_jumma",
    7 =>"fajar",
    8 =>"zohar",
    9 =>"asar",
    10 =>"magrib",
    11 =>"isha",
    12 =>"jumma",
);

$query = "UPDATE namaz_timings
set $table[$namaz] = '{$azanTime}',
$table[$namaz2] = '{$jamatTime}'
WHERE MASJID_id = $id;
";
$result = mysqli_query($conn,$query);
mysqli_close($conn);
echo $table[$namaz2];
?>