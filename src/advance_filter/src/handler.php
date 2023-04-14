<?php
    if(isset($_POST)) {
        $string = $_POST['data'];
        $string = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', $string);
        echo "$string";
    }
?>