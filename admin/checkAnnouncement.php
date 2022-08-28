<?php
include '../db.php';
$query = "SELECT * FROM announcements where date_to_sent = '".$_POST['today']."' AND status = 'not sent'" ;
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
    $data = [];
  while ($row = mysqli_fetch_assoc($result)) {

    $data[] = $row['id'];
    //push
    array_push($data);
    //json_encode
    $obj = (object) [
        "status" => 'success',
        'id' => $data
    ];
   
  

}
echo json_encode($obj);

}else{
    $obj = (object) [
        "status" => 'failed',
        'id' => $data
    ];
    echo json_encode($obj);
}




?>