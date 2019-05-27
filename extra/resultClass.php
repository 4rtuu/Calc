<?php

class Results {

	protected $first;
	protected $last;
	protected $operator;
	
	public function calculate() {

		if (empty($_POST['num1']) || empty($_POST['num2']) || empty($_POST['operator'])) {

			echo 'Some argument\'s missing.';

		} else {

			$this->first = $_POST['num1'];
			$this->last = $_POST['num2'];
			$this->operator = $_POST['operator'];

			$o = new Val($this->operator);
			$value = $o->calculate();

			$operation = new $value(new Val($this->first), new Val($this->last), new Val($this->operator));
			$result = $operation->calculate();
			return 'result is <b>' . $result . '</b>';

		}
	}
}