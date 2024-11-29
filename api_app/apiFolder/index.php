<?php 

//prepare response 
$data['status'] = 'ERROR';
$data['data'] = null;


//request 
if(isset($_GET['option'])){

  switch ($_GET['option']) {
    case '200':
      define_response($data, 'API runnin OK!');
      $data['data'] = 'API running OK!';
      break;

    case 'random':
      define_response($data, rand(0,1000));
      break; 
  }
}

//send respost of api
response($data);


//==============================================
function define_response(&$data, $value){
  $data['status'] = 'SUCCESS HTTP 200';
  $data['data'] = $value;

}

//==============================================
//response
function response($data_response){
  //indicates that the response will be in json format
  header("Content-Type:application/json");
  echo json_encode($data_response);

}