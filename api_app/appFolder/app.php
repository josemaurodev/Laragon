<?php 

define('API_BASE', 'http://localhost:8080/api_app/apiFolder/index.php?option=');

echo '<h3>APLICAÇÃO</h3><hr>';

for($i=0;$i<10;$i++){
  //call function api_request, passing 200 as parameter
  $result = api_request('random');
  
  //verify if response is success
  if($result['status'] == 'ERROR'){
    die('Something happend in the API call');
  }
  
echo "The random value generated was: " . $result['data'] . " in the " . $i+1 . " try" . "<br>";

}


echo '<pre>';
print_r($result);

function api_request($option){
  //building the url of the api to be used
  $client = curl_init(API_BASE . $option);
  //build the cURL to call the api
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  
  //a variable that gets the return of the cURL executed with the client, that has the url build in it
  $response = curl_exec($client);

  //return the response, as the cURL_rettrans is true, as a string
  return json_decode($response, true);
}