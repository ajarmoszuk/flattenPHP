<?php
require (getcwd().'/flatten.class.php');
//Quick and dirty demo
	$template = file_get_contents(getcwd().'/assets/templates/site.tpl');
	echo $template;

	$oldFile = addslashes($_POST['oldfile']);
	$newFile = addslashes($_POST['newfile']);
	$returnValue = addslashes($_POST['returnValue']);

	if (!empty($oldFile) && !empty($newFile)) {
		$flatten = new Flatten($oldFile, $newFile);
		$flatten->run();
		if ($returnValue == true) {
			print_r($flatten->run());
		}
	}
?>