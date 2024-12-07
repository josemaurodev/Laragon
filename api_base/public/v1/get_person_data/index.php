<?php 

require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '/../../../api_core/response.php';

$data = require_once __DIR__ . '/../../../api_core/data.php';

if(isset($_GET['id'])){
  $id = $_GET['id'];
}else{
  echo Response::jsonResponse(400, 'Error', 'Missing ID Parameter');
  exit;
}

if($id < 0 || $id > count($data) - 1){
  echo Response::jsonResponse(400, 'Error', 'Person not found');
  exit;
} 

echo Response::jsonResponse(200, 'Success', $data[$id]);