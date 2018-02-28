<?php
/**
 * Created by PhpStorm.
 * User: Паша
 * Date: 20.02.2018
 * Time: 10:41
 */

namespace app\controllers;

use function vendor\libs\debug;

class Page extends \vendor\core\base\Controller
{
    public function viewAction() {
        debug($this->route);
        echo "You at Page::view";
    }
}