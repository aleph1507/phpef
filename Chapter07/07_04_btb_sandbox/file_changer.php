<?php 

	echo fileowner('file_permissions.php');
	//if posix installed

	$owner_id = fileowner('file_permissions.php');
	//$owner_array = posix_getpwuid($owner_id);

	//echo $owner_array['name'];

	chown('file_permissions.php', 'user');
	// chown only su

	//echo $owner_array['name'];

	echo '<br>';

	echo decoct(fileperms('file_permissions.php'));
	chmod('file_permissions.php', 0777);

	echo '<br>';

	echo is_readable('file_permissions.php') ? 'read' : 'no read';
	echo '<br>';
	echo is_writable('file_permissions.php') ? 'write' : 'no write';
	echo '<br>';

?>