<?php

// assign each value in correct order
class Nodes implements iCalculator {

	protected $first;
	protected $last;
	protected $operator;

	// empty abstract method
	public function calculate() {}

	public function __construct(iCalculator $num1, iCalculator $num2, iCalculator $operator) {

		$this->first = $num1;

		$this->last = $num2;

		$this->operator = $operator;

	}

}