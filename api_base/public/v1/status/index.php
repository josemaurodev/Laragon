<?php 

require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '/../../../api_core/response.php';

  echo Response::jsonResponse(200, 'API is running');