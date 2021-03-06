<?php
/**
 * Created by PhpStorm.
 * user: Паша
 * Date: 09.04.2018
 * Time: 5:21
 */

namespace vendor\core;


class Db {
    protected $pdo;
    protected static $instance;

    protected function __construct() {
        $db = require_once ROOT . '/config/config_db.php';
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ];
        $this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass'], $options);
    }

    public static function instance(){
        if (self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function execute($sql){
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute();
    }

    public function query($sql){
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute();
        if($res !== false){
            return $stmt->fetchAll();
        }
        return [];
    }
}