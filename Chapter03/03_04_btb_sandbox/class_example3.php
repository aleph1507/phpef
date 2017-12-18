<?php

class Person {
	function say_hello() {
		echo "Hello from inside a class.<br />";
	}
}

$person = new Person();
$person2 = new Person();

echo get_class($person) . '<br>';

if(is_a($person, 'Person')){
	echo 'its a PErson<br>';
} else {
	echo 'not a Person<br>';
}

$person->say_hello();



?>