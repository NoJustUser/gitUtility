<?php

/*
 * FRONT CONTROLLER
 * Общие настойки
 * Подключение файлов системы
 * Установка соединения с базой данных
 * Вызов Router
 * **************************** */


ini_set('Display_errors', 1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
//require_once (ROOT.'/components/Router.php');
//include_once(ROOT.'/components/db.php');

$router = new Router();
$router -> run();