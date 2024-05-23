<?php

// Leggo il file
$list_string = file_get_contents("dischi.json"); // String
// debug
var_dump($list_string);

// Trasformo la stringa in un array
$list = json_decode($list_string, true); // Array
// debug
var_dump($list);
