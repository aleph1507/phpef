<?php 

	// getcwd() - get current working directory
	echo getcwd() . '<br>';

	// mkdir()
	mkdir('new', 0777); //0777 php default, subtract umask(), default 0022

	// recursive dir creation
	mkdir('new/test/test2', 0777, true);

	// change dir
	chdir('new');

	chdir('..');

	//rmdir()
	rmdir('new/test/test2');

	echo '<br>' . getcwd() . '<br>';

?>