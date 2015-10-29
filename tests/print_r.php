<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use RendR\PrintR;

$json = file_get_contents('https://www.govtrack.us/api/v2/role?current=true');
$obj = json_decode($json);
echo Printr::r($obj);