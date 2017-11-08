<?php

$string = "Labas";
$number = 156;
$real = 15.54;
$boolean = true;
$array = ["lt", "en", "ru", $string];
$object = (object)[
	"key" => "value-1",
	"key2" => "value-2",
	"key3" => "value-3",
];

/*var_dump($string);
var_dump($number);
var_dump($real);
var_dump($boolean);*/
var_dump($array[2]);
var_dump($object->key2);

//echo "<b>Hello world</b>";