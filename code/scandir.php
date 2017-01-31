<?php
include '../func.php';

function my_scandir($dir)
{
	$rtn = [];
	if (!is_dir($dir)) return false;
	if ($handle = opendir($dir)) {
		while (($file = readdir($handle)) !== false) {
			if ($file != '.' && $file != '..') is_dir($file) ? $rtn[$file] = my_scandir($file) : $rtn[] = $file;
		}
	}
	return $rtn;
}

$a = my_scandir(__DIR__);
print_r($a);
