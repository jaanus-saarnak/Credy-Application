<?php

require 'vendor/autoload.php';


// Generate JSONx
$jx = new danharper\JSONx\JSONx;

$jsonx = $jx->toJSONx([
    'first_name' => '',
    'last_name' => '',
    'email' => '',
    'bio' => '',
    'technologies' => [],
    'timestamp' => time(),
    'signature' => sha1(time() . 'credy'),
    'vcs_uri' => ''
]);


// Send POST request
$curl = curl_init('');
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonx);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/xml']);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$curlResponse = curl_exec($curl);

print_r($curlResponse);

curl_close($curl);

