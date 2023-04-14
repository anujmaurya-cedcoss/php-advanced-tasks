<?php
    session_start();
    $str = base64_decode($_SESSION['token']);
    for ($i=0; $i < strlen($str); $i++) { 
        if($str[$i] == '/') {
            echo "<br>";
        } else {
            echo $str[$i];
        }
    }
?>