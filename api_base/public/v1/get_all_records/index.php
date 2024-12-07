<?php 

require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '/../../../api_core/response.php';

$data = require_once __DIR__ . '/../../../api_core/data.php';

$cont = 0;

foreach($data as $i){
  $cont = $cont + 1;
}

echo Response::jsonResponse(200, 'API is running', ['total records' => $cont]);