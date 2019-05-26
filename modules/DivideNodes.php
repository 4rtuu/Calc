<?php

// divide both ordered numbers
class DivideNodes extends Nodes {

	public function calculate() {

		return $this->first->calculate() / $this->last->calculate();

	}

}