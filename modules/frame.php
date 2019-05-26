<?php include "iClass.php"; ?>
<?php include "valClass.php"; ?>
<?php include "nodeClass.php"; ?>
<?php

/**
 *	nodalīt frame no rezultātiem un atstāt kā moduli.
 *	pārtaisīt rezultātus polimorfistiskā stiliņā lai izvairītos no switch.
 *	php ir built in error handler priekš division ar nulli, bet smukāks būtu, vienkārši smukāks err code.
 *	vajadzētu arī validēt input.
 */
class Frame {

	protected $first;
	protected $last;
	protected $operator;

	public function htmlFrame() {

		$frame = "<form action=\"\" method=\"POST\">";

		$frame .= "<input type=\"text\" name=\"num1\">";

		$frame .= "<select name=\"operator\" >";

		$frame .= "<option selected value=\"\">Choose operator</option>";
		$frame .= "<option value=\"multiply\">Multiply</option>";
		$frame .= "<option value=\"divide\">Divide</option>";
		$frame .= "<option value=\"plus\">Count</option>";
		$frame .= "<option value=\"subtract\">Subtract</option>";

		$frame .= "</select>";

		$frame .= "<input type=\"text\" name=\"num2\">";

		$frame .= "<input type=\"submit\" name=\"submit\">";

		$frame .= "</form>";

		return $frame;

	}

	public function result() {

		if (!empty($_POST['num1']) && !empty($_POST['num2']) && !empty($_POST['operator'])) {
			$this->first = $_POST['num1'];
			$this->last = $_POST['num2'];
			$this->operator = $_POST['operator'];
		} else {
			return 'empty fields!';
		}

		switch ($this->operator) {
			case 'divide':
				
					$operation = new divideNodes(new Val($this->first), new Val($this->last));

				break;

			case 'plus':
				
					$operation = new countNodes(new Val($this->first), new Val($this->last));

				break;

			case 'multiply':
				
					$operation = new multiplyNodes(new Val($this->first), new Val($this->last));

				break;

			case 'subtract':
				
					$operation = new subtractNodes(new Val($this->first), new Val($this->last));

				break;
			
			default:
				throw new Exception('Error! No such operator');
				break;
		}

		$result = $operation->calculate();
		return 'result is ' . $result;

	}

}