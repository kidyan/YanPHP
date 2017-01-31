<?php

define('EE', PHP_EOL);

function dd()
{
	array_map(function($a){var_dump($a);}, func_get_args());
}
