<?php 

//==============================================
//FUNCTIONS FOR ENDPOINTS
//==============================================

//==============================================
function api_status(&$data){
  define_response($data, 'API OK');
}

//==============================================
function define_response(&$data, $value){
  $data['status'] = 'SUCCESS HTTP 200';
  $data['data'] = $value;

}

//==============================================
//response in json
function response($data_response){
  //indicates that the response will be in json format
  header("Content-Type:application/json");
  echo json_encode($data_response);
}


//==============================================
function api_random(&$data){
  $min = 0;
      $max = 1000;
      
      
      if(isset($_GET['min'])){
        $min = intval($_GET['min']);
      }
      
      if(isset($_GET['max'])){
        $max = intval($_GET['max']);
      }
      
      if($min>$max){
       response($data);
       return;
      }
      
      define_response($data, rand($min,$max));
}

function api_hash(&$data){
  define_response($data, md5(sha1(uniqid())));
}

?>