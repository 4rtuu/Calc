<?php

// set value and return them
class Val implements iCalculator {

	private $value;

	public function __construct($val) {

		$this->value = $val;

	}

	public function calculate() {

		return $this->value;

	}

}