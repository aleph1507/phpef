<?php
// Setters and Getters

	class SettersGettersExample {
		private $a=1;

		public function get_a() {
			return $this->a;
		}

		public function set_a($value) {
			$this->a = $value;
		}
	}

	$example = new SettersGettersExample();
	echo $example->get_a() . '<br>';
	$example->set_a(15);
	echo $example->get_a() . '<br>';

?>