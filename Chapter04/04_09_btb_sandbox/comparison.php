<?php

	class Box {
		public $name='box';
	}

	$box = new Box();

	$box_reference = $box;
	$box_clone = clone $box;
	$box_changed = clone $box;
	$box_changed->name = 'changed box'; 

	$another_box = new Box();

	// == is casual and checks if the attributes are the same

	echo $box == $box_reference ? 'box == box_reference' : 'box != not box_reference'	;
	echo '<br>';
	echo $box == $box_clone ? 'box == box_clone' : 'box != box_clone';
	echo '<br>';
	echo $box == $box_changed ? 'box == box_changed' : 'box != box_changed';
	echo '<br>';
	echo $box == $another_box ? 'box == another_box' : 'box != another_box';
	echo '<br><br>';

	echo $box === $box_reference ? 'box === box_reference' : 'box !== box_reference';
	echo '<br>';
	echo $box === $box_clone ? 'box === box_clone' : 'box !== box_clone';
	echo '<br>';
	echo $box === $box_changed ? 'box === box_changed' : 'box !== box_changed';
	echo '<br>';
	echo $box === $another_box ? 'box === another_box' : 'box !== another_box';
	echo '<br><br>';
?>