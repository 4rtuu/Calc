<?php

/**
 *	php ir built in error handler priekš division ar nulli, bet smukāks būtu, vienkārši smukāks err code.
 *	vajadzētu arī validēt input.
 */
class Frame {

	public function htmlFrame() {

		$frame = "<form action=\"\" method=\"POST\">";

		$frame .= "<input type=\"text\" name=\"num1\">";

		$frame .= "<select name=\"operator\" >";

		$frame .= "<option selected value=\"\">Choose operator</option>";
		$frame .= "<option value=\"multiplyNodes\">Multiply</option>";
		$frame .= "<option value=\"divideNodes\">Divide</option>";
		$frame .= "<option value=\"countNodes\">Count</option>";
		$frame .= "<option value=\"subtractNodes\">Subtract</option>";

		$frame .= "</select>";

		$frame .= "<input type=\"text\" name=\"num2\">";

		$frame .= "<input type=\"submit\" name=\"submit\">";

		$frame .= "</form>";

		return $frame;

	}

}