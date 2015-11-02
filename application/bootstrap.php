<?php

// подключаем файлы ядра
session_start();
//function __autoload($class)
//{
//    require_once __DIR__.'/core/'.$class.'.php';
//}
require_once __DIR__.'/Core/config.php';
//require_once 'Core/login.php';
require_once './vendor/autoload.php';
require_once 'Core/View.php';
require_once 'Core/Controller.php';
require_once 'Core/Model.php';

//подключаем Twig
require_once dirname(__FILE__).'/../vendor/autoload.php';
Twig_Autoloader::register(true);


spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if (is_file($path)) {
        require $path;
        return;
    }
    else {
    	$pathMy = __DIR__ . '/' .  substr($class, 0, strpos($class, '_')) . '/' .str_replace('\\', '/', $class) . '.php';
	     if (is_file($pathMy)) {
        require $pathMy;
        return;
    }
    }
    throw new \LogicException(sprintf('Class "%s" not found in "%s" and in "%s"', $class, $path, $pathMy));
});

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


//запускаем роутинг 
require __DIR__ . '/Routing/func.php';
//var_dump(__DIR__.'/../vendor/Routing/func.php');
require_once __DIR__ .'/Routing.php';
//