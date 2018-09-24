<?php

/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 23.09.2018
 * Time: 17:58
 */
require_once __DIR__ . '/../config/db_config.php';


class DB
{
    public function __construct() {

        global $dsn;
        global $user;
        global $password;
        try {
            $this->dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Подключение не удалось: ' . $e->getMessage();
        }
    }
    public function execute($query) {
        $q = $this->dbh->query($query);
        return $q->fetch()[0];
    }
    public function getObject($query, $class) {
        $q = $this->dbh->query($query, PDO::FETCH_CLASS, $class);
        return $q->fetch();
    }
    public function getAllObjects($query, $class) {
        $q = $this->dbh->query($query, PDO::FETCH_CLASS, $class);
        return $q->fetchAll();
    }
    private $dbh;
}