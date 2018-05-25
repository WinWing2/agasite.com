<?php

namespace app\controllers;

use app\models\MainModel;
use function vendor\libs\debug;

class MainController extends AppController {

    public $layout = "main";

	public function indexAction(){
/**
Куча 'запасного кода
    echo "You at main::index";
    $this->view = "test";
    $this->layout = false;

    $sql = "CREATE TABLE agatable (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                reg_date TIMESTAMP
                )";
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50) NOT NULL,
lastname VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
login VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
role VARCHAR(50) DEFAULT 'user',
reg_date TIMESTAMP);";
$sql = "ALTER TABLE `users` ADD UNIQUE(`login`);";
$sql = "ALTER TABLE `users` ADD UNIQUE(`email`);";
        if ($model->query($sql) === true) {
            echo "Table agatable created successfully";
        } else {
            echo "<p>Error creating table: </p>";
        }
 * */

        $title = 'MainPage';
        $model = new MainModel();
        $posts = $model->findAll();

        $this->set(compact('title', 'posts'));
	}

	public function writeAction(){
		echo "You at main::write";
	}

	public function readAction(){
		echo "You at main::read";
	}
}