<?php 
	
	$file = 'filetest.txt';
	if($handle = fopen($file, 'w')){
		fclose($handle);
	} else {
		echo '<br>Could not open file for writing.<br>';
	}

?>