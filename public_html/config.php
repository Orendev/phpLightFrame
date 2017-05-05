<?php
/**
 * Created by PhpStorm.
 * User: Adelshin Abai
 * Site: www.orendev.ru
 * Date: 11.04.17
 * Time: 9:16
 * It is config connection DB and web application.
 */

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'admin',
        'password' => '123456',
        'connection' => 'mysql:host=127.0.0.1',
        'options' =>[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
