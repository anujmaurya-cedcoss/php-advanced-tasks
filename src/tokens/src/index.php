<?php
session_start();
include('config.php');
$sql = "SELECT * FROM `user_list`";
$result = mysqli_query($conn, $sql);

$str = "";
$row = mysqli_fetch_assoc($result);
foreach ($row as $key => $value) {
    $str .= $value . '/';
}
$_SESSION['token'] = base64_encode($str);
header('location:decrypted.php')
?>