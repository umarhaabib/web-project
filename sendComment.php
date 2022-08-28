<?php
include 'db.php';
session_start();
echo  $filename = "$file";
extract($_POST);
extract($_FILES, EXTR_SKIP);

$Ref = "$Ref";
 $UserId =  "$UserId";
 $Message = "$Message";
 
echo $_FILES;
echo $f3 = ($matric['name']);
$f2 = ($matric['tmp_name']);
move_uploaded_file($f2, "images/$f3");


// $query = "insert into clearance_request(hod,cnic_copy,metric_result_card,inter_result_card,latest_image,student_id,registration_card,department,phone,clearance_status,transcript,degree_status)
//     values('not_approve','$f5','$f3','$f4','$f7','$roll','$f6','$department','$phone','null','null','null')";
// if (mysqli_query($conn, $query)) {
//     echo "Your Application Is Submited";
// } else {
//     echo "Your Application Is not Submited";
// }
