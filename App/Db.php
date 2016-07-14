<?php

namespace App;

include __DIR__ . '/../config.php';


class Db
{
    //свойство хранит в себе соединение с бд, полученное через конструктор
    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/../config.php';
        $this->dbh = new \PDO($config['dsn'],$config['user'],$config['password']);

    }

    //метод проверяет true or false данное соединение
    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

    //метод выполняет запрос $sql, подставляет в него данные $data и возвращает данные результаты
    public function query(string $sql, array $data=[])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        return $sth->fetchAll();
    }


}