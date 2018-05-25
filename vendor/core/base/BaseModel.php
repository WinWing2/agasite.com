<?php
/**
 * Created by PhpStorm.
 * user: Паша
 * Date: 09.04.2018
 * Time: 5:18
 */

namespace vendor\core\base;

use vendor\core\Db;

abstract class BaseModel {
    protected $pdo;
    protected $table;

    public function __construct() {
        $this->pdo = Db::instance();
    }

    public function query($sql){
        return $this->pdo->execute($sql);
    }

    public function findAll(){
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }
}