<?php 

include 'session.php';

if(isset($_POST["_indexCheckBox"]))
{
    include '../Api_Folder/Data_Base_connection.php';
    $query ="SELECT * FROM `counttable` WHERE id=2"; //id 2 is for the count check  value for check box of a
    // index page
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    echo $row["masjid_count"];
     
}

//when ever we on the index page checkbox 
// individual check boxes will be dispalyed
if(isset($_POST["setCountValue"]))
{
    $temp = $_POST["setCountValue"];
    include '../Api_Folder/Data_Base_connection.php';

    if($temp ==1)
    {
        $query = "UPDATE `counttable` SET `masjid_count`=1 WHERE id=2";
        mysqli_query($conn,$query);
        $output ='
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Sr.No</th>
                        <th scope="col">Masjid</th>
                        <th scope="col">Access</th>
                    </tr>
                </thead>
                <tbody>
        ';
        $query2 = "SELECT masjid_id,masjid_name,checkbox FROM `masjid_members`";
        $result = mysqli_query($conn,$query2);
        $k =1;
        function checkedfun($value){
            if($value==1){
                return "checked";
            }
            return "";
        }
        while($row = mysqli_fetch_assoc($result))
        {
            $output .='
            <tr>
             <td>'.$k.'</td>
             <td>'.$row["masjid_name"].'</td>
             <td>
               <label class="switch">
                <input type="checkbox" '.checkedfun($row["checkbox"]).' value="'.$row["checkbox"].'"
                 data-singlecheckbox='.$row["masjid_id"].' class="singlecheckbox">
                <span class="slider round"></span>
               </label>
             </td>
            </tr>
            ';
            $k++;
        }
        $output .= "</tbody></table>";
        mysqli_close($conn);
        echo $output;
    }
    else{
        $query = "UPDATE `counttable` SET `masjid_count`=0 WHERE id=2";
        mysqli_query($conn,$query);
        mysqli_close($conn);
        echo 0;
    }
}

//this is for single set checkbox function for displaying the notice borad or not
if(isset($_POST["setSingleCheckBox"]))
{
    include '../Api_Folder/Data_Base_connection.php';
    
    if($_POST["setSingleCheckBox"]==1){
        $query ="UPDATE `masjid_members` SET checkbox=1 WHERE masjid_id ={$_POST['id']}";
        mysqli_query($conn,$query);
        mysqli_close($conn);
    }
    else{
        $query ="UPDATE `masjid_members` SET checkbox=0 WHERE masjid_id ={$_POST['id']}";
        mysqli_query($conn,$query);
        mysqli_close($conn);
    }
}


?>