<?php

namespace app\controllers;
use function vendor\libs\debug;

class PostsNewController extends AppController {

    public function indexAction(){
        echo "posts::index";
    }

    public function writeAction(){
        echo "posts::write";
    }

    public function testAction(){
//        debug($this->route);
        echo "You at PostsNew::test";
    }
}