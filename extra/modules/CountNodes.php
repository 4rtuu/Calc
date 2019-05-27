<?php

// divide both ordered numbers
class CountNodes extends Nodes {

	public function calculate() {

		return $this->first->calculate() + $this->last->calculate();

	}

}