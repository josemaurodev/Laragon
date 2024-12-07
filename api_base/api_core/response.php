<?php 

class Response{
  public static function jsonResponse($status = 200, $message = 'SUCCESS', $data = null)
  {
    header('Content-type: application/json');
      
    //check if api is active
    if(!API_IS_ACTIVE){
      return json_encode([
        'status' => 400,
        'message' => 'API is not running',
        'api_version' => API_VERSION,
        'time_response' => time(),
        'datetime_response' => date('Y-m-d H:m:s'),
        'data' => null
      ], JSON_PRETTY_PRINT); 
    }
    return json_encode([
        'status' => $status,
        'message' => $message,
        'api_version' => API_VERSION,
        'time_response' => time(),
        'datetime_response' => date('Y-m-d H:m:s'),
        'data' => $data
    ], JSON_PRETTY_PRINT);
  }
}