<?php

require_once 'baylon_functions.php';

    spl_autoload_register(function($class){
    if ($class == 'baylon_config') {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/PrelimExam/resource/baylon_config.php';
    } elseif ($class == 'insert') {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/PrelimExam/resource/baylon_insert.php';
    } elseif ($class == 'delete') {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/PrelimExam/resource/eugene_delete.php';
    } elseif ($class == 'view') {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/PrelimExam/resource/mendioro_view.php';
    }
});
