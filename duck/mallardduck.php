<?php
require_once 'duck.php';
require_once 'quack.php';
require_once 'flybehavior.php';
require_once 'flywithwings.php';

class MallardDuck extends Duck {
	public function __construct() {
		$this->quackBehavior = new Quackk();
	}

	public function display() {
		echo 'Я утка (Mallard Duck)<br>';
	}
}

?>