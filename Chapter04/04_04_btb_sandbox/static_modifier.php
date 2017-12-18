<?php

	class Student {
		static $total_students = 0;

		static public function add_student() {
			self::$total_students++;
		}

		static function welcome_students($var="Hello") {
			echo "{$var} students";
		}
	}

	echo Student::$total_students . '<br>';

	echo Student::welcome_students() . '<br>';

	echo Student::welcome_students("Greetingss") . '<br>';

	Student::$total_students = 1;

	echo Student::$total_students . '<br>';

	// static vars are shared throughout inheritance

	class One {
		static $foo;
	}

	class Two extends One { }
	class Three extends One {}

	One::$foo = 1;
	Two::$foo = 2;
	Three::$foo = 3;

	echo One::$foo . '<br>';
	echo Two::$foo . '<br>';
	echo Three::$foo . '<br>';

?>