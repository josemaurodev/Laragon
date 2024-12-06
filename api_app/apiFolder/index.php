<?php 
//import output(pages)
require_once('output.php');
//prepare response 
$data['status'] = 'ERROR';
$data['data'] = [];

//request (routes) 
if(isset($_GET['option'])){

  switch ($_GET['option']) {
    case '200':
      api_status($data);
      break;

    case 'random':
      api_random($data);
      break; 
    
    case 'hash':
      api_hash($data);
      break;
  }
}
//send respost of api
response($data);