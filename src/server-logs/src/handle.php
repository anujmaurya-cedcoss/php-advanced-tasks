<?php
require('config.php');
$fname = $_POST['fname'];
$sql = "INSERT INTO `user`(`name`) VALUES ('$fname')";
$result = mysqli_query($conn, $sql);
if ($result) {
    $date = date('m/d/Y h:i:s a', time());
    $date.= '<br>';
    error_log($date, 3, './error.log');
}
$myfile = fopen("./error.log", "r") or die("Unable to open file!");
echo fread($myfile, filesize("error.log"));
fclose($myfile);
?>