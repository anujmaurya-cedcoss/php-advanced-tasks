<?php
$conn = mysqli_connect("mysql-server", "root", "secret", "user");
if(!$conn) {
    die("unable to connect database");
}
?>