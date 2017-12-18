<?php 

	$file = 'filetest.txt'	;
	if($handle = fopen($file, 'w')){//overwrite
		fwrite($handle, "123\n456\n789");

		$pos = ftell($handle); //pointer pos
		fseek($handle, $pos-6);
		fwrite($handle, "abcdef");

		rewind($handle);
		fwrite($handle, 'xyz');
		fclose($handle);
	}

	// overtypes
	// a, a+ modes wont let you move the pointer

?>