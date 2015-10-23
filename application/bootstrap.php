<?php

// подключаем файлы ядра
session_start();
//function __autoload($class)
//{
//    require_once __DIR__.'/core/'.$class.'.php';
//}
require_once __DIR__.'/core/config.php';
require_once './vendor/autoload.php';
require_once 'core/View.php';
require_once 'core/Controller.php';
require_once 'core/Model.php';


/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/

require_once 'core/Route.php';
Route::start(); // запускаем маршрутизатор
