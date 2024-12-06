<?php 

function api_request($endpoint, $method = 'GET', $variables = []){
  //remember this to understand the following
  //building the url of the api to be used
  //$client = curl_init(API_BASE . $option);
  //build the cURL to call the api
  //curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  
  //defines the url
  $url = API_BASE_URL;
  //initiar cURL client
  $client = curl_init();
  //build the cURL to call the api (returns the result as string)
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

  //if request is get
  if($method == 'GET'){
    $url = $url . "?endpoint=$endpoint";
    if(!empty($variables)){
      $url = $url . "&" . http_build_query($variables);
    }
  }
  echo $url;

  //if request is post
  if($method == 'POST'){
    $variables = array_merge(['endpoint' => $endpoint], $variables);
    curl_setopt($client, CURLOPT_POSTFIELDS, $variables);
  }

  curl_setopt($client, CURLOPT_URL, $url);

  $response = curl_exec($client);
  return json_decode($response, true);

}