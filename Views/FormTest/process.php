<?php
header("Content-Type: text/javascript; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PUT');
$data = $_POST['data']
json_decode($data);
?>