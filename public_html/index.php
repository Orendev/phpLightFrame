<?php
use App\Core\{Router, Request};

/**
 * Подключили загрузчик классов, реализация основана на composer
 * При добавление нового класса, нужно вручную обновить autoload
 * $ composer dump-autoload
 * Также подключаем ядро нашей системы
 */
require 'vendor/autoload.php';
require 'core/bootstrap.php';

/**
 * Подключаем роутер для подключения наших компонентов
 * Реализация шаблона Dependency injection Container

 */
Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());