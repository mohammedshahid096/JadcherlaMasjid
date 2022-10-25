<?php 


include '../../Api_Folder/Data_Base_connection.php';
session_start();
if(!isset($_SESSION["LoginID"]))
{
    header('location: ../');
}

$id =$_SESSION["LoginID"];
$query = "SELECT * 
FROM namaz_timings
WHERE namaz_timings.MASJID_id={$id}
"; // query for getting specific the records of a table

$result = mysqli_query($conn,$query);
$output ="";
if(mysqli_num_rows($result) > 0){
    $row= mysqli_fetch_assoc($result);
    $dataResult =[$row["azan_fajar"],$row["fajar"],$row["azan_zohar"],$row["zohar"],$row["azan_asar"],
    $row["asar"],$row["azan_magrib"],$row["magrib"],$row["azan_isha"],$row["isha"],
    $row["azan_jumma"],$row["jumma"]];


    $output .='
                        <tr>
                            <th scope="row" rowspan="2">Fajar</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_fajar" value='.$dataResult[0].'>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="fajar" value='.$dataResult[1].'>
                                </div>
                            </td>
                        </tr>
                        <tr> 
                        <td colspan="3">
                            <center>
                                <button type="button" class="btn btn-info w-75" data-submittime="1">Set Time</button>
                            </center>
                    </td>
                </tr>
                        <tr>
                            <th scope="row" rowspan="2">Zohar</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_zohar" value='.$dataResult[2].'>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="zohar" value='.$dataResult[3].'>
                                </div>
                            </td>
                        </tr>
                        <tr> 
                        <td colspan="3">
                            <center>
                                <button type="button" class="btn btn-info w-75" data-submittime="2">Set Time</button>
                            </center>
                    </td>
                </tr>

                        <tr>
                            <th scope="row" rowspan="2">Asar</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_asar" value='.$dataResult[4].'>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="asar" value='.$dataResult[5].'>
                                </div>
                            </td>
                        </tr>
                        <tr> 
                        <td colspan="3">
                            <center>
                                <button type="button" class="btn btn-info w-75" data-submittime="3">Set Time</button>
                            </center>
                    </td>
                </tr>
                        <tr>
                            <th scope="row" rowspan="2">Magrib</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_margib" value='.$dataResult[6].'>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="margib" value='.$dataResult[7].'>
                                </div>
                            </td>
                        </tr>
                        <tr> 
                        <td colspan="3">
                            <center>
                                <button type="button" class="btn btn-info w-75" data-submittime="4">Set Time</button>
                            </center>
                    </td>
                </tr>

                        <tr>
                            <th scope="row" rowspan="2">Isha</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_isha" value='.$dataResult[8].'>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="isha" value='.$dataResult[9].'>
                                </div>
                            </td>
                        </tr>
                        <tr> 
                        <td colspan="3">
                            <center>
                                <button type="button" class="btn btn-info w-75" data-submittime="5">Set Time</button>
                            </center>
                    </td>
                </tr>

                        <tr>
                            <th scope="row" rowspan="2">Jumma</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_jumma" value='.$dataResult[10].'>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="jumma" value='.$dataResult[11].'>
                                </div>
                            </td>
                        </tr>
                        <tr> 
                        <td colspan="3">
                            <center>
                                <button type="button" class="btn btn-info w-75" data-submittime="6">Set Time</button>
                            </center>
                    </td>
                </tr>

    ';
    mysqli_close($conn);
    echo $output;
}
else{
    mysqli_close($conn);
    echo "no records found";
}
?>