<?php
//require=include
@require_once('helpers.php');
@require_once('year.php');
@require_once('variables.php');
@require_once('variables.php');
@require_once('variables.php');

if (!function_exists('name'))
{

	function welcome (string $name): string
	{
	return "Welcome $name to the site";
	}
}
echo welcome('Vaidas');
//echo json_encode(welcome('Vaidas'));

echo $year;