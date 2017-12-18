<?php 

	$file = 'filetest.txt';
	if($handle = fopen($file, 'r')) {
		$content = fread($handle, 6); // each char is 1 byte, ascii
		fclose($handle);
	}

	echo $content . '<Br>';
	echo nl2br($content);
	echo '<hr>';

	// filesize()
	if($handle = fopen($file, 'r')){
		$content = fread($handle, filesize($file));
		fclose($handle);
	}

	echo '<Br>';
	echo $content;
	echo '<br>';
	echo nl2br($content);
	echo '<Br>';

	//file_get_contents()

	$content = file_get_contents($file);
	echo '<br>' . $content . '<br>';

	echo '<hr>';

	//incremental reading
	if($handle = fopen($file, 'r')){
		while(!feof($handle)){ //while not f.end of file
			$content .= fgets($handle); //one line
		}
		fclose($handle);
	}

	echo $content;

?>