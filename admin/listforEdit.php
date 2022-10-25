<?php 
include 'session.php';

include '../Api_Folder/Data_Base_connection.php';

$query1 = "select masjid_id, masjid_name FROM `masjid_members` 
";

$result = mysqli_query($conn,$query1);

//  masjid_id, `masjid_name`, `masjid_password`, `profileimg`, `location`, `map`,`timings`

 $output ="";

 if(mysqli_num_rows($result)>0){
    $count=1;
    while($row = mysqli_fetch_assoc($result))
    {
        $output .= '
        <tr>
        <td>'.$count.'</td>
        <td>'.$row["masjid_name"].'</td>
        <td><button class="btn btn-warning" data-edit_id='.$row["masjid_id"].' >Edit</button></td>
        <td><button class="btn btn-danger" data-delete_id='.$row["masjid_id"].'>Delete</button></td>
    </tr>
        ';
        $count++;
    }
    echo $output;
 }
 else{
    echo "no Records are present";
 }

?>