<?php 
include '../Api_Folder/Data_Base_connection.php';

$masjid_ID = $_POST["masjid_id"];
$query1 = "select * FROM `masjid_members` where masjid_id=$masjid_ID;
";

$result = mysqli_query($conn,$query1);

//  masjid_id, `masjid_name`, `masjid_password`, `profileimg`, `location`, `map`,`timings`

 $output ="";

 if(mysqli_num_rows($result)>0){

    $row = mysqli_fetch_assoc($result);
    $output .='
    <div class="form-row">
    <div class="form-group col-md-6 m-3">
    <label for="Masjidname">Masjid ID</label>
    <input type="text" class="form-control text-dark" id="MasjidID" value="'.$row["masjid_id"].'" disabled>
  </div>
    <div class="form-group col-md-6 m-3">
        <label for="Masjidname">Masjid Name</label>
        <input type="email" class="form-control" id="Masjidname" value="'.$row["masjid_name"].'">
    </div>
    <div class="form-group col-md-6 m-3">
        <label for="inputPassword">Password</label>
        <input type="text" class="form-control" id="inputPassword" value="'.$row["masjid_password"].'">
    </div>
</div>
<div class="form-group m-3">
    <label for="profileImage">profile imgage</label>
    <input type="text" class="form-control" id="profileImage" value="'.$row["profileimg"].'">
</div>
<div class="form-group m-3">
    <label for="Location">Location</label>
    <input type="text" class="form-control" id="Location" value="'.$row["location"].'">
</div>
<div class="form-row m-3">
    <div class="form-group col-md-6">
        <label for="Map">Map</label>
        <input type="text" class="form-control" value=" '.$row["map"].'" id="Map" >
    </div>
</div> 
    ';

    echo $output;
 }
 else{
    echo "no records found";
 }

?>