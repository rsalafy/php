<?php
function my_scandir ($dir) {
	$files = scandir($dir);
	unset($files[array_search('.', $files)]);
	unset($files[array_search('..', $files)]);
	$files = array_values($files);
	return $files;
}
