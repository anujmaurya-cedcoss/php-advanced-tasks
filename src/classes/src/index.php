<?php
    function my_autoloader  ($class_name){
        require_once('./classes/'.$class_name.'.php');
    }
    spl_autoload_register('my_autoloader');
    $myClass = new classA('hello world!');
    $myClass -> displayVar();
?>