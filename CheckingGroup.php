<?php
include('db.php');

$user_data = "SELECT *FROM users WHERE  GroupNumber = '" . $_POST['Group'] . "'";
$u_data = mysqli_query($db, $user_data);
$count_user = mysqli_num_rows($u_data);
if ($count_user == 3) {
    echo "Change Group";
    die;
}
