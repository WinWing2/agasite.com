<?php

namespace app\controllers;

class Main {

	public function indexAction(){
		echo "Main::index";
	}

	public function writeAction(){
		echo "Main::write";
	}

	public function readAction(){
		echo "Main::read";
	}

	public function hide(){
		echo "Main::hide";
	}
}