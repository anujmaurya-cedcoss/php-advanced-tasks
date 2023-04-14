<?php
class ClassA{
    public $var = 'a default value';

    public function __construct($val) {
        $this->var = $val;
    }
    public function displayVar() {
        echo $this->var;
    }
}
?>