<?php
if(isset($_POST)) {
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    setcookie('email', $email, time() + (86400 * 30));
    setcookie('password', $pwd, time() + (86400 * 30));
    // echo $_COOKIE['email'], ' ', $_COOKIE['password'];
    header('location:./message.php');
}
?>