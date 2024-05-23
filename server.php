<?php

// Leggo il file
$list_string = file_get_contents("dischi.json"); // String
// debug
// var_dump($list_string);

// Trasformo la stringa in un array
$list = json_decode($list_string, true); // Array
// debug
// var_dump($list);



// RISPOSTA
// Compongo i dati della risposta
$response_data = [
    "results" => $list,
    "success" => true
];

// Trasformo i dati in stringa json
$json_list = json_encode($response_data);

// Informo il browser che gli arriverà json
header("Content-type: application/json");

// Invio la risposta
echo $json_list;


?>