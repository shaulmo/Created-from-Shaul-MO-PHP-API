<?php

$ch = curl_init();
$headers = [
    "Authorization: token TOKEN"
];

$payload = json_encode([
    "name" => "Created from Shaul MO PHP API",
    "description" => "a PHP API POST created repo."
]);

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "shaulmo",
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $payload
]);

$response = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
echo $response, "\n";
echo $status, "\n";
