<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Подключение к базе данных
define(DB_HOST, 'localhost');
define(DB_LOGIN, 'root');
define(DB_PASSWORD, '');
define(DB_NAME, 'gbook');

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error($link));
mysqli_query($link, "SET NAMES 'utf8'");

