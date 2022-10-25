<?php 
include './Data_Base_connection.php';

 $query = "SELECT * 
 FROM masjid_members
 INNER JOIN namaz_timings
 on masjid_members.timings = namaz_timings.MASJID_id
 "; // query for getting all the records of a table

 $result = mysqli_query($conn,$query);
$output ="";

 if(mysqli_num_rows($result) > 0)
 {

       function changeto12($temp2){
        $a = explode(":",$temp2);
        $a[0] = number_format($a[0]);
        if($a[0]<=12)
        {
            return $temp2;
        }
            return ("0".$a[0]%12).":".$a[1];
    }

    function tableRecords($masjid_name,$fajar,$zohar,$asar,$magrib,$isha,$jumma,$location,
    $azan_fajar,$azan_zohar,$azan_asar,$azan_magrib,$azan_isha,$azan_jumma,$image){
      global $output;
        $output .= '
        <!-- tables part div  -->
        <div class="row tableRowDiv">
            <table class="table table-striped">
                <!-- masjid profile image  -->
                <div class="masjidProfile d-flex align-items-center justify-content-center">
                    <div class="profile">
                        <img src="'.$image.'"
                            alt="">
                    </div>
                    <div class="m-3">
                        <h2>'.$masjid_name.'</h2>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th scope="col">Namaz</th>
                        <th scope="col">Azan</th>
                        <th scope="col">Jammat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fajar</td>
                        <td>'.$azan_fajar.'</td>
                        <td>'.$fajar.'</td>
                    </tr>
                    <tr>
                        <td>Zohar</td>
                        <td>'.changeto12($azan_zohar).'</td>
                        <td>'.changeto12($zohar).'</td>
                    </tr>
                    <tr>
                        <td>Asar</td>
                        <td>'.changeto12($azan_asar).'</td>
                        <td>'.changeto12($asar).'</td>
                    </tr>
                    <tr>
                        <td>Magrib</td>
                        <td>'.changeto12($azan_magrib).'</td>
                        <td>'.changeto12($magrib).'</td>
                    </tr>
                    <tr>
                        <td>Isha</td>
                        <td>'.changeto12($azan_isha).'</td>
                        <td>'.changeto12($isha).'</td>
                    </tr>
                    <tr>
                        <td>Jumma</td>
                        <td>'.changeto12($azan_jumma).'</td>
                        <td>'.changeto12($jumma).'</td>
                    </tr>
                </tbody>
            </table>
            <!-- location -->
            <div class="col d-flex locationDiv">
                <h4>Location:</h4>
                <p>'.$location.' </p>
            </div>
            <div class="w-100"></div>
            <div class="col d-flex justify-content-center maplocation"> <input type="button" value="view Location"
                    class="btn" id="locaitonbutton"></div>

        </div>
        ';
        // echo $output;
    }

   while($row= mysqli_fetch_assoc($result))
   {
    tableRecords($row["masjid_name"],$row["fajar"],$row["zohar"],$row["asar"],$row["magrib"],$row["isha"],
    $row["jumma"],$row["location"],$row["azan_fajar"],$row["azan_zohar"],$row["azan_asar"],$row["azan_magrib"],$row["azan_isha"],
    $row["azan_jumma"],$row["profileimg"]);
   }  
   mysqli_close($conn);
   echo $output;
 }
 else{
    mysqli_close($conn);
    echo "<div class='nomasjid'>no masjid found</div>";
 }
 ?>