<?php
// Set the appropriate content type header
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Content-Type: text/plain");
// Get the current server time in milliseconds
$serverTime = round(microtime(true) * 1000);
// Output the server time
echo $serverTime;
?>