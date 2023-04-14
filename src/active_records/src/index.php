<?php
require_once('./php-activerecord/ActiveRecord.php');
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('./Models');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/activeRecordsDB'));
});
User::create(array('name' => 'Tito', 'gender' => 'male'));
?>