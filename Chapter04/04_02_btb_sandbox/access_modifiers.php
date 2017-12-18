<?php 
	class Example {
		public $a=1;
		protected $b=2;
		private $c=3;

		function show_abc() {
			echo $this->a;
			echo $this->b;
			echo $this->c;
		}

		public function hello_everyone(){
			return 'Hello everyone<br>';
		}

		protected function hello_family(){
			return 'Hello family<br>';
		}

		private function hello_me(){
			return 'Hello me<br>';
		}

		// public by default
		function hello(){
			$output = $this->hello_everyone();
			$output .= $this->hello_family();
			$output .= $this->hello_me();
			return $output;
		}
	}

	class SmallExample extends Example {

	}

	$example = new Example();
	echo "public a: {$example->a}<br>";
	//echo "protected b: {$example->b}<br>";
	// echo "private c: {$example->c}<br>";
	$example->show_abc();

	echo '<br>';
	$sm = new SmallExample();
	// $sm->show_abc();
	// $sm->b;

	// echo $sm->hello_family();

	echo "Hello everyone: {$example->hello_everyone()}<br>";
	// echo "Hello_family: {$example->hello_family()}<br>";
	// echo "Hello me: {$example->hello_me()}<br>";
	echo "Hello: {$example->hello()}<br>";
?>