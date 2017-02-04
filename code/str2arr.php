<?php
$str = 'kidyan';

$arr = str_split($str);
var_dump($arr);

$len = strlen($str);
$arr = [];
for ($i = 0; $i < $len; $i++) {
    $arr[] = substr($str, $i, 1);
}
var_dump($arr);

$arr = preg_split('//', $str, null, PREG_SPLIT_NO_EMPTY);
var_dump($arr);

$arr = array_filter(preg_split('//', $str));
var_dump($arr);
