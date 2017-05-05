<?php

/**
 * Created by PhpStorm.
 * User: Adelshin Abai
 * Site: www.orendev.ru
 * Date: 09.04.17
 * Time: 16:35
 */
class Connection
{
    public static function make($config)
    {
        try {

            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']
            );

        } catch (PDOException $e) {

            die($e->getMessage());
        }
    }

}

