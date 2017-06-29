<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 27.06.2017
 * Time: 20:13
 */
class DBManager
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'test';
    const DB_USER_NAME = 'root';
    const DB_USER_PASSWORD = '';

    private static $db = null;  // Единственный экземпляр класса, чтобы не создавать множество подключений
    private $connection;              // Идентификатор соединения

    private function __construct()
    {
        $this->connection = new mysqli(self::DB_HOST, self::DB_USER_NAME, self::DB_USER_PASSWORD, self::DB_NAME);
        $this->connection->query("SET lc_time_names = 'ru_RU'");
        $this->connection->query("SET NAMES 'utf8'");
    }

    public function __destruct()
    {
        if ($this->connection) {
            $this->connection->close();
        }
    }

    /* Получение экземпляра класса. Если он уже существует, то возвращается, если его не было, то создаётся и возвращается (паттерн Singleton) */
    public static function getDB() {
        if (self::$db == null) {
            self::$db = new DBManager();
        }
        return self::$db;
    }

    public function getAllData($tableName){
        $sql = "SELECT * FROM $tableName";
        $result = $this->connection->query($sql);
        $array = array();
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }
        return $array;
    }

    public function getFieldById($tableName, $id){
        $id = (int)$id;
        $sql = "SELECT * FROM $tableName WHERE id = $id LIMIT 1";
        $result = $this->connection->query($sql);
        return $result->fetch_assoc();
    }

}