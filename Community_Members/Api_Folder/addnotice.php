<?php 

include '../../Api_Folder/Data_Base_connection.php';

session_start();
if(!isset($_SESSION["LoginID"]))
{
    header('location: ../');
}

$id =$_SESSION["LoginID"];

// when ever the home page  is loaded 
//if the count is 1 then it will show the adding options for notice board
//else it will not show into the home page
if(isset($_POST["noticeloadfunc"]))
{
    $query = "SELECT * FROM `counttable` WHERE id =3"; //to show the table of notice board
    //here users notice board count is id= 3    
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $output ="";
    if($row["masjid_count"]==1)
    {
        $output .='
            <div class="form-group">
            <label for="setdate">Day</label>
            <input type="date" class="form-control" id="setdate">
            </div>
            <div class="form-group">
            <label for="settime">Time</label>
            <input type="time" class="form-control" id="settime" value="21:00">
            </div>
            <div class="form-group">
            <label for="setmessage">Textarea</label>
            <textarea class="form-control" id="setmessage" placeholder="enter the message"></textarea>
            </div>
           <center><button type="button" class="btn btn-secondary w-75 mt-3" id="submitnoticemessage">Submit</button></center>
            
        ';
        mysqli_close($conn);
        echo $output;
    }
    else{
        mysqli_close($conn);
        echo "";
    }
}

//after we click the submit button of notice borad, data will be transfer here and 
// updated in the database
if(isset($_POST["_SetTime"]))
{
    
    $query ="UPDATE `noticeboard` SET 
    `day`='{$_POST["_SetDate"]}',`time`='{$_POST["_SetTime"]}',`notice`='{$_POST["_SetMessage"]}'
    WHERE masjid_ID = $id 
    ";
    mysqli_query($conn,$query);
    mysqli_close($conn);
}
?>