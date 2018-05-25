<?php

namespace app\controllers;
use function vendor\libs\debug;

class PostsController extends AppController {

    public function indexAction(){
		echo "You at posts::index";
	}

    public function testAction(){
        echo "You at posts::test";
    }
}