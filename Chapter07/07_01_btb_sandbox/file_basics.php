<?php 

	echo __FILE__.'<br>';
	echo __LINE__.'<br>'; //incl. files count
	echo dirname(__FILE__).'<br>';
	echo __DIR__.'<br>'; // php 5.3+

	echo file_exists(__FILE__) ? 'yes' : 'no';
	echo '<br>';
	echo file_exists(dirname(__FILE__).'/basic.html') ? 'yes' : 'no';
	echo '<br>';
	echo file_exists(dirname(__FILE__)) ? 'yes' : 'no';
	echo '<br>';

	echo is_file(dirname(__FILE__).'/basic.html') ? 'yes' : 'no';
	echo '<br>';
	echo is_file(dirname(__FILE__)) ? 'yes' : 'no';
	echo '<br>';

	echo is_dir(dirname(__FILE__).'/basic.html') ? 'yes' : 'no';
	echo '<br>';
	echo is_dir(dirname(__FILE__)) ? 'yes' : 'no';
	echo '<br>';
	echo is_dir('..') ? 'yes' : 'no';
	echo '<br>';

?>