<?php
//https://api.coingecko.com/api/v3/simple/price?ids=tron&vs_currencies=TRY

$req_url = 'https://api.coingecko.com/api/v3/simple/price?ids=tron&vs_currencies=TRY';
$response_json = file_get_contents($req_url);
// echo($response_json);
 
try {
    $response = json_decode($response_json);
    $receivedData = $response->tron->try;
} catch(Exception $e) {
    // Handle JSON parse error...
    var_dump($e);
}