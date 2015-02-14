<?php
error_reporting(0);
$visitCounter = 0;
if(isset($_COOKIE['visitCounter']))//Проверка, пришла ли кука
	$visitCounter = $_COOKIE['visitCounter'];//считывание ее из глобального массива
$visitCounter++;
$lastVisit = '';
if(isset($_COOKIE['lastVisit'])) 
	$lastVisit = date('d-m-y H:i:s', $_COOKIE['lastVisit']);

if(date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
setcookie('visitCounter', $visitCounter, 0x7FFFFFFF);
setcookie('lastVisit', time(), 0x7FFFFFFF);
}