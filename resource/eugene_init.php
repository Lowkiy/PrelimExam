<?php

require_once 'baylon_functions.php';
spl_autoload_register(function($class){
    require_once $_SERVER['DOCUMENT_ROOT']. '/PrelimExam/resource/'.$class.'.php'; 
});
?>