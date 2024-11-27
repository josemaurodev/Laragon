<?php 

$data = [];

//requestqa
if(isset($_GET['option'])){

  switch ($_GET['option']) {
    case 'status':
      $data['status'] = 'SUCCESS';
      $data['data'] = 'API running OK!';
      break;
    
    default:
      $data['status'] = 'ERROR';
      break;
  }

}else{
  $data['status'] = 'ERROR';
}

//send respost of api
response($data);

//response
function response($data_response){
  //indicates that the response will be in json format
  header("Content-Type:application/json");
  echo json_encode($data_response);

}