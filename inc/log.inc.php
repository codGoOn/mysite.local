<?php
$date_time = time();
$page = $_SERVER['REQUEST_URI'];
$ref = $_SERVER['HTTP_REFERER'];
$ref = pathinfo($ref, PATHINFO_BASENAME);

$path = "$date_time|$page|$ref\r\n";
file_put_contents('log/' . PATH_LOG, $path, FILE_APPEND);

