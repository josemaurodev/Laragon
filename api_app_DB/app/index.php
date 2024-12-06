<?php 

// dependencies 
require_once('inc/config.php');
require_once('inc/api_functions.php');


$variables = [
  'nome' => 'joao',
  'apelido' => 'pe de feijao'
];

$results = api_request('status', 'GET', $variables);
echo "<pre>";
print_r($results);
echo "<br>";

$results = api_request('status', 'POST', $variables);
echo "<pre>";
print_r($results);