<?php

namespace app\controllers;
use function vendor\libs\debug;

class PageController extends AppController {
    public function indexAction() {
        echo "You at Page::index";
    }

    public function viewAction() {
//        debug($this->route);
//        debug($_GET);
        echo "You at Page::view";
    }
}