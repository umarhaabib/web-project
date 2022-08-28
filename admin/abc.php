<?php
include '../admin/head.php';
include '../admin/header.php';
include '../admin/sidebar.php';
if($_SESSION['Role']=="Student") {
    header('Location: ../ShowGroupStudents.php');
    die();
}
?>
<?php

if (isset($_SESSION['Role']) == 'Admin') {
    header("location: dashboard.php");
} elseif (isset($_SESSION['Role']) == 'Student') {
    header("location: ../ShowGroupStudents.php");
}
?>