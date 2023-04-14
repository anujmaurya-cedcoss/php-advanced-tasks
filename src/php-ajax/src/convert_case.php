<?php
if (isset($_POST)) {
    $method = $_POST['method'];
    $val = $_POST['val'];
    switch ($method) {
        case 'toUpper':
            echo strtoupper($val);
            break;
        case 'toLower':
            echo strtolower($val);
            break;
        default:
            break;
    }
}
?>