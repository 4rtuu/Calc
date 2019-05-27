<?php

// divide both ordered numbers
class SubtractNodes extends Nodes {

	public function calculate() {

		return $this->first->calculate() - $this->last->calculate();

	}

}