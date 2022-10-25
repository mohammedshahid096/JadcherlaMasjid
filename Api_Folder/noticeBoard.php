<?php 
include './Data_Base_connection.php';

$query = "SELECT * FROM `counttable` WHERE id =2"; //to show the table of notice board  id is 2
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);
if($row["masjid_count"]==1)
{
 
    $output ='
    <center>
    <h2>Notice Board</h2>
  </center>
  <table class="table table-hover table-secondary">
    <thead>
        <tr class="table-success w-75">
            <th scope="col">Masjid Name</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Notice Board</th>
        </tr>
    </thead>
    <tbody>
    ';

    $query2 ="
    SELECT masjid_name,day,time,notice
     FROM `masjid_members`
     INNER JOIN noticeboard
     on masjid_members.masjid_id = noticeboard.masjid_ID
     WHERE checkbox =1;
    ";
    function changeto12($temp2){
      $a = explode(":",$temp2);
      $a[0] = number_format($a[0]);
      if($a[0]<=12)
      {
          return $temp2;
      }
          return ("0".$a[0]%12).":".$a[1];
  }
    $result2 = mysqli_query($conn,$query2);
    while($row = mysqli_fetch_assoc($result2))
    {
  $output .="

      <tr>
          <th>{$row['masjid_name']}</th>
          <td >{$row['day']}</td>
          <td>".changeto12($row['time'])."</td>
          <td>{$row['notice']}</td>
      </tr>
    ";
    }

 $output.= "</tbody>
</table>
  ";  
echo $output;
}
else{
    echo"";
}
?>