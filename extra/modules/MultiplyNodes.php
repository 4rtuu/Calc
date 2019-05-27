<?php

// divide both ordered numbers
class MultiplyNodes extends Nodes {

	public function calculate() {

		return $this->first->calculate() * $this->last->calculate();

	}

}