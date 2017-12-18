<?php

class Person {
	function say_hello(){
		echo 'Hello from inside a class<br>';
	}
}

$methods = get_class_methods('Person');
foreach($methods as $method){
	echo $method . '<br>';
}


if(method_exists('Person', 'say_helloaaaa')){
	echo 'method does exist<br>';
} else {
	echo 'method does not exist<br>';
}
?>