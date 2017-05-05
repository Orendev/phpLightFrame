<?php

/**
 * Created by PhpStorm.
 * User: Adelshin Abai
 * Site: www.orendev.ru
 * Date: 09.04.17
 * Time: 16:39
 */
class QueryBulder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        //Собираем подготовленный запрос
       $sql = sprintf(
           'insert into %s (%s) values (%s)',
           $table,
           implode(', ', array_keys($parameters)),
           ':' .implode(', :', array_keys($parameters))
       );

       try {
           $statement = $this->pdo->prepare($sql);

           $statement -> execute($parameters);
       } catch (Exception $e){
           die('Whoops, something went wrong.');
       }


    }
}