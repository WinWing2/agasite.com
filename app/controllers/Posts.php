<?php

namespace app\controllers;
use function vendor\libs\debug;

class Posts extends \vendor\core\base\Controller {

    public function indexAction(){
		echo "Posts::index";
	}

    public function testAction(){
        debug($this->route);
        echo "test matherfucker";
    }


}