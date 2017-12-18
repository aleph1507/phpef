<?php 

	//opendir()/readdir()/closedir()
	$dir = '.';
	if(is_dir($dir)){
		if($dir_handle = opendir($dir)) {
			while($filename = readdir($dir_handle)){
				echo "filename: {$filename}<br>";
			}
			// rewinddir($dir_handle) to reset pointer
			closedir($dir_handle);
		}
	}

	echo '<hr>';

	// scandir()
	if(is_dir($dir)){
		$dir_array = scandir($dir);
		foreach($dir_array as $file){
			if(strpos($file, '.') > 0){
				echo "filename: {$file}<br>";
			}
		}
	}
?>