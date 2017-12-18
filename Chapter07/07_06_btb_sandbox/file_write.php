<?php 

	$file = 'filetest.txt';
	if($handle = fopen($file, 'w')){ //overwrite
		fwrite($handle, 'abc'); //returns no. of bytes to be written, or false
		fwrite($handle, '123');
		$content = "123\n456"; // double quotes matter with \n characters
		echo fwrite($handle, $content);
		fclose($handle);
	} else {
		echo '<br>could not open file for writing<br>';
	}


	//file_put_contents :  shortcut for fopen/fwrite/fclose, overwrites file by default
	$file = 'filetest.txt';
	$content = "111\n222\n333";
	if($size = file_put_contents($file, $content)){
		echo "A file of {$size} bytes was created.";
	}
?>