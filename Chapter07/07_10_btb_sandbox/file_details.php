<?php 

	$filename = 'filetest.txt';

	echo filesize($filename) . '<Br>'; //in bytes

	// filemtime - last modified
	// filectime - last changed (content or metadata)
	// fileatime - last accessed (any r/w)

	echo strftime('%m/%d/%Y %H:%M', filemtime($filename) . '<br>');
	echo strftime('%m/%d/%Y %H:%M', filectime($filename) . '<br>');
	echo strftime('%m/%d/%Y %H:%M', fileatime($filename) . '<br>');

	touch($filename);


	echo strftime('%m/%d/%Y %H:%M', filemtime($filename) . '<br>');
	echo strftime('%m/%d/%Y %H:%M', filectime($filename) . '<br>');
	echo strftime('%m/%d/%Y %H:%M', fileatime($filename) . '<br>');

	$path_parts = pathinfo(__FILE__);
	echo '<hr>';
	echo $path_parts['dirname'] . '<br>';
	echo $path_parts['basename'] . '<br>';
	echo $path_parts['filename'] . '<br>';
	echo $path_parts['extension'] . '<br>';
?>