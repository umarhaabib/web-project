<?php
include('db.php');

$user_data = "SELECT *FROM users WHERE  email = '" . $_POST['Email'] . "'";
$u_data = mysqli_query($db, $user_data);
$count_user = mysqli_num_rows($u_data);
if ($count_user == 1) {
    echo "Change Email";
    die;
}
